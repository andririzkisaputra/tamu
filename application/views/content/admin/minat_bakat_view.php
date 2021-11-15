  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Minat Bakat</h1>
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
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#minatBakatModal">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabel_minat_bakat" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Minat & Bakat</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Simpan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody id="show_data">
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Minat & Bakat</th>
                    <th>Deskripsi</th>
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
  <div class="modal fade" id="minatBakatModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Input Minat Bakat</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="usr">Minat Bakat</label>
              <input name="minat_bakat" type="text" class="form-control" id="minat_bakat" placeholder="Minat Bakat">
            </div>
            <div class="form-group">
              <label for="usr">Deskripsi</label>
              <textarea name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="Deskripsi"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id='btn_simpan_minat_bakat'>Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- End Modal content-->
    </div>
  </div>
  <!-- End Model -->

  <!-- Modal Edit-->
  <div class="modal fade" id="minatBakatModalEdit" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Minat Bakat</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="usr">Minat Bakat</label>
              <input name="minat_bakat" type="text" class="form-control" id="minat_bakat_edit" placeholder="Minat Bakat">
            </div>
            <div class="form-group">
              <label for="usr">Deskripsi</label>
              <textarea name="deskripsi" class="form-control" id="deskripsi_edit" placeholder="Deskripsi"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal" id='btn_update_minat_bakat'>Ubah</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- End Modal content-->
    </div>
  </div>
  <!-- End Model Edit-->

  <!--MODAL HAPUS-->
  <div class="modal fade" id="minatBakatModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Hapus Minat Bakat</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <form class="form-horizontal">
              <div class="modal-body">
                <input type="hidden" name="minat_bakat_id" id="minat_bakat_id" value="">
                <div class="alert alert-primary"><p>Apakah Anda yakin menghapus data ini?</p></div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Tutup</button>
                  <button class="btn btn-sm btn-danger" id="btn_hapus_minat_bakat">Hapus</button>
              </div>
              </form>
          </div>
      </div>
  </div>
  <!--END MODAL HAPUS-->

  <script>
  $(document).ready(function(){
    $('#tabel_minat_bakat').DataTable({
      dom: 'Blfrtip',
      buttons: [],
      "lengthMenu": [10, 20, 50, 100, 200, 500, 1000, 5000, 10000],
      "pageLength": 10,
      'lengthChange': true,
      "processing": true,
      "serverSide": true,
      ajax : {
        url  : '<?=base_url()?>admin/get_minat_bakat',
        type : 'POST',
        data : {},
        // beforeSend:function() {
        //   $('#tabel_minat_bakat').LoadingOverlay("show");
        // },
        // complete:function() {
        //   $("#tabel_minat_bakat").LoadingOverlay("hide", true);
        // },
      },
      columns: [
        { data: 'no'},
        { data: 'minat_bakat', 'className' : 'text-left' },
        { data: 'deskripsi', 'className' : 'text-left' },
        { data: 'modified_on', 'className' : 'text-left' },
        { data: 'aksi', 'className' : 'text-left' },
      ],
    });
  });

  //Simpan Data
  $('#btn_simpan_minat_bakat').on('click',function(){
    var minat_bakat = $('#minat_bakat').val();
    var deskripsi   = $('#deskripsi').val();
    $.ajax({
        type : "POST",
        url  : "<?php echo base_url('admin/set_minat_bakat')?>",
        dataType : "JSON",
        data : {
          minat_bakat : minat_bakat,
          deskripsi   : deskripsi
        },
        success: function(data){
          $('[name="minat_bakat"]').val("");
          $('#minatBakatModal').modal('hide');
          $("#tabel_minat_bakat").DataTable().ajax.reload();
        }
    });
    return false;
  });

  //GET HAPUS
  $('#show_data').on('click','.hapus',function(){
    var id=$(this).attr('data');
    $('#minatBakatModalHapus').modal('show');
    $('[name="minat_bakat_id"]').val(id);
  });

  //Hapus Data
  $('#btn_hapus_minat_bakat').on('click',function(){
    var minat_bakat_id = $('#minat_bakat_id').val();
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url('admin/hapus_minat_bakat')?>",
      dataType : "JSON",
      data : {
        minat_bakat_id : minat_bakat_id
      },
      success: function(data){
        $('#minatBakatModalHapus').modal('hide');
        $("#tabel_minat_bakat").DataTable().ajax.reload();
      }
    });
    return false;
  });

  //GET UPDATE
  $('#show_data').on('click','.edit',function(){
    var minat_bakat_id = $(this).attr('data');
    $.ajax({
        type : "GET",
        url  : "<?php echo base_url('admin/get_by_ubah_minat_bakat')?>",
        dataType : "JSON",
        data : {
          minat_bakat_id : minat_bakat_id
        },
        success: function(data){
          $('#minatBakatModalEdit').modal('show');
          $('[name="minat_bakat_id"]').val(data[0].minat_bakat_id);
          $('[name="minat_bakat"]').val(data[0].minat_bakat);
          $('[name="deskripsi"]').val(data[0].deskripsi);
        }
    });
    return false;
  });

  //Update Barang
  $('#btn_update_minat_bakat').on('click',function(){
    var minat_bakat_id = $('#minat_bakat_id').val();
    var minat_bakat    = $('#minat_bakat_edit').val();
    var deskripsi    = $('#deskripsi_edit').val();
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url('admin/ubah_minat_bakat')?>",
      dataType : "JSON",
      data : {
        minat_bakat_id : minat_bakat_id,
        minat_bakat    : minat_bakat,
        deskripsi      : deskripsi
      },
      success: function(data){
        $('[name="minat_bakat_id"]').val("");
        $('[name="minat_bakat"]').val("");
        $('[name="deskripsi"]').val("");
        $('#minatBakatModalEdit').modal('hide');
        $("#tabel_minat_bakat").DataTable().ajax.reload();
      }
    });
    return false;
  });

  </script>
