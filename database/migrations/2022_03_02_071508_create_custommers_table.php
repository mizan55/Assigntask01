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
        Schema::create('custommers', function (Blueprint $table) {
            $table->bigIncrements('custommer_id')->comment('pK');
            $table->string('custommer_name')->unique();
            $table->string('custommer_email')->unique();
            $table->string('custommer_mobile');
            $table->string('custommer_Address');
            $table->string('custommer_image')->nullable($value = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custommers');
    }
};
