<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebPagesTable extends Migration {
    public function up() {
        Schema::create('web_pages', function (Blueprint $collection) {
            $collection->id();
            $collection->string('url');
            $collection->text('content');
            $collection->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('web_pages');
    }
}
