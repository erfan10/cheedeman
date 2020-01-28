<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(MediaSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
