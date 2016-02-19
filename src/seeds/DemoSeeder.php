<?php

use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO: use Faker insted of manual seeding data
        DB::table('demo_items')->insert([
            'slug' => 'test',
            'name' => 'Test',
            'description' => 'My first item test.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
