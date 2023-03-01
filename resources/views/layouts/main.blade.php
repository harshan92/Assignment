<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5/css/bootstrap.min.css') }}">
</head>
<body>
    <script src="{{ asset('assets/bootstrap-5/jquery/jquery.min.css') }}"></script>
    <script src="{{ asset('assets/bootstrap-5/js/bootstrap.min.js') }}"></script>
    @include('components.nav')
    
    @yield("contents")

    <script>
        console.log("Scripts working");
    </script>
</body>
</html>