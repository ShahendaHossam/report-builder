<!-- Main modal -->
<div wire:ignore.self id="defaultModal" tabindex="-1" aria-hidden="true" class="bg-opacity-50 bg-gray-600 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-dark">
                    {{ __('Aggregation Functions') }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form action="">
                    <input type="hidden" wire:model.lazy="test_case_step_id">
                    <div class="modal-body">
                        <div class="form-group my-4">
                            <label for="reviewer_comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">{{ __('Affected Column') }}</label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="affected_column" name="" id="">
                                <option value="">Select Column</option>
                                @foreach($all_columns as $all_column)
                                <option value="{{$all_column}}">{{$all_column}}</option>
                                @endforeach
                            </select>
                            @error('reviewer_comment') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group my-4">
                            <label for="reviewer_comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">{{ __('Where') }}</label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="where_column" name="" id="">
                                <option value="">Select Column</option>
                                @foreach($all_columns as $all_column)
                                <option value="{{$all_column}}">{{$all_column}}</option>
                                @endforeach
                            </select>
                            @error('reviewer_comment') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group my-4">
                            <label for="reviewer_comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">{{ __('Group By') }}</label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="groupby_column" wire:change="setFunction" name="" id="">
                                <option value="">Select Column</option>
                                @foreach($all_columns as $all_column)
                                <option value="{{$all_column}}">{{$all_column}}</option>
                                @endforeach
                            </select>
                            @error('reviewer_comment') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group my-4">
                            <label for="reviewer_comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">{{ __('Statistical Function') }}</label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="" name="" id="">
                                <option value="">Select an Option</option>
                                <option value="">Sum</option>
                                <option value="">Average</option>
                                <option value="">Minimum</option>
                                <option value="">Maximum</option>
                                <option value="">Count</option>
                            </select>
                            @error('reviewer_comment') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="t-card-body overflow-x-auto overflow-y-hidden rounded py-6">
                            <table class="tailwind-table">
                                <thead class="tailwind-thead">
                                    <tr>
                                        @foreach($group_by_columns as $group_by_column)
                                        @foreach($group_by_column as $key => $value)
                                        <th>{{ $key }}</th>
                                        @endforeach
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($group_by_columns as $group_by_column)
                                    <tr>
                                        @foreach($group_by_column as $key => $value)
                                        <td>{{ $group_by_column[$key] }}</td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200">
                <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ __('Close') }}</button>
                <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Set Function') }}</button>
            </div>
        </div>
    </div>
</div>