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
                <a class="navbar-brand">Peminjam</a>
            </div>
            </nav>
        <table class="table mt-2" >
        <div class="mt-2 ms-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah
            </button>
        </div>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Status</th>
            <th scope="col">Peminjam</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <div class="dropdown">
            <tr>
            <th scope="row">1</th>
            <td>Haikyu</td>
            <td>2001-11-12</td>
            <td>2002-11-12</td>
            <td>Dipinjam</td>
            <td>Radit</td>
             <td>  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
            </div>
            </td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>SiJuki</td>
            <td>2001-11-09</td>
            <td>2002-11-10</td>
            <td>DiKembalikan</td>
            <td>Rapli</td>
             <td>  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
            </div>
            </td>
            </tr>
        </tbody>
           <!-- Modal -->
           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Peminjam</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="was-validated">
                    <div class="mb-3">
                    <label for="Name" class="form-label">Judul</label>
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Masukkan Judul">
                    </div>
                    <div class="mb-3">
                    <label for="Name" class="form-label">Tanggal Pinjam</label>
                    <input type="date" name="name" class="form-control" id="Name" placeholder="Masukkan Tanggal">
                    </div>
                    <div class="mb-3">
                    <label for="Name" class="form-label">Tanggal Kembali</label>
                    <input type="date" name="name" class="form-control" id="Name" placeholder="Masukkan Tanggal">
                    </div>
                    <div class="mb-3">
                    <option selected>Pilih Status</option>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">DiKembalikan</option>
                        <option value="2">DiPinjam</option>
                        <option value="3">Hilang</option>
                        </select>
                    </div>
                    <div class="mb-3">
                    <label for="Name" class="form-label">Peminjam</label>
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Masukkan Nama Peminjam">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Tambah</button>
                </div>
                    </form>
                </div>
            </div>
            </div>
        </table>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>