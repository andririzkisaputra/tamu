<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data User</h1>
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
            <!-- <div class="card-header">
              <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#keahlianModal">Tambah Data</a>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabel_user" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Level</th>
                  <th>Tanggal Daftar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody id="show_data">
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Level</th>
                  <th>Tanggal Daftar</th>
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
<div class="modal fade" id="keahlianModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Input Keahlian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="usr">Keahlian</label>
            <input name="keahlian" type="text" class="form-control" id="keahlian" placeholder="Keahlian">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id='btn_simpan_keahlian'>Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- End Modal content-->
  </div>
</div>
<!-- End Model -->

<!-- Modal Edit-->
<div class="modal fade" id="keahlianModalEdit" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Keahlian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="usr">Keahlian</label>
            <input name="keahlian" type="text" class="form-control" id="keahlian_edit" placeholder="Keahlian">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" id='btn_update_keahlian'>Ubah</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- End Modal content-->
  </div>
</div>
<!-- End Model Edit-->

<!--MODAL HAPUS-->
<div class="modal fade" id="userModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus User</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <form class="form-horizontal">
          <div class="modal-body">
            <input type="hidden" name="user_id" id="user_id" value="">
            <div class="alert alert-primary"><p>Apakah Anda yakin menghapus data ini?</p></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Tutup</button>
            <button class="btn btn-sm btn-danger" id="btn_hapus_user">Hapus</button>
          </div>
          </form>
      </div>
  </div>
</div>
<!--END MODAL HAPUS-->

<script>
$(document).ready(function(){
  $('#tabel_user').DataTable({
    dom: 'Blfrtip',
    buttons: [],
    "lengthMenu": [10, 20, 50, 100, 200, 500, 1000, 5000, 10000],
    "pageLength": 10,
    'lengthChange': true,
    "processing": true,
    "serverSide": true,
    ajax : {
      url  : '<?=base_url()?>admin/get_user',
      type : 'POST',
      data : {},
    },
    columns: [
      { data: 'no'},
      { data: 'username', 'className' : 'text-left' },
      { data: 'status_f', 'className' : 'text-left' },
      { data: 'level_f', 'className' : 'text-left' },
      { data: 'created_on', 'className' : 'text-left' },
      { data: 'aksi', 'className' : 'text-left' },
    ],
  });
});

//GET HAPUS
$('#show_data').on('click','.hapus',function(){
  var id=$(this).attr('data');
  $('#userModalHapus').modal('show');
  $('[name="user_id"]').val(id);
});

//Hapus Data
$('#btn_hapus_user').on('click',function(){
  var user_id = $('[name="user_id"]').val();
  $.ajax({
    type : "POST",
    url  : "<?php echo base_url('admin/hapus_user')?>",
    dataType : "JSON",
    data : {
      user_id : user_id
    },
    success: function(data){
      $('[name="user_id"]').val('');
      $('#userModalHapus').modal('hide');
      $("#tabel_user").DataTable().ajax.reload();
    }
  });
  return false;
});

//GET UPDATE
$('#show_data').on('click','.edit',function(){
  var keahlian_id = $(this).attr('data');
  $.ajax({
      type : "GET",
      url  : "<?php echo base_url('admin/get_by_ubah_keahlian')?>",
      dataType : "JSON",
      data : {
        keahlian_id : keahlian_id
      },
      success: function(data){
        $('#keahlianModalEdit').modal('show');
        $('[name="keahlian_id"]').val(data[0].keahlian_id);
        $('[name="keahlian"]').val(data[0].keahlian);
      }
  });
  return false;
});

//Update
$('#btn_update_keahlian').on('click',function(){
  var keahlian_id = $('#keahlian_id').val();
  console.log(keahlian_id);
  var keahlian    = $('#keahlian_edit').val();
  $.ajax({
    type : "POST",
    url  : "<?php echo base_url('admin/ubah_keahlian')?>",
    dataType : "JSON",
    data : {
      keahlian_id : keahlian_id,
      keahlian    : keahlian
    },
    success: function(data){
      $('[name="keahlian_id"]').val("");
      $('[name="keahlian"]').val("");
      $('#keahlianModalEdit').modal('hide');
      $("#tabel_keahlian").DataTable().ajax.reload();
    }
  });
  return false;
});

</script>
