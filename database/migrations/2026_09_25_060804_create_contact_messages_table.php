<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name', 100)
                ->collation('utf8mb4_general_ci');

            $table->string('last_name', 100)
                ->collation('utf8mb4_general_ci');

            $table->string('email', 150)
                ->collation('utf8mb4_general_ci');

            $table->string('phone', 30)
                ->collation('utf8mb4_general_ci');

            $table->string('inquiry_type', 100)
                ->collation('utf8mb4_general_ci');

            $table->text('message')
                ->collation('utf8mb4_general_ci');

            $table->timestamp('created_at')
                ->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
