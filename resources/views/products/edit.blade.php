@extends('layouts.app')
@section('title', 'Edit Buku')
 
 @section('contents')
 <h1 class="font-bold text-2xl ml-3">Edit Buku</h1>
 <hr />
 <div class="border-b border-gray-900/10 pb-12">
     <div class="mt-2">
         <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('PUT')
             <div class="sm:col-span-4">
                 <label class="block text-sm font-medium leading-6 text-gray-900">Images</label>
                 <div class="mt-2">
                     <input type="file" name="gambar" value="{{ $product->gambar }}" id="title">
                 </div>
                 @if ($errors->has('gambar'))
                 <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-blue-40">
                    <span class="font-medium">{{ $errors->first('gambar') }}</span>
                </div>
                @endif
             </div>
             <div class="sm:col-span-4">
                 <label class="block text-sm font-medium    leading-6 text-gray-900">Judul</label>
                 <div class="mt-2">
                     <input type="text" name="judul" value="{{ $product->judul }}" id="title" class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                 </div>
                 @if ($errors->has('judul'))
                 <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-blue-40">
                    <span class="font-medium">{{ $errors->first('judul') }}</span>
                </div>
                @endif
             </div>
             <div class="sm:col-span-4">
                 <label class="block text-sm font-medium leading-6 text-gray-900">Penulis</label>
                 <div class="mt-2">
                     <input id="price" name="penulis" value="{{ $product->penulis }}" type="text" class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                 </div>
                 @if ($errors->has('penulis'))
                 <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-blue-40">
                    <span class="font-medium">{{ $errors->first('penulis') }}</span>
                </div>
                @endif
             </div>
             <div class="sm:col-span-4">
                 <label class="block text-sm font-medium leading-6 text-gray-900">Penerbit</label>
                 <div class="mt-2">
                     <input id="product_code" name="penerbit" value="{{ $product->penerbit }}" type="text" class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                 </div>
                 @if ($errors->has('penerbit'))
                 <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-blue-40">
                    <span class="font-medium">{{ $errors->first('penerbit') }}</span>
                </div>
                @endif
             </div>
             <div class="sm:col-span-4">
                 <label class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                 <div class="mt-2">
                     <input id="product_code" name="deskripsi" value="{{ $product->deskripsi }}" type="text" class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                 </div>
                 @if ($errors->has('deskripsi'))
                 <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-blue-40">
                    <span class="font-medium">{{ $errors->first('deskripsi') }}</span>
                </div>
                @endif
             </div>
             <div class="sm:col-span-4">
                 <label class="block text-sm font-medium leading-6 text-gray-900">Stok</label>
                 <div class="mt-2">
                     <input id="product_code" name="stok" value="{{ $product->stok }}" type="number" class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                 </div>
                 @if ($errors->has('stok'))
                 <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-blue-40">
                    <span class="font-medium">{{ $errors->first('stok') }}</span>
                </div>
                @endif
             </div>
             <div class="sm:col-span-4">
                 <label class="block text-sm font-medium leading-6 text-gray-900">Tahun Terbit</label>
                 <div class="mt-2">
                     <input name="tahun_terbit" type="number" value="{{ $product->tahun_terbit }}" class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                 </div>
                 @if ($errors->has('tahun_terbit'))
                 <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-blue-40">
                    <span class="font-medium">{{ $errors->first('tahun_terbit') }}</span>
                </div>
                @endif
             </div>
             <div class="sm:col-span-4">
                 <label class="block text-sm font-medium leading-6 text-gray-900">Kategori</label>
                 <div class="mt-2">
                    <select name="kategori_id" id="" class="form-select">
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                 </div>
                 @if ($errors->has('kategori_id'))
                 <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-blue-40">
                    <span class="font-medium">{{ $errors->first('kategori_id') }}</span>
                </div>
                @endif
             </div>
             <button type="submit" class="flex justify-content-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
         </form>
     </div>
 </div>
 @endsection