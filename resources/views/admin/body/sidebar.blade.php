<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Dashboard -->
    {{-- <li class="nav-item">
      <a class="nav-link " href="">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav --> --}}

    <!-- PRESENSI -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('absen.view') }}">
        <i class="bi bi-calendar-check"></i>
        <span>Data Presensi</span>
      </a>
    </li><!-- End PRESENSI -->

    <!-- REKAP -->
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('rekap.view') }}">
        <i class="bi bi-journal-text"></i>
        <span>Data Rekap</span>
      </a>
    </li><!-- End REKAP --> --}}

     <!-- JABATAN -->
     <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('jabatan.view') }}">
        <i class="bi bi-sliders"></i>
        <span>Data Jabatan</span>
      </a>
    </li><!-- End JABATAN -->

     <!-- GURU -->
     <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('guru.view') }}">
        <i class="bi bi-person"></i>
        <span>Data Guru</span>
      </a>
    </li><!-- End Guru -->

    <!-- SISWA -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('siswa.view') }}">
        <i class="bi bi-people-fill"></i>
        <span>Data Siswa</span>
      </a>
    </li><!-- End SISWA -->

    <!-- Kelas -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('kelas.view') }}">
        <i class="bi bi-building"></i>
        <span>Data Kelas</span>
      </a>
    </li>
    <!-- End Kelas -->

    <!-- KELAS -->
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-building"></i><span>Kelas</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="forms-elements.html">
            <i class="bi bi-circle"></i><span>Kelas 7</span>
          </a>
        </li>
        <li>
          <a href="forms-layouts.html">
            <i class="bi bi-circle"></i><span>Kelas 8</span>
          </a>
        </li>
        <li>
          <a href="forms-editors.html">
            <i class="bi bi-circle"></i><span>Kelas 9</span>
          </a>
        </li>
      </ul>
    </li><!-- End KELAS --> --}}

    {{-- <li class="nav-heading">Pages</li> --}}

    <!-- Profile -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('user.profile') }}">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li>
    <!-- End Profile Page Nav -->

  </ul>

</aside><!-- End Sidebar-->

<!-- DASHBOARD PAGE -->
{{-- <main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
        <li class="breadcrumb-item active">Data guru, siswa, dan kelas</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- GURU -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <!-- Data Guru -->
              <div class="card-body">
                <h5 class="card-title">Guru <span>/orang</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>15</h6>
                    <span class="text-muted small pt-2 ps-1">Wali Kelas  : 3</span> 
                    <br>
                    <span class="text-muted small pt-2 ps-1">Guru Mapel  : 10</span>
                    <br>
                    <span class="text-muted small pt-2 ps-1">Petugas TU  : 2</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End GURU -->

          <!-- SISWA -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              
              <!-- Data Siswa -->
              <div class="card-body">
                <h5 class="card-title">Siswa <span>/orang</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>80</h6>
                    <span class="text-muted small pt-2 ps-1">Kelas 7   : 25</span> 
                    <br>
                    <span class="text-muted small pt-2 ps-1">Kelas 8   : 25</span>
                    <br>
                    <span class="text-muted small pt-2 ps-1">Kelas 9   : 29</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End SISWA -->

           <!-- KELAS -->
           <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              
              <!-- Data Kelas -->
              <div class="card-body">
                <h5 class="card-title">Kelas <span>/ruangan</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-book"></i>     
                  </div>
                  <div class="ps-3">
                    <h6>3</h6>
                    <span class="text-muted small pt-2 ps-1">Kelas 7   : 1</span> 
                    <br>
                    <span class="text-muted small pt-2 ps-1">Kelas 8   : 1</span>
                    <br>
                    <span class="text-muted small pt-2 ps-1">Kelas 9  : 1</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End KELAS -->

          <!-- Reports Siswa -->
          <div class="col-12">
            <div class="card">

              <div class="card-body">
                <h5 class="card-title">Reports <span>/siswa</span></h5>

                <!-- Line Chart -->
                <div id="reportsChart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                      series: [{
                        name: 'Kelas 7',
                        data: [29,25,25],
                      }, {
                        name: 'Kelas 8',
                        data: [28,25,25]
                      }, {
                        name: 'Kelas 9',
                        data: [30,30,29]
                      }],
                      chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                          show: false
                        },
                      },
                      markers: {
                        size: 4
                      },
                      colors: ['#4154f1', '#2eca6a', '#ff771d'],
                      fill: {
                        type: "gradient",
                        gradient: {
                          shadeIntensity: 1,
                          opacityFrom: 0.3,
                          opacityTo: 0.4,
                          stops: [0, 90, 100]
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      stroke: {
                        curve: 'smooth',
                        width: 2
                      },
                      xaxis: {
                        type: 'years',
                        categories: ["2020", "2021", "2022"]
                      },
                      tooltip: {
                        x: {
                          format: 'dd/MM/yy HH:mm'
                        },
                      }
                    }).render();
                  });
                </script>
                <!-- End Line Chart -->

              </div>

            </div>
          </div><!-- End Reports -->


        </div>
      </div><!-- End Left side columns -->

    </div>
  </section>

</main><!-- End #main --> --}}

