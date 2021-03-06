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
        $this->call(RoleSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(DisciplinaSeeder::class);
        $this->call(QuestaoSeeder::class);
    }
}
