<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('List') }}</strong></h1>
            </center>
        </div>
        <div class="text-center mt-8">
            <p class="px-6 py-3">{{ $this->aggregation_function->affected_column }}</p>
            <ul>
                @foreach($query_list as $group_by_column)
                @foreach($group_by_column as $key => $value)
                <li>{{ $group_by_column[$key] }}</li>
                @endforeach
                @endforeach
            </ul>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>