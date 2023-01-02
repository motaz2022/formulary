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
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->text('group')->nullable();
            $table->text('subgroup')->nullable();
            $table->text('scientificname')->nullable();
            $table->text('tradename')->nullable();
            $table->text('price')->nullable();
            $table->text('se')->nullable();
            $table->text('note')->nullable();
            $table->text('cautions')->nullable();
            $table->boolean('availability')->default(false);
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
        Schema::dropIfExists('drugs');
    }
};
