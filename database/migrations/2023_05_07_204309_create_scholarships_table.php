<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
       
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('grade')->nullable();
            $table->string('grade2')->nullable();
            $table->string('Parent_Income')->nullable();
            $table->string('Slot')->nullable();
            $table->string('deadline')->nullable();
            $table->string('Single_Parent')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Course')->nullable();
            $table->string('Year')->nullable();
            $table->string('Working_Student')->nullable();
            $table->string('Varsity')->nullable();
            $table->string('PWD')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
