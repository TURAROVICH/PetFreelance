<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- AXIOS -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<link href="../assets/css/material/bootstrap-material.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
<link href="../assets/css/material/app-material.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />



<link href="../assets/css/material/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
<link href="../assets/css/material/app-material-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- icons -->
<link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<style>
  .d-inline-flex a{
      margin:0 10px;
  }
  </style>
    </head>
    <body class='container'>

    <header  class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 mr-4 border-bottom">
    <a style="margin-right:20px;" href="/" class="d-flex align-items-center text-dark text-decoration-none">
   <span class="fs-4">Main</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      <a class="me-3 py-2 text-dark text-decoration-none" href="/executors">executors</a>
      <a class="me-3 py-2 text-dark text-decoration-none" href="/vacance">vacance</a>
      <a class="me-3 py-2 text-dark text-decoration-none" href="/user/home">home</a>
      <a onclick="deleteCookie()"  class="py-2 text-dark text-decoration-none" href="javascript:void(0)">logout</a>
    </nav>
  </header>


@yield('content')



<script>
function deleteCookie(){

document.cookie.split(';').forEach(function(c) {
  document.cookie = c.trim().split('=')[0] + '=;' + 'expires=Thu, 01 Jan 1970 00:00:00 UTC;';

});
window.location="/customer-register"
}
</script>

                <!-- Vendor js -->
<script src="../assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="../assets/js/app.min.js"></script>
</body>
</html>