<div class="hidden w-64 space-y-4">
    <div>
        <label for="name" class="sr-only">Name</label>
        <input type="text" name="name" id="name"
            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            placeholder="Dave" wire:model.lazy="name">
        @error('name')
        <p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="company" class="sr-only">Company</label>
        <input type="text" name="company" id="company"
            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            placeholder="Tighten" wire:model.lazy="company">
        @error('company')
        <p class="mt-2 text-sm text-red-600" id="company-error">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="message" class="sr-only">Message</label>
        <textarea name="message" id="message"
            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            placeholder="and I think this practical resume is pretty dope." wire:model.lazy="message"></textarea>
        @error('message')
        <p class="mt-2 text-sm text-red-600" id="message-error">{{ $message }}</p>
        @enderror
    </div>

    <div class="hidden">
        <label for="from" class="sr-only">From</label>
        <input type="text" name="from" id="from"
            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            placeholder="London" wire:model.lazy="from">
    </div>

    <button wire:click="send" type="button" class="inline-flex items-center px-4 py-2 text-base font-medium text-white bg-blue-300 border border-transparent rounded-md shadow-sm hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
        Send SMS
    </button>
  
</div>
