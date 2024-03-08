@extends('layouts.app')
 
@section('title', 'Show Buku')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Buku</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Gambar</label>
            <div class="mt-2">
                <img src="{{ Storage::url('public/buku/').$product->gambar }}" alt="" width="200">
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Judul</label>
            <div class="mt-2">
                {{ $product->judul }}
            </div>
        </div>
 
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Penulis</label>
            <div class="mt-2">
                {{ $product->penulis }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Penerbit</label>
            <div class="mt-2">
                {{ $product->penerbit }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Tahun Terbit</label>
            <div class="mt-2">
                {{ $product->tahun_terbit }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Stok</label>
            <div class="mt-2">
                {{ $product->stok }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Nama Kategori</label>
            <div class="mt-2">
                {{  $product->kategori->nama_kategori }}
            </div>
        </div>
        </form>
    </div>
</div>
@endsection