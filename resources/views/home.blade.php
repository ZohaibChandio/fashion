
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
  <body>

    <div class="wrapper d-flex flex-column">

        


      <!-- Main Content -->
      <main class="main-content flex-grow-1">

        <div class="container-xxl">

          @include('layouts.banner')
          @include('layouts.gallery')
          @include('layouts.promocard')
          @include('layouts.brand')
        </div>

        @include('layouts.payday')
        @include('layouts.categories')
        @include('layouts.testanomials')
        @include('layouts.faq')
        @include('layouts.cards')
        @include('layouts.video')

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
