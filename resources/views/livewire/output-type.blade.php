<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Output Type') }}</strong></h1>
            </center>
        </div>
        <div class="mx-6">
            <div class="t-card-body overflow-x-auto overflow-y-hidden rounded py-6 grid gap-2 mb-2 md:grid-cols-2 my-20" x-data="{ query_list: false , query_table: false}">
                <div class="items-center justify-center">
                    <div class="flex items-center my-6 mx-2">
                        <input x-on:click="query_list = ! query_list" id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">List</label>
                    </div>
                    <div class="flex items-center my-6 mx-2">
                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">Array</label>
                    </div>
                    <div class="flex items-center my-6 mx-2">
                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">Result Field</label>
                    </div>
                    <div class="flex items-center my-6 mx-2">
                        <input x-on:click="query_table = ! query_table" id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">Table</label>
                    </div>
                    <div class="flex items-center my-6 mx-2">
                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">Plots</label>
                    </div>
                    <div class="flex items-center my-6 mx-2">
                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-100">
                        <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-900 text-dark">Mix</label>
                    </div>
                </div>
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

                
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>