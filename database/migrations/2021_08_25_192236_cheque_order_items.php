<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChequeOrderItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheque_order_items', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cheque_id');
            $table->foreign('cheque_id')
                    ->references('id')
                    ->on('cheques')
                    ->cascadeOnUpdate();

            $table->unsignedBigInteger('product_option_id');
            $table->foreign('product_option_id')
                    ->references('id')
                    ->on('product_options')
                    ->cascadeOnUpdate();

            $table->smallInteger('quantity');

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
        Schema::dropIfExists('cheque_order_items');
    }
}
