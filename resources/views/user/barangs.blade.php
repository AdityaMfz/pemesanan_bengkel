<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Headers · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap-5.0.2-examples')}}/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <style>
     
    
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /* Tambahkan padding ke konten utama agar tidak tertutup navbar */
      main {
        background-image: url('{{ asset('dashmin-1.0.0/img/kawasaki.jpg') }}');
    background-size: cover; /* Mengatur gambar agar menutupi seluruh area */
    background-repeat: no-repeat; /* Mengatur agar gambar tidak diulang */
    padding-top: 80px; /* Sesuaikan dengan tinggi navbar */
      }
      body {
        
      }
      .glass-card {
        color: #ffffff;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.18);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap-5.0.2-examples/headers/headers.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-5.0.2-examples/product/product.css') }}" rel="stylesheet">
  </head>
  <body >

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
          <title>Bootstrap</title>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
          <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
          <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
          <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
          <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
          <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
        </symbol>
        <symbol id="car" viewBox="0 0 16 16">
          <path d="M4 1C2.89 1 2 1.89 2 3v3H1v2h1l.447 3.574A2 2 0 0 0 4.405 14h7.19a2 2 0 0 0 1.958-1.426L15 8h1V6h-1V3c0-1.11-.89-2-2-2H4zm0 1h8c.55 0 1 .45 1 1v3H3V3c0-.55.45-1 1-1zm9 5h1v1h-1v-1zM2 7v1H1V7h1zm3 1h1v2H5V8zm6 0h1v2h-1V8zM4.5 12c-.83 0-1.5-.67-1.5-1.5S3.67 9 4.5 9 6 9.67 6 10.5 5.33 12 4.5 12zm7 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5S13 9.67 13 10.5s-.67 1.5-1.5 1.5z"/>
        </symbol>
        <symbol id="worker" viewBox="0 0 16 16">
          <path d="M8 1a3 3 0 0 0-3 3v2a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3zm-2 4V4a2 2 0 1 1 4 0v1a2 2 0 1 1-4 0zm6 7H4a2 2 0 0 0-2 2v1h12v-1a2 2 0 0 0-2-2zm-8 1v-.5a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1V13H4z"/>
        </symbol>
      </svg>

      <header class="fixed-top">
        <div class="px-3 py-2 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
              </a>
  
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
               
                <li>
                  <a href="{{ route('dashboard') }}" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                    Home
                  </a>
                </li>
                <li>
                  <a href="{{ route('userkeluhan') }}" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                    Keluhan
                  </a>
                </li>
                <li>
                  <a href="{{ route('userkendaraan') }}" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#car"/></svg>
                      Kendaraan
                    </a>
                </li>
                <li>
                  <a href="{{ route('userbarang') }}" class="nav-link text-secondary">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                    Products
                  </a>
                </li>
                <li>
                  <a href="{{ route('usercustomer') }}" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                    Customers
                  </a>
                </li>
                <li>
                  <a href="{{ route('usersupplier') }}" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                    Supplier
                  </a>
                </li>
                <!-- Dropdown menu for user profile and logout -->
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                      <img class="rounded-circle me-lg-2" src="{{ asset('dashmin-1.0.0/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
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
              </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
    

    <main>
      <div class="container my-5">
        <div class="row">
            @foreach ($barang as $index => $b)
                <div class="col-md-4 mb-4">
                    <div class="card glass-card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->nama_barang }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $b->merek }}</h6>
                            <p class="card-text">
                                Harga: Rp{{ number_format($b->harga, 0, ',', '.') }}<br>
                                Stok: {{ $b->stok }}<br>
                                Satuan: {{ $b->satuan }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {!! $barang->links() !!}
        </div>
    </div>
    </main>

    <script src="{{ asset('bootstrap-5.0.2-examples/assets/dist/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
