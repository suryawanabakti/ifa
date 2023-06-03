  <!-- Content wrapper -->
  <?php include "../partials/header.php";
    $query = mysqli_query($koneksi, "SELECT * FROM guru");
    ?>

  <div class="content-wrapper">
      <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data /</span> Guru</h4>

          <!-- Examples -->
          <div class="row mb-5">

              <div class="col-md-12 col-lg-12 mb-3">

                  <div class="card h-100">
                      <div class="card-body">
                          <h5 class="card-title">
                              <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Guru</button>

                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <form action="tambah-guru.php" method="POST">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                  <div class="row">
                                                      <div class="col-md-6 mb-3">
                                                          <label for="" class="form-label">NIP</label>
                                                          <input type="text" required class="form-control" name="nip">
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                          <label for="" class="form-label">Nama</label>
                                                          <input type="text" required class="form-control" name="nama_lengkap">
                                                      </div>
                                                  </div>

                                                  <div class="row">
                                                      <div class="mb-3 col-md-6">
                                                          <label for="" class="form-label">Tempat Lahir</label>
                                                          <input type="text" required class="form-control" name="tempat_lahir">
                                                      </div>
                                                      <div class="mb-3 col-md-6">
                                                          <label for="" class="form-label">Tanggal Lahir</label>
                                                          <input type="date" required class="form-control" name="tanggal_lahir">
                                                      </div>
                                                  </div>


                                                  <div class="mb-3">
                                                      <label for="" class="form-label">Agama</label>
                                                      <select name="agama" id="agama" class="form-control" required>
                                                          <option value="Islam">Islam</option>
                                                          <option value="Kristen">Kristen</option>
                                                          <option value="Katholik">Katholik</option>
                                                          <option value="Hindu">Hindu</option>
                                                          <option value="Budha">Budha</option>
                                                      </select>
                                                  </div>


                                                  <div class="mb-3">
                                                      <label for="" class="form-label">Alamat</label>
                                                      <input type="text" required class="form-control" name="alamat">
                                                  </div>

                                                  <div class="mb-3">
                                                      <label for="" class="form-label">Telepon</label>
                                                      <input type="text" required class="form-control" name="telepon">
                                                  </div>

                                                  <div class="mb-3">
                                                      <label for="" class="form-label">Pendidikan</label>
                                                      <select name="pendidikan" id="pendidikan" class="form-control" required>
                                                          <option value="SMA">SMA</option>
                                                          <option value="S1">S1</option>
                                                          <option value="S2">S2</option>
                                                          <option value="S3">S3</option>
                                                      </select>
                                                  </div>

                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </h5>
                          <div class="table-responsive">
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th>Nip</th>
                                          <th>Nama</th>
                                          <th>Telepon</th>
                                          <th>Pendidikan</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php while ($data = mysqli_fetch_array($query)) : ?>
                                          <tr>
                                              <td><?= $data['nip'] ?></td>
                                              <td><?= $data['nama_lengkap'] ?></td>
                                              <td><?= $data['telepon'] ?></td>
                                              <td><?= $data['pendidikan'] ?></td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                          <i class="bx bx-dots-vertical-rounded"></i>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item"><i class='bx bx-info-circle me-1'></i></i> Detail</a>
                                                          <a onclick="return confirm('Apakah anda yakin ?')" class="dropdown-item" href="delete-guru.php?id=<?= $data['id'] ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                                      </div>
                                              </td>
                                          </tr>
                                      <?php endwhile; ?>
                                  </tbody>
                              </table>
                              <br><br><br>
                          </div>
                      </div>
                  </div>
              </div>


          </div>

      </div>


      <!-- Content wrapper -->

      <?php include "../partials/footer.php"; ?>