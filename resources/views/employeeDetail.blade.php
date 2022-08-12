<x-app-layout>
    <x-slot name="header">
        <a href="{{url()->previous()}}">
            <button type="button"
                    class="inline-block mr-2 items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Back
            </button>
        </a>

        <h2 class="font-semibold inline-block text-xl text-gray-800 leading-tight">
            {{ __('Manage Employee') }}
        </h2>
    </x-slot>


    <div class="py-12 max-w-7xl mx-auto">

    </div>

</x-app-layout>


