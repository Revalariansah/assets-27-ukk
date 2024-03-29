@extends('layouts.app')

@section('title', 'Buku')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Data Buku</h1>
    <a href="{{ route('product.create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Buku</a>

    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="table-responsive">
        <table class="table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="myTable">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Gambar</th>
                    <th scope="col" class="px-6 py-3">Judul</th>
                    <th scope="col" class="px-6 py-3">Penulis</th>
                    <th scope="col" class="px-6 py-3">Penerbit</th>
                    <th scope="col" class="px-6 py-3">Tahun Terbit</th>
                    <th scope="col" class="px-6 py-3">Kategori</th>
                    <th scope="col" class="px-6 py-3">Stok</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if($product->count() > 0)
                @foreach($product as $rs)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                    </th>
                    <td>
                        @if($rs->gambar)
                        <img src="{{ Storage::url('public/buku/').$rs->gambar }}" class="rounded" style="width: 120px; height: 180px">
                        @else
                        <span>No image found!</span>
                        @endif
                    </td>
                    <td>
                        {{ $rs->judul }}
                    </td>
                    <td>
                        {{ $rs->penulis }}
                    </td>
                    <td>
                        {{ $rs->penerbit }}
                    </td>
                    <td>
                        {{ $rs->tahun_terbit }}
                    </td>
                    <td>
                        {{ $rs->kategori->nama_kategori }}
                    </td>
                    <td>
                        {{ $rs->stok }}
                    </td>
                    <td class="w-36">
                        <div class="h-14 pt-5">
                            <a href="{{ route('product.show', $rs->id) }}" class="text-blue-800">Detail</a> |
                            <a href="{{ route('product.edit', $rs->id)}}" class="text-green-800 pl-2">Edit</a> |
                            <form action="{{ route('product.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="5">Buku not found</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection