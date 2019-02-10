<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gestion des ventes') }}</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-arabic.min.css') }}">
<body>
    
   @include('partials.menu')
    
@yield('content')

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap-arabic.min.js') }}"></script>
	 <footer class="footer">
      <div class="container">
        <span class="text-muted">جماعة مراكش © جميع حقوق النشر محفوظة</span>
      </div>
       <div class="pull-right">
                <ul class="nav nav-pills payments">
                	<li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
    </footer>
</body>

</footer>
</html>