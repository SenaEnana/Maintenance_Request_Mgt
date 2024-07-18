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
        Schema::create('maintenance_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('technician_id')->constrained();
            $table->unsignedBigInteger('request_type_id');
            $table->text('description');
            $table->enum('status', ['Pending', 'In Progress', 'Completed']);
            $table->timestamps();
            $table->foreign('request_type_id')->references('id')->on('request_types')->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('maintenance_requests');
    }
};
