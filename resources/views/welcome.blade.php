<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Len Woodward | Tighten Application</title>

        <style>
            .bubbles {
                background-color: #ffffff;
                background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.09'%3E%3Cpath d='M50 50c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10c0 5.523-4.477 10-10 10s-10-4.477-10-10 4.477-10 10-10zM10 10c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10c0 5.523-4.477 10-10 10S0 25.523 0 20s4.477-10 10-10zm10 8c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm40 40c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }
        </style>
    </head>
    <body class="antialiased">



<div class="relative overflow-hidden bg-white">
    <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32 bubbles">
      <nav class="relative flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6" aria-label="Global">
        <div class="flex items-center flex-1">
          <div class="flex items-center justify-between w-full md:w-auto">
            <a href="#">
              <span class="sr-only">Len Woodward</span>
              <span class="p-2 text-xl font-extrabold text-blue-100 bg-blue-600 rounded-lg">LW</span>
            </a>
            <div class="flex items-center -mr-2 md:hidden">
              <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" id="main-menu" aria-haspopup="true">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </button>
            </div>
          </div>
          <div class="hidden md:block md:ml-10 md:space-x-10">
            <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Who am I?</a>
            <a href="#" class="font-medium text-gray-500 hover:text-gray-900">What am I good at?</a>
          </div>
        </div>
      </nav>
  
      <!--
        Mobile menu, show/hide based on menu open state.
  
        Entering: "duration-150 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
      <div class="absolute inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden">
        <div class="overflow-hidden bg-white rounded-lg shadow-md ring-1 ring-black ring-opacity-5">
          <div class="flex items-center justify-between px-5 pt-4">
            <div>
              <span class="p-2 text-xl font-extrabold text-blue-100 bg-blue-600 rounded-lg">LW</span>
            </div>
            <div class="-mr-2">
              <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <span class="sr-only">Close main menu</span>
                <!-- Heroicon name: outline/x -->
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
            <div class="px-2 pt-2 pb-3 space-y-1" role="none">
              <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50" role="menuitem">Who am I?</a>
              <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50" role="menuitem">What am I good at?</a>
            </div>
          </div>
        </div>
      </div>
  
      <main class="px-4 mx-auto mt-16 max-w-7xl sm:mt-24 sm:px-6 lg:mt-32">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
          <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
            <h1>
              <span class="block mt-1 text-4xl font-extrabold tracking-tight sm:text-5xl xl:text-6xl">
                <span class="block text-gray-900">Hey there,</span>
                <span class="block text-indigo-600">Tighten</span>
                <span class="block text-gray-900">folks!</span>
              </span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
              This is the Cool Capybara, and she'd like you to meet Len.
            </p>
          </div>
          <div class="relative mt-12 sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
            <x-capybara class="text-indigo-600 fill-current h-128" /><!-- I bought this SVG from Etsy for $4 :) -->
          </div>
        </div>
      </main>
    </div>
  </div>

  <div class="w-full pb-12 mt-32 bg-gradient-to-tr from-blue-300 to-blue-500 h-128">
      <div class="w-8/12 mx-auto">
          <img src="img/profile.png" alt="Len Woodward" class="inline h-64 -mt-32 border-8 border-gray-500 rounded-full">
          <span class="inline-block ml-4 text-4xl font-extrabold transform -rotate-6">What's up?</span>
          <span class="inline-block ml-4 text-4xl font-thin">My name's Len.</span>
          <span class="inline-block ml-1 text-2xl text-blue-100 opacity-75 font-extralight">(He/Him/His)</span>
      </div>
  </div>

    </body>
</html>
