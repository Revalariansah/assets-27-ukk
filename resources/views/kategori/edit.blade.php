@extends('layouts.app')
 
@section('title', 'Edit Kategori')
 
@section('contents')
<h1 class="mb-0">Edit Kategori</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-2">
        <div class="container p-5">

            <form action="{{ route('kategori.edit') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="sm:col-span-4 mb-3">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Judul</label>
                    <div class="mt-2">
                        <input type="text" name="nama_kategori" id="title" value="{{ $kategori->nama_kategori }}" class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <button type="submit" class="flex justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection