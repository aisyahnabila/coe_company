<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partnerships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->enum('status',['Submit','Aktif','Batal']);
            $table->string('collaboration_type');
            $table->string('schema');
            $table->text('team');
            $table->integer('fund_amoung');
            $table->string('fund_currency');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable(); // Allow NULL
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partnerships');
    }
};
