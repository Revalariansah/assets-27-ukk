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
        <table class="table mt-3" >
        <div class="mt-3 ms-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah
            </button>
        </div>
        <thead> 
            <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <div class="dropdown ">
            <tr>
            <th scope="row">1</th>
            <td> <img src="{{ asset('buku_naruto.jpg') }}" height="150" width="150" class="rounded" alt="..."></td>
            <td>Naruto Shippuden</td>
            <td>Masashi Kishimoto</td>
            <td>06-10-2014</td>
             <td>  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-success">Show</button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="was-validated">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Masukkan File</label>
                        <input type="file" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="mb-3">
                    <label for="Name" class="form-label">Judul</label>
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Masukkan Judul">
                    </div>
                    <div class="mb-3">
                    <label for="Name" class="form-label">Nama Penerbit</label>
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Masukkan Nama Penerbit">
                    </div>
                    <div class="mb-3">
                    <label for="Name" class="form-label">Tanggal Terbit</label>
                    <input type="number" name="name" class="form-control" id="Name" placeholder="Masukkan Tanggal Terbit">
                    </div>
                    </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>