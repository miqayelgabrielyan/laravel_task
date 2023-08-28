<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $websites = [
            ['websiteName'=> 'website1'],
            ['websiteName'=> 'website2'],
            ['websiteName'=> 'website3'],
            ['websiteName'=> 'website4'],
            ['websiteName'=> 'website5'],
        ];
        $users = [
            ['userName'=> 'user1', 'email' => 'user1@gmail.com', 'password' => 'sanfalkjfsad'],
            ['userName'=> 'user2', 'email' => 'user2@gmail.com', 'password' => 'sanfalkjfsad'],
            ['userName'=> 'user3', 'email' => 'user3@gmail.com', 'password' => 'sanfalkjfsad'],
            ['userName'=> 'user4', 'email' => 'user4@gmail.com', 'password' => 'sanfalkjfsad'],
            ['userName'=> 'user5', 'email' => 'user5@gmail.com', 'password' => 'sanfalkjfsad'],
            ['userName'=> 'user6', 'email' => 'user6@gmail.com', 'password' => 'sanfalkjfsad'],
            ['userName'=> 'user7', 'email' => 'user7@gmail.com', 'password' => 'sanfalkjfsad'],
            ['userName'=> 'user8', 'email' => 'user8@gmail.com', 'password' => 'sanfalkjfsad'],
            ['userName'=> 'user9', 'email' => 'user9@gmail.com', 'password' => 'sanfalkjfsad'],
        ];
        $subscriptions = [
            ['userId' => 1, "websiteId" => 2],
            ['userId' => 1, "websiteId" => 5],
            ['userId' => 2, "websiteId" => 1],
            ['userId' => 2, "websiteId" => 4],
            ['userId' => 2, "websiteId" => 5],
            ['userId' => 3, "websiteId" => 1],
            ['userId' => 3, "websiteId" => 2],
            ['userId' => 4, "websiteId" => 3],
            ['userId' => 4, "websiteId" => 4],
            ['userId' => 4, "websiteId" => 5],
            ['userId' => 5, "websiteId" => 2],
            ['userId' => 5, "websiteId" => 4],
            ['userId' => 6, "websiteId" => 1],
            ['userId' => 6, "websiteId" => 3],
            ['userId' => 6, "websiteId" => 5],
            ['userId' => 7, "websiteId" => 2],
            ['userId' => 7, "websiteId" => 3],
            ['userId' => 7, "websiteId" => 4],
            ['userId' => 8, "websiteId" => 1],
            ['userId' => 8, "websiteId" => 3],
            ['userId' => 9, "websiteId" => 2],
            ['userId' => 9, "websiteId" => 4],
        ];


        DB::table('websites')->insert($websites);
        DB::table('users')->insert($users);
        DB::table('subscriptions')->insert($subscriptions);
    }
}
