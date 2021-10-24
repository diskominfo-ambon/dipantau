<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->datetime('deleted_at')->nullable();
            // * Foreign key: untuk relasi satu ke satu terhadap lokasi pemantauan (marker_point_id).
            $table->foreignId('marker_point_id')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
