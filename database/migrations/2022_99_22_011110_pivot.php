<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pivot extends Migration
{

    public const SCHEMA = [
        [
            'name' => 'Category and Product Pivot',
            'key' => ['product', 'category']
        ]
    ];

    public function getTableName(array $schema): string
    {
        sort($schema['key']);
        return implode('_', $schema['key']);
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        foreach (self::SCHEMA as $schema) {
            print('Creating table '  . $this->getTableName($schema) . '...' . PHP_EOL);
            Schema::create($this->getTableName($schema), function (Blueprint $table) use ($schema) {
                $table->id();
                foreach ($schema['key'] as $key) {
                    $table->foreignId($key . '_id')->constrained();
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
            Schema::dropIfExists($this->getTableName($schema));
        }
    }
}
