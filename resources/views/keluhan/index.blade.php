<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Dit Garage - Data Keluhan</title>
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
                    <h3 class="text-primary"><i class=""></i>Dit Garage</h3>
                </a>
                
                <div class="navbar-nav w-100">
                    <a href="{{ route('admin.adminhome') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="{{ route('customer.index') }}" class="nav-item nav-link "><i class="fas fa-users me-2"></i>Customer</a>

                    <a href="{{ route('barang.index') }}" class="nav-item nav-link"><i class="fas fa-box me-2"></i>Barang</a>

                    <a href="{{ route('kendaraan.index') }}" class="nav-item nav-link"><i class="fas fa-car me-2"></i>Kendaraan</a>

                    <a href="{{ route('keluhan.index') }}" class="nav-item nav-link active"><i class="fas fa-exclamation-circle me-2"></i>Keluhan</a>

                    <a href="{{ route('supplier.index') }}" class="nav-item nav-link"><i class="fas fa-parachute-box me-2"></i>Supplier</a>

                    <a href="{{ route('pegawai.index') }}" class="nav-item nav-link"><i class="fas fa-praying-hands me-2"></i>Pegawai</a>

                    
                    
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
                    <input class="form-control border-0" type="search" name="search" placeholder="Search Keluhan"aria-label="Search" value="{{ request()->query('search')}}">
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
                            <h6 class="mb-20">Daftar Keluhan</h6>
                            <a class="btn btn-success btn-sm ml-2" style="margin-top: 10px;" href="#" data-bs-toggle="modal" data-bs-target="#tambahKeluhanModal">Tambah Keluhan</a>
                        </div>
                        

                        
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#sort-select').change(function() {
                                    $('#keluhan-search-form').submit();
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
                                <th>Nama Keluhan</th>
                                <th>Ongkos</th>
                                <th>No Polisi</th>
                                <th>Nama Customer</th>
                                <th>Nama Pegawai</th>
                               
                                <th width="280px">Aksi</th>   
                                
                            </tr>
                            @foreach ($keluhan as $index => $kh)
                            <tr>
                                <td>{{ ($keluhan->currentPage() - 1) * $keluhan->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $kh->nama_keluhan }}</td>
                                <td>{{ $kh->ongkos }}</td>
                                <td>{{ $kh->kendaraan->no_polisi }}</td>
                                <td>{{ $kh->customer->nama_customer }}</td>
                                <td>{{ $kh->pegawai->nama_pegawai }}</td>
                                
                                <td>
                                    <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#editKeluhanModal{{ $kh->id_keluhan }}"><i class="fas fa-user-edit"></i></a>
                            <form action="{{ route('keluhan.destroy', $kh->id_keluhan) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                                </td>   
                            </tr>
                            @endforeach


                            <!-- Edit Customer Modal -->
                            @foreach($keluhan as $keluhan)
                    <div class="modal fade" id="editKeluhanModal{{ $keluhan->id_keluhan }}" tabindex="-1" aria-labelledby="editKeluhanModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editKeluhanModalLabel">Edit keluhan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('keluhan.update', $keluhan->id_keluhan) }}">
                                        @csrf
                                        @method('PUT')
                
                                        <div class="form-group">
                                            <label for="nama_keluhan">Nama Keluhan:</label>
                                            <input type="text" class="form-control" id="nama_keluhan" name="nama_keluhan" value="{{ $keluhan->nama_keluhan }}" required>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="ongkos">Ongkos:</label>
                                            <textarea class="form-control" id="ongkos" name="ongkos" required>{{ $keluhan->ongkos }}</textarea>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="no_polisi">Pilih No. Polisi:</label>
                                            <select class="form-control" id="no_polisi" name="no_polisi" required>
                                                <option value="">Pilih No. Polisi</option>
                                                @foreach ($kendaraans as $kendar)
                                                    <option value="{{ $kendar->no_polisi }}" {{ $keluhan->no_polisi == $kendar->no_polisi ? 'selected' : '' }}>{{ $kendar->no_polisi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="id_customer">Pilih Customer:</label>
                                            <select class="form-control" id="id_customer" name="id_customer" required>
                                                <option value="">Pilih Customer</option>
                                                @foreach ($customers as $cus)
                                                    <option value="{{ $cus->id_customer }}" {{ $keluhan->id_customer == $cus->id_customer ? 'selected' : '' }}>{{ $cus->nama_customer }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="id_pegawai">Pilih Pegawai:</label>
                                            <select class="form-control" id="id_pegawai" name="id_pegawai" required>
                                                <option value="">Pilih Pegawai</option>
                                                @foreach ($pegawais as $peg)
                                                    <option value="{{ $peg->id_pegawai }}" {{ $keluhan->id_pegawai == $peg->id_pegawai ? 'selected' : '' }}>{{ $peg->nama_pegawai }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </table>
            
            <!-- Tambah Kendaraan Modal -->
            <div class="modal fade" id="tambahKeluhanModal" tabindex="-1" aria-labelledby="tambahKeluhanModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahKeluhanModalLabel">Tambah keluhan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-header">Tambah Daftar Keluhan</div>

                <div class="card-body">
                        <form method="POST" action="{{ route('keluhan.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nama_keluhan">Nama Keluhan:</label>
                                <input type="text" class="form-control" id="nama_keluhan" name="nama_keluhan" required>
                            </div>

                            <div class="form-group">
                                <label for="ongkos">Ongkos:</label>
                                <input type="text" class="form-control" id="ongkos" name="ongkos" required>
                            </div>

                            <div class="form-group">
                                <label for="no_polisi"> Pilih No. Polisi:</label>
                                <select class="form-control" id="no_polisi" name="no_polisi" required>
                                    <option value="">Pilih No. Polisi</option>
                                    @foreach ($kendaraans as $kendar)
                                        <option value="{{ $kendar->no_polisi }}">{{ $kendar->no_polisi }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_barang">Pilih Customer:</label>
                                <select class="form-control" id="id_customer" name="id_customer" required>
                                    <option value="">Pilih Customer</option>
                                    @foreach ($customers as $cus)
                                        <option value="{{ $cus->id_customer }}">{{ $cus->nama_customer }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_barang">Pilih Pegawai:</label>
                                <select class="form-control" id="id_pegawai" name="id_pegawai" required>
                                    <option value="">Pilih Pegawai</option>
                                    @foreach ($pegawais as $peg)
                                        <option value="{{ $peg->id_pegawai }}">{{ $peg->nama_pegawai }}</option>
                                    @endforeach
                                </select>
                            </div>



                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tambah Kendaraan Modal -->
        

            
        </div>
    </div>
        
</div>
    
    
                        <div class="container-fluid pt-4 px-4">
                            <div class="bg-light rounded-top p-4">
                                <div class="row">
                                    <div class="col-12 col-sm-6 text-center text-sm-start">
                                        &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                                    </div>
                                    <div class="col-12 col-sm-6 text-center text-sm-end">
                                       
                                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

            <!-- Footer Start -->
           
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

