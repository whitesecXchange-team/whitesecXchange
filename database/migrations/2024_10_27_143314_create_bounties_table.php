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
        Schema::create('bounties', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('title');
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            $table->text('description');
            $table->integer('reward')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bounties');
    }
};
