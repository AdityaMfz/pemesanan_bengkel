<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dit Garage - Trusted and Quality Auto Repair Shop Since 1998">
    <meta name="author" content="Dit Garage">
    <title>Dit Garage - Trusted Auto Repair Shop Since 1998</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap-5.0.2-examples')}}/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
     .btn-orange {
        background-color: #000000; /* Warna oranye */
        color: white; /* Warna teks putih */
        border-color: #ffffff; /* Warna border oranye */
        }

        .btn-orange:hover {
            background-color: #ffffff; /* Warna oranye lebih gelap saat hover */
            border-color: #ffffff; /* Warna border oranye lebih gelap saat hover */
        }   
    .bg-dark {
      background-image: url('{{ asset('dashmin-1.0.0/img/mobil.jpg') }}');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .perkakas {
      background-image: url('{{ asset('dashmin-1.0.0/img/perkakas.jpg') }}');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .btn-outline-warning {
    color: black;
    border-color: black;
  }

  .btn-outline-warning:hover {
    color: white;
    background-color: black;
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
    </style>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{('bootstrap-5.0.2-examples')}}/blog/blog.css" rel="stylesheet">
   
  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      </div>
      <div class="col-4 text-center">
        <h1 class="display-4 fst-italic">Dit Garage</h1>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">
          {{ __('Register') }}
      </button>
        <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
      </div>
    </div>
  </header>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Welcome to Dit Garage</h1>
      <p class="lead my-3">Trusted and quality auto repair shop since 1998.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Learn more about us</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Our Services</strong>
          <h3 class="mb-0">Quality Auto Repairs</h3>
          <div class="mb-1 text-muted">Since 1998</div>
          <p class="card-text mb-auto">Offering a wide range of auto repair services to keep your vehicle running smoothly.</p>
          <a href="#" class="stretched-link">Discover our services</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="{{ asset('dashmin-1.0.0/img/jimi.jpg') }}" width="200" height="250" alt="User Thumbnail" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">About Us</strong>
          <h3 class="mb-0">Our Story</h3>
          <div class="mb-1 text-muted">Since 1998</div>
          <p class="mb-auto">Learn more about our history and commitment to quality service.</p>
          <a href="#" class="stretched-link">Read more</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="{{ asset('dashmin-1.0.0/img/adit.jpg') }}" width="200" height="250" alt="User Thumbnail" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title">Welcome to Dit Garage</h2>
        <p class="blog-post-meta">July 16, 2024 by <a href="#">Admin</a></p>

        <p>Welcome to Dit Garage, your trusted auto repair shop since 1998. We offer a wide range of services to keep your vehicle in top condition, from routine maintenance to major repairs.</p>
        <hr>
        <p>At Dit Garage, we pride ourselves on providing top-notch service and quality repairs. Our team of experienced technicians is dedicated to ensuring your vehicle runs smoothly and safely.</p>
        <h2>Our Commitment</h2>
        <p>We are committed to delivering the highest quality service and ensuring customer satisfaction. Our state-of-the-art facilities and experienced staff are here to meet all your auto repair needs.</p>
        <blockquote class="blockquote">
          <p>"Quality is never an accident; it is always the result of high intention, sincere effort, intelligent direction, and skillful execution." - William A. Foster</p>
        </blockquote>
        <p>We believe in building lasting relationships with our customers and providing reliable, honest service. Thank you for choosing Dit Garage.</p>
        <h3>Our Services</h3>
        <p>We offer a wide range of services including:</p>
        <ul>
          <li>Oil changes and routine maintenance</li>
          <li>Brake repairs and replacements</li>
          <li>Engine diagnostics and repairs</li>
          <li>Transmission services</li>
          <li>And much more...</li>
        </ul>
        <p>Visit our services page to learn more about what we offer and how we can help you keep your vehicle in top condition.</p>
        <p>Thank you for visiting our website. We look forward to serving you!</p>
      </article>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About Us</h4>
          <p class="mb-0">Dit Garage is a trusted auto repair shop serving the community since 1998. We are committed to providing quality service and customer satisfaction.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Follow Us</h4>
          <ol class="list-unstyled">
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>


</main>

<footer class="blog-footer">
  <p>&copy; 2024 Dit Garage. All rights reserved.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
  </body>
   <!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content perkakas text-white">
            <div class="modal-header border-0">
                <h5 class="display-4 fst-italic" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input type="email" id="email" class="form-control bg-secondary text-white" name="email" :value="old('email')" required autofocus autocomplete="username">
                        <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input type="password" id="password" class="form-control bg-secondary text-white" name="password" required autocomplete="current-password">
                        <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check mb-3">
                        <input type="checkbox" id="remember_me" class="form-check-input bg-secondary text-white" name="remember">
                        <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                    </div>

                    <div class="d-flex justify-content-between">
                        @if (Route::has('password.request'))
                            <a class="text-decoration-none text-white" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <button type="submit" class="btn btn-orange">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content perkakas text-white">
          <div class="modal-header border-0">
              <h5 class="display-4 fst-italic" id="registerModalLabel">Register</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{ route('register') }}">
                  @csrf

                  <!-- Name -->
                  <div class="mb-3">
                      <label for="name" class="form-label">{{ __('Name') }}</label>
                      <input type="text" id="name" class="form-control bg-secondary text-white" name="name" :value="old('name')" required autofocus autocomplete="name">
                      <div class="text-danger mt-2">{{ $errors->first('name') }}</div>
                  </div>

                  <!-- Email Address -->
                  <div class="mb-3">
                      <label for="email" class="form-label">{{ __('Email') }}</label>
                      <input type="email" id="email" class="form-control bg-secondary text-white" name="email" :value="old('email')" required autocomplete="username">
                      <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                  </div>

                  <!-- Password -->
                  <div class="mb-3">
                      <label for="password" class="form-label">{{ __('Password') }}</label>
                      <input type="password" id="password" class="form-control bg-secondary text-white" name="password" required autocomplete="new-password">
                      <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                  </div>

                  <!-- Confirm Password -->
                  <div class="mb-3">
                      <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                      <input type="password" id="password_confirmation" class="form-control bg-secondary text-white" name="password_confirmation" required autocomplete="new-password">
                      <div class="text-danger mt-2">{{ $errors->first('password_confirmation') }}</div>
                  </div>

                  <div class="d-flex justify-content-between">
                      

                      <button type="submit" class="btn btn-orange">
                          {{ __('Register') }}
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
