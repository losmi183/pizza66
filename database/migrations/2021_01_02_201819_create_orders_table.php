<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();

            $table->integer('suma');
            $table->string('status')->default('active');
            $table->unsignedSmallInteger('time')->default('30');

            $table->string('ime');
            $table->string('prezime')->nullable();
            $table->string('email')->nullable();
            $table->string('telefon');
            $table->string('adresa');
            $table->string('mesto')->nullable();
            $table->text('napomene')->nullable();


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
        Schema::dropIfExists('orders');
    }
}
