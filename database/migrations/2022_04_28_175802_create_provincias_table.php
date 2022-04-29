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
        Schema::create('provincias', function (Blueprint $table) {
            $table->nullableTimestamps();
            $table->softDeletes();
            $table->id();

            # COLUMNS 
            
            $table->string('nombre')->index();
            $table->string('alias',4)->default('')
                ->comment('Alias informal');
            $table->string('iso',5)->default('')->unique()
                ->comment('Alias formal, ISO 3166-2');

            $table->foreignId('pais_id')
                ->constrained('paises')
                ->comment('País al que pertenece la provincia.');

            # INDEX 
            
            $table->unique(['pais_id','nombre']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincias');
    }
};
