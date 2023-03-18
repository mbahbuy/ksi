<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KSI-INDONESIA{{ Request::is('dashboard') ? '-DASHBOARD' : '' }}</title>

  <!-- Favicons -->
  <link href="{{ Request::is(['dashboard', 'login']) ? asset('img/favicon.png') : asset('assets/favicon.ico') }}" rel="icon" type="image/x-icon">
  <link href="{{ asset('img') }}/apple-touch-icon.png" rel="apple-touch-icon" >

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Catamaran:100,200,300,400,500,600,700,800,900|Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Font Awesome icons (free version)-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset("vendor") }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/style_home.css') }}" rel="stylesheet">
  {!! Request::is(['dashboard', 'login']) ? "<link href='" . asset('css/style_dashboard.css') . "' rel='stylesheet'>" : "" !!}
  {!! Request::is(['dashboard', 'login']) ? "<link href='" . asset('vendor/trix/trix.css') . "' rel='stylesheet'>" : "" !!}
  <link href="{{ asset("vendor") }}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <style>
    .alert-pop-up {
        position: fixed;
        top: -100px;
        left: 50%;
        transform: translateX(-50%);
        background-color: black;
        color: white;
        padding: 10px;
        border: 1px solid black;
        border-radius: 15px;
        animation: alert-pop-up 3s ease forwards;
        z-index: 99999999999999999999999999999999;
    }

    @keyframes alert-pop-up {
        0% {
            top: -100px;
        }
        50% {
            top: 50%;
        }
        100% {
            top: 50%;
            transform: translate(-50%, -50%);
        }
    }
  </style>

  
  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor') }}/jquery/jquery-1.12.4.min.js"></script>
  <script src="{{ asset("vendor") }}/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset("vendor") }}/bootstrap/js/bootstrap.bundle.min.js"></script>
  
</head>

<body {{ Request::is(['dashboard', 'login']) ?  : "id='page-top'" }}>

    @if (Request::is(['dashboard', 'login']))
        @include('layouts.headerdashboard')

        @include('layouts.sidebar')

        <main id="main" class="main">
            
            @yield('contentdashboard')

        </main><!-- End #main -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <!-- Template Main JS File -->
        <script src="{{ asset('vendor/trix/trix.js') }}"></script>
        <script src="{{ asset('js/script_dashboard.js') }}"></script>
    @else
        @include('layouts.headerhome')

        @yield('contenthome')

        <!-- Template Main JS File -->
        <script src="{{ asset('js/script_home.js') }}"></script>
    @endif

    <script>
        function showAlertPopUp(data) {
            // Membuat element pop-up alert
            var alertDiv = document.createElement("div");
            alertDiv.className = "alert-pop-up";
            alertDiv.innerHTML = data;

            // Menambahkan element pop-up alert ke dalam body
            document.body.appendChild(alertDiv);

            // Mengatur waktu untuk menghapus element pop-up alert setelah 5 detik
            setTimeout(function() {
            document.body.removeChild(alertDiv);
            }, 3000);
        }
        @if (session()->has('success'))
            showAlertPopUp("{{ session('success') }}");
        @endif
    </script>

    @yield('script')

</body>

</html>