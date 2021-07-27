<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://use.typekit.net/ngm6ajt.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Len Woodward</title>

        <meta name="theme-color" content="#111827">
        {{-- <meta name="theme-color" media="(prefers-color-scheme: light)" content="white"> --}}
        {{-- <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black"> --}}
        <link rel="shortcut icon" href="{{ asset('img/icon.png')}}" type="image/png" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@ProjektGopher" />
        <meta name="twitter:creator" content="@ProjektGopher" />
        <meta property="og:url" content="{{ route('home') }}" />
        <meta property="og:title" content="Len Woodward" />
        <meta property="og:description" content="TALL stack web developer - Available for Contract" />
        <meta property="og:image" content="{{ asset('img/OpenGraph-1200x630.jpg')}}" />
        <meta property="og:image:secure_url" content="{{ asset('img/OpenGraph-1200x630.jpg')}}" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:image:alt" content="Len Woodward - TALL stack developer - Available for Contract" />

        <style>
            .monotalic {
                font-family: monotalic,sans-serif;
                font-weight: 500;
                font-style: normal;
            }

            .stacked-linear {
                background:
                    linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%),
                    linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
                    linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);
            }
        </style>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.1.0/styles/github-dark-dimmed.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.1.0/highlight.min.js"></script>
    </head>
    <body class="relative antialiased bg-cool-gray-900">
        <div class="relative max-w-2xl mx-auto">

            <span class="inline-block p-2 mt-4 ml-3 text-xl font-extrabold text-white rounded-lg stacked-linear">LW</span>

            <p class="absolute top-0 right-0 px-2 py-1 m-4 text-sm font-bold uppercase rounded-lg text-cool-gray-900 bg-lime-500 monotalic">Availble for Contract</p>

            <div class="py-8">
                <p class="p-2 text-white monotalic">
                    <span class="text-teal-500">LenWoodward_com</span>
                    on
                    <span class="text-pink-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline w-4 h-4 fill-current"><path fill-rule="evenodd" d="M5.75 21a1.75 1.75 0 110-3.5 1.75 1.75 0 010 3.5zM2.5 19.25a3.25 3.25 0 106.5 0 3.25 3.25 0 00-6.5 0zM5.75 6.5a1.75 1.75 0 110-3.5 1.75 1.75 0 010 3.5zM2.5 4.75a3.25 3.25 0 106.5 0 3.25 3.25 0 00-6.5 0zM18.25 6.5a1.75 1.75 0 110-3.5 1.75 1.75 0 010 3.5zM15 4.75a3.25 3.25 0 106.5 0 3.25 3.25 0 00-6.5 0z"/><path fill-rule="evenodd" d="M5.75 16.75A.75.75 0 006.5 16V8A.75.75 0 005 8v8c0 .414.336.75.75.75z"/><path fill-rule="evenodd" d="M17.5 8.75v-1H19v1a3.75 3.75 0 01-3.75 3.75h-7a1.75 1.75 0 00-1.75 1.75H5A3.25 3.25 0 018.25 11h7a2.25 2.25 0 002.25-2.25z"/></svg>
                        main [!]
                    </span>
                    <span class="hidden md:inline">
                        via
                        <span class="text-lime-300">
                            <svg x="0px" y="0px" viewBox="0 0 455 512" class="inline w-4 h-4 fill-current"><path d="M207.2570496,506.7373657l-62.6562653-37.0740051c-9.3395691-5.2179565-4.7713013-7.085907-1.6851959-8.1619568c12.4662933-4.3246155,15.0042267-5.3194885,28.302948-12.8926697c1.4009399-0.7715454,3.228241-0.4872742,4.6900787,0.365448l48.1190491,28.566864c1.7664032,0.9745789,4.2028046,0.9745789,5.8270721,0L417.4784241,369.263031c1.7460938-0.994873,2.862793-3.0252075,2.862793-5.0758362V147.6514282c0-2.1115417-1.1166992-4.1012726-2.9033813-5.1773682L229.8953705,34.2772522c-1.746109-1.0151711-4.04039-1.0151711-5.7864685,0L36.6070175,142.5146637c-1.8273087,1.0354767-2.9642944,3.0861359-2.9642944,5.1367645v216.5560303c0,2.0709534,1.1369934,4.0200806,2.9439926,5.0149536l51.4082031,29.6835632c27.8968658,13.9484253,44.9720306-2.4770203,44.9720306-18.9836731V166.1275177c0-3.0252075,2.4364166-5.4006958,5.4616241-5.4006958h23.795578c2.9642944,0,5.4210052,2.3754883,5.4210052,5.4006958v213.7947845c0,37.2161255-20.2627869,58.5753174-55.5500946,58.5753174c-10.8420258,0-19.3897476,0-43.2259293-11.7556763l-49.1951447-28.3232422C7.532557,391.3937073,0,378.2574158,0,364.1871338V147.6513977c0-14.0702515,7.532557-27.1862488,19.6739902-34.1909256L207.3179932,5.0403199c11.8774872-6.7204266,27.6532135-6.7204266,39.429184,0l187.623703,108.4201508c12.1617126,7.024971,19.7145996,20.1409683,19.7145996,34.1909256v216.5357361c0,14.070282-7.5528564,27.1456604-19.7145996,34.2315674l-187.6237335,108.318634C233.4624481,514.1333008,220.3117065,513.364624,207.2570496,506.7373657z M365.5220642,226.4895782h-24.3640747c-2.5176392,0-4.7307129-1.7867126-5.258606-4.2434082c-5.8473816-25.9883423-20.0597839-34.2924347-58.5956116-34.2924347c-43.1650085,0-48.1799469,15.0245056-48.1799469,26.2928925c0,13.6641998,5.9285889,17.6436768,64.1790314,25.3386536c57.6616516,7.6137695,85.0712585,18.4151764,85.0712585,58.9204559c0,40.8910522-34.0487976,64.3008728-93.4971313,64.3008728c-82.1272583,0-99.3039551-37.7034302-99.3039551-69.3157959c0-3.0049133,2.395813-5.4007263,5.4007111-5.4007263h24.2625427c2.7003632,0,4.9743347,1.9491577,5.3804169,4.588562c3.6546173,24.6889343,14.5575104,37.1755371,64.2399292,37.1755371c39.5104065,0,56.3419495-8.9538269,56.3419495-29.9069214c0-12.1008301-4.7510071-21.0546265-66.1890869-27.0847168c-51.3269958-5.0758362-83.1018372-16.4254456-83.1018372-57.4789276c0-37.8658295,31.9169617-60.443222,85.4164124-60.443222c60.1183777,0,89.8425293,20.851593,93.6189575,65.6408691C371.2601013,223.2728119,368.839325,226.5157471,365.5220642,226.4895782z"/></svg>
                            v16.3.0
                        </span>
                        via
                        <span class="text-purple-500">
                            <svg viewBox="0 0 512 512" class="inline w-4 h-4 fill-current"><path d="M170.322 349.808c-2.4-15.66-9-28.38-25.020-34.531-6.27-2.4-11.7-6.78-17.88-9.54-7.020-3.15-14.16-6.15-21.57-8.1-5.61-1.5-10.83 1.020-14.16 5.94-3.15 4.62-0.87 8.97 1.77 12.84 2.97 4.35 6.27 8.49 9.6 12.57 5.52 6.78 11.37 13.29 16.74 20.161 5.13 6.57 9.51 13.86 8.76 22.56-1.65 19.080-10.29 34.891-24.21 47.76-1.53 1.38-4.23 2.37-6.21 2.19-8.88-0.96-16.95-4.32-23.46-10.53-7.47-7.11-6.33-15.48 2.61-20.67 2.13-1.23 4.35-2.37 6.3-3.87 5.46-4.11 7.29-11.13 4.32-17.22-1.41-2.94-3-6.12-5.34-8.25-11.43-10.41-22.651-21.151-34.891-30.63-29.671-23.041-44.91-53.52-47.251-90.421-2.64-40.981 6.87-79.231 28.5-114.242 8.19-13.29 17.73-25.951 32.37-32.52 9.96-4.47 20.88-6.99 31.531-9.78 29.311-7.71 58.89-13.5 89.401-8.34 26.28 4.41 45.511 17.94 54.331 43.77 5.79 16.89 7.17 34.35 5.37 52.231-3.54 35.131-29.49 66.541-63.331 75.841-14.67 4.020-22.68 1.77-31.5-10.44-6.33-8.79-11.58-18.36-17.25-27.631-0.84-1.38-1.44-2.97-2.16-4.44-0.69-1.47-1.44-2.88-2.16-4.35 2.13 15.24 5.67 29.911 13.98 42.99 4.5 7.11 10.5 12.36 19.29 13.14 32.34 2.91 59.641-7.71 79.021-33.721 21.69-29.101 26.461-62.581 20.19-97.831-1.23-6.96-3.3-13.77-4.77-20.7-0.99-4.47 0.78-7.77 5.19-9.33 2.040-0.69 4.14-1.26 6.18-1.68 26.461-5.7 53.221-7.59 80.191-4.86 30.601 3.060 59.551 11.46 85.441 28.471 40.531 26.67 65.641 64.621 79.291 110.522 1.98 6.66 2.28 13.95 2.46 20.971 0.12 4.68-2.88 5.91-6.45 2.97-3.93-3.21-7.53-6.87-10.92-10.65-3.15-3.57-5.67-7.65-8.73-11.4-2.37-2.94-4.44-2.49-5.58 1.17-0.72 2.22-1.35 4.41-1.98 6.63-7.080 25.26-18.24 48.3-36.33 67.711-2.52 2.73-4.77 6.78-5.070 10.38-0.78 9.96-1.35 20.13-0.39 30.060 1.98 21.331 5.070 42.57 7.47 63.871 1.35 12.030-2.52 19.11-13.83 23.281-7.95 2.91-16.47 5.040-24.87 5.64-13.38 0.93-26.88 0.27-40.32 0.27-0.36-15 0.93-29.731-13.17-37.771 2.73-11.13 5.88-21.69 7.77-32.49 1.56-8.97 0.24-17.79-6.060-25.14-5.91-6.93-13.32-8.82-20.101-4.86-20.43 11.91-41.671 11.97-63.301 4.17-9.93-3.6-16.86-1.56-22.351 7.5-5.91 9.75-8.4 20.7-7.74 31.771 0.84 13.95 3.27 27.75 5.13 41.64 1.020 7.77 0.15 9.78-7.56 11.76-17.13 4.35-34.56 4.83-52.081 3.42-0.93-0.090-1.86-0.48-2.46-0.63-0.87-14.55 0.66-29.671-16.68-37.411 7.68-16.29 6.63-33.18 3.99-50.070l-0.060-0.15zM66.761 292.718c2.55-2.4 4.59-6.15 5.31-9.6 1.8-8.64-4.68-20.22-12.18-23.43-3.99-1.74-7.47-1.11-10.29 2.070-6.87 7.77-13.65 15.63-20.401 23.521-1.14 1.35-2.16 2.94-2.97 4.53-2.7 5.19-1.11 8.97 4.65 10.38 3.48 0.87 7.080 1.050 10.65 1.56 9.3-0.9 18.3-2.46 25.23-9v-0.030zM67.541 206.347c-0.030-6.18-5.19-11.34-11.28-11.37-6.27-0.030-11.67 5.58-11.46 11.76 0.27 6.21 5.43 11.19 11.61 11.070 6.24-0.090 11.22-5.19 11.16-11.43l-0.030-0.030z"/></svg>
                            v8.0.7
                        </span>
                    </span>
                </p>
                <p class="p-2 text-white monotalic">
                    $ cat resources/js/LenWoodward.vue
                </p>
                <pre class="pl-4 monotalic"><code class="">&lt;template&gt;
  &lt;p&gt;
    What's up? I'm @{{ firstName }}
    (@{{ pronouns }}),
    and I'm a @{{ occupation }}
  &lt;/p&gt;
