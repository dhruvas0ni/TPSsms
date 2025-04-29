<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TPS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
  body {
    background: linear-gradient(135deg, #0f0f0f, #1a1a1a, #000000);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
  }

  .card-registration {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 1.5rem;
    overflow: hidden;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.6);
    width: 100%; /* Set width to 100% initially */
    max-width: 900px; /* Max width for larger screens */
    min-height: 600px; /* Fixed height */
  }

  .form-title {
    color: #ffffff;
    font-weight: bold;
    letter-spacing: 1px;
    font-size: 2.5rem;
  }

  .form-label {
    color: #ccc;
    font-weight: 500;
    margin-bottom: 5px;
  }

  .form-control {
    background: rgba(255, 255, 255, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: white;
    font-size: 1.1rem;
  }

  .form-control:focus {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    box-shadow: none;
    border-color: #ffffff;
  }

  /* Gender select background */
  .form-control, select.form-control {
    background: rgba(255, 255, 255, 0.15); /* Match the dark theme */
    border: 1px solid rgba(255, 255, 255, 0.3); /* Slightly lighter border */
    color: white;
  }

  .form-control:focus, select.form-control:focus {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    box-shadow: none;
    border-color: #ffffff;
  }

  .logo {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
  }

  .btn-primary {
    background-color: #0dcaf0;
    border-color: #0dcaf0;
    font-weight: 600;
    color: black;
  }

  .btn-primary:hover {
    background-color: #0bb8de;
  }

  .form-footer {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin-top: 20px;
  }

  .form-footer a {
    color: #ffffff;
    font-size: 1rem;
    text-decoration: none;
  }

  .form-footer a:hover {
    color: #0dcaf0;
  }

  .form-row {
    display: flex;
    gap: 20px;
    justify-content: space-between;
    margin-bottom: 20px;
  }

  .form-col {
    flex: 1;
  }

  @media (max-width: 768px) {
    .card-registration {
      width: 100%; /* Full width on smaller screens */
      padding: 15px; /* Add padding to prevent touching edges */
    }
  }
</style>

</head>

<body>

  <section class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="card card-registration">
            <div class="row g-0">

              <!-- Form Side -->
              <div class="col-12 d-flex justify-content-center">
                <div class="card-body p-5 text-white w-100">
                  <!-- Logo and Title -->
                  <div class="text-center">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="logo">
                    <h3 class="form-title">Student Registration</h3>
                  </div>

                  <form action="/register" method="post">
                    @csrf

                    <!-- Form Fields -->
                    <div class="form-row">
                      <div class="form-col">
                        <div class="form-outline">
                          <label class="form-label" for="first_name">First name</label>
                          <input type="text" name="first_name" id="first_name" class="form-control" required />
                          <x-form-error name="first_name" />
                        </div>
                      </div>
                      <div class="form-col">
                        <div class="form-outline">
                          <label class="form-label" for="last_name">Last name</label>
                          <input type="text" name="last_name" id="last_name" class="form-control" required />
                          <x-form-error name="last_name" />
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-col">
                        <div class="form-outline">
                          <label class="form-label" for="gender">Gender</label>
                          <select class="form-control" name="gender" id="gender" required>
                            <option value="">-- Choose One --</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                          <x-form-error name="gender" />
                        </div>
                      </div>
                      <div class="form-col">
                        <div class="form-outline">
                          <label class="form-label" for="dob">DOB</label>
                          <input type="date" name="dob" id="dob" class="form-control" required />
                          <x-form-error name="dob" />
                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control" required />
                      <x-form-error name="email" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control" required />
                      <x-form-error name="password" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="password_confirmation">Confirm Password</label>
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required />
                      <x-form-error name="password_confirmation" />
                    </div>

                    <!-- Buttons and Bottom Text -->
                    <div class="form-footer">
                      <div class="d-flex justify-content-between w-100">
                        <button type="submit" class="btn btn-primary btn-lg">Save</button>
                        <button type="reset" class="btn btn-light btn-lg">Reset</button>
                      </div>

                      <div class="mt-3">
                        <a href="/">I have an account</a>
                      </div>
                    </div>

                  </form>

                </div>
              </div>

            </div> <!-- End row -->
          </div> <!-- End card -->
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
