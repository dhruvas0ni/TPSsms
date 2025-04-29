<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TPS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Sweetalert 2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    body {
      background: linear-gradient(135deg, #0f0f0f, #1a1a1a, #000000);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.05); /* transparent glass */
      border-radius: 1.5rem;
      overflow: hidden;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .bg-image-side {
    background-image: url('{{ asset('images/a1.jpg') }}');
    background-size: 100% 100%; /* stretch fully without cropping */
    background-position: center center;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
}


    .logo-circle {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      background: none; /* no white background */
      margin-bottom: 15px;
    }

    .form-title {
      color: #ffffff;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.1);
      color: white;
      box-shadow: none;
      border-color: #ffffff;
    }

    label {
      color: #ccc;
    }

    a {
      color: #0dcaf0;
      text-decoration: none;
    }

    .btn-primary {
      background-color: #0dcaf0;
      border: none;
    }

    .btn-outline-light {
      border-color: #0dcaf0;
      color: #0dcaf0;
    }

    .btn-outline-light:hover {
      background-color: #0dcaf0;
      color: black;
    }
  </style>

</head>

<body>

  <!-- SweetAlert Messages -->
  @if (session('success'))
  <script>
    Swal.fire({
      icon: "success",
      title: "{{ session('success') }}",
      showConfirmButton: false,
      timer: 1500
    });
  </script>
  @endif

  @if (session('warning'))
  <script>
    Swal.fire({
      icon: "warning",
      title: "{{ session('warning') }}",
      showConfirmButton: true,
    });
  </script>
  @endif

  @if (session('error'))
  <script>
    Swal.fire({
      icon: "error",
      title: "{{ session('error') }}",
      showConfirmButton: true,
    });
  </script>
  @endif

  @if (session('info'))
  <script>
    Swal.fire({
      icon: "info",
      title: "{{ session('info') }}",
      showConfirmButton: true,
    });
  </script>
  @endif

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card login-card">
          <div class="row g-0">

            <!-- Image Side -->
            <div class="col-lg-6 d-none d-lg-block">
              <div class="bg-image-side h-100 w-100"></div>
            </div>

            <!-- Form Side -->
            <div class="col-lg-6 d-flex align-items-center">
              <div class="p-5 w-100">
                <div class="text-center">
                  <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="logo-circle">
                  <h3 class="form-title mb-4">Takshashila Public School</h3>
                </div>

                <form action="/" method="post">
                  @csrf

                  <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="Email address">
                    <label for="emailInput">Email address</label>
                    <x-form-error name="email" />
                  </div>

                  <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password">
                    <label for="passwordInput">Password</label>
                    <x-form-error name="password" />
                  </div>

                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    <button type="reset" class="btn btn-outline-light btn-lg">Reset</button>
                  </div>

                  <div class="mt-4 text-center">
                    <a href="/register">I don't have an account</a>
                  </div>

                </form>

              </div>
            </div>

          </div> <!-- End row -->
        </div> <!-- End card -->
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
