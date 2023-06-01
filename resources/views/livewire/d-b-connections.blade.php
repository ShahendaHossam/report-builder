<div>
    <div class="t-card">
        <div class="t-card-header">
            <center><strong>
                    <h1 class="text-3xl mb-5" style="color: black">DataBase Connection</h1>
                </strong></center>
        </div>
        <!-- <div>
            @if (session()->has('message'))
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg bg-gray-800 text-red-400">
                {{ session('message') }}
            </div>
            @endif
        </div> -->

        <div class="">
            <div class="mx-auto w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8">
                <div class="mb-6">
                    <label for="host" class="block mb-2 text-sm font-medium text-gray-900 ">DB Type</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.lazy="dbconnection.db_type" name="" id="">
                        <option value="">Select DataBase</option>
                        <option value="mysql">mySQL</option>
                        <option value="pgsql">PostgreSQL</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="host" class="block mb-2 text-sm font-medium text-gray-900 ">Host</label>
                    <input type="text" id="host" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.lazy="dbconnection.host" required>
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">UserName</label>
                    <input type="text" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.lazy="dbconnection.username" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                    <input type="text" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.lazy="dbconnection.password" required>
                </div>
                <div class="t-card-footer my-6 flex justify-between">
                    <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" wire:click="connection()">Connect</button>
                    <button type="submit" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800" value="" wire:click="cancel()">
                        {{ __('Cancel') }}
                    </button>
                </div>
            </div>
        </div>
        <div >
            @if (session()->has('message'))
            <div id="alert-2" class="w-96 flex p-4 mb-4 text-red-700 bg-red-100 rounded-lg bg-gray-800 text-red-400 " role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                {{ session('message') }}
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 bg-gray-800 text-red-400 hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            @endif
        </div>
    </div>
</div>