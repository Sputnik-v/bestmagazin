<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('This Your Purchase') }}
        </h2>
    </x-slot>

    <div id="modal-window" class="py-12 absolute top-1/3 left-1/3">
        <div class="max-w-7xl w-96 text-center mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm border-2 border-indigo-300 sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    Это проверочный контент!
    </div>
</x-app-layout>
