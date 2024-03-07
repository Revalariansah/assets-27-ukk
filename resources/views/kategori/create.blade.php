@extends('layouts.app')
@section('title', 'Create Kategori')
 
 @section('contents')
 <h1 class="font-bold text-2xl ml-3">Add Kategori</h1>
 <hr />
 <div class="border-b border-gray-900/10 pb-12">
     <div class="mt-2">
         <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
             <div class="sm:col-span-4">
                 <label class="block text-sm font-medium leading-6 text-gray-900">Nama Kategori</label>
                 <div class="mt-2">
                     <input type="text" name="nama_kategori" id="title" class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                 </div>
             </div>
             <button type="submit" class="flex justify-content-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
         </form>
     </div>
 </div>
 @endsection