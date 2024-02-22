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
                <a class="navbar-brand">User</a>
            </div>
            </nav>
        <table class="table mt-3" >
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <div class="dropdown ">
            <tr>
            <th scope="row">1</th>
            <td>hakiem</td>
            <td>hakiem123@gmail.com</td>
            <td>Rajeg nih</td>
             <td>  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
            </div>
        </div>
            </td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Joe</td>
            <td>Joe123@gmail.com</td>
            <td>Kebon Besar nih</td>
             <td> <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
            </div>
        </div>
            </td>
            </tr>
        </tbody>
        </table>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>