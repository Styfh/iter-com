<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('plan_id')
                ->references('id')
                ->on('plan_headers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_categories');
    }
}
