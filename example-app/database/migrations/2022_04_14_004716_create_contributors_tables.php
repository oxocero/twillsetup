<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributorsTables extends Migration
{
    public function up()
    {
        Schema::create('contributors', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('twitter')->nullable();
            $table->string('portfolio_link')->nullable();
            $table->string('linkedin')->nullable();
        });

        Schema::create('contributor_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'contributor');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('contributor_slugs');
        Schema::dropIfExists('contributors');
    }
}
