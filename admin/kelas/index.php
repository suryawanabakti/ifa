  <!-- Content wrapper -->
  <?php include "../partials/header.php";
    $query = mysqli_query($koneksi, "SELECT * FROM kelas");
    ?>
  <div class="content-wrapper">
      <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4">
              <spa class="fw-bold">Dashboard
          </h4>
          <div class="row mb-5">
              <div class="col-lg-12 col-md-12 order-1">
                  <div class="row">
                      <div class="col-lg-6 col-md-12 col-6 mb-4">
                          <div class="card">
                              <div class="card-body">
                                  <div class="card-title d-flex align-items-start justify-content-between">
                                      <div class="avatar flex-shrink-0">
                                          <img src="../../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                                      </div>
                                      <div class="dropdown">
                                          <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="bx bx-dots-vertical-rounded"></i>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                              <a class="dropdown-item" href="/admin/guru">Lihat Data</a>

                                          </div>
                                      </div>
                                  </div>
                                  <span class="fw-semibold d-block mb-1">Total Guru</span>
                                  <h3 class="card-title mb-2">10</h3>

                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-12 col-6 mb-4">
                          <div class="card">
                              <div class="card-body">
                                  <div class="card-title d-flex align-items-start justify-content-between">
                                      <div class="avatar flex-shrink-0">
                                          <img src="../../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                                      </div>
                                      <div class="dropdown">
                                          <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="bx bx-dots-vertical-rounded"></i>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                              <a class="dropdown-item" href="/admin/siswa">Lihat Data</a>
                                          </div>
                                      </div>
                                  </div>
                                  <span class="fw-semibold d-block mb-1">Total Siswa</span>
                                  <h3 class="card-title mb-2">10</h3>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>


          </div>

      </div>
      <?php include "../partials/footer.php"; ?>