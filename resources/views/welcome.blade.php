<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #dcdddd">

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-light">MYPERPUS</a>
            <form class="d-flex" role="search">
                <a href="{{ url('login') }}" class="btn btn-primary" type="submit"
                    style="border-radius: 15px">Login</a>
                <button class="btn btn-primary mx-3" type="submit" style="border-radius: 15px">Sign up</button>
            </form>
        </div>
    </nav>
    <div class="center-text" style="text-align: center;>
        <div class="card mb-3">
        <img src="{{ asset('buku.jpg') }}" class="card-img-top" alt="...">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
