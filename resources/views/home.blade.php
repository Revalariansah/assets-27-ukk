@extends('layouts.user')
 
@section('title', 'Home')
 
@section('contents')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            MYPERPUS
        </h1>
    </div>
</header>
<hr />
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                Selamat Datang Di MYPERPUS!!
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <a href="{{ route('beranda') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"> Dashboard</a>
        </div>
    </div>
</main>
@endsection