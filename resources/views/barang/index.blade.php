<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Dit Garage - Data Barang</title>
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
                    <h3 class="text-primary"><i class="fa me-2"></i>Dit Garage</h3>
                </a>
                
                <div class="navbar-nav w-100">
                    <a href="{{ route('admin.adminhome') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="{{ route('customer.index') }}" class="nav-item nav-link "><i class="fas fa-users me-2"></i>Customer</a>

                    <a href="{{ route('barang.index') }}" class="nav-item nav-link active"><i class="fas fa-box me-2"></i>Barang</a>

                    <a href="{{ route('kendaraan.index') }}" class="nav-item nav-link"><i class="fas fa-car me-2"></i>Kendaraan</a>

                    <a href="{{ route('keluhan.index') }}" class="nav-item nav-link "><i class="fas fa-exclamation-circle me-2"></i>Keluhan</a>

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
                    <input class="form-control border-0" type="search" name="search" placeholder="Search Barang"aria-label="Search" value="{{ request()->query('search')}}">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/{{asset('dashmin-1.0.0')}}/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset('dashmin-1.0.0')}}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset('dashmin-1.0.0')}}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('dashmin-1.0.0')}}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                        
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">           
                            <h6 class="mb-0 fst-italic">Data Barang</h6>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-warning btn-lg ml-2" style="margin-top: 10px;" href="#" data-bs-toggle="modal" data-bs-target="#tambahBarangModal">
                                    <i class="fas fa-plus-circle" style="color: #ffffff;"></i>
                                </a>
                            </div>
                            
                    </div>

                        
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#sort-select').change(function() {
                                    $('#barang-search-form').submit();
                                });
                            });
                        </script>
                
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                    @endif

                    <div class="table-responsive">
                        
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Merek</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Satuan</th>
                                <th width="280px">Aksi</th>
                            </tr>
                        @foreach ($barang as $index => $b)
                            <tr>
                                <td>{{ ($barang->currentPage() - 1) * $barang->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $b->nama_barang }}</td>
                                <td>{{ $b->merek }}</td>
                                <td>{{ $b->harga }}</td>
                                <td>{{ $b->stok }}</td>
                                <td>{{ $b->satuan }}</td>
                                <td>
                                    <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#editBarangModal{{ $b->id_barang }}"><i class="fas fa-user-edit"></i></a>
                                    <form action="{{ route('barang.destroy', $b->id_barang) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            
                            <!-- Edit Barang Modal -->
                            <div class="modal fade" id="editBarangModal{{ $b->id_barang }}" tabindex="-1" aria-labelledby="editBarangModalLabel{{ $b->id_barang }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editBarangModalLabel{{ $b->id_barang }}">Edit Barang</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('barang.update', $b->id_barang) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label  for="nama_barang" class="form-label">Nama Barang:</label>
                                                    <input type="text" name="nama_barang" value="{{ $b->nama_barang }}" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="merek" class="form-label">Merek:</label>
                                                    <input type="text" name="merek" value="{{ $b->merek }}" class="form-control" id="merek" placeholder="Masukkan Merek">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="harga" class="form-label">Harga:</label>
                                                    <input type="number" name="harga" value="{{ $b->harga }}" class="form-control" id="harga" placeholder="Masukkan Harga">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="stok" class="form-label">Stok:</label>
                                                    <input type="number" name="stok" value="{{ $b->stok }}" class="form-control" id="stok" placeholder="Masukkan Stok">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="satuan" class="form-label">Satuan:</label>
                                                    <select name="satuan" class="form-control" id="satuan">
                                                        <option value="buah" {{ $b->satuan == 'buah' ? 'selected' : '' }}>Buah</option>
                                                        <option value="botol" {{ $b->satuan == 'botol' ? 'selected' : '' }}>Botol</option>
                                                        <option value="tube" {{ $b->satuan == 'tube' ? 'selected' : '' }}>Tube</option>
                                                        <option value="lembar" {{ $b->satuan == 'lembar' ? 'selected' : '' }}>Lembar</option>
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
                         {!! $barang->links() !!}
                        
                    </div>
                </div>
            </div>  
            </div>
            <!-- Tambah Barang Modal -->
            <div class="modal fade" id="tambahBarangModal" tabindex="-1" aria-labelledby="tambahBarangModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahBarangModalLabel">Tambah Barang</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('barang.store') }}" method="POST">
                                @csrf
                            
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang:</label>
                                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang">
                                </div>
                                <div class="form-group">
                                    <label for="merek">Merek:</label>
                                    <input type="text" name="merek" class="form-control" id="merek" placeholder="Masukkan Merek">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga:</label>
                                    <input type="number" name="harga" class="form-control" id="harga" placeholder="Masukkan Harga">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok:</label>
                                    <input type="number" name="stok" class="form-control" id="stok" placeholder="Masukkan Stok">
                                </div>
                                <div class="form-group">
                                    <label for="satuan">Satuan:</label>
                                    <select name="satuan" class="form-control" id="satuan">
                                        <option value="buah">Buah</option>
                                        <option value="botol">Botol</option>
                                        <option value="tube">Tube</option>
                                        <option value="lembar">Lembar</option>
                                        <option value="set">set</option>
                                    </select>
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         <!-- Footer Start -->
         
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

