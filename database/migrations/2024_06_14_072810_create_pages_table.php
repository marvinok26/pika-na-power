<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('order')->default(0);
            $table->boolean('in_top_nav')->default(false);
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('meta')->nullable();
            $table->string('thumbnail')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};



// <?php

// use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Migrations\Migration;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('pages', function (Blueprint $table) {
//             $table->id();
//             $table->string('name');
//             $table->string('slug')->unique();
//             $table->integer('order')->default(0);
//             $table->enum('position', ['upper', 'main', 'page', 'footer', 'footer_sublinks'])
//                 ->default('main');
//             $table->string('description')->nullable();
//             $table->string('keywords')->nullable();
//             $table->string('meta_title')->nullable();
//             $table->string('meta_description')->nullable();
//             $table->boolean('published')->default(false);
//             $table->string('quicklinkparent')->nullable();
//             $table->string('external_link')->nullable();
//             $table->boolean('is_external')->default(false);
//             $table->string('thumbnail')->nullable();
//             $table->unsignedBigInteger('parent_id')->nullable();
//             $table->timestamps();
//             $table->softDeletes();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('pages');
//     }
// };
