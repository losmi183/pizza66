<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();

            $table->unsignedTinyInteger('day')->nullable();
            $table->unsignedTinyInteger('fixed')->default(0);

            $table->string('old_price')->nullable();
            $table->string('new_price')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->default('active');

            $table->text('image');
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
        Schema::dropIfExists('actions');
    }
}
