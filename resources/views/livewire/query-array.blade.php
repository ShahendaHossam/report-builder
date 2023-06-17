<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Array') }}</strong></h1>
            </center>
        </div>
        <div class="flex justify-center mt-8">
            <div>
                <?php echo '<pre>' ?>
               <?php print_r($query_array) ?>
               <?php echo "</pre>" ?>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>