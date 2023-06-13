<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>MATCHPASS - Dashboard</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <script src="vendor/chart.js/Chart.min.js"></script>
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="awal.php">
                    <div class="sidebar-brand-text mx-3">MATCHPASS</div>
                </a>
                <!-- End Sidebar - Brand -->

                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="awal.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    Menu
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Grafik Penjualan</span>
                    </a>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Menu Chart</h6>
                            <a class="collapse-item" href="c_pertandingan.php">Chart Pertandingan</a>
                            <a class="collapse-item" href="c_metode.php">Chart Metode Pembayaran</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Utilities</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Menu Tabel</h6>
                            <a class="collapse-item" href="tabel_klub.php">Tabel Klub</a>
                            <a class="collapse-item" href="tabel_contact.php">Tabel Contact</a>
                            <a class="collapse-item" href="tabel_jadwal.php">Tabel Jadwal</a>
                        </div>
                    </div>
                </li>
                <!-- End Nav Item - Dashboard -->

                <hr class="sidebar-divider">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <div class="input-group" style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">
                            Welcome, Admin!
                        </div>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Keluar
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Dashboard -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-3">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        </div>

                        <!-- Content -->
                        <div class="row">
                            <!-- Total Pendapatan -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Total Pendapatan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php  
                                                        include('koneksi.php');
                                                        $sql = "SELECT SUM(harga) as total_pendapatan from tb_pemesanan";
                                                        $query = mysqli_query($koneksi,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo "IDR ".number_format($row2['total_pendapatan'],0,".",",");
                                                        }
                                                    ?>  
                                                    </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Jumlah Transaksi -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Total Jumlah Transaksi</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    include ('koneksi.php');
                                                    $sql = "SELECT COUNT(id_pesan) as jumlah_transaksi from tb_pemesanan";
                                                    $query = mysqli_query($koneksi,$sql);
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo number_format($row2['jumlah_transaksi'],0,".",",");
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-exchange-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Area Chart -->
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Line Chart -->
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Chart Pendapatan perTanggal</h6>
                                            </div>
                                            <div class="card-body">
                                                <?php
                                                    include('koneksi.php');
                                                    $pesan = mysqli_query($koneksi,"SELECT DISTINCT(tanggal) FROM tb_pemesanan");
                                                    while($row = mysqli_fetch_array($pesan)){
                                                        $tanggal[] = $row['tanggal'];
                                                        $query = mysqli_query($koneksi,"SELECT SUM(harga) AS total FROM tb_pemesanan WHERE tanggal='".$row['tanggal']."'");
                                                        $row = $query->fetch_array();
                                                        $tot_pem[] = $row['total'];
                                                    }
                                                ?>
                                                <div>
                                                    <canvas id="myAreaChart1"></canvas>
                                                    <script>
                                                        var ctx1 = document.getElementById("myAreaChart1");
                                                        var myChart1 = new Chart(ctx1, {
                                                            type: 'line',
                                                            data: {
                                                                labels: <?php echo json_encode($tanggal); ?>,
                                                                datasets: [{
                                                                    label: "Pembelian",
                                                                    lineTension: 0.3,
                                                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                                                    borderColor: "rgba(78, 115, 223, 1)",
                                                                    pointRadius: 3,
                                                                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                                                    pointBorderColor: "rgba(78, 115, 223, 1)",
                                                                    pointHoverRadius: 3,
                                                                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                                                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                                                    pointHitRadius: 10,
                                                                    pointBorderWidth: 2,
                                                                    data: <?php echo json_encode($tot_pem); ?>,
                                                                }],
                                                            },
                                                            options: {
                                                                scales: {
                                                                    yAxes: [{
                                                                        ticks: {
                                                                            beginAtZero: true,
                                                                            callback: function (value, index, values) {
                                                                                return 'Rp ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                                                                            }
                                                                        }
                                                                    }]
                                                                },
                                                                tooltips: {
                                                                    callbacks: {
                                                                        label: function (tooltipItem, data) {
                                                                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                                                            if (label) {
                                                                                label += ': ';
                                                                            }
                                                                            label += 'Rp ' + tooltipItem.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                                                                            return label;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Donut Chart -->
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Chart Transaksi perTanggal</h6>
                                            </div>
                                            <div class="card-body">
                                                <?php
                                                    include('koneksi.php');
                                                    $transaksi = mysqli_query($koneksi, "SELECT DISTINCT(tanggal) FROM tb_pemesanan");
                                                    while ($row = mysqli_fetch_array($transaksi)) {
                                                        $tanggal[] = $row['tanggal'];
                                                        $query = mysqli_query($koneksi, "SELECT COUNT(id_pesan) AS total FROM tb_pemesanan WHERE tanggal = '" . $row['tanggal'] . "'");
                                                        $row = $query->fetch_array();
                                                        $tot_tan[] = $row['total'];
                                                    }

                                                ?>
                                                    <canvas id="myAreaChart2"></canvas>
                                                    <script>
                                                        var ctx2 = document.getElementById("myAreaChart2").getContext('2d');
                                                        var myChart2 = new Chart(ctx2, {
                                                            type: 'doughnut',
                                                            data: {
                                                                labels: <?php echo json_encode($tanggal); ?>,
                                                                datasets: [{
                                                                    label: 'Total Transaksi perTanggal',
                                                                    data: <?php echo json_encode($tot_tan); ?>,
                                                                    backgroundColor: [
                                                                        'rgba(255, 99, 132, 0.2)',
                                                                        'rgba(54, 162, 235, 0.2)',
                                                                        'rgba(255, 206, 86, 0.2)',
                                                                        'rgba(75, 192, 192, 0.2)',
                                                                        'rgba(153, 102, 255, 0.2)',
                                                                        'rgba(255, 159, 64, 0.2)'
                                                                    ],
                                                                    borderColor: [
                                                                        'rgba(255, 99, 132, 1)',
                                                                        'rgba(54, 162, 235, 1)',
                                                                        'rgba(255, 206, 86, 1)',
                                                                        'rgba(75, 192, 192, 1)',
                                                                        'rgba(153, 102, 255, 1)',
                                                                        'rgba(255, 159, 64, 1)'
                                                                    ],
                                                                    borderWidth: 1
                                                                }]
                                                            },
                                                            options: {
                                                                scales: {
                                                                    yAxes: [{
                                                                        ticks: {
                                                                            beginAtZero: true
                                                                        }
                                                                    }]
                                                                }
                                                            }
                                                        });

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Page Content -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Ilham&Rayhan Website 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
                
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Silahkan klik "Keluar" jika Anda yakin.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <a class="btn btn-primary" href="login.html">Keluar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
        
        <script src="js/demo/chart-bar-demo.js"></script>
    </body>
</html>