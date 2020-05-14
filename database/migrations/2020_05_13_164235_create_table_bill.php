<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("company_id")->nullable();
            $table->unsignedInteger("invoice")->unique();
            $table->date("date");
            $table->timestamps();

            $table->foreign("company_id")->references("id")->on("company");
        });
        Schema::create('bill_ship', function (Blueprint $table) {
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("bill_id");
            $table->unsignedInteger("qty");
            $table->decimal("price",16,0);
            $table->timestamps();

            $table->foreign("product_id")->references("id")->on("product");
            $table->foreign("bill_id")->references("id")->on("bill");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_ship');
        Schema::dropIfExists('bill');
    }
}
