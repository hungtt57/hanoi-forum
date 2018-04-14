<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreColumnMultipleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('reject_abstract')->nullable();
            $table->text('reject_paper')->nullable();
            $table->text('comment_abstract')->nullable();
            $table->text('comment_paper')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('reject_abstract');
            $table->dropColumn('reject_paper');
            $table->dropColumn('comment_abstract');
            $table->dropColumn('comment_paper');
        });
    }
}
