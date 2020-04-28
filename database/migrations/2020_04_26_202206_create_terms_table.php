<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200)->index('name');
            $table->string('slug', 200)->index('slug');
            $table->integer('term_group')->default('0');
            $table->timestamps();
        });
        Schema::create('blog_entry_term', function (Blueprint $table) {
            $table->bigInteger('blog_entry_id')->unsigned();
            $table->bigInteger('term_id')->unsigned();
            $table->integer('term_order')->unsigned();

            $table->foreign('blog_entry_id')
                ->references('id')->on('blog_entries')
                ->onDelete('cascade');
            $table->foreign('term_id')
                ->references('id')->on('terms')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_entry_term');
        Schema::dropIfExists('terms');
    }
}
