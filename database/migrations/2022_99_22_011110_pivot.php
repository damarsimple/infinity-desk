<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pivot extends Migration
{

    public const SCHEMA = [
        [
            'name' => 'Category and Product Pivot',
            'key' => ['product_id', 'category_id']
        ]
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        foreach (self::SCHEMA as $schema) {
            Schema::create($schema['name'], function (Blueprint $table) use ($schema) {
                $table->id();

                foreach ($schema['key'] as $key) {
                    $table->foreignId($key)->constrained();
                }

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        foreach (self::SCHEMA as $schema) {
            Schema::dropIfExists($schema['name']);
        }
    }
}
