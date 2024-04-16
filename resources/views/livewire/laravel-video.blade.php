<div class="relative aspect-video border-2 border-gray-800 rounded-lg shadow-xl">
    @if($this->validateCodeword())
        {{-- <iframe src="https://www.youtube.com/embed/ImtZ5yENzgE" title="Len Woodward's Laravel Job Application" class="w-full h-full" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900 to-transparent"></div>
            <div class="relative p-4 w-4/5 h-2/5 rounded-xl shadow-xl bg-red-50">
                <p class="text-red-600 font-thin text-xl">
                    Ok... This is a little embarrassing, but I don't have a video to show you.
                    I thought I'd have it done before you got here, but I'm still working on it.
                    Can you try again tomorrow?
                </p>
            </div>
        </div>
        <img src="{{ @asset('img/laravel-video-still.jpg') }}" alt="Laravel Video" class="w-full h-96 object-cover rounded-t-lg backdrop-blur-xl" />
    @else
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900 to-transparent"></div>
            <div class="relative p-4 w-4/5 h-2/5 rounded-xl shadow-xl bg-red-50">
                <label for="codeword" class="text-red-600 font-semibold font-mono text-2xl">What's the secret codeword?</label>
                <input type="text" id="codeword" wire:model="codeword" wire:keydown.enter="showVideo" class="w-4/5 h-12 px-4 mt-6 text-2xl font-semibold font-mono text-center text-red-600 bg-red-100 border-2 border-red-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300" />
                <button wire:click="showVideo" class="absolute -right-6 -bottom-6 flex items-center justify-center w-16 h-16 text-white bg-red-600 rounded-full shadow-xl">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3.00003C3.89543 3.00003 3 3.89546 3 5.00003V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5.00003C21 3.89546 20.1046 3.00003 19 3.00003H5Z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 15L15 12L10 9V15Z"></path>
                    </svg>
                </button>
            </div>
        </div>
        <img src="{{ @asset('img/laravel-video-still.jpg') }}" alt="Laravel Video" class="w-full h-96 object-cover rounded-t-lg backdrop-blur-xl" />
    @endif
</div>
