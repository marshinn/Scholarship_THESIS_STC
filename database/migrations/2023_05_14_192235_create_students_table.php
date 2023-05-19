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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('scholarship_id');
            $table->string('Fname')->nullable();
            $table->string('Lname')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Birthdate')->nullable();
            $table->string('Religion')->nullable();
            $table->string('Mobile_number')->nullable();
            $table->string('Nationality')->nullable();
            $table->string('School_ID')->nullable();

 /**
     * Parent Information
     */

            $table->string('Father_name')->nullable();
            $table->string('Father_job')->nullable();
            $table->string('Father_number')->nullable();
            $table->string('Present_Address')->nullable();
            $table->string('Mother_name')->nullable();
            $table->string('Mother_job')->nullable();
            $table->string('Parent_Nationlity')->nullable();
            $table->string('Permanent_Address')->nullable();
            $table->string('Parent_Income')->nullable();
            

            /**
     * Academic Background
     */
            $table->string('School_Name')->nullable();
            $table->string('Honor')->nullable();
            $table->string('GPA')->nullable();
            $table->string('School_Address')->nullable();
            $table->string('Year_Course')->nullable();


            $table->string('Student_Image')->nullable();
            $table->string('Parent_Image')->nullable();
            $table->string('Status')->default('Pending')->nullable();
            $table->timestamps();
           
           
      


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('scholarship_id')->references('id')->on('scholarships')->onDelete('cascade');
          
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
