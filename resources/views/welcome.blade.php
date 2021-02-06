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

            .arrow {
                animation: .5s alternate infinite ease-in arrowFloat;
            }

            @keyframes arrowFloat {
                from {
                    transform: translateY(0);
                }
                to {
                    transform: translateY(.5em);
                }
            }
        </style>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">



<div class="relative overflow-hidden bg-white">
    <div x-data="{ navOpen: false }" class="relative pt-6 pb-16 sm:pb-24 lg:pb-32 bubbles">
      <nav class="relative flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6" aria-label="Global">
        <div class="flex items-center flex-1">
          <div class="flex items-center justify-between w-full md:w-auto">
            <a href="#">
              <span class="sr-only">Len Woodward</span>
              <span class="p-2 ml-3 text-xl font-extrabold text-blue-100 bg-blue-600 rounded-lg">LW</span>
            </a>
            <div class="flex items-center -mr-2 md:hidden">
              <button @click="navOpen = true" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" id="main-menu" aria-haspopup="true">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </button>
            </div>
          </div>
          <div class="hidden md:block md:ml-10 md:space-x-10">
            <a href="#who" class="font-medium text-gray-500 hover:text-gray-900">Who am I?</a>
            <a href="#what" class="font-medium text-gray-500 hover:text-gray-900">What am I good at?</a>
            <a href="#how" class="font-medium text-gray-500 hover:text-gray-900">How to reach me</a>
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
      <div x-show="navOpen" @click.away="navOpen = false" class="absolute inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden">
        <div class="overflow-hidden bg-white rounded-lg shadow-md ring-1 ring-black ring-opacity-5">
          <div class="flex items-center justify-between px-5 pt-4">
            <div>
              <span class="p-2 text-xl font-extrabold text-blue-100 bg-blue-600 rounded-lg">LW</span>
            </div>
            <div class="-mr-2">
              <button @click="navOpen = false" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
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
              <a href="#who" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50" role="menuitem">Who am I?</a>
              <a href="#what" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50" role="menuitem">What am I good at?</a>
              <a href="#how" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50" role="menuitem">How to reach me</a>
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
            <p class="mt-3 text-lg font-thin text-gray-500 sm:mt-5 sm:text-xl lg:text-xl xl:text-2xl w-80">
              This is the Cool Capybara, and she'd like you to meet <span class="text-indigo-600 font-extralight">Len</span>.
            </p>
            <x-arrow class="hidden h-16 mx-auto mt-24 md:block arrow" />
          </div>
          <div class="relative mt-12 sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
            <x-capybara class="h-64 mx-auto text-indigo-600 fill-current md:ml-0 md:h-96 xl:h-128" /><!-- I bought this SVG from Etsy for $4 :) -->
            <x-arrow class="block h-16 mx-auto mt-12 md:hidden arrow" />
          </div>
        </div>
      </main>
    </div>
  </div>

  <div class="w-full mt-32 bg-gradient-to-tr from-blue-300 to-blue-500 h-128">
      <div class="w-8/12 mx-auto">
          <a id="who" class="sr-only">Who am I?</a>
          <img src="img/profile.png" alt="Len Woodward" class="inline h-64 -mt-32 border-8 border-gray-500 rounded-full">
          <span class="inline-block mt-12 ml-4 text-4xl font-extrabold transform -rotate-3 md:-rotate-6">What's up?</span>
          <span class="inline-block ml-4 text-4xl font-thin">My name's Len.</span>
          <span class="inline-block ml-1 text-2xl text-blue-100 opacity-75 font-extralight">(He/Him/His)</span>
          <p class="mt-4 text-lg text-gray-900 xl:text-xl font-extralight">
            I live with my wife <a href="https://www.twitter.com/Ssshlyn" target="_blank" class="text-indigo-600">Ashlyn</a> about 40 minutes south of Vancouver, Canada, in Langley City.
            I acknowlege that where I work, live, and play, is on the unceded territory of the Matsqui, Kwantlen, and Katzie communities.
          </p>
          <p class="mt-4 text-lg text-gray-900 xl:text-xl font-extralight">
            I've been working with code in one form or another since about 2003 when I was writing Visual Basic in high school.
            I also started dabbling in some simple HTML at that time. I got my first paid programming gig in 2005.
            It was a membership based math tutoring app, but being fresh out of school, it was not good.
          </p>
      </div>
      <svg class="w-full h-24 mt-24" viewBox="0 0 1440 128" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1440 79.6584C1410.22 98.8649 1023.24 130.442 773.857 108.956C441.094 80.2875 364.84 -70.7376 0 40.1062V128H1440V79.6584Z" fill="white"/>
      </svg>        
  </div>

  <div class="w-full my-32">
      <div class="w-8/12 mx-auto text-lg leading-relaxed text-gray-900 md:leading-loose md:text-xl font-extralight">
        <div class="w-full space-y-8 md:w-1/2">
          <p class="">
              My family has always been involved in construction, and in 2007 I left my dead-end job at the local "Source by Circuit City" (Radio Shack) to start my own renovation business.
          </p>
          <p class="">
            <a href="https://penhome.ca">
              <div class="relative inline mr-2">
                  <div class="absolute top-0 left-0 w-full h-full transform bg-pink-200 rotate-1"></div>
                  <span class="relative p-1 -mr-2 text-gray-800 font-md hover:underline">Peninsula Home Services</span>
              </div>
            </a>
              has been my primary source of income for the last 14 years now.
              I've done well, but with a growing family (we're due in early June) I feel it's time to hang up the owner hat and transition into an employee role.
              I know that I don't want to be the father who's "too busy" to make it to important events, so I've decided that running my own business isn't the way to accomplish that.
          </p>
          <p class="">
              Since that very first calculator program I made in VB almost 19 years ago, I've been constantly writing code to help my family run our businesses,
              personal projects, and the occasional freelance project as
              <a href="https://projektgopher.com">
                <div class="relative inline mr-2">
                    <div class="absolute top-0 left-0 w-full h-full transform bg-yellow-200 -rotate-1"></div>
                    <span class="relative p-1 -mr-2 text-gray-800 font-md hover:underline">ProjektGopher Multimedia.</span>
                </div>
              </a>
              I work exclusively in the web, and am always staying up-to-date with current trends.
          </p>
        </div>
        <div>
            
        </div>
      </div>
  </div>

  <ul>
    <li>programming proficiencies - STALL stack</li>
    <li>why Tighten</li>
    <li>contact & github</li>
  </ul>

  {{-- <div class="w-full my-32">
      <div class="w-8/12 mx-auto text-lg leading-loose text-gray-900 font-extralight">
          <x-devices />
      </div>
  </div> --}}



    </body>
</html>
