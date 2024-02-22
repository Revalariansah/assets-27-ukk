<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: #8f7fb6dd">
      <nav class="navbar bg-body-secondary">
            <div class="container-fluid d-flex justify-content-center">
                <a class="navbar-brand">Kategori Buku</a>
            </div>
        </nav>
        <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <div class="dropdown">
            <tr>
            <th scope="row">1</th>
            <td> <img src="{{ asset('buku_naruto.jpg') }}" height="150" width="150" class="rounded" alt="..."></td>
            <td>Otto</td>
            <td>@mdo</td>
             <td>  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </div>
            </td>
            </tr>
        </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>