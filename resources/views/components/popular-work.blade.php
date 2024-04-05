<a id="popular" class="sr-only">Popular Work</a>
{{-- tighten yellow #ffaa30 --}}
<div class="pb-48 text-center text-gray-700 md:pb-72" style="background-color: #ffaa30;">
  <svg class="w-full h-24 mb-48 transform rotate-180 md:mb-72 text-pink-200" viewBox="0 0 1440 128" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1440 79.6584C1410.22 98.8649 1023.24 130.442 773.857 108.956C441.094 80.2875 364.84 -70.7376 0 40.1062V128H1440V79.6584Z" fill="currentcolor"/>
  </svg>  

  <span class="inline-block mx-auto mb-24 md:tracking-widest max-w-xs sm:max-w-5xl">
      <span class="text-4xl font-bold md:text-5xl lg:text-6xl">
        Wanna checkout
        <span class="text-gray-500">(pun intended)</span>
        some of my more popular work?
      </span>
  </span>

  <div class="w-4/5 max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 p-4 sm:p-8 gap-8">
    <x-featured-php-project-card :project="App\Models\FeaturedPhpProject::where(['org' => 'ProjektGopher', 'repo' => 'whisky'])->sole()">
        <img src="https://github.com/ProjektGopher/whisky/blob/main/art/logo.svg?raw=true" alt="whisky logo" class="w-full mx-auto" />
    </x-featured-php-project-card>

    <x-featured-php-project-card :project="App\Models\FeaturedPhpProject::where(['org' => 'ProjektGopher', 'repo' => 'laravel-ffmpeg-tools'])->sole()">
      <span class="text-5xl font-serif text-black mt-8">Laravel FFMpeg Tools</span>
      <div class="w-4/5 opacity-30 flex justify-around mx-auto">
        <x-logos.laravel class="h-32" />
        <x-logos.ffmpeg class="h-32" />
      </div>
    </x-featured-php-project-card>
  </div>

  <p class="mt-16 px-4 text-gray-800 max-w-3xl leading-loose text-xl font-thin mx-auto">
    By the way, these cards are updated automatically every day using the
    GitHub and Packagist APIs, without using a database. I don't have to
    do anything to keep them up-to-date. 😎  If you'd like to see how I
    structured this feature, check out
    <a href="https://github.com/ProjektGopher/LenWoodward_com/pull/4" target="_blank" class="text-green-600 underline font-semibold">this PR</a>.
  </p>
</div>
