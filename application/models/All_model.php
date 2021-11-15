<?php

/**
 *
 */
class All_model extends CI_Model {

  protected $table       = '-';
  protected $table_key   = '-';
  protected $page        = 0;
  protected $perpage     = 15;
  protected $data        = array();
  protected $where       = array();
  protected $result      = array(
    'success'   => true,
    'data'      => [],
    'totaldata' => 0,
    'message'   => '',
  );


  public function _pre($key, $table, $table_key, $page, $perpage, $data, $where) {
    $this->table     = $table;
    $this->table_key = $table_key;
    $this->where     = $where;
    $this->page      = $page;
    $this->perpage   = $perpage;
    $this->data      = $data;

    if (!method_exists($this, $key)) {
      $this->result['success'] = false;
      $this->result['message'] = 'FUNC_NOT_FOUND';

      return $this->result;
    }

    return $this->$key();
  }

  public function get_pengeluaran() {
    $this->db->from('pengeluaran');
    $this->db->where('created_by', $this->where['created_by']);
    $this->db->order_by('created_on', 'DESC');
    $data = $this->db->get()->result();
    if ($data) {
      foreach ($data as $key => $value) {
        $value->jumlah_f     = $this->all_library->format_harga($value->jumlah);
        $value->tanggal_f    = $this->all_library->date($value->tanggal);
        $value->created_on_f = $this->all_library->format_date($value->created_on);
      }
    }

    $this->result['data']      = $data;
    $this->result['success']   = true;
    return $this->result;
  }

  public function add_pengeluaran() {
    $data = array(
      'jumlah'         => $this->data['jumlah'],
      'keterangan'     => $this->data['keterangan'],
      'tanggal'        => date('Y-m-d', strtotime($this->data['tanggal'])),
      'created_by'     => $this->data['created_by'],
    );

    if (isset($this->data['pengeluaran_id']) && $this->data['pengeluaran_id']) {
      $proses = $this->db->where('pengeluaran_id', $this->data['pengeluaran_id'])->update('pengeluaran', $data);
    }else {
      $proses = $this->db->insert('pengeluaran', $data);
    }

    $this->result['data']      = $data;
    $this->result['success']   = true;
    return $this->result;
  }

  public function del_pengeluaran() {
    $proses                    = $this->db->where('pengeluaran_id', $this->data['pengeluaran_id'])->delete('pengeluaran');
    $this->result['success']   = ($proses) ? true : false;
    return $this->result;
  }

  public function get_kamar() {
    $this->db->from('sewa');
    $this->db->join('properti', 'properti.properti_id = sewa.properti_id', 'LEFT');
    $this->db->join('lantai', 'lantai.lantai_id = sewa.lantai_id', 'LEFT');
    $this->db->join('kamar', 'kamar.kamar_id = sewa.kamar_id', 'LEFT');
    $this->db->join('file_upload', 'file_upload.session_upload_id = properti.session_upload_id', 'LEFT');
    $this->db->where(['sewa.status_sewa' => '2', 'sewa.created_by' => $this->where['user_id']]);
    $this->db->group_by('sewa.kamar_id');
    $data = $this->db->get()->result();
    if ($data) {
      foreach ($data as $key => $value) {
        $value->gambar_link = URL_PROPERTI.'/thumb_'.$value->file_name;
      }
    }

    $this->result['data']      = $data;
    $this->result['success']   = true;
    return $this->result;
  }

  public function get_komplain() {
    if ($this->data['role'] == '2') {
      $this->db->from('komplain');
      $this->db->join('sewa', 'sewa.sewa_id = komplain.sewa_id', 'LEFT');
      $this->db->join('properti', 'properti.properti_id = komplain.properti_id', 'LEFT');
      $data = $this->db->where('komplain.created_by', $this->where['user_id'])->get()->result();
    }else {
      $this->db->from('komplain');
      $this->db->join('sewa', 'sewa.sewa_id = komplain.sewa_id', 'LEFT');
      $this->db->join('properti', 'properti.properti_id = komplain.properti_id', 'LEFT');
      $this->db->join('user', 'user.user_id = komplain.created_by', 'LEFT');
      $data = $this->db->where('properti.created_by', $this->where['user_id'])->get()->result();
    }
    if ($data) {
      foreach ($data as $key => $value) {
        $value->created_on_f = $this->all_library->format_date($value->created_on);
      }
    }
    $this->result['data']      = $data;
    $this->result['success']   = true;
    return $this->result;
  }

  public function add_komplain() {
    $data = array(
      'sewa_id'     => $this->data['sewa_id'],
      'keterangan'  => $this->data['keterangan'],
      'properti_id' => $this->data['properti_id'],
      'created_by'  => $this->data['user_id'],
    );

    $proses = true;
    if (isset($this->data['komplain_id']) && $this->data['komplain_id']) {
      $proses = $this->db->where('komplain_id', $this->data['komplain_id'])->update('komplain', $data)->get()->row();
    }else{
      // kirim wa
      $proses    = $this->db->insert('komplain', $data);
      $nama_user = '';
      $user      = $this->db->from('user')->where('user_id', $this->data['user_id'])->get()->row();
      $nama_user = ($user) ? $user->nama : '';
      $no_user   = ($user) ? $user->notelp : '';
      $message   = '*'.$nama_user.'* mengirimkan komplain *"'.$this->data['keterangan'].'"*, kirim whatsapp ke nomor berikut '.$no_user.' untuk merespon.';
      $owner_wa  = '';
      $properti  = $this->db->from('properti')->join('user', 'user.user_id = properti.created_by', 'LEFT')->where('properti.properti_id', $this->data['properti_id'])->get()->row();
      $owner_wa  = ($properti) ? $properti->notelp : '';
      // kirim wa
      $this->all_library->wa(array(
        'phone'   => $owner_wa,
        'message' => $message
      ));

      // management
      $checkManage = $this->db->from('management_kos')->where('properti_id', $properti->properti_id)->get()->result();
      if ($checkManage) {
        foreach ($checkManage as $key => $value) {
          $manage_wa = $this->db->from('user')->where('user_id', $value->created_by)->get()->row();
          $this->all_library->wa(array(
            'phone'   => ($manage_wa) ? $manage_wa->notelp : '',
            'message' => $message
          ));
        }
      }
    }

    $this->result['success']   = ($proses) ? true : false;
    return $this->result;
  }

