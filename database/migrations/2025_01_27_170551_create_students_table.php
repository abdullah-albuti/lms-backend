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
        $table->string('name', 250);
        $table->decimal('price', 8, 2);
        $table->date('start_date');
        $table->date('end_date');
        $table->text('details')->nullable();
        $table->string('instructor_name', 250);
        $table->timestamps(); // This automatically adds created_at and updated_at
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
