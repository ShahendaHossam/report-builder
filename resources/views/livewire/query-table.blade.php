<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Table') }}</strong></h1>
            </center>
        </div>
        <div class="flex justify-center mt-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 text-dark py-10">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-300 text-dark text-center">
                        <tr>
                            <th class="px-6 py-3">{{ $this->aggregation_function->affected_column }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($query_table as $group_by_column)
                        <tr class="bg-white border-b bg-gray-100 border-gray-200 hover:bg-gray-50 hover:bg-gray-300">
                            @foreach($group_by_column as $key => $value)
                            <td>{{ $group_by_column[$key] }}</td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>