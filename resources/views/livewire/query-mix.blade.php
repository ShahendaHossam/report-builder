<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Mix') }}</strong></h1>
            </center>
        </div>
        <div class="text-center mt-8">
            <h4>{{ __('List') }}</h4>
            <p class="px-6 py-3">{{ $this->aggregation_function->affected_column }}</p>
            <ul>
                @foreach($query_mix as $group_by_column)
                @foreach($group_by_column as $key => $value)
                <li>{{ $group_by_column[$key] }}</li>
                @endforeach
                @endforeach
            </ul>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <h4>{{ __('Table') }}</h4>
            <table class="w-full text-sm text-left text-gray-500 text-dark py-10">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-300 text-dark text-center">
                    <tr>
                        <th class="px-6 py-3">{{ $this->aggregation_function->affected_column }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($query_mix as $group_by_column)
                    <tr class="bg-white border-b bg-gray-100 border-gray-200 hover:bg-gray-50 hover:bg-gray-300">
                        @foreach($group_by_column as $key => $value)
                        <td>{{ $group_by_column[$key] }}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex justify-center mt-8">
        <h4>{{ __('Array') }}</h4>
            <div>
                <?php echo '<pre>' ?>
                <?php print_r($query_mix) ?>
                <?php echo "</pre>" ?>
            </div>
            <div class="card-footer">
            </div>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>