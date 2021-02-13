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

            .circuitry {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%239eaea1' fill-opacity='0.07' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");
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
        
        @livewireStyles

        <script src="{{ asset('js/app.js') }}" defer></script>

        <x-open-graph />
    </head>
    <body class="antialiased">

        <div class="relative overflow-hidden bg-white">
            <div x-data="{ navOpen: false }" class="relative pt-6 pb-16 sm:pb-24 lg:pb-32 bubbles">
            <x-nav />
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
                    <x-svg.arrow class="hidden h-16 mx-auto mt-24 md:block arrow" />
                </div>
                <div class="relative mt-12 sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                    <x-svg.capybara class="h-64 mx-auto text-indigo-600 fill-current md:ml-0 md:h-96 xl:h-128" /><!-- I bought this SVG from Etsy for $4 :) -->
                    <x-svg.arrow class="block h-16 mx-auto mt-12 md:hidden arrow" />
                </div>
                </div>
            </main>
            </div>
        </div>

        <div class="w-full mt-32 bg-gradient-to-tr from-blue-300 to-blue-500 h-128">
            <div class="w-8/12 mx-auto">
                <a id="who" class="sr-only">Who am I?</a>
                <img src="{{ asset('img/profile.png') }}" alt="Len Woodward" class="inline h-64 -mt-32 border-8 border-gray-500 rounded-full">
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
                    It was a subscription based math tutoring app, but being fresh out of school, it was not good.
                </p>
            </div>
            <svg class="w-full h-24 mt-24" viewBox="0 0 1440 128" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1440 79.6584C1410.22 98.8649 1023.24 130.442 773.857 108.956C441.094 80.2875 364.84 -70.7376 0 40.1062V128H1440V79.6584Z" fill="white"/>
            </svg>        
        </div>

        <div class="w-full my-32">
            <div class="w-4/5 mx-auto text-lg leading-relaxed text-gray-900 md:w-8/12 md:leading-loose md:text-xl font-extralight">
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
                    Since that very first calculator program I wrote in VB almost 19 years ago, I've been constantly writing code to help my family run our businesses,
                    for personal projects, and for the occasional freelance project as
                    <a href="https://projektgopher.com">
                        <div class="relative inline mr-2">
                            <div class="absolute top-0 left-0 w-full h-full transform bg-yellow-200 -rotate-1"></div>
                            <span class="relative p-1 -mr-2 text-gray-800 font-md hover:underline">ProjektGopher Multimedia.</span>
                        </div>
                    </a>
                    I work exclusively in the web, and am always staying up-to-date with current trends as well as new and interesting technologies.
                </p>
                </div>
                <div>
                    <!-- I'm just gonna go ahead and leave this blank. I kinda dig the extra white space. Room to breeeeeeeeathe -->
                </div>
            </div>
        </div>

        <div class="relative w-full pt-24 my-32 bg-gradient-to-br from-green-50 to-green-100">
            <div class="absolute inset-0 circuitry"></div>
            <div class="relative">
                <a id="what" class="sr-only">What am I good at?</a>
                <x-svg.speech-bubbles class="w-4/5 mx-auto md:max-w-2xl" />
                
                <div id="STALLlogos" class="flex justify-center mx-4 mt-8 space-x-4 md:space-x-8 md:mt-16">
                    <x-logos.spruce   class="object-contain w-32 h-32" />
                    <x-logos.tailwind class="object-contain w-32 h-32" />
                    <x-logos.alpine   class="object-contain w-32 h-32" />
                    <x-logos.laravel  class="object-contain w-32 h-32" />
                    <x-logos.livewire class="object-contain w-32 h-32" />
                </div>

                <p class="max-w-md mx-8 my-8 text-xl text-center text-purple-800 font-extralight md:my-16 md:text-2xl md:mx-auto">
                    STALL may be my <span class="italic">favourite</span> tech stack, but I'm also familiar with these other technologies
                </p>

                <div class="flex justify-center mx-4 mt-8 space-x-4 md:space-x-8 md:mt-16">
                    <x-logos.css3   class="object-contain w-32 h-32" />
                    <x-logos.sass class="object-contain w-32 h-32" />
                    <x-logos.javascript   class="object-contain w-32 h-32" />
                    <x-logos.vue  class="object-contain w-32 h-32" />
                    <x-logos.mysql  class="object-contain w-32 h-32" />
                </div>
                
                <p class="max-w-md mx-8 my-8 text-lg text-center text-purple-800 font-extralight md:my-16 md:text-xl md:mx-auto ">
                    I've never worked with React, or Inertia, but I'm enthusiastic for the opportunity to have to learn them both.
                </p>
            </div>
            <svg class="w-full h-24 mt-24" style="transform: scaleX(-1)" viewBox="0 0 1440 128" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1440 79.6584C1410.22 98.8649 1023.24 130.442 773.857 108.956C441.094 80.2875 364.84 -70.7376 0 40.1062V128H1440V79.6584Z" fill="white"/>
            </svg>  
        </div>

        <div class="px-4 mx-auto my-24 max-w-7xl sm:px-6 lg:my-32">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="relative mt-12 sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-auto xl:mx-0 lg:col-span-4">
                    <a href="https://github.com/ProjektGopher/coolcapybara">
                        <x-logos.github class="object-contain mx-auto mb-4 text-pink-300 transition-all transform fill-current hover:text-purple-300 hover:scale-110 w-72 h-72" />
                        <span class="inline-block text-gray-500 transition-all transform text-md font-extralight hover:-rotate-1 hover:scale-110">https://github.com/ProjektGopher/coolcapybara</span>
                    </a>
                    <p class="mt-6 text-xl text-gray-800 font-extralight">Check out the Github repo for this site to see these particular skills in action</p>
                </div>
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-8 lg:text-left">
                    <ul class="mt-8 text-lg leading-loose font-extralight md:mt-0">
                        <li>CI & CD with Github Actions</li>
                        <li>Familiarity with version control</li>
                        <li>Serveless deployment with Laravel Vapor</li>
                        <li>Unit, feature, and browser testing</li>
                        <li>SVG creation & manipulation</li>
                        <li>Asset purge & compilation</li>
                        <li>Basic Responsive Design</li>
                        <li>Tailwind</li>
                        <li>Alpine</li>
                        <li>Livewire</li>
                        <li>Blade components</li>
                        <li>3rd party API consumption</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="pb-48 text-center text-gray-700 md:pb-72" style="background-color: #ffaa30;">
            <svg class="w-full h-24 mt-24 mb-48 transform rotate-180 md:mb-72" viewBox="0 0 1440 128" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1440 79.6584C1410.22 98.8649 1023.24 130.442 773.857 108.956C441.094 80.2875 364.84 -70.7376 0 40.1062V128H1440V79.6584Z" fill="white"/>
            </svg>  
            {{-- tighten yellow #ffaa30 --}}
            <a id="why" class="sr-only">Why Tighten?</a>
            <span class="inline-block mx-auto mb-24 md:tracking-widest">
                <span class="text-6xl font-extrabold md:text-7xl lg:text-9xl">So why</span>
                <svg class="block w-64 my-12 text-gray-600 md:hidden" id="icon-tighten-logo--vertical" viewBox="0 0 179.76 117.34">
                    <title>Tighten</title>
                    <g class="icon" fill="currentColor">
                        <path class="origin-center cls-2 animate-spin" style="transform-box: fill-box; animation-duration: 3s" d="M114.82,19.15a5.32,5.32,0,0,1,2.41,4.17v26a5.32,5.32,0,0,1-2.41,4.17l-22.53,13a5.32,5.32,0,0,1-4.82,0l-22.53-13a5.34,5.34,0,0,1-2.4-4.17v-26a5.34,5.34,0,0,1,2.4-4.17l22.53-13a5.32,5.32,0,0,1,4.82,0l22.53,13Zm-7.54,18.27V35.23a1.16,1.16,0,0,0-1.16-1.16H98.89a6.75,6.75,0,0,1-6.76-6.75V20.09A1.16,1.16,0,0,0,91,18.93H88.79a1.16,1.16,0,0,0-1.16,1.16v7.23a6.75,6.75,0,0,1-6.75,6.75H73.65a1.16,1.16,0,0,0-1.16,1.16v2.19a1.15,1.15,0,0,0,1.16,1.15h7.23a6.76,6.76,0,0,1,6.75,6.76v7.23a1.16,1.16,0,0,0,1.16,1.16H91a1.16,1.16,0,0,0,1.16-1.16V45.33a6.76,6.76,0,0,1,6.76-6.76h7.23a1.15,1.15,0,0,0,1.16-1.15Z"></path>
                    </g>
            
                    <g class="text" fill="currentColor">
                        <path class="cls-2" d="M6.42,97.76H0V92.64H18.73v5.12H12.28v19.58H6.42Z"></path>
                        <path class="cls-2" d="M28.29,92.64h5.86v24.7H28.29Z"></path>
                        <path class="cls-2" d="M45,112.47v-15c0-3.31,1.58-4.87,4.86-4.87H59c3.28,0,4.87,1.56,4.87,4.87v3.28H58V98.36c0-.53-.18-.67-.67-.67H51.5c-.49,0-.67.14-.67.67v13.26c0,.5.18.67.67.67h5.86c.49,0,.67-.17.67-.67v-3.45H53.87v-4.84h10v9.14c0,3.28-1.59,4.87-4.87,4.87H49.84C46.56,117.34,45,115.75,45,112.47Z"></path>
                        <path class="cls-2" d="M74.54,92.64h5.85v9.49h7.94V92.64h5.86v24.7H88.33V107.28H80.39v10.06H74.54Z"></path>
                        <path class="cls-2" d="M110.2,97.76h-6.42V92.64h18.73v5.12h-6.45v19.58H110.2Z"></path>
                        <path class="cls-2" d="M132.07,92.64h17v5.08H137.93v4.48h8.92v5h-8.92v5.05h11.14v5.08h-17Z"></path>
                        <path class="cls-2" d="M159.41,92.64h6l8.71,14.5V92.64h5.68v24.7h-5.43L165.09,102v15.31h-5.68Z"></path>
                    </g>
                </svg>
                <svg class="hidden w-64 mx-4 -mt-6 text-gray-600 lg:w-96 lg:-mt-16 md:inline-block" id="icon-tighten-logo--horizontal" viewBox="0 0 260.19 66.18">
                    <title>Tighten</title>
                    <g class="icon" fill="currentColor">
                        <path class="origin-center cls-2 animate-spin" style="transform-box: fill-box; animation-duration: 3s" d="M52.7,17.44a4.89,4.89,0,0,1,2.19,3.8v23.7a4.89,4.89,0,0,1-2.19,3.8L32.17,60.59a4.91,4.91,0,0,1-4.39,0L7.26,48.74a4.89,4.89,0,0,1-2.19-3.8V21.24a4.89,4.89,0,0,1,2.19-3.8L27.78,5.59a4.85,4.85,0,0,1,4.39,0L52.7,17.44ZM45.83,34.08v-2A1.06,1.06,0,0,0,44.77,31H38.18A6.15,6.15,0,0,1,32,24.89V18.3A1.07,1.07,0,0,0,31,17.24H29a1.06,1.06,0,0,0-1.05,1.06v6.59A6.15,6.15,0,0,1,21.77,31H15.19a1.06,1.06,0,0,0-1.06,1.06v2a1.06,1.06,0,0,0,1.06,1.06h6.58a6.15,6.15,0,0,1,6.16,6.15v6.59a1,1,0,0,0,1.05,1h2a1.06,1.06,0,0,0,1.06-1V41.29a6.15,6.15,0,0,1,6.15-6.15h6.59a1.06,1.06,0,0,0,1.06-1.06Z"></path>
                    </g>
            
                    <g class="text" fill="currentColor">
                        <path class="cls-5" d="M86.84,25.86H80.42V20.74H99.16v5.12H92.7V45.44H86.84Z"></path>
                        <path class="cls-5" d="M108.71,20.74h5.86v24.7h-5.86Z"></path>
                        <path class="cls-5" d="M125.4,40.57v-15c0-3.31,1.59-4.87,4.87-4.87h9.13c3.29,0,4.87,1.56,4.87,4.87v3.28h-5.82V26.46c0-.53-.17-.67-.67-.67h-5.85c-.5,0-.67.14-.67.67V39.72c0,.5.17.67.67.67h5.85c.5,0,.67-.17.67-.67V36.27h-4.16V31.43h10v9.14c0,3.28-1.58,4.87-4.87,4.87h-9.13C127,45.44,125.4,43.85,125.4,40.57Z"></path>
                        <path class="cls-5" d="M155,20.74h5.86v9.49h7.93V20.74h5.86v24.7h-5.86V35.38h-7.93V45.44H155Z"></path>
                        <path class="cls-5" d="M190.62,25.86H184.2V20.74h18.74v5.12h-6.46V45.44h-5.86Z"></path>
                        <path class="cls-5" d="M212.49,20.74h17v5.08H218.35V30.3h8.93v5h-8.93v5H229.5v5.08h-17Z"></path>
                        <path class="cls-5" d="M239.83,20.74h6l8.72,14.5V20.74h5.68v24.7h-5.44l-9.24-15.31V45.44h-5.68Z"></path>
                    </g>
                </svg>
                <span class="text-6xl font-extrabold md:text-7xl lg:text-9xl">?</span>
            </span>
            <p class="w-4/5 max-w-6xl mx-auto text-lg leading-relaxed md:leading-loose font-extralight">
                In the Laravel community, the two most respected dev houses are Spatie, and Tighten. And for good reason.
                Your encouragement to contribute to and support open source work.
                Your dedication to work-life balance, as well as family and mental health.
                How you hold yourselves accountable for maintaining diversity in the workplace.
                Your respect of other cultures, and just general social responsibility.
                Thighten has had some of the most impressive alumni, like Adam, Caleb, and Samantha.
                I love the sense of community that radiates outward in every direction from your company.
                I would be exceedingly proud to say to someone at a conference I'm attending: "I work at Tighten."
            </p>
        </div>

        <a name="how" class="sr-only">How to reach me</a>
        <div class="relative bg-white">
            <div class="absolute inset-0">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
            </div>
            <div class="relative mx-auto max-w-7xl lg:grid lg:grid-cols-5">
            <div class="px-4 py-16 bg-gray-50 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                <div class="max-w-lg mx-auto">
                <h2 class="mb-16 text-3xl text-purple-900 md:text-6xl font-extralight tracking-loose">
                    Let's chat!
                </h2>
                <div class="space-y-8">
                    <div>
                        <x-svg.phone class="inline object-contain w-12 h-12 mr-1 -mt-4" />
                        <span class="inline text-2xl text-purple-600 md:text-3xl font-extralight">1.604.992.2418</span>
                    </div>
                    <div>
                        <x-svg.envelope class="inline object-contain w-12 h-12 mr-1 -mt-4" />
                        <span class="inline text-2xl text-purple-600 md:text-3xl font-extralight">Len at ProjektGopher dot com</span>
                    </div>
                    <div>
                        <x-svg.bird class="inline object-contain w-12 h-12 mr-1 -mt-4" />
                        <span class="inline text-2xl text-purple-600 md:text-3xl font-extralight">@ProjektGopher</span>
                    </div>
                    <div>
                        <x-logos.github class="inline object-contain w-12 h-12 mr-1 -mt-4 text-purple-400" />
                        <span class="inline text-2xl text-purple-600 md:text-3xl font-extralight">ProjektGopher</span>
                    </div>
                </div>
                </div>
            </div>
            <div class="px-4 py-16 bg-white sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                <div class="max-w-lg mx-auto lg:max-w-none">
                {{-- <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
                    <div>
                    <label for="full_name" class="sr-only">Full name</label>
                    <input type="text" name="full_name" id="full_name" autocomplete="name" class="block w-full px-4 py-3 placeholder-gray-500 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Full name">
                    </div>
                    <div>
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full px-4 py-3 placeholder-gray-500 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Email">
                    </div>
                    <div>
                    <label for="phone" class="sr-only">Phone</label>
                    <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full px-4 py-3 placeholder-gray-500 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Phone">
                    </div>
                    <div>
                    <label for="message" class="sr-only">Message</label>
                    <textarea id="message" name="message" rows="4" class="block w-full px-4 py-3 placeholder-gray-500 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Message"></textarea>
                    </div>
                    <div>
                    <button type="submit" class="inline-flex justify-center px-6 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Submit
                    </button>
                    </div>
                </form> --}}
                <livewire:send-text />
                </div>
            </div>
            </div>
        </div>
        
        @livewireScripts
    </body>
</html>
