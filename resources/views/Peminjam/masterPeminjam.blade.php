<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite('../resources/css/app.css')

<!-- JQUERY, JS-->
    

<!-- BOOTSTRAP -->
    

<!-- STYLE SHEET CSS TAILWIND -->
    <link href="./app.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/peminjam.css"> -->



</head>

<body>

    @include('Peminjam.navbar')
    @yield('content')

</body>

</html>