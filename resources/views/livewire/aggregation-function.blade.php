<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Aggregation Function ') }}</strong></h1>
            </center>
        </div>
        <div class="flex justify-center mt-8">
            <div class="">
                <div class="form-group">
                    <label for="reviewer_comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">{{ __('Affected Column') }}</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="aggregation_function.affected_column" name="" id="">
                        <option value="">Select Column</option>
                        @foreach($all_columns as $all_column)
                        <option value="{{$all_column}}">{{$all_column}}</option>
                        @endforeach
                    </select>
                    @error('reviewer_comment') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="reviewer_comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">{{ __('Where') }}</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="aggregation_function.where_column" name="" id="">
                        <option value="">Select Column</option>
                        @foreach($all_columns as $all_column)
                        <option value="{{$all_column}}">{{$all_column}}</option>
                        @endforeach
                    </select>
                    @error('reviewer_comment') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="reviewer_comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">{{ __('Group By') }}</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="aggregation_function.groupby_column" wire:change="setFunction" name="" id="">
                        <option value="">Select Column</option>
                        @foreach($all_columns as $all_column)
                        <option value="{{$all_column}}">{{$all_column}}</option>
                        @endforeach
                    </select>
                    @error('reviewer_comment') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
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
            </div>
            <!-- <div class="flex items-center justify-center my-4">
                <button type="submit" class="t-btn bg-green-600 text-white font-bold" wire:click="setFunction()">Aggregation Function</button>
            </div> -->

            <!-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 text-dark py-10">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-300 text-dark text-center">
                        <tr>
                            <th class="px-6 py-3">{{ $this->aggregation_function->affected_column }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($group_by_columns as $group_by_column)
                        <tr class="bg-white border-b bg-gray-100 border-gray-200 hover:bg-gray-50 hover:bg-gray-300">
                            @foreach($group_by_column as $key => $value)
                            <td>{{ $group_by_column[$key] }}</td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> -->
            <div class="card-footer">
            </div>
        </div>
        <div class="flex items-end justify-center my-4">
                <button type="submit" class="t-btn bg-green-600 text-white font-bold" wire:click="next()">Next</button>
            </div>
    </div>
</div>