<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->string('description');
            $table->decimal('value', 10, 2);
            $table->date('due_date');
            $table->integer('installments_qty')->nullable()->default('');
            $table->integer('day');
            $table->integer('month');
            $table->integer('year');
            $table->boolean('recurrent')->nullable()->default(false);
            $table->boolean('fixed_value')->nullable()->default(false);
            $table->boolean('paid')->nullable()->default(false);
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
        Schema::dropIfExists('transactions');
    }
}
