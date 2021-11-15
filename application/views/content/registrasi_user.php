<style media="screen">
  .login,
  .image {
    min-height: 100vh;
  }

  .bg-image {
    background-image: url('https://www.imaos.id/wp-content/uploads/2019/07/Untitled-1-01.png');
    background-size: cover;
    background-position: center center;
  }
</style>
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>
        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Registrasi</h3>
                            <form>
                              <div class="form-group mb-3">
                                <input id="username" name="username" type="username" placeholder="Username" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                              </div>
                              <div class="form-group mb-3">
                                <input id="password" name="password" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                              </div>
                              <button id="btn_registrasi" type="submit" class="btn btn-success btn-block text-uppercase mb-2 rounded-pill shadow-sm">aftar</button>
                            </form>
                            <button id="btn_login" type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Kembali</button>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
        <!-- End -->
    </div>
</div>

<script type="text/javascript">

$('#btn_login').on('click',function(){
  window.location = 'login';
});

$('#btn_registrasi').on('click',function(){
  var username = $('#username').val();
  var password = $('#password').val();
  $.ajax({
      type : "POST",
      url  : "<?php echo base_url('dashboard/registrasi_user')?>",
      dataType : "JSON",
      data : {
        username : username,
        password : password
      },
      success: function(data){
        $('[name="username"]').val("");
        $('[name="password"]').val("");
        if (data) {
          window.location = data;
        }else {
          alert("Username dan Password tidak boleh kosong, Silahkan Coba Lagi!");
        }
      }
  });
  return false;
});

</script>
