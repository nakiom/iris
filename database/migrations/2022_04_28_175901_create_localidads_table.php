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
        Schema::create('localidades', function (Blueprint $table) {
            $table->nullableTimestamps();
            $table->softDeletes();
            $table->id();
            
            # COLUMNS 

            $table->string('nombre')->index();
            $table->string('codigo_postal',16)->default('');
            $table->string('codigo_area',10)->default('')
                ->comment('Prefijo telefónico local');

            $table->foreignId('distrito_id')
                ->constrained('distritos')
                ->comment('Distrito al que pertenece la localidad.');
            
            # INDEX 

            $table->unique(['distrito_id','nombre']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localidades');
    }
};
