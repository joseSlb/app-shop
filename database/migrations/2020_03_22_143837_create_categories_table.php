<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() /** codigo para hacer efectiva la migracion  */
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');
            $table->string('description')->nullable(); //la descripcion puede recibir valores nulos
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() /** operacion contraria al metodo UP - casos de resetear migraciones */
    {
        Schema::dropIfExists('categories');
    }
}


/**
 *  php artisan migrate:rollback = el ulitmo batch
 * php artisan migrate : reset = todas las migraciones
 * 
 * 
 */