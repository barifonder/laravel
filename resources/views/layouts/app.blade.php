<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <title>{{ config('app.name', 'Gestion des ventes') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

</head>
<body>
    
   
        <div >
            @include('partials.menu')
        
                
            @include('partials.flash')
               
           
           @yield('content')
    
        
        </div>
      
    
    <!-- Scripts -->
    
      @yield('javascripts')
      
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });

    </script>
      
    


</body>
</html>
