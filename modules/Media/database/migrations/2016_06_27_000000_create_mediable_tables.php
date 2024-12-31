<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediableTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('disk', 32);
            $table->string('directory');
            $table->string('filename');
            $table->string('extension', 32);
            $table->string('mime_type', 128);
            $table->string('aggregate_type', 32)->index();
            $table->integer('size')->unsigned();
            $table->timestamps();

            $table->unique(['disk', 'directory', 'filename', 'extension']);
        });

        Schema::create('mediables', function (Blueprint $table) {
            $table->foreignUuid('media_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->uuidMorphs('mediable');
            $table->string('tag')->index();
            $table->integer('order')->unsigned()->index();

            $table->primary(['media_id', 'mediable_type', 'mediable_id', 'tag']);
            $table->index(['mediable_id', 'mediable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mediables');
        Schema::dropIfExists('media');
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        return config('mediable.connection_name', parent::getConnection());
    }
}
