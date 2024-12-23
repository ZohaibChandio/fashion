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
                    <h5 class="mb-3">Register with</h5>
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
                  <form action="{{url('/signup')}}" method="POST">
                    @csrf
                  <div class="mb-4">
                    <input type="text" class="form-control" name='n' placeholder="Name">
                  </div>
                  <div class="mb-4">
                    <input type="text" class="form-control" name="e" placeholder="Email">
                  </div>
                  <div class="mb-4">
                    <input type="password" class="form-control" name="p" placeholder="Password">
                  </div>

                  <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                      I agree <a href="#" title="Terms and Conditions">Terms and Conditions</a>
                    </label>
                  </div>

                  <div class="mb-4">
                    <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                  </div>
                  <div class="text-center mb-4">
                    Already have an account?
                    <a href="{{url('/signin')}}" class="sign-up-btn">Sign in</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/dist/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Theme JS -->
    <script src="./assets/js/app.js"></script>
    <script>
        $
    </script>
  </body>
</html>
