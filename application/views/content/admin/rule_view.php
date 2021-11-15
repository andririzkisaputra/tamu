  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Rule</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#ruleModal">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabel_rule" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Rule</th>
                    <th>Minat & Bakat</th>
                    <th>Tanggal Simpan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody id="show_data">
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Kode Rule</th>
                    <th>Minat & Bakat</th>
                    <th>Tanggal Simpan</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <!-- Modal -->
  <div class="modal fade" id="ruleModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Input Rule</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <!-- <form> -->
            <div class="form-group">
              <button type="submit" class="btn btn-sm btn-primary" id="btn_add"><i class="">Tambah</i></button>
              <button type="submit" class="btn btn-sm btn-success" id="btn_refresh"><i class="">Refresh</i></button>
            </div>
            <div id="input_rule_0" class="">
              <div class="form-group row">
                <div class="col-lg-8">
                  <label for="usr">Keahlian</label>
                  <select class="form-control" style="width: 100%;" id='select_keahlian_0'>
                  </select>
                </div>
                <div class="col-lg-4">
                  <label>Pilih</label>
                  <select class="form-control" name="select_pilihan_0" id="select_pilihan_0" style="width: 100%;">
                    <option value="0">Tidak</option>
                    <option value="0.4">Sedikit Yakin</option>
                    <option value="0.6">Cukup Yakin</option>
                    <option value="0.8">Yakin</option>
                    <option value="1">Sangat Yakin</option>
                  </select>
                </div>
              </div>
            </div>
            <div id="input_rule_1"></div>
            <div class="form-group">
              <label for="usr">Minat Bakat</label>
              <select class="select2 select2-hidden-accessible" style="width: 100%;" name="minat_bakat" id='select_minat_bakat'>
              </select>
            </div>
          <!-- </form> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id='btn_simpan_rule'>Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- End Modal content-->
    </div>
  </div>
  <!-- End Model -->

  <!-- Modal -->
  <div class="modal fade" id="ruleDetailModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail Rule</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="usr">Kode Rule</label>
            <p id='detail_kode_rule'></p>
          </div>
          <div class="form-group">
            <label for="usr">Minat Bakat</label>
            <p id='detail_minat_bakat'></p>
          </div>
          <div class="form-group">
            <label for="usr">Keahlian</label>
            <p id='detail_keahlian'></p>
          </div>
        </div>
      </div>
      <!-- End Modal content-->
    </div>
  </div>
  <!-- End Model -->

  <!-- Modal Edit-->
  <div class="modal fade" id="ruleModalEdit" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Rule</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <button type="submit" class="btn btn-sm btn-primary" id="btn_add_edit"><i class="">Tambah</i></button>
            <button type="submit" class="btn btn-sm btn-success" id="btn_refresh_edit"><i class="">Refresh</i></button>
          </div>
          <div id="input_rule_edit_0" class=""></div>
          <div class="form-group">
            <label for="usr">Minat Bakat</label>
            <select class="select2 select2-hidden-accessible" style="width: 100%;" name="minat_bakat" id="select_minat_bakat_edit">
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal" id='btn_update_rule'>Ubah</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- End Modal content-->
    </div>
  </div>
  <!-- End Model Edit-->

  <!--MODAL HAPUS-->
  <div class="modal fade" id="ruleModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Rule</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form class="form-horizontal">
            <div class="modal-body">
              <input type="hidden" name="kode_rule" id="kode_rule" value="">
              <div class="alert alert-primary"><p>Apakah Anda Yakin Menghapus Data Ini?</p></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Tutup</button>
                <button class="btn btn-sm btn-danger" id="btn_hapus_rule">Hapus</button>
            </div>
            </form>
        </div>
    </div>
  </div>
  <!--END MODAL HAPUS-->

  <script>
  var add = 0;
  var select_keahlian = [];
  $(document).ready(function(){
    select_data_keahlian();
    select_data_minat_bakat();
    $('#select_minat_bakat_edit').select2();
    $('#select_keahlian_0').select2();
    $('#select_pilihan_0').select2();
    $('#select_minat_bakat').select2();
    $('#tabel_rule').DataTable({
      dom: 'Blfrtip',
      buttons: [],
      "lengthMenu": [10, 20, 50, 100, 200, 500, 1000, 5000, 10000],
      "pageLength": 20,
      "processing": true,
      "serverSide": true,
      ajax : {
        url  : '<?=base_url()?>admin/get_rule',
        type : 'POST',
        data : {},
      },
      columns: [
        { data: 'no', 'className' : 'text-left' },
        { data: 'kode_rule', 'className' : 'text-left' },
        { data: 'minat_bakat', 'className' : 'text-left' },
        { data: 'modified_on', 'className' : 'text-left' },
        { data: 'aksi', 'className' : 'text-left' },
      ],
    });
  });

  function select_data_minat_bakat() {
    $.ajax({
        type : "POST",
        url  : "<?php echo base_url('admin/select_data_minat_bakat')?>",
        dataType : "JSON",
        data : {},
        success: function(data){
          var select_minat_bakat = [];
          for (var i = 0; i < data.length; i++) {
            if (i == 0) {
              select_minat_bakat[i] = '<option value="'+data[i].minat_bakat_id+'" selected>'+data[i].minat_bakat+'</option>';
            }else {
              select_minat_bakat[i] = '<option value="'+data[i].minat_bakat_id+'">'+data[i].minat_bakat+'</option>';
            }
          }
          $('#select_minat_bakat').html(select_minat_bakat);
        }
    });
    return false;
  }

  function select_data_keahlian() {
    $.ajax({
        type : "POST",
        url  : "<?php echo base_url('admin/select_data_keahlian')?>",
        dataType : "JSON",
        data : {},
        success: function(data){
          for (var i = 0; i < data.length; i++) {
            if (i == 0) {
              select_keahlian[i] = '<option value="'+data[i].keahlian_id+'" selected>'+data[i].keahlian+'</option>';
            }else {
              select_keahlian[i] = '<option value="'+data[i].keahlian_id+'">'+data[i].keahlian+'</option>';
            }
          }
          $('#select_keahlian_0').html(select_keahlian.toString().split(',').join(''));
        }
    });
    return false;
  }

  //Simpan Data
  $('#btn_simpan_rule').on('click',function(){
    var select_keahlian    = [];
    var select_pilihan     = [];
    var select_minat_bakat = $('#select_minat_bakat').val();
    for (var i = 0; i <= add; i++) {
      select_keahlian[i] = $('#select_keahlian_'+i).val();
      select_pilihan[i]  = $('#select_pilihan_'+i).val();
    }
    $.ajax({
        type : "POST",
        url  : "<?php echo base_url('admin/set_rule')?>",
        dataType : "JSON",
        data : {
          keahlian_id    : select_keahlian,
          nilai          : select_pilihan,
          minat_bakat_id : select_minat_bakat
        },
        success: function(data){
          $('[name="keahlian"]').val("");
          $('[name="minat_bakat"]').val("");
          $('#ruleModal').modal('hide');
          $("#tabel_rule").DataTable().ajax.reload();
        }
    });
    return false;
  });

  //GET Detail
  $('#show_data').on('click','.detail',function(){
    var id = $(this).attr('data');
    $.ajax({
        type : "POST",
        url  : "<?php echo base_url('admin/select_detail')?>",
        dataType : "JSON",
        data : {
          kode_rule : id
        },
        success: function(data){
          var keahlian    = [];
          var minat_bakat = '';
          var kode_rule   = '';
          for (var i = 0; i < data.length; i++) {
            keahlian[i] = data[i].keahlian;
            minat_bakat = data[i].minat_bakat;
            kode_rule   = data[i].kode_rule;
          }
          $('#ruleDetailModal').modal('show');
          $('#detail_keahlian').html(keahlian.join(', '));
          $('#detail_minat_bakat').html(minat_bakat);
          $('#detail_kode_rule').html(kode_rule);
        }
    });
    return false;
  });

  //GET HAPUS
  $('#show_data').on('click','.hapus',function(){
    var id=$(this).attr('data');
    $('#ruleModalHapus').modal('show');
    $('[name="kode_rule"]').val(id);
  });

  //Hapus Data
  $('#btn_hapus_rule').on('click',function(){
    var kode_rule = $('#kode_rule').val();
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url('admin/hapus_rule')?>",
      dataType : "JSON",
      data : {
        kode_rule : kode_rule
      },
      success: function(data){
        $('#ruleModalHapus').modal('hide');
        $("#tabel_rule").DataTable().ajax.reload();
      }
    });
    return false;
  });

  //GET UPDATE
  $('#show_data').on('click','.edit',function(){
    var kode_rule = $(this).attr('data');
    $.ajax({
        type : "GET",
        url  : "<?php echo base_url('admin/get_by_rule')?>",
        dataType : "JSON",
        data : {
          kode_rule : kode_rule
        },
        success: function(data){
          $('#ruleModalEdit').modal('show');
          $('#select_keahlian_edit_0').select2();
          $('#select_pilihan_edit_0').select2();
          select_keahlian_edit    = [];
          select_minat_bakat_edit = [];
          add                     = 0;
          for (var j = 0; j < data.length; j++) {
          select_keahlian_edit[j] = '<div class="form-group row">'
            +'<div class="col-lg-8">'
              +'<label for="usr">Keahlian</label>'
                +'<select class="form-control" style="width: 100%;" name="select_keahlian_edit_'+add+'" id="select_keahlian_edit_'+add+'">';
            for (var i = 0; i < select_keahlian.length; i++) {
              if (data[0].select_keahlian[i].keahlian_id == data[j].keahlian_id) {
                select_keahlian_edit[j] += '<option value="'+data[j].select_keahlian[i].keahlian_id+'" selected>'+data[j].select_keahlian[i].keahlian+'</option>';
              }else {
                select_keahlian_edit[j] += '<option value="'+data[j].select_keahlian[i].keahlian_id+'">'+data[j].select_keahlian[i].keahlian+'</option>';
              }
            }
            select_keahlian_edit[j] += '</select>'
                +'</div>'
                +'<div class="col-lg-4">'
                  +'<label>Pilih</label>'
                  +'<select class="form-control" name="select_pilihan_edit_'+add+'" id="select_pilihan_edit_'+add+'" style="width: 100%;">'
                    +'<option value="0" '+((data[j].nilai == 0) ? "selected" : "")+'>Tidak</option>'
                    +'<option value="0.4" '+((data[j].nilai == 0.4) ? "selected" : "")+'>Sedikit Yakin</option>'
                    +'<option value="0.6" '+((data[j].nilai == 0.6) ? "selected" : "")+'>Cukup Yakin</option>'
                    +'<option value="0.8" '+((data[j].nilai == 0.8) ? "selected" : "")+'>Yakin</option>'
                    +'<option value="1" '+((data[j].nilai == 1) ? "selected" : "")+'>Sangat Yakin</option>'
                  +'</select>'
                +'</div>'
              +'</div>'
              +'<div id="input_rule_edit_'+(add+1)+'"></div>';
            $('#input_rule_edit_'+j).html(select_keahlian_edit[j].toString().split(',').join(''));
            $('#select_keahlian_edit_'+(add+1)).select2();
            $('#select_pilihan_edit_'+(add+1)).select2();
            for (var l = j; l < select_minat_bakat.length; l++) {
              if (data[0].select_minat_bakat[l].minat_bakat_id == data[j].minat_bakat_id) {
                select_minat_bakat_edit[l] = '<option value="'+data[j].select_minat_bakat[l].minat_bakat_id+'" selected>'+data[j].select_minat_bakat[l].minat_bakat+'</option>';
              }else {
                select_minat_bakat_edit[l] = '<option value="'+data[j].select_minat_bakat[l].minat_bakat_id+'">'+data[j].select_minat_bakat[l].minat_bakat+'</option>';
              }
            }
            add++;
          }
          $('#select_minat_bakat_edit').html(select_minat_bakat_edit.toString().split(',').join(''));
          $('#kode_rule').val(data[0].kode_rule);
        }
    });
    return false;
  });

  //Update
  $('#btn_update_rule').on('click',function(){
    var kode_rule               = $('#kode_rule').val();
    var select_minat_bakat_edit = $('#select_minat_bakat_edit').val();
    var select_keahlian_edit    = [];
    var select_pilihan_edit     = [];
    for (var i = 0; i < add; i++) {
      select_keahlian_edit[i] = $('#select_keahlian_edit_'+i).val();
      select_pilihan_edit[i]  = $('#select_pilihan_edit_'+i).val();
    }
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url('admin/ubah_rule')?>",
      dataType : "JSON",
      data : {
        kode_rule      : kode_rule,
        minat_bakat_id : select_minat_bakat_edit,
        keahlian_id    : select_keahlian_edit,
        nilai          : select_pilihan_edit
      },
      success: function(data){
        $('[name="kode_rule"]').val("");
        $('[name="minat_bakat_id"]').val("");
        $('[name="keahlian_id"]').val("");
        $('#ruleModalEdit').modal('hide');
        $("#tabel_rule").DataTable().ajax.reload();
      }
    });
    return false;
  });

  //Add
  $('#btn_add').on('click',function(){
    add++;
    addNext = add + 1;
    var dokumen = '<div class="form-group row">'
                    +'<div class="col-lg-8">'
                      +'<label>Keahlian</label>'
                      +'<select class="form-control" style="width: 100%;" name="select_keahlian_'+add+'" id="select_keahlian_'+add+'">'
                      +'</select>'
                    +'</div>'
                    +'<div class="col-lg-4">'
                      +'<label>Pilih</label>'
                      +'<select class="form-control" name="select_pilihan_'+add+'" id="select_pilihan_'+add+'" style="width: 100%;">'
                        +'<option value="0">Tidak</option>'
                        +'<option value="0.4">Sedikit Yakin</option>'
                        +'<option value="0.6">Cukup Yakin</option>'
                        +'<option value="0.8">Yakin</option>'
                        +'<option value="1">Sangat Yakin</option>'
                      +'</select>'
                    +'</div>'
                  +'</div>'
                  +'<div id="input_rule_'+addNext+'"></div>';
    $('#input_rule_'+add).html(dokumen);
    $('#select_keahlian_'+add).html(select_keahlian);
    $('#select_keahlian_'+add).select2();
    $('#select_pilihan_'+add).select2();
  });

  //Add
  $('#btn_add_edit').on('click',function(){
    addNext = add + 1;
    var dokumen = '<div class="form-group row">'
                    +'<div class="col-lg-8">'
                      +'<label>Keahlian</label>'
                      +'<select class="form-control" style="width: 100%;" name="select_keahlian_edit_'+add+'" id="select_keahlian_edit_'+add+'">'
                      +'</select>'
                    +'</div>'
                    +'<div class="col-lg-4">'
                      +'<label>Pilih</label>'
                      +'<select class="form-control" name="select_pilihan_edit_'+add+'" id="select_pilihan_edit_'+add+'" style="width: 100%;">'
                        +'<option value="0">Tidak</option>'
                        +'<option value="0.4">Sedikit Yakin</option>'
                        +'<option value="0.6">Cukup Yakin</option>'
                        +'<option value="0.8">Yakin</option>'
                        +'<option value="1">Sangat Yakin</option>'
                      +'</select>'
                    +'</div>'
                  +'</div>'
                  +'<div id="input_rule_edit_'+addNext+'"></div>';
    $('#input_rule_edit_'+add).html(dokumen);
    $('#select_keahlian_edit_'+add).html(select_keahlian);
    $('#select_keahlian_edit_'+add).select2();
    $('#select_pilihan_edit_'+add).select2();
    add++;
  });

  //Del
  $('#btn_refresh').on('click',function(){
    add = 0;
    $('#input_rule_1').html('<div id="input_rule_1"></div>');
  })

  //Del
  $('#btn_refresh_edit').on('click',function(){
    add = 0;
    $('#input_rule_edit_1').html('<div id="input_rule_edit_1"></div>');
  })

  </script>
