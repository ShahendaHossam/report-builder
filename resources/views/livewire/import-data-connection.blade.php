<div>
    @include('livewire.aggregation-function-modal')
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Import Data') }}</strong></h1>
            </center>
        </div>
        <!-- <div>
            @if (session()->has('message'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg bg-gray-800 text-green-400">
                {{ session('message') }}
            </div>
            @endif
        </div> -->
        <div class="mt-4">
            <div class="t-card-header">
                <div>
                    <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-dark">DataBases</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="import_data.databases" wire:change="getTables()" name="" id="">
                        <option value="">Select DataBase</option>
                        @foreach($all_databases as $all_database)
                        <option value="{{$all_database}}">{{ $all_database }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid md:grid-cols-2 md:grid-flow-row gap-4 justify-center flex items-end py-5">
                    <div class="">
                        <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-dark">Tables</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="import_data.tables" wire:change="getColumns()" name="" id="">
                            <option value="">Select Tables</option>
                            @foreach($tables as $table)
                            <option value="{{$table}}">{{ $table }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- <div>
                        <button type="submit" class="t-btn bg-green-600 text-white font-bold" data-modal-target="defaultModal" data-modal-toggle="defaultModal">Aggregation Function</button>
                    </div> -->
                    <div>
                        <button type="submit" class="t-btn bg-green-600 text-white font-bold" wire:click="aggregationFunction()">Aggregation Function</button>
                    </div>
                </div>
            </div>
            <div class="t-card-body overflow-x-auto overflow-y-hidden rounded py-6">
                <table class="tailwind-table">
                    <thead class="tailwind-thead">
                        <tr>
                            @foreach ($all_columns as $all_column)
                            <th>{{ $all_column }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $new)
                        <tr>
                            <!-- هنا ال FETCH_ASSOC اللي في ال component بتحتاج مني اني ارجعلها string بس في الحقيقه هي بترجعلي array فعلشان احل المشكله دي لازم اعمل foreach تانيه بت loop بال key وال value علشان اقدر اجيب ال data صح -->
                            @foreach($new as $key => $value)
                            <td>{{ $new[$key] }}</td>
                            @endforeach
                            <!-- ال foreach دي هت loop على كل ال columns بتعتي وتجيبلي ال value بتاعتها -->
                            <!-- @foreach ($all_columns as $column) -->
                            <!-- دي هعملها في حاله واحده لو ال columns اماكنها اتغيرت او هو اصلا مش موجود فعلشان اهندلها هعمل ال if condition دي -->
                            <!-- @if (array_key_exists($column, $new))
                            <td>{{ $new[$column] }}</td>
                            @else
                            <td></td>
                            @endif
                            @endforeach -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
            </div>
        </div>
        <div>
            @if (session()->has('message'))
            <div id="alert-3" class="w-96 flex p-4 mb-4 text-green-700 bg-green-100 rounded-lg bg-gray-800 text-green-400" role="alert">

                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>

                <div class="ml-3 text-sm font-medium">
                    {{ session('message') }}
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 bg-gray-800 text-green-400 hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            @endif
        </div>
    </div>
</div>