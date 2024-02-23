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
        <div class="mt-3 ms-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah
            </button>
        </div>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No Telepon</th>
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
            <td>0857011139876</td>
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
            <td>085718467654</td>
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
           <!-- Modal -->
           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                    <label for="Name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Masukkan Nama">
                    </div>
                <div class="mb-3">
                    <label for="Name" class="form-label">No Telepon</label>
                    <input type="number" name="name" class="form-control" id="Name" placeholder="Masukkan Nomor Telepon Anda">
                    </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Tambah</button>
                </div>
                </div>
            </div>
            </div>
        </table>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>