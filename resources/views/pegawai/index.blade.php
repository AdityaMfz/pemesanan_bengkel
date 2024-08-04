<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Dit Garage - Data Pegawai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('dashmin-1.0.0')}}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('dashmin-1.0.0')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('dashmin-1.0.0')}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('dashmin-1.0.0')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('dashmin-1.0.0')}}/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa  me-2"></i>Dit Garage</h3>
                </a>
                
                <div class="navbar-nav w-100">
                    <a href="{{ route('admin.adminhome') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="{{ route('customer.index') }}" class="nav-item nav-link "><i class="fas fa-users me-2"></i>Customer</a>

                    <a href="{{ route('barang.index') }}" class="nav-item nav-link"><i class="fas fa-box me-2"></i>Barang</a>

                    <a href="{{ route('kendaraan.index') }}" class="nav-item nav-link"><i class="fas fa-car me-2"></i>Kendaraan</a>

                    <a href="{{ route('keluhan.index') }}" class="nav-item nav-link"><i class="fas fa-exclamation-circle me-2"></i>Keluhan</a>

                    <a href="{{ route('supplier.index') }}" class="nav-item nav-link"><i class="fas fa-parachute-box me-2"></i>Supplier</a>

                    <a href="{{ route('pegawai.index') }}" class="nav-item nav-link active"><i class="fas fa-praying-hands me-2"></i>Pegawai</a>

                    
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" name="search" placeholder="Search Pegawai"aria-label="Search" value="{{ request()->query('search')}}">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                                       
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('dashmin-1.0.0')}}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ route('logout') }}" class="dropdown-item" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <h6 class="mb-20">Daftar Pegawai</h6>
                            <a class="btn btn-success btn-sm ml-2" style="margin-top: 10px;" href="#" data-bs-toggle="modal" data-bs-target="#tambahPegawaiModal">Tambah Pegawai</a>
                        </div>
                        <div class="ml-auto">
                            <form id="pegawai-search-form" action="{{ route('pegawai.index') }}" method="GET" class="form-inline">
                                <select id="sort-select" class="form-control form-control-sm mr-2" name="sort">
                                    <option value="">Sortir Berdasarkan Status</option>    
                                <option value="aktif" {{ request()->query('sort') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="tidak_aktif" {{ request()->query('sort') == 'tidak_aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                </select>
                                <a href="{{ route('pegawai.index') }}" class="btn btn-outline-secondary btn-sm ml-2 mt-1">Reset</a>
                            </form>
                        </div>
                        
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#sort-select').change(function() {
                                    $('#pegawai-search-form').submit();
                                });
                            });
                        </script>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                    @endif
                    
                    <div class="table-responsive">
                        
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th width="280px">Aksi</th>
                            </tr>
                            @foreach ($pegawai as $index => $p)
                            <tr>
                                <td>{{ ($pegawai->currentPage() - 1) * $pegawai->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $p->nama_pegawai }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                <td>
                                    @switch($p->jabatan)
                                        @case('teknisi')
                                            Teknisi
                                            @break
                                        @case('admin')
                                            Admin
                                            @break
                                        @case('spv')
                                            Supervisor
                                            @break
                                        @default
                                            Unknown
                                    @endswitch
                                </td>
                                <td class="{{ $p->status == 'aktif' ? 'text-success' : 'text-danger' }}">
                                    {{ $p->status == 'aktif' ? 'Aktif' : 'Tidak Aktif' }}
                                </td>
                                <td>
                                    <form action="{{ route('pegawai.destroy', $p->id_pegawai) }}" method="POST">
                                        <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#editPegawaiModal{{ $p->id_pegawai }}"><i class="fas fa-user-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            
                            <!-- Edit Pegawai Modal -->
                            
                            <div class="modal fade" id="editPegawaiModal{{ $p->id_pegawai }}" tabindex="-1" aria-labelledby="editPegawaiModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editPegawaiModalLabel">Edit Pegawai</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('pegawai.update', $p->id_pegawai) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                
                                                <div class="form-group">
                                                    <label for="nama_pegawai">Nama Pegawai:</label>
                                                    <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" placeholder="Masukkan Nama Pegawai" value="{{ $p->nama_pegawai }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat:</label>
                                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" value="{{ $p->alamat }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                                        <option value="">Pilih Jenis Kelamin</option>
                                                        @foreach (App\Models\Pegawai::$jenisKelamin as $kelamin => $value)
                                                            <option value="{{ $kelamin }}" {{ $kelamin == $p->jenis_kelamin ? 'selected' : '' }}>{{ $value }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan">Jabatan:</label>
                                                    <select class="form-control" id="jabatan" name="jabatan" required>
                                                        <option value="">Pilih Jabatan</option>
                                                        @foreach (App\Models\Pegawai::$jabatan as $jabat => $value)
                                                            <option value="{{ $jabat }}" {{ $jabat == $p->jabatan ? 'selected' : '' }}>{{ $value }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status:</label>
                                                    <select class="form-control" id="status" name="status" required>
                                                        <option value="">Pilih Status</option>
                                                        @foreach (App\Models\Pegawai::$status as $stats => $value)
                                                            <option value="{{ $stats }}" {{ $stats == $p->status ? 'selected' : '' }}>{{ $value }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    @endforeach
            </table>
            {!! $pegawai->links() !!}
            
        </div>
    </div>
</div>
            <!-- Blank End -->
            <!-- Tambah Pegawai Modal -->
            <div class="modal fade" id="tambahPegawaiModal" tabindex="-1" aria-labelledby="tambahPegawaiModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahPegawaiModalLabel">Tambah Pegawai</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('pegawai.store') }}" method="POST">
                                @csrf
                            
                                <div class="form-group">
                                    <label for="nama_barang">Nama Pegawai:</label>
                                    <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" placeholder="Masukkan Nama Pegawai">
                                </div>
                                <div class="form-group">
                                    <label for="merek">Alamat:</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Jenis Kelamin:</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        @foreach (App\Models\Pegawai::$jenisKelamin as $kelamin => $value)
                                            <option value="{{ $kelamin }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan:</label>
                                    <select class="form-control" id="jabatan" name="jabatan" required>
                                        <option value="">Pilih Jabatan</option>
                                        @foreach (App\Models\Pegawai::$jabatan as $jabat => $value)
                                            <option value="{{ $jabat }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="satuan">Status:</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="">Pilih Status</option>
                                        @foreach (App\Models\Pegawai::$status as $stats => $value)
                                            <option value="{{ $stats }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Pegawai Modal -->
            


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('dashmin-1.0.0')}}/lib/chart/chart.min.js"></script>
    <script src="{{asset('dashmin-1.0.0')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('dashmin-1.0.0')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('dashmin-1.0.0')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('dashmin-1.0.0')}}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{asset('dashmin-1.0.0')}}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{asset('dashmin-1.0.0')}}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('dashmin-1.0.0')}}/js/main.js"></script>
</body>

</html>
