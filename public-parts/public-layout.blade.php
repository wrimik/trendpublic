<!DOCTYPE html>
<html ng-app="app">
<head>
    <meta charset="utf-8">
    <title>Trend Transport</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="/images/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.min.js"></script>
    <script src="/js/public.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.2/css/all.css"
          integrity="sha384-XxNLWSzCxOe/CFcHcAiJAZ7LarLmw3f4975gOO6QkxvULbGGNDoSOTzItGUG++Q+" crossorigin="anonymous">
    <script type="text/javascript">
        CSRF_TOKEN = '{{ csrf_token() }}';
        APP_VERSION = '{{ env('VERSION') }}';
    </script>
</head>

<body class="fixed-header">
@include('public-site.public-parts.header', ['defaultStyle' => 'background:#223e56'])
<div class="page__content">
    @yield('content')
    <footer>
        <p class="copyright">© 2019 by Trend Transport. All rights reserved.</p>
        <div class="footer_menu">
            <ul>
                <li><a href="/">Home</a>
                </li>
                <li><a href="/why-us">Why Us</a>
                </li>
                <li><a href="/services">Services</a>
                </li>
                <li><a href="/service-areas">Service Areas</a>
                </li>
                <li><a href="/tracking">Track Shipment</a>
                </li>
                <li><a href="/login">Sign In</a>
                </li>
            </ul>
        </div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="assets/scripts/aos.js"></script>
<script src="assets/scripts/main.js"></script>
</body>

</html>