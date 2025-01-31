<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    


    public function up():void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            $table->decimal('price', 8, 2);
            $table->date('start_date');
            $table->date('end_date');
            $table->text('details')->nullable();
            $table->string('instructor_name', 250);
            $table->timestamps(); 
            $table->softDeletes(); 
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
