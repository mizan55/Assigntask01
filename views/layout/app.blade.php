<!doctype html>
<html class="no-js" lang="en">

<head> 
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>From</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--=== fav-icon-here ===--> 
<!--       <link rel="icon" href="favicon.ico" type="{{asset('favicon.png')}}" sizes="16x16" > -->
    <!--=== Reset Css ===--> 
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <!--=== Hover Animation ===-->
    <link rel="stylesheet" href="{{asset('assets/css/plugin/hover-min.css')}}">
    <!--=== Bootstrap ===-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
    <!--=== Fontawesome icon ===-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.all.min.css')}}">
    <!-- ================= *** Meanmenu CSS *** ===================== -->
    <link href="{{asset('assets/css/meanmenu.css')}}" rel="stylesheet" type="text/css">
    <!--=== Main Css ===-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!--=== Responsive Css ===-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    
</head>

<body>

@include('layout.topbar')
@yield('content')




     <script type="text/javascript" src="{{asset('assets/js/jquery-3.2.0.min.js')}}"></script>
    <!-- <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script> -->
    <!--=== All Plugin ===-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
 
  
     <!-- ================= Meanmenu min Js =========== -->
     <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
   
    <!--=== All Active ===-->

<!--    axios -->
<script src="{{asset('assets/js/axios.min.js')}}"></script>
<!--end-axios -->
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
@yield('script')
    
   
</body>

</html>
























