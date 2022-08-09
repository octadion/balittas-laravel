<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Balai Penelitian Tanaman Manis Dan Serat</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/logo_utama.png') }}">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-finance-business.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link href="assets/template/css/style.css" rel="stylesheet">
    <link href="assets/template/images/img/favicon.ico" rel="icon">
        <link rel="stylesheet" href="../assets2/css/style.css">

  </head>
  <body>
  
    {{-- @include('front.partials.header') --}}
        
        @yield('content')
       
        {{-- @include('themes.ezone.partials.services') --}}
        {{-- @include('front.partials.footer') --}}
        {{-- @include('themes.ezone.partials.modals')  --}}
  
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="https://kit.fontawesome.com/5c2debf290.js" crossorigin="anonymous"></script>
  <!-- Additional Scripts -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/owl.js') }}"></script>
  <script src="{{ asset('assets/js/slick.js') }}"></script>
  <script src="{{ asset('assets/js/accordions.js') }}"></script>
  <script language = "text/Javascript"> 
 </script>


  <script language = "text/Javascript"> 
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
  </script>
  </body>
</html>