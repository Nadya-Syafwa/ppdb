<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>PPDB</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="../index.php"></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="../index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>


















        
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="../assets/images/faces/face1.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">Rifki Ahmad</span>
                <span class="font-weight-normal">Admin</span>
              </div>
              <span class="badge badge-danger text-white ml-3 rounded">3</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Data Master</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="registrasi.php">Registrasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="input_gelombang.php">Input Gelombang</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pem" aria-expanded="false" aria-controls="pem">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Pendaftaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pem">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="daftar_baru.php">Daftar Baru</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="data_siswa.php">Data Siswa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="data_kaos.php">Data Kaos</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pe" aria-expanded="false" aria-controls="pe">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Pembayaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pe">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Transaksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Data Pembayaran</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <div class="border-none">
                  <p class="text-black">Notification</p>
                </div>
                <ul class="mt-4 pl-0">
                  <li>Sign Out</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>


      
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="../index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count count-varient1">7</span>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../images/faces/face2.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0">View all activities</p>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-sm-flex">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count count-varient2">5</span>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-success">Request</span>
                      <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-warning">Invoices</span>
                      <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-danger">Projects</span>
                      <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <h6 class="p-3 mb-0">See all activity</h6>
                </div>
              </li>
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-earth"></i> indonesia </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                </div>
              </li>
              
              
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Data Siswa </h3>
            <nav aria-label="breadcrumb">
            </nav>
          </div>
           


            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead style="background-color:yellow;">
                          <tr align="center">
                            <th> No Pendaftaran </th>
                            <th> Tanggal </th>
                            <th> Nama </th>
                            <th> Asal Sekolah </th>
                            <th> Jurusan </th>
                            <th> Action </th>

                          </tr>
                        </thead>
                        <?php
                        include ('../koneksi.php');
                        $query = "SELECT * FROM data_siswa ORDER BY id ASC";
                        $result = mysqli_query($koneksi, $query);
                        if (!$result) {
                          die("query error: " . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
                        }

                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          $edit_modal_id = "editModal" . $row['id']; // ID modal yang unik
                        ?>
                          <tbody style="background-color:white;">
                            <td style="text-align: center;"><?php echo $row['no_pendaftaran']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['nama_siswa']; ?></td>
                            <td><?php echo $row['asal_sekolah']; ?></td>
                            <td><?php echo $row['jurusan']; ?></td>
                            <td style="text-align: center;">
                              <button type="button" class="btn btn-warning mdi mdi-tooltip-edit" data-toggle="modal"  data-target="#<?php echo $edit_modal_id; ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWdJREFUSEvFlLlKRDEUhr9pLOwEcQoFwUJRcasVt9Z3EsX38QnGfXkDC/cFRRQLtXCpND+cyJ0xud7ccZg0uWSG7zv5c5IKLR6VFvNpRtABLAGdwDrwHiq2rKAL2AQmDXoJzAM3jZIyAsG3gAngHngFhux7CnjISlIF3cCGi2QcOAMWgQ+gZmurDr5SVtDjYtgGhg1wbrF8mnQMWAOWywiqFovgj8AzMAjcAm/2rXVJNP+MIhEJfggMAHfucGeBFxfPLjBiJL9+kXrIjfBp4BrIdpHgfv1Xp+btoNeq9JVn4XvAqMnmbA7e2ZhA8AOg32KJwbWuHURHSCDozn/AZQ0JrgyuWbdTmav/dXPVJaeugIW/KvdbCgm+7Mc+gwiu/lfmJ9ZFdbc1NSIvkFzwfXsKjt1d0IEWhsci8oJsYYLPAE+pz3teRJ51ZGeRDI/tILXI3P8XeSqaEhaJKFVQx2yLILXi9p7BNyiKUBlj03X8AAAAAElFTkSuQmCC"/></button>
                              <a title="hapus" class="btn btn-danger mdi mdi-delete" style="font-size: 20px;" href="proses/pros_hapus_siswa.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXFJREFUSEvF1c9KFmEUx/GP5iUkBoKWCXYLSaFegZvoBgSRtorgHdhKXISLQHDTJbj1L7gXxD+UFgiaeQlBzYFnYBjfsXGcl57dzDPP73vO75znTI8ur54u6ysDprGMVw3Bx1jAZn6+DLjEYEPx/Ng5XlYB/qSNptbdOV8W+m+ARWzgZ8owbHyPlZKdjTL4gE/4jrdJcA/PMZvV7HMB0gjwDNsYwwV6MYwTTOH6sYA4P5CJ7SRIPB9l0EnctmFRaDzFfgFwijdtAYrRRx1ihf9xqcKivPDxvlEN5jKL1vAt2RJCYdcIZrDeRg3m8QVXhTZ9h9W2alB3ejSyqK54rRr8yDwd6qAYBY22vEl7cTe2KqZuNMKLqmEX4/pjoR2LrLMEeZLERzsEcoil+8Z1Jzv6sZuijU7qSzc5sprAr/s8rDuWw5KYP3nUXzH+L/EA1wXEtwE5SNG+Ls2gyiQeAshv8G/En6/Weiiglmjxo64D/gLYDU4ZPubtFQAAAABJRU5ErkJggg=="/></a>&nbsp;
                            </td>
                          </tbody>

                          <!-- Modal -->
                          <!-- Modal -->
                        <div class="modal fade" id="<?php echo $edit_modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation" action="proses/pros_edit_baru.php" method="post">
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <label for="firstName">No Pendaftaran</label>
                                      <input type="text" class="form-control" name="no_pendaftaran" id="firstName" placeholder="" value="<?php echo $row['no_pendaftaran']; ?>" required="" readonly>
                                      <div class="invalid-feedback">
                                        Valid first name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Tanggal</label>
                                      <input type="text" class="form-control" name="tanggal" id="lastName" placeholder="" value="<?php echo $row['tanggal']; ?>" required="" readonly>
                                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Nama Siswa</label>
                                      <input type="text" class="form-control" name="nama_siswa" id="lastName" placeholder="" value="<?php echo $row['nama_siswa']; ?>" required="">
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Asal Sekolah</label>
                                      <input type="text" class="form-control" name="asal_sekolah" id="lastName" placeholder="" value="<?php echo $row['asal_sekolah']; ?>" required="">
                                      <div class="invalid-feedback">

                                      <div class="col-md-12 mb-3">
                                      <label for="country">Jurusan</label>
                                      <select class="custom-select d-block w-100" name="jurusan" id="country" required="">
                                        <option value="">Pilih...</option>
                                        <option <?php if ($row['jurusan'] == 'REKAYASA PERANGKAT LUNAK') echo 'selected'; ?>>REKAYASA PERANGKAT LUNAK</option>
                                        <option <?php if ($row['jurusan'] == 'AKUTANSI KEUANGAN DAN LEMBAGA') echo 'selected'; ?>>AKUTANSI KEUANGAN DAN LEMBAGA</option>
                                        <option <?php if ($row['jurusan'] == 'MANANJEMEN PERKANTORAN') echo 'selected'; ?>>MANANJEMEN PERKANTORAN</option>
                                        <option <?php if ($row['jurusan'] == 'DESAIN KOMUNIKASI VISUAL') echo 'selected'; ?>>DESAIN KOMUNIKASI VISUAL</option>
                                        <option <?php if ($row['jurusan'] == 'PEMASARAN') echo 'selected'; ?>>PEMASARAN</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                                      
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- Modal -->
  

                        <?php
                          $no++;
                        }
                        ?>



                      </table>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            
      
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">SMK MADYA DEPOK</span>
          </div>


          <!-- partial:../../partials/_footer.html -->

          <!-- FOOTER -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              
            </div>
          </footer>
          <!-- TUTUP FOOTER -->


          <!-- partial -->
        </div>
      </div>

      
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
  
</html>