@extends('layouts.main')

@section('section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white h-screen flex flex-col items-center justify-center">



    <h1 class="text-3xl font-bold text-center mb-6">DAFTAR</h1>


    <div class="w-4/5">
        <form>
            <div class="mb-4 margin-center>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" placeholder="contoh@gmail.com" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring focus:border-gray-500">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Nama Pengguna</label>
                <input type="text" placeholder="Masukkan Nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring focus:border-gray-500">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" placeholder="Masukkan Kata sandi" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring focus:border-gray-500">
            </div>
            <button type="submit" class="w-full bg-black text-white py-2 rounded-md font-bold"><a href="/some-page">
                Lanjut
            </a>
            </button>
        </form>


        <div class="flex items-center my-4">
            <div class="flex-grow border-t border-gray-300"></div>
            <span class="mx-4 text-gray-500">Atau</span>
            <div class="flex-grow border-t border-gray-300"></div>
        </div>

        <!-- Social Login Buttons -->
        <div class="flex space-x-4">
            <button class="flex-1 border border-gray-300 rounded-md py-2 flex items-center justify-center">
                <img src="{{asset('admin/assets/images/media/google.png')}}" alt="Google" class="h-6 w-6 mr-2">
                Google
            </button>
            <button class="flex-1 border border-gray-300 rounded-md py-2 flex items-center justify-center">
                <img src="{{asset('admin/assets/images/media/tiktok.png')}}" alt="TikTok" class="h-6 w-6 mr-2">
                TikTok
            </button>
        </div>
    </div>
</body>
</html>

@endsection
