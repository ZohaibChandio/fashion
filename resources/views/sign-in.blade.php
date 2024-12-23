<!--
=========================================================
* Fashion Template by AppSeed - v1.0.1
=========================================================

* Product Page: https://github.com/app-generator/design-ecommerce
* Copyright AppSeed (https://appseed.us)
* License CCA 3.0 (preserve footer credit)

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
  <body>

    <div class="wrapper d-flex flex-column">

      @include('layouts.header')

      <!-- Main Content -->
      <main class="main-content flex-grow-1">
         <!-- Start Form Block -->
         <section class="form-block">
          <div class="container-xxl">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="form-outer">
                  <!-- Start Form Heading -->
                  <!-- Start Form Heading -->
                  <div class="form-heading bg-primary text-white text-center">
                    <h5 class="mb-3">Sign in</h5>
                    <ul class="sign-in-using-list d-flex justify-content-center">
                      <li>
                        <a href="#" title="Facebook">
                          <img src="assets/img/ic-facebook-w.svg" alt="Facebook" />
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Github">
                          <img src="assets/img/ic-github.svg" alt="Github" />
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Google">
                          <img src="assets/img/ic-google.svg" alt="Google" />
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Emd Form Heading -->
                  <form action="{{url('signin')}}" method="POST">
                    @csrf
                  <div class="mb-4">
                    <input type="text" name="e" class="form-control" placeholder="Email">
                  </div>
                  <div class="mb-4">
                    <input type="password" name="p" class="form-control" placeholder="Password">
                  </div>

                  <div class="form-check form-switch mb-4">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                  </div>

                  <div class="mb-4">
                    <button type="submit" class="btn btn-primary w-100">Sign In</button>
                  </div>
                  <div class="text-center mb-4">
                    <a href="{{url('/signup')}}" class="sign-up-btn">Don't have an account?</a>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Form Block -->
      </main>
      <!-- End Main Content -->

      @include('layouts.footer')

    </div>

    <!-- CODE HERE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/dist/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/app.js"></script>
  </body>
</html>
