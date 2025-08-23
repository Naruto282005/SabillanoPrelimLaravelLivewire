<div class = "border-2 border-black-500/50 rounded-xl shadow-2xl/90 bg-white p-8 ">
    {{-- Conditionally show the success message if 'subscribed' is true --}}
    @if ($subscribed)
        <div
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 3000)"
            x-transition
            class="p-4 mb-4 text-lg text-black-800 rounded-lg bg-green-300"
            role="alert"
        >
            ✅ Matagumpay kang naka-subscribe!🫰🤙👉👌💦
        </div>
    @endif

    {{-- The form calls the 'save' method on submission --}}
    <form wire:submit="save" novalidate>

        <div class="mb-4">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Ngalan:</label>
            {{-- wire:model.blur validates when the user leaves the input field --}}
            <input type="text" id="name" wire:model.blur="name" class="bg-gray-50 border border-gray-500 text-gray-10000 text-lg rounded-4xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            @error('name') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Sulatroniko:</label>
            <input type="email" id="email" wire:model.blur="email" class="bg-gray-50 border border-gray-500 text-gray-10000 text-lg rounded-4xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="text-white bg-green-700 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-2xl text-md px-5 py-2.5 text-center">
            Magpasa
        </button>

    </form> 
</div>