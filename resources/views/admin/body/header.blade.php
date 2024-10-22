<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
<<<<<<< HEAD
      <span class="d-none d-lg-block">Bioskop</span>
=======
      <span class="d-none d-lg-block">MTs Darut Tarbiyah</span>
>>>>>>> 773351a6dde0bd4fbbfd938d1af4aa21dc478e1e
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->


      <!-- PROFILE KIRI ATAS -->
      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="{{ asset('backendo/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
<<<<<<< HEAD
          <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
=======
          <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
>>>>>>> 773351a6dde0bd4fbbfd938d1af4aa21dc478e1e
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
<<<<<<< HEAD
            <h6>Admin</h6>
            <span>Bioskop</span>
=======
            <h6>{{ Auth::user()->name }}</h6>
            <span>Mts.Daruttarbiyah</span>
>>>>>>> 773351a6dde0bd4fbbfd938d1af4aa21dc478e1e
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{route('admin.logout')}}">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header>