<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(config('blog-eloquent.entries_table'), function (Blueprint $table) {
            $table->dropColumn('meta_tags');
        });
        Schema::table(config('blog-eloquent.entries_table'), function (Blueprint $table) {
            $table->text('meta_tags')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(config('blog-eloquent.entries_table'), function (Blueprint $table) {
            $table->dropColumn('meta_tags');
        });
        Schema::table(config('blog-eloquent.entries_table'), function (Blueprint $table) {
            $table->json('meta_tags')->nullable();
        });
    }
}
