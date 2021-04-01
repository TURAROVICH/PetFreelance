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
<!-- <link href="../assets/css/material/app-material.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
 -->


<link href="../assets/css/material/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
<link href="../assets/css/material/app-material-dark.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />

<!-- app-dark-stylesheet -->

	<!-- icons -->
<link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />


    </head>
    <body class="dark">



<div class="dark">

@yield('content')

</div>



                <!-- Vendor js -->
                <script src="../assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="../assets/js/app.min.js"></script>
</body>
</html>