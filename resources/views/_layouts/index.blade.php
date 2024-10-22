<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
<<<<<<< HEAD
    <meta name="viewport" content="width=device-width, initial-scale=1">
=======
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
>>>>>>> 773351a6dde0bd4fbbfd938d1af4aa21dc478e1e

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Movie</title>
  </head>
  <body>
    @include('_layouts.navbar')
    @includeWhen(isset($movie),'_layouts.hero')
    @yield('content')
    @include('_layouts.footer')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<<<<<<< HEAD
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
=======
          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#tentang-sekolah" class="nav-link">Tentang Sekolah</a></li>
                <li><a href="#kegiatan" class="nav-link">Kegiatan</a></li>
                <li><a href="#ekstrakurikuler" class="nav-link">Ekstrakurikuler</a></li>
                <li><a href="#kontak" class="nav-link">Kontak</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <a class="btn btn-primary ms-2" href="/register">Daftar</a>
                <a class="btn btn-outline-primary ms-2" href="/login">Login</a>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="tentang-sekolah">
      
      <div class="slide-1" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4 text-white">
                    <dl>
                     <dd>Nama : MTs DARUTTARBIYAH</dd>
                     <dd>NPSN : 20581659</dd>
                     <dd>Alamat : JL. Pesucen NO. 121</dd>
                     <dd>Desa : Kelir</dd>
                     <dd>Kecamatan : Kalipuro</dd>
                     <dd>Kabupaten : Banyuwangi</dd>
                     <dd>Provinsi : Jawa Timur</dd>
                     <dd>Jenjang : MTs</dd>
                    </dl>
                </div>

                <div class="col-5 d-flex justify-content-end">
                  <img src="{{ asset('backend/images/mts.jpeg') }}" alt="" style="width:50%">
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section courses-title" id="kegiatan">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Kegiatan</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
  
          <div class="owl-carousel col-12 nonloop-block-14">
  
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{ asset('backend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">  
                <h3><a href="#">Sholat Dhuha</a></h3>
                <p>Seluruh siswa-siswi, guru, dan staf MTs. Daruttarbiyah rutin melakukan sholat dhuha sebelum pembelajaran dimulai. </p>
              </div>
            </div>
  
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{ asset('backend/images/upacara.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="#">Upacara Memperingati Kemerdekaan</a></h3>
                <p>Upacara yang dilakukan setiap tanggal 17 agustus sebagai hari Kemerdekaan.</p>
              </div>
            </div>
  
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{ asset('backend/images/img_3.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="#">Lomba Kemerdekaan</a></h3>
                <p>Kegiatan yang dilakukan untuk memeriahkan hari Kemerdekaan. </p>
              </div>
            </div>
  
  
  
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{ asset('backend/images/img_4.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="#">Kerja Bakti</a></h3>
                <p>Bersama-sama membersihkan lingkungan sekolah, agar menciptakan suasana yang bersih dan nyaman. </p>
              </div>
            </div>
  
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{ asset('backend/images/img_5.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
    
                <h3><a href="#">PERJUSAMI</a></h3>
                <p>Kegiatan perkemahan yang dilakukan oleh siswa-siswi tingkat 2. </p>
              </div>
            </div>
  
          </div> 
        </div>

        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>

      </div>
    </div>


    <div class="site-section" id="ekstrakurikuler">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Ekstrakurikuler</h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam, illum sed veniam!</p> --}}
            <div class="col-lg-7 text-left">
            <ul>
              <li>Hadrah</li>
              <li>Volly Ball</li>
              <li>Pencak Silat</li>
              <li>Pramuka</li>
              <li>Musik</li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="kontak">
      <div class="container">
  
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title">Kontak</h2>
            
              <div class="col-lg-7 text-left">
                <i class="fa fa-whatsapp"> Whatsapp : 082123456789</i>
                <br>
                <i class="fa fa-instagram"> Instagram : MtsDaruttarbiyah</i>
                <br>
                <i class="fa fa-facebook"> Facebook : MtsDaruttarbiyah</i>
            </div>
          </div>
        </div>  
      </div>
    </div>
    
     
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Tentang</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consectetur ut hic ipsum et veritatis corrupti. Itaque eius soluta optio dolorum temporibus in, atque, quos fugit sunt sit quaerat dicta.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Link</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Tentang Sekolah</a></li>
              <li><a href="#">Kegiatan</a></li>
              <li><a href="#">Ekstrakurikuler</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>
          </div>

          <!-- <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p>
            <form action="#" class="footer-subscribe">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div> -->

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | MTs DARUTTARBIYAH</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="{{ asset('backend/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('backend/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('backend/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('backend/js/popper.min.js') }}"></script>
  <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('backend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('backend/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('backend/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('backend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('backend/js/aos.js') }}"></script>
  <script src="{{ asset('backend/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('backend/js/jquery.sticky.js') }}"></script>

  
  <script src="{{ asset("backend/js/main.js") }}"></script>
    
>>>>>>> 773351a6dde0bd4fbbfd938d1af4aa21dc478e1e
  </body>
</html>
