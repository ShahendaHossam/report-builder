<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_connections', function (Blueprint $table) {
            $table->id();
            $table->string('db_type',255)->nullable();
            $table->string('host',255)->nullable();
            $table->string('username',255)->nullable();
            $table->string('password',255)->nullable();
            $table->string('databases',255)->nullable();
            $table->string('tables',255)->nullable();
            $table->unsignedBigInteger('import_data_id')->nullable();
            $table->unsignedBigInteger('aggregation_function_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            $table->softDeletesTz('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_connections');
    }
};
