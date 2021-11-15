  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>Aplikasi</spa>
      </h1>
      <h2>Minat dan bakat anak dalam olaraga sepakbola</h2>
      <div class="d-flex">
        <a type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#minat_model">Identifikasi</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Modal -->
  <div class="modal fade" id="minat_model" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Pilih Minat Bakat</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="position: relative; overflow-y: scroll; max-height: 400px;">
          <div class="form-group" id="minat"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id='btn_minat'>Identifikasi</button>
        </div>
      </div>
      <!-- End Modal content-->
    </div>
  </div>
  <!-- End Model -->

  <!-- Modal -->

  <!-- Modal -->
  <div class="modal fade" id="petunjuk_model" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Petunjuk Penggunaan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <img src="<?php echo base_url()?>assets/user/img/petunjuk.png" class="img-fluid" alt="">
        </div>
      </div>
      <!-- End Modal content-->
    </div>
  </div>
  <!-- End Model -->

  <!-- Modal -->
  <div class="modal fade" id="keahlian_model" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ketahui Keahlian yang Kamu Alami</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="position: relative; overflow-y: scroll; max-height: 400px;">
          <div class="form-group row">
            <div class="col-lg-7">
               <strong>Pertanyaan</strong>
             </div>
            <div class="col-lg-5">
               <strong>Keyakinan</strong>
             </div>
          </div>
          <div id="keahlian"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id='btn_cf'>Identifikasi</button>
        </div>
      </div>
      <!-- End Modal content-->
    </div>
  </div>
  <!-- End Model -->

  <!-- Modal -->
  <div class="modal fade" id="cf_model" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hasil Identifikasi</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="position: relative; overflow-y: scroll; max-height: 400px;">
          <div style="text-align: center;" id="hasil_cf"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- End Modal content-->
    </div>
  </div>
  <!-- End Model -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxs-down-arrow-square"></i></div>
              <h4 class="title"><a href="">Penjaga Gawang</a></h4>
              <p class="description">Penjaga Gawang atau Kiper Satu hal yang paling wajib dimiliki oleh tim sepak bola. Penjaga gawang atau kipper adalah pemain yang berdiri di bawah mistar gawang sebagai kiper.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bxs-left-arrow-square"></i></div>
              <h4 class="title"><a href="">Gelandang</a></h4>
              <p class="description">Gelandang, pemain tengah atau dalam bahasa Inggris disebut Midfield yang diposisikan antara bek dan penyerang. Tugas seorang gelandang yaitu untuk menghubungkan antara bek dan penyerang.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bxs-up-arrow-square"></i></div>
              <h4 class="title"><a href="">Pemain Bertahan</a></h4>
              <p class="description">Pemain Bertahan atau Bek Posisi tepat berada di depan kiper dan di belakang pemain tengah. Pemain belakang ini disebut juga sebagai bek yang berasal dari bahasa Inggris back.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bxs-right-arrow-square"></i></div>
              <h4 class="title"><a href="">Penyerang</a></h4>
              <p class="description">Penyerang adalah pemain yang posisinya paling dekat dengan gawang lawan dan tugas utamanya adalah menciptakan gol. Tiga hal utama yang dibutuhkan pemain penyerang adalah teknik, kecepatan dan bakat.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Profile Sekolah</h2>
          <h3>Sejarah <span>Sekolah</span></h3>
          <p>MI Muhammadiyah Butuh lahir tahun 1 april 1957. Pada awal berdirinya lokasi madrasah terbagi-bagi menjadi 2 tempat yaitu diDusun Senden, dusun Butuh.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?php echo base_url()?>assets/user/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Identitas MI Muhammadiyah Butuh</h3>
            <ul>
              <li>
                <i class="bx bxs-school"></i>
                <div>
                  <h5>Nama Yayasan</h5>
                  <p>Perserikatan Muhammadiyah</p>
                </div>
              </li>
              <li>
                <i class="bx bxs-institution"></i>
                <div>
                  <h5>Nama Lembaga</h5>
                  <p>MI Muhammadiyah Butuh</p>
                </div>
              </li>
              <li>
                <i class="bx bxs-paper-plane"></i>
                <div>
                  <h5>Alamat</h5>
                  <p>Desa Senden, Kec.Mungkid, Kab.Magelang, Provinsi Jawa Tengah, Kode Pos 56512</p>
                </div>
              </li>
            </ul>
            <p>
              Kegiatan belajar mengajar di MI Muhammadiah butuh di selenggarakan pada waktu pagi hari, dimulai pada pukul 07.00-14.00 WIB,
              menyadari sangat pentingnya tenaga pendidikan dan keberhasilan proses belajar mengajar,
              lembaga pedidikan ini benar-benar memperhatikan mutu guru.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="<?php echo base_url()?>assets/user/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url()?>assets/user/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url()?>assets/user/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url()?>assets/user/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url()?>assets/user/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3><span>Tentang Saya</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Daerah Istimewa Yogyakarta, Indonesia</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>contact@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telpon</h3>
              <p>+6282346276776</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 ">
            <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=yogyakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

	<script>
  let keahlian_id = [];
  let index       = 0;
		$(document).ready(function(){
      let minat = '';
      $.ajax({
          type : "POST",
          url  : "<?php echo base_url('admin/select_data_minat_bakat')?>",
          dataType : "JSON",
          data : {},
          success: function(data){
            for (var i = 0; i < data.length; i++) {
              minat += '<input id="pilih_minat" name="pilih_minat[]" type="checkbox" value="'+data[i].minat_bakat_id+'"> '
                      +'<label>'+data[i].minat_bakat+'</label><br>';
            }
            $('#minat').html(minat);
          }
      });
      return false;
    });

    //Keahlian Model
    $('#btn_minat').on('click',function(){
      $('#minat_model').modal('toggle');
      let minat = [];
      $(':checkbox:checked').each(function(i){
        minat[i] = $(this).val();
      });
      let keahlian = '';
      keahlian_id = [];
      index = 0;
      $.ajax({
          type : "POST",
          url  : "<?php echo base_url('dashboard/select_data_keahlian')?>",
          dataType : "JSON",
          data : {
            'minat' : minat
          },
          success: function(data){
            $('#keahlian_model').modal('show');
            let keahlian = '';
            for (var i = 0; i < data.length; i++) {
              keahlian += '<div class="form-group row">'
                            +'<div class="col-lg-7"">'
                              +'<label>'+data[i].keahlian+'</label>'
                            +'</div>'
                            +'<div class="col-lg-5"">'
                              +'<select name="keahlian_pilih" class="form-control" id="keahlian_pilih_'+index+'">'
                                +'<option value="0">Tidak</option>'
                                +'<option value="0.4">Sedikit Yakin</option>'
                                +'<option value="0.6">Cukup Yakin</option>'
                                +'<option value="0.8">Yakin</option>'
                                +'<option value="1">Sangat Yakin</option>'
                              +'</select>'
                            +'</div>'
                          +'</div>';
                          index++;
              keahlian_id[i] = data[i].keahlian_id;
            }
            $('#keahlian').html(keahlian);
          }
      });
      return false;
    });

    //Keahlian Model
    $('#btn_cf').on('click',function(){
      $('#keahlian_model').modal('toggle');
      let minat    = [];
      let keahlian = [];
      $(':checkbox:checked').each(function(i){
        minat[i] = $(this).val();
      });
      for (var i = 0; i < index; i++) {
        keahlian[i] = $('#keahlian_pilih_'+i).val();
      }
      index = 0;
      $.ajax({
          type : "POST",
          url  : "<?php echo base_url('dashboard/proses_cf')?>",
          dataType : "JSON",
          data : {
            'minat'          : minat,
            'keahlian_id'    : keahlian_id,
            'keyakinan_user' : keahlian
          },
          success: function(data){
            minat = [];
            keahlian = [];
            keahlian_id = [];
            let html = '';
            for (var i = 0; i < data.hasil_identifikasi.length; i++) {
              html += '<div style="margin-bottom: 30px;">'
                        +'<p style="font-size: large;">Minat yang kamu alami adalah <b>'+data.hasil_minat[i]+'</b></p>'
                        +'<span style="font-size: 15px; margin-top: 0px;">Dengan Presentase Sebesar : '+data.hasil_identifikasi[i]+'%</span>'
                        +'<p style="font-size: large; margin-top: 15px;"><b>Keterangan</b></p>'
                        +'<p style="font-size: 15px; margin-top: -10px;">'+data.deskripsi[i]+'</p>'
                      +'</div>';
            }
            $('#hasil_cf').html(html);
            $('#cf_model').modal('show');
          }
      });
      return false;
    });

	</script>
