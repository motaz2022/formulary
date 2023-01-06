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
            $table->text('subGroup')->nullable();
            $table->text('genericName')->nullable();
            $table->text('brandName')->nullable();
            $table->text('dosageForm')->nullable();
            $table->text('price')->nullable();
            $table->text('sideEffects')->nullable();
            $table->text('note')->nullable();
            $table->text('cautions')->nullable();
            $table->text('pregnancy')->nullable();
            $table->text('breastfeeding')->nullable();
            $table->text('storage')->nullable();
            $table->text('reference')->nullable();
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
