<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('coffe', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('size');
            $table->string('weight');
            $table->decimal('price', 8, 2);
            $table->json('images')->nullable(); // Thêm cột để lưu trữ đường dẫn ảnh
            $table->string('reviews');
            $table->string('rating');
            // Thêm các trường khác nếu cần thiết

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coffe');
    }
};
