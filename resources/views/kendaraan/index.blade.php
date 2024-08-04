<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Dit Garage - Data Kendaraan</title>
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

                    <a href="{{ route('barang.index') }}" class="nav-item nav-link"><i class="fas fa-box me-2"></i>Barang</a>

                    <a href="{{ route('kendaraan.index') }}" class="nav-item nav-link active"><i class="fas fa-car me-2"></i>Kendaraan</a>

                    <a href="{{ route('keluhan.index') }}" class="nav-item nav-link"><i class="fas fa-exclamation-circle me-2"></i>Keluhan</a>

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
                    <input class="form-control border-0" type="search" name="search" placeholder="Search Kendaraan"aria-label="Search" value="{{ request()->query('search')}}">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/{{asset('dashmin-1.0.0')}}/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    
                                </div>
                            </a>
                            <hr cass="dropdown-divider">
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
                            <h6 class="mb-20">Daftar kendaraan</h6>
                            <a class="btn btn-success btn-sm ml-2" style="margin-top: 10px;" href="#" data-bs-toggle="modal" data-bs-target="#tambahKendaraanModal">Tambah Kendaraan</a>
                        </div>
            
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#sort-select').change(function() {
                                    $('#kendaraan-search-form').submit();
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
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Polisi</th>
                                    <th>No Mesin</th>
                                    <th>Merek</th>
                                    <th>Warna</th>
                                    <th width="280px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kendaraan as $index => $k)
                                    <tr>
                                        <td>{{ ($kendaraan->currentPage() - 1) * $kendaraan->perPage() + $loop->index + 1 }}</td>
                                        <td>{{ $k->no_polisi }}</td>
                                        <td>{{ $k->no_mesin }}</td>
                                        <td>{{ $k->merek == 'Lain' ? $k->lain_merek : $k->merek }}</td>
                                        <td>{{ $k->warna == 'Lain' ? $k->lain_warna : $k->warna }}</td>
                                        <td>
                                            <form action="{{ route('kendaraan.destroy', $k->no_polisi) }}" method="POST">
                                                <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#editKendaraanModal{{ $k->no_polisi }}"><i class="fas fa-user-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
            
                    
                        {!! $kendaraan->links() !!}
                    </div>
                </div>
            </div>

                    <!-- Tambah Kendaraan Modal -->
                        <div class="modal fade" id="tambahKendaraanModal" tabindex="-1" aria-labelledby="tambahKendaraanModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahKendaraanModalLabel">Tambah Kendaraan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('kendaraan.store') }}" method="POST" id="createForm">
                                            @csrf

                                            <div class="form-group">
                                                <label for="no_polisi">No Polisi:</label>
                                                <input type="text" id="no_polisi" name="no_polisi" class="form-control" placeholder="No Polisi">
                                            </div>

                                            <div class="form-group">
                                                <label for="no_mesin">No Mesin:</label>
                                                <input type="text" id="no_mesin" name="no_mesin" class="form-control" placeholder="No Mesin">
                                            </div>

                                            <div class="form-group">
                                                <label for="merek">Merek:</label>
                                                <select id="merek" name="merek" class="form-control">
                                                    <option value="Honda">Honda</option>
                                                    <option value="Yamaha">Yamaha</option>
                                                    <option value="Suzuki">Suzuki</option>
                                                    <option value="Kawasaki">Kawasaki</option>
                                                    <option value="Lain">Lain</option>
                                                </select>
                                            </div>

                                            <div class="form-group" id="lainMerek" style="display: none;">
                                                <label for="lain_merek">Masukkan Merek Lain:</label>
                                                <input type="text" id="lain_merek" name="lain_merek" class="form-control" placeholder="Masukkan Merek Lain">
                                            </div>

                                            <div class="form-group">
                                                <label for="warna">Warna:</label>
                                                <select id="warna" name="warna" class="form-control">
                                                    <option value="Putih">Putih</option>
                                                    <option value="Hitam">Hitam</option>
                                                    <option value="Hijau">Hijau</option>
                                                    <option value="Biru">Biru</option>
                                                    <option value="Merah">Merah</option>
                                                    <option value="Lain">Lain</option>
                                                </select>
                                            </div>

                                            <div class="form-group" id="lainWarna" style="display: none;">
                                                <label for="lain_warna">Masukkan Warna Lain:</label>
                                                <input type="text" id="lain_warna" name="lain_warna" class="form-control" placeholder="Masukkan Warna Lain">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tambah Kendaraan Modal -->
                       
                            <!-- Edit Kendaraan Modal -->
                            @foreach($kendaraan as $item)
                            <div class="modal fade" id="editKendaraanModal{{ $item->no_polisi }}" tabindex="-1" aria-labelledby="editKendaraanModalLabel{{ $item->no_polisi }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editKendaraanModalLabel{{ $item->no_polisi }}">Edit Kendaraan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('kendaraan.update', $item->no_polisi) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="no_polisi{{ $item->no_polisi }}">No Polisi:</label>
                                                    <input type="text" id="no_polisi{{ $item->no_polisi }}" name="no_polisi" class="form-control" value="{{ $item->no_polisi }}" placeholder="No Polisi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_mesin{{ $item->no_polisi }}">No Mesin:</label>
                                                    <input type="text" id="no_mesin{{ $item->no_polisi }}" name="no_mesin" class="form-control" value="{{ $item->no_mesin }}" placeholder="No Mesin">
                                                </div>
                                                <div class="form-group">
                                                    <label for="merek{{ $item->no_polisi }}">Merek:</label>
                                                    <select id="merek{{ $item->no_polisi }}" name="merek" class="form-control">
                                                        <option value="Honda" {{ $item->merek == 'Honda' ? 'selected' : '' }}>Honda</option>
                                                        <option value="Yamaha" {{ $item->merek == 'Yamaha' ? 'selected' : '' }}>Yamaha</option>
                                                        <option value="Suzuki" {{ $item->merek == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                                                        <option value="Kawasaki" {{ $item->merek == 'Kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                                                        <option value="Lain" {{ $item->merek == 'Lain' ? 'selected' : '' }}>Lain</option>
                                                    </select>
                                                </div>
                                                <div class="form-group lainMerek" id="lainMerek{{ $item->no_polisi }}" style="display: {{ $item->merek == 'Lain' ? 'block' : 'none' }};">
                                                    <label for="lain_merek{{ $item->no_polisi }}">Masukkan Merek Lain:</label>
                                                    <input type="text" id="lain_merek{{ $item->no_polisi }}" name="lain_merek" class="form-control" value="{{ $item->lain_merek }}" placeholder="Masukkan Merek Lain">
                                                </div>
                                                <div class="form-group">
                                                    <label for="warna{{ $item->no_polisi }}">Warna:</label>
                                                    <select id="warna{{ $item->no_polisi }}" name="warna" class="form-control">
                                                        <option value="Putih" {{ $item->warna == 'Putih' ? 'selected' : '' }}>Putih</option>
                                                        <option value="Hitam" {{ $item->warna == 'Hitam' ? 'selected' : '' }}>Hitam</option>
                                                        <option value="Hijau" {{ $item->warna == 'Hijau' ? 'selected' : '' }}>Hijau</option>
                                                        <option value="Biru" {{ $item->warna == 'Biru' ? 'selected' : '' }}>Biru</option>
                                                        <option value="Merah" {{ $item->warna == 'Merah' ? 'selected' : '' }}>Merah</option>
                                                        <option value="Lain" {{ $item->warna == 'Lain' ? 'selected' : '' }}>Lain</option>
                                                    </select>
                                                </div>
                                                <div class="form-group lainWarna" id="lainWarna{{ $item->no_polisi }}" style="display: {{ $item->warna == 'Lain' ? 'block' : 'none' }};">
                                                    <label for="lain_warna{{ $item->no_polisi }}">Masukkan Warna Lain:</label>
                                                    <input type="text" id="lain_warna{{ $item->no_polisi }}" name="lain_warna" class="form-control" value="{{ $item->lain_warna }}" placeholder="Masukkan Warna Lain">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $('#merek{{ $item->no_polisi }}').change(function() {
                                        if ($(this).val() === 'Lain') {
                                            $('#lainMerek{{ $item->no_polisi }}').show();
                                        } else {
                                            $('#lainMerek{{ $item->no_polisi }}').hide();
                                        }
                                    });

                                    $('#warna{{ $item->no_polisi }}').change(function() {
                                        if ($(this).val() === 'Lain') {
                                            $('#lainWarna{{ $item->no_polisi }}').show();
                                        } else {
                                            $('#lainWarna{{ $item->no_polisi }}').hide();
                                        }
                                    });
                                });
                            </script>
                            @endforeach
                            <!-- End Edit Kendaraan Modal -->
            
                       
                        
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#merek').change(function() {
                if ($(this).val() === 'Lain') {
                    $('#lainMerek').show();
                } else {
                    $('#lainMerek').hide();
                }
            });

            $('#warna').change(function() {
                if ($(this).val() === 'Lain') {
                    $('#lainWarna').show();
                } else {
                    $('#lainWarna').hide();
                }
            });

            

                                    <!-- Blank End -->


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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS (with Popper.js for Bootstrap 5) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
        <!-- Template Javascript -->
        <script src="{{asset('dashmin-1.0.0')}}/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#merek').change(function() {
                if ($(this).val() === 'Lain') {
                    $('#lainMerek').show();
                } else {
                    $('#lainMerek').hide();
                }
            });
    
            $('#warna').change(function() {
                if ($(this).val() === 'Lain') {
                    $('#lainWarna').show();
                } else {
                    $('#lainWarna').hide();
                }
            });
        });
    </script>
    
</body>

</html>