&lt;/template&gt;

&lt;script&gt;
  module.exports = {
    data() {
      return {
        firstName: "Len",
        pronouns: "He/Him/His",
        occupation:
          "TALL stack developer",
        _rate: "$100USD/hr",
      };
    }
  };
&lt;/script&gt;</code></pre>
            </div>

            <a name="how" class="sr-only">How to reach me</a>
            <div class="mt-12">
                <p class="p-2 text-white monotalic">
                    $ php artisan contact:details
                </p>
                <pre class="pl-8 overflow-x-scroll text-orange-300 monotalic"><span class="text-blue-300">App\Models\User</span>^ {<span class="text-gray-300">#3510</span>
  #<span class="text-gray-300">attributes</span>: <span class="text-blue-300">array:4</span> [
    "<span class="text-lime-600">tel</span>" => "<span class="font-mono text-lime-300">1.604.992.2418</span>"
    "<span class="text-lime-600">email</span>" => "<span class="font-mono text-lime-300">Len at ProjektGopher dot com</span>"
    "<span class="text-lime-600">twitter</span>" => "<span class="font-mono text-lime-300">@ProjektGopher</span>"
    "<span class="text-lime-600">github</span>" => "<span class="font-mono text-lime-300">ProjektGopher</span>"
  ]
}</pre>
            </div>

            <a name="projects" class="sr-only">Some things I've made</a>
            <div class="mt-16 mb-12">
                <p class="p-2 text-white monotalic">
                    $ ls ~/projects
                </p>
            </div>

        </div>

        <script>
            hljs.highlightAll();

            const list = () => {
                return [
                    'contactDetails()',
                ]
            }

            const contactDetails = () => {
                return {
                    name: 'Len Woodward',
                    phone: '1.604.992.2418',
                    email: 'Len@ProjektGopher.com',
                    twitter: '@ProjektGopher',
                    github: 'https://github.com/ProjektGopher',
                }
            }

            console.log(`Well hello there, follow console-jockey!`)
            console.log(`Why don't you try running the list() command to see what kind of stuff I've left here for you.`)
        </script>
    </body>
</html>
