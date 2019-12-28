<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenderSeeder::class);
        $this->call(TrainerSeeder::class);
        $this->call(StageSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(DaySeeder::class);
        $this->call(PrivilegeSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(StageSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
