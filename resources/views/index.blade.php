<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bank Sampah - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ISHAMASHI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('data-harga-sampah.index') }}">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Harga Sampah</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('riwayat-transaksi-nasabah.index') }}">
                    <i class="fas fa-fw fa-history"></i>
                    <span>Riwayat Transaksi</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h1 class="h3 mb-0 text-gray-800">SISTEM INFORMASI BANK SAMPAH</h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h2 mb-0 ">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <!-- Konten halaman index di sini -->
                            <h2>Selamat datang di Sistem Informasi Bank Sampah</h2>
                            <p>Selamat datang di aplikasi pengelelolaan Bank Sampah, solusi terbaik untuk membantu Anda mengelola bank sampah dengan lebih efisien dan berdaya guna. Bersama-sama, mari kita tingkatkan kesadaran akan pentingnya daur ulang dan pelestarian lingkungan melalui langkah-langkah sederhana namun berdampak besar. Dengan aplikasi ini, kami menyediakan alat yang Anda butuhkan untuk menjadikan Bank Sampah Anda sebagai kekuatan positif dalam menjaga kebersihan dan kelestarian bumi</p>
                            <section>
                                <h2>Mengapa Memilih Aplikasi Pengelelolaan Bank Sampah Kami?</h2>
                                <ul>
                                    <li>Kemudahan Pengelolaan
                                        <ul>
                                            <li>Pantau dan kelola inventaris sampah dengan mudah.</li>
                                            <li>Catat setiap transaksi pengumpulan dan penukaran sampah secara rapi dan terstruktur.</li>
                                            <li>Tambahkan dan kelola data anggota bank sampah dengan cepat.</li>
                                        </ul>
                                    </li>
                                    <li>Laporan dan Analitik
                                        <ul>
                                            <li>Akses laporan lengkap tentang jumlah sampah yang berhasil didaur ulang.</li>
                                            <li>Analisis statistik yang membantu Anda melacak perkembangan kinerja bank sampah Anda.</li>
                                        </ul>
                                    </li>
                                    <li>Notifikasi dan Pengingat
                                        <ul>
                                            <li>Dapatkan notifikasi real-time tentang perkembangan terbaru dalam bank sampah Anda.</li>
                                            <li>Jadwalkan pengingat rutin untuk kegiatan dan acara penting.</li>
                                        </ul>
                                    </li>
                                    <li>Penghargaan untuk Kontribusi Positif
                                        <ul>
                                            <li>Kami menghargai upaya Anda dalam menjaga kebersihan lingkungan. Nikmati sistem penghargaan untuk
                                                anggota bank sampah yang berprestasi.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </section>
    
                            <section>
                                <h2>Mulai Perubahan Positif Hari Ini</h2>
                                <p>Kami percaya bahwa setiap langkah kecil menuju perubahan positif sangat berarti. Dengan aplikasi pengelelolaan
                                    Bank Sampah kami, Anda bisa melakukan perubahan besar untuk masa depan yang lebih baik. Mari bersama-sama
                                    menjadi agen perubahan dalam pelestarian lingkungan, satu langkah daur ulang dan pengelelolaan sampah sekaligus.
                                </p>
                            </section>
    
                            <section>
                                <h2>Bergabunglah dengan Kami dalam Membangun Masa Depan yang Lebih Berkelanjutan!</h2>
                                <p>Saatnya beraksi untuk masa depan yang lebih baik. Bergabunglah dengan ribuan pengguna lainnya yang telah
                                    membuktikan bahwa setiap langkah menuju keberlanjutan sangat berarti. Jadilah bagian dari gerakan perubahan dan
                                    mulai mengelola bank sampah Anda dengan lebih efisien dan berdampak. Bersama-sama, kita bisa menciptakan
                                    lingkungan yang lebih bersih, lebih hijau, dan lebih berkelanjutan.</p>
                            </section>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ICHO ISHAAMSHHI 2023</span>
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


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>

</html>