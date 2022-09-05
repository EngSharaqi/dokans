<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\CategoryTableSeeder;
use Database\Seeders\DomainTableSeeder;
use Database\Seeders\TermTableSeeder;
use Database\Seeders\MetaTableSeeder;
use Database\Seeders\PostCategoryTableSeeder;
use Database\Seeders\MenuTableSeeder;
use Database\Seeders\AttributeTableSeeder;
use Database\Seeders\StockTableSeeder;
use Database\Seeders\MediaTableSeeder;
use Database\Seeders\PostMediaTableSeeder;
use Database\Seeders\UserOptionTableSeeder;
use Database\Seeders\GetwaysTableSeeder;
use Database\Seeders\PriceTableSeeder;
use Database\Seeders\TermOptionTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
             UserTableSeeder::class,
             CategoryTableSeeder::class,
             DomainTableSeeder::class,
             TermTableSeeder::class,
             MetaTableSeeder::class,
             PostCategoryTableSeeder::class,
             MenuTableSeeder::class,
             AttributeTableSeeder::class,
             StockTableSeeder::class,
             MediaTableSeeder::class,
             PostMediaTableSeeder::class,
             UserOptionTableSeeder::class,
             GetwaysTableSeeder::class,
             PriceTableSeeder::class,
             TermOptionTableSeeder::class,
        ]);
        //$this->call(Database\Seeders\CategoryTableSeeder::class);
    }
}
