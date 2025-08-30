{{-- Main container with Tailwind CSS for styling (border, shadow, padding, etc.). --}}
<div class = "border-2 border-black-500/50 rounded-xl shadow-2xl/100 bg-white p-8 ">
    
    {{-- This block is only shown if the '$subscribed' property is true in the component. --}}
    @if ($subscribed)
        {{-- This is a self-hiding success message powered by Alpine.js. --}}
        <div
            x-data="{ show: true }" {{-- Initialize a 'show' variable. --}}
            x-show="show" {{-- Control visibility using the 'show' variable. --}}
            x-init="setTimeout(() => show = false, 3000)" {{-- After 3 seconds, set 'show' to false. --}}
            x-transition {{-- Add a smooth fade effect. --}}
            class="p-4 mb-4 text-lg text-black-800 rounded-lg bg-green-300"
            role="alert"
        >
            ✅ Matagumpay kang naka-subscribe!🫰🤙👉👌💦
        </div>
    @endif

    {{-- On submit, this form calls the 'save' method in your Livewire component without a page reload. --}}
    <form wire-submit="save" novalidate>

        <div class="mb-4">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Ngalan:</label>
            {{-- 
                `wire:model.blur` syncs this input with the '$name' property in your component. 
                The `.blur` modifier triggers validation when you click away from the input.
            --}}
            <input type="text" id="name" wire:model.blur="name" class="bg-gray-50 border border-gray-500 text-gray-10000 text-lg rounded-4xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            
            {{-- If a validation error for 'name' exists, display it here. --}}
            @error('name') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Sulatroniko:</label>
            {{-- Syncs this input with the '$email' property. --}}
            <input type="email" id="email" wire:model.blur="email" class="bg-gray-50 border border-gray-500 text-gray-10000 text-lg rounded-4xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            
            {{-- If a validation error for 'email' exists, display it here. --}}
            @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
        </div>

        {{-- A standard submit button that triggers the `wire:submit` action on the form. --}}
        {{-- Centering container for the button --}}
         <button type="submit" class="text-white bg-green-700 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Magpasa</button>