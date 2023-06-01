<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1><strong class="text-2xl">{{ __('Report Builder') }}</strong></h1>
            </center>
        </div>
        <div class="mt-4">
            <div class="t-card-header">
                <center><span><strong>{{ __('Option Buttons') }}</strong></span></center>
                {{-- @include('layouts.headers.search') --}}
            </div>
            <div class="t-card-body overflow-x-auto">
                <div class="grid grid-cols-2 gap-20">
                    <button class="my-5 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-base px-6 py-10 text-center dark:bg-gray-500 dark:hover:bg-gray-700 dark:focus:ring-gray-800" wire:click="excel">{{ __('Excel') }}</button>
                    <a type="button" class="my-5 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-base px-6 py-10 text-center dark:bg-gray-500 dark:hover:bg-gray-700 dark:focus:ring-gray-800" href="">{{ __('Query Builder') }} <i class="fas fa-plus"></i></a>
                    <button class="my-5 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-base px-6 py-10 text-center dark:bg-gray-500 dark:hover:bg-gray-700 dark:focus:ring-gray-800" wire:click="db_connection">{{ __('DB Table') }} </button>
                    <a type="button" class="my-5 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-base px-6 py-10 text-center dark:bg-gray-500 dark:hover:bg-gray-700 dark:focus:ring-gray-800" href="">{{ __('Template') }} <i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>