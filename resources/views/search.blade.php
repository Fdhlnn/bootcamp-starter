@extends('layouts.main')

@section('section')

<div class="bg-white min-h-screen p-4">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">Explore</h1>
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
              </svg>
        </div>
    </div>

    <!-- Search bar -->
    <div class="mt-4">
        <div class="relative">
            <input type="text" placeholder="Search" class="w-full p-3 rounded-lg bg-gray-100 focus:outline-none">
            <div class="absolute right-3 top-3">
                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1011 18.5a7.5 7.5 0 005.65-2.85z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Categories -->
    <div class="mt-6">
        <h2 class="text-lg font-semibold">Categories</h2>
        <div class="grid grid-cols-2 gap-4 mt-4">
            <!-- Category Item -->
            <div class="bg-orange-400 rounded-lg p-4 flex flex-col items-center">
                <img src="{{asset('admin/assets/images/media/Snack.png')}}" alt="Snacks" class="w-30 h-16 mb-2">
                <p class="text-white font-semibold">Snacks</p>
            </div>
            <div class="bg-orange-600 rounded-lg p-4 flex flex-col items-center">
                <img src="{{asset('admin/assets/images/media/Food.png')}}" alt="Foods" class="w-16 h-16 mb-2">
                <p class="text-white font-semibold">Foods</p>
            </div>
            <div class="bg-orange-300 rounded-lg p-4 flex flex-col items-center">
                <img src="{{asset('admin/assets/images/media/Bread.png')}}" alt="Breads" class="w-16 h-16 mb-2">
                <p class="text-white font-semibold">Breads</p>
            </div>
            <div class="bg-pink-300 rounded-lg p-4 flex flex-col items-center">
                <img src="{{asset('admin/assets/images/media/Es.png')}}" alt="Ices" class="w-16 h-16 mb-2">
                <p class="text-white font-semibold">Ices</p>
            </div>
            <div class="bg-orange-600 rounded-lg p-4 flex flex-col items-center">
                <img src="{{asset('admin/assets/images/media/Fried.png')}}" alt="Frieds" class="w-16 h-16 mb-2">
                <p class="text-white font-semibold">Frieds</p>
            </div>
            <div class="bg-blue-400 rounded-lg p-4 flex flex-col items-center">
                <img src="{{asset('admin/assets/images/media/Milk.png')}}" alt="Milks" class="w-16 h-16 mb-2">
                <p class="text-white font-semibold">Milks</p>
            </div>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="mt-8 flex justify-center items-center ">
        <div class="absolute w-[450px] h-16 bg-white flex justify-around items-center shadow-md">
          <a href="/some-page">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
          </a>
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </a>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
            </svg>
          </a>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </a>
        </div>

      </div>
  </div>

@endsection
