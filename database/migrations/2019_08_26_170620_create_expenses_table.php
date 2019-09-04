<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('company_id');
            $table->string('category');
            $table->string('currency');
            $table->string('vendor');
            $table->string('date');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('subtotal');
            $table->unsignedBigInteger('tax')->nullable();
            $table->unsignedBigInteger('grand_total');
            $table->timestamps();

            $table->index('company_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
