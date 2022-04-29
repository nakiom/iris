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
        Schema::create('calles', function (Blueprint $table) {
            $table->nullableTimestamps();
            $table->softDeletes();
            $table->id();
            
            # COLUMNS 

            $table->string('nombre')->index();
            
            $table->foreignId('localidad_id')
                ->constrained('localidades')
                ->comment('Localidad a la que pertenece la calle.');

            # INDEX 
                
            $table->unique(['localidad_id','nombre']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calles');
    }
};
