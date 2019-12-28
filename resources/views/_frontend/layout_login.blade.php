<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>P.K.Saenchai muaythaigym</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/style.css">


</head>
<body class="fo-kanit">
@yield('content')

<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/sweetalert.min.js"></script>
<script src="/js/messagebox.js"></script>
<script src="/js/app.js"></script>

</body>
</html>