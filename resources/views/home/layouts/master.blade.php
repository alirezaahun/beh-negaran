<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- IRAN Sans Font -------------------------------------------------->
    <!-- <link href="http://fonts.cdnfonts.com/css/iranian-sans" rel="stylesheet"> -->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/iranian-sans" type="text/css"/>
    <!-- Vazir Font --------------------------------------->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/vazir-font/30.1.0/font-face.min.css"
      integrity="sha512-FOp1/1tT19/xw6wkob5zvDLQUPFTgmYy6fXIKpo/nvZyMiyhe72YNhgSRlrE/FLS8OgYFONMGvqazSVLbO2/6Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Fav Icon ------------------------------------------------------->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- Font Awesome --------------------------------------------------->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- Box Icons -------------------------------------------------------->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <!-- Bootstrap RTL ----------------------------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
     <!-- Bootstrap CSS ---------------------------------------------------->
    <!-- Main CSS ----------------------------------------------------------->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <!-- Animate Css ---------------------------------------------->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Persian Date --------------------------------------------------------->
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <!-- Owl Carousel  -------------------------------------------->

    <title>شرکت تبلیغاتی به نگاران تجارت آزما</title>
  </head>
  <body>


    <!-- Navbar -------------------------------------------------------------->
    @include('home.sections.header')

    @include('home.sections.mobileNavbar')
    @yield('content')

      <!-- Footer --------------------------------------------------------->
      @include('home.sections.footer')
      {{-- <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript" src="node_modules/persian-date/dist/persian-date.min.js"></script>
      <script type="text/javascript" src="node_modules/persian-datepicker/dist/js/persian-datepicker.min.js"></script> --}}
      {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/jquery.waypoints.min.js" integrity="sha512-f/gxy4xAjuGEIf/ujexcNI906CTS+kfw40QCyG/rEMKELvCIFaTOY+dfdn7M/eNsiMreG3SStjgFr9q8Me9Baw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
      <script src="{{asset('js/main.js')}}"></script>
      @yield('js')
    </body>
</html>