  public function find_by() {
    $this->result['data']      = $this->db->from($this->table)->where($this->where)->get()->row();
    $this->result['totaldata'] = ($this->result['data']) ? 1 : 0;
    return $this->result;
  }

  public function find_all_by() {
    $this->result['data']      = $this->db->from($this->table)->where($this->where)->get()->result();
    $this->result['totaldata'] = ($this->result['data']) ? count($this->result['data']) : 0;
    return $this->result;
  }

  public function find_all_by_order_by() {
    $this->db->from($this->table['table_1']);
    $this->db->join($this->table['table_2'], $this->data['join'], 'LEFT');
    $this->db->select($this->data['select']);
    $this->db->where($this->where);
    $this->db->order_by($this->data['order_by']);
    return $this->db->get()->result();
  }

  public function count_by() {
    $this->result['data']      = $this->db->from($this->table)->where($this->where)->get()->num_rows();
    $this->result['totaldata'] = ($this->result['data']) ? 1 : 0;
    return $this->result;
  }

  public function delete() {
    $delete = $this->db->delete($this->table, $this->where);
    $this->result['success'] = ($delete) ? true : false;
    return $this->result;
  }

  public function native_find_by($table, $where, $return = 'row') {
    return $this->db->from($table)->where($where)->get()->$return();
  }

  public function native_find_all_by($table, $where, $order = null) {
    $this->db->from($table);
    $this->db->where($where);
    if ($order) {
      $this->db->order_by($order);
    }
    return $this->db->get()->result();
  }

  public function native_count_by($table, $where) {
    return $this->db->from($table)->where($where)->get()->num_rows();
  }

  public function native_update($where, $table, $data) {
    return $this->db->where($where)->update($table, $data);
  }

  public function native_insert_batch($table, $data) {
    return $this->db->insert_batch($table, $data);
  }

  public function native_insert($table, $data) {
    return $this->db->insert_id($table, $data);
  }

  public function insert($table, $data) {
    return $this->db->insert($table, $data);
  }

  public function native_delete($table, $where) {
    return $this->db->delete($table, $where);
  }

  public function get_last_query() {
    return $this->db->last_query();
  }

  public function get_all_by($table, $where, $order = null) {
    $this->db->from($table);
    $this->db->where($where);
    if ($order) {
      $this->db->order_by($order);
    }
    return $this->db->get()->result();
  }

  public function removeImg() {
    $dataFilename = explode('/', $this->where['file_name']);
    $file_name    = str_replace('thumb_', '', $dataFilename[(count($dataFilename)-1)]);
    $delete = $this->db->delete('file_upload', array(
      'file_name'         => $file_name,
      'session_upload_id' => $this->where['session_upload_id'],
      // 'created_by'  => $this->where['user_id'],
    ));

    $path       = '/'.(($this->table) ? $this->table.'/' : '/');
    $loc        = DIR_UPLOAD.$path.$file_name;
    $thumb_loc  = DIR_UPLOAD.$path.'thumb_'.$file_name;
    // if ($delete && file_exists($loc) || file_exists($thumb_loc)) {
    //   unlink($loc);
    //   unlink($thumb_loc);
    // }

    return $this->result;
  }

  public function postAnggota() {
    $data  = $this->all_library->postAnggota($this->data['nama']);
    $this->result['success'] = $data;
    return $this->result;
  }

  public function postKehadiran() {
    $data  = $this->all_library->postKehadiran($this->data['nomor_anggota']);
    $this->result['success'] = $data;
    return $this->result;
  }

  public function getMasterData() {
    $data  = $this->all_library->getAnggota();
    if ($data) {
      foreach ($data as $key => $value) {
        @$value->created_at_f = $this->all_library->format_date(@$value->created_at);
      }
    }
    $this->result['data'] = $data;
    return $this->result;
  }

  public function getKehadiran() {
    $data  = $this->all_library->getKehadiran();
    if ($data->kehadiran) {
      foreach ($data->kehadiran as $key => $value) {
        @$value->created_at_f = $this->all_library->format_date(@$value->created_at);
      }
    }
    $this->result['data'] = $data;
    return $this->result;
  }

  public function delMasterData() {
    $data  = $this->all_library->delAnggota($this->data['anggota_id']);
    $this->result['success'] = $data;
    return $this->result;
  }

  public function putAnggota() {
    $data  = $this->all_library->putAnggota($this->data['nama'], $this->data['anggota_id']);
    $this->result['success'] = $data;
    return $this->result;
  }

}

 ?>
