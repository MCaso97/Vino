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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('category')->nullable();
            $table->text('description');
            $table->decimal('price',4,2);
            $table->string('citta');
            $table->string('regione');
            $table->string('via');
            $table->string('supplier_id')->nullable();  
            //$table->string('idc')->nullable();   
            $table->timestamps();

            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers');
                //->onDelete('cascade');

            /*$table->foreign('idc')
                ->references('id')
                ->on('wine_cellars');
                //->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
