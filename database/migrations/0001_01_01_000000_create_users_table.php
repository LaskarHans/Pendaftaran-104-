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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->timestamps();
        });


        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Nama Siswa
            $table->string('school_name'); // Asal Sekolah
            $table->enum('gender',['L','P']); // Kelamin
            $table->string('grade'); // Kelas
            $table->string('number'); // No Telp Siswa
            $table->string('email'); // Email Siswa
            $table->date('birthday'); // Tanggal Lahir
            $table->string('parent_name'); // Nama Orang Tua
            $table->string('parent_number'); // No Telp Orang Tua
            $table->string('address'); // Alamat Tempat Tinggal
            $table->timestamps(); // Informasi Waktu Data
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
