<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Output Type') }}</strong></h1>
            </center>
        </div>
        <div class="mx-6">
            <div class="t-card-body overflow-x-auto overflow-y-hidden rounded py-6 grid gap-2 mb-2 md:grid-cols-2 my-20" x-data="{ query_list: false , query_table: false , query_array: false , query_mix: false}">
                <div class="items-center justify-center">
                    <div class="flex items-center my-6 mx-2">
                        <input x-on:click="query_list = ! query_list" id="default-radio-1" type="radio" value="query_list_data" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100" wire:model="query_list_data">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">List</label>
                    </div>
                    <div class="flex items-center my-6 mx-2">
                        <input x-on:click="query_array = ! query_array" id="default-radio-1" type="radio" value="query_array_data" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100" wire:model="query_array_data">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">Array</label>
                    </div>
                    <div class="flex items-center my-6 mx-2">
                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">Result Field</label>
                    </div>
                    <div class="flex items-center my-6 mx-2">
                        <input x-on:click="query_table = ! query_table" id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100" wire:model="query_table">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">Table</label>
                    </div>
                    <div class="flex items-center my-6 mx-2">
                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">Plots</label>
                    </div>
                    <div class="flex items-center my-6 mx-2">
                        <input x-on:click="query_mix = ! query_mix" id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100" wire:model="query_mix">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">Mix</label>
                    </div>
                </div>
                <div class="max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow bg-gray-100 border-gray-100">
                    <template x-if="query_list">
                        <div>
                            @livewire('query-list', ['dbconnection' => $dbconnection , 'import_data' => $import_data , 'aggregation_function' => $aggregation_function])
                        </div>
                    </template>
                    <template x-if="query_table">
                        <div>
                            @livewire('query-table', ['dbconnection' => $dbconnection , 'import_data' => $import_data , 'aggregation_function' => $aggregation_function])
                        </div>
                    </template>
                    <template x-if="query_array">
                        <div>
                            @livewire('query-array', ['dbconnection' => $dbconnection , 'import_data' => $import_data , 'aggregation_function' => $aggregation_function])
                        </div>
                    </template>
                    <template x-if="query_mix">
                        <div>
                            @livewire('query-mix', ['dbconnection' => $dbconnection , 'import_data' => $import_data , 'aggregation_function' => $aggregation_function])
                        </div>
                    </template>
                </div>
            </div>
            <div class="card-footer">
            <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" wire:click="next()">Next</button>
            </div>
        </div>
    </div>
</div>