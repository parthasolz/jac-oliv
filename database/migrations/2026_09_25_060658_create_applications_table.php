<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');

            $table->string('job_title', 255)
                ->collation('utf8mb4_general_ci');

            $table->string('full_name', 255)
                ->collation('utf8mb4_general_ci');

            $table->string('email', 255)
                ->collation('utf8mb4_general_ci');

            $table->string('phone', 50)
                ->collation('utf8mb4_general_ci');

            $table->string('current_location', 255)
                ->nullable()
                ->collation('utf8mb4_general_ci');

            $table->string('total_experience', 100)
                ->collation('utf8mb4_general_ci');

            $table->string('linkedin', 500)
                ->nullable()
                ->collation('utf8mb4_general_ci');

            $table->text('cover_note')
                ->collation('utf8mb4_general_ci');

            $table->string('resume', 255)
                ->collation('utf8mb4_general_ci');

            $table->timestamp('created_at')
                ->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
