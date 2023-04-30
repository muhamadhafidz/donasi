<!-- ? Preloader Start -->
<div id="preloader-active">
  <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
              <img src="{{ asset('storage/'.$data->logo_pic) }}" alt="">
          </div>
      </div>
  </div>
</div>
<!-- Preloader Start -->
<header>
  <!-- Header Start -->
  <div class="header-area">
      <div class="main-header ">
          <div class="header-bottom  header-sticky">
              <div class="container-fluid">
                  <div class="row align-items-center">
                      <!-- Logo -->
                      <div class="col-xl-2 col-lg-2">
                          <div class="logo">
                              <a href="index.html"><img src="{{ asset('storage/'.$data->logo_pic) }}" alt="" height="80px"></a>
                          </div>
                      </div>
                      <div class="col-xl-10 col-lg-10">
                          <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                              <!-- Main-menu -->
                              <div class="main-menu d-none d-lg-block">
                                  <nav>
                                      <ul id="navigation">                                                                                          
                                          <li><a href="/">Beranda</a></li>
                                          <li><a href="{{ route('home.profil') }}">Profil Yayasan</a></li>
                                          <li><a href="{{ route('home.struktur') }}">Struktur Organisasi</a></li>
                                          {{-- <li><a href="events.html">Kegiatan</a></li>
                                          <li><a href="contact.html">Kontak</a></li> --}}
                                      </ul>
                                  </nav>
                              </div>
                              <!-- Header-btn -->
                              <div class="header-right-btn d-none d-lg-block ml-20">
                                  <a href="{{ route('home.donasi') }}" class="btn header-btn">Donasi</a>
                              </div>
                          </div>
                      </div> 
                      <!-- Mobile Menu -->
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Header End -->
</header>
<!-- header end -->