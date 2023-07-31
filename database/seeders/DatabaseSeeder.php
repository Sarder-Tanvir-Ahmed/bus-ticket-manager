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
        //  Bus routes
        DB::table('bus_routes')->insert([
            ['id' => 1, 'route_name' => 'Dhaka', 'created_at' => null, 'updated_at' => null],
            ['id' => 3, 'route_name' => 'Rajshahi', 'created_at' => null, 'updated_at' => null],
            ['id' => 4, 'route_name' => 'Barishal', 'created_at' => null, 'updated_at' => null],
            ['id' => 5, 'route_name' => 'Rangpur', 'created_at' => null, 'updated_at' => null],
        ]);

        // Bus ticket history
        DB::table('bus_company_published_ticket')->insert([
            [
                'id' => 1,
                'b_comp_ticket_from' => 'Dhaka',
                'b_comp_ticket_to' => 'Dhaka',
                'b_comp_ticket_seat' => 2,
                'b_comp_ticket_date' => '2023-07-13 00:21:00',
                'b_comp_ticket_price' => 1000,
                'b_comp_ticket_author_id' => 2,
                'b_comp_ticket_author_name' => 'abc',
                'created_at' => '2023-07-04 12:22:19',
                'updated_at' => '2023-07-04 12:22:19',
            ],
            [
                'id' => 2,
                'b_comp_ticket_from' => 'Dhaka',
                'b_comp_ticket_to' => 'Rajshahi',
                'b_comp_ticket_seat' => 34,
                'b_comp_ticket_date' => '2023-07-05 00:26:00',
                'b_comp_ticket_price' => 1000,
                'b_comp_ticket_author_id' => 2,
                'b_comp_ticket_author_name' => 'abc',
                'created_at' => '2023-07-04 12:26:03',
                'updated_at' => '2023-07-04 12:26:03',
            ],
            [
                'id' => 3,
                'b_comp_ticket_from' => 'Rajshahi',
                'b_comp_ticket_to' => 'Barishal',
                'b_comp_ticket_seat' => 23,
                'b_comp_ticket_date' => '2023-06-30 00:26:00',
                'b_comp_ticket_price' => 1000,
                'b_comp_ticket_author_id' => 2,
                'b_comp_ticket_author_name' => 'abc',
                'created_at' => '2023-07-04 12:26:26',
                'updated_at' => '2023-07-04 12:26:26',
            ],
            [
                'id' => 4,
                'b_comp_ticket_from' => 'Rajshahi',
                'b_comp_ticket_to' => 'Dhaka',
                'b_comp_ticket_seat' => 12,
                'b_comp_ticket_date' => '2023-07-07 19:35:00',
                'b_comp_ticket_price' => 1008,
                'b_comp_ticket_author_id' => 2,
                'b_comp_ticket_author_name' => 'abc',
                'created_at' => '2023-07-06 07:36:14',
                'updated_at' => '2023-07-06 07:36:14',
            ],
            [
                'id' => 5,
                'b_comp_ticket_from' => 'Dhaka',
                'b_comp_ticket_to' => 'Rangpur',
                'b_comp_ticket_seat' => 40,
                'b_comp_ticket_date' => '2023-07-18 08:00:00',
                'b_comp_ticket_price' => 1000,
                'b_comp_ticket_author_id' => 2,
                'b_comp_ticket_author_name' => 'abc',
                'created_at' => '2023-07-09 12:14:53',
                'updated_at' => '2023-07-09 12:14:53',
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'user1',
                'email' => 'user1@bracu.com',
                'email_verified_at' => null,
                'password' => '$2y$10$RbOfJZYo/zPEH4ZqdxkoTu4.QF3P/tm5sUQowgRHbxILF4kyanBQS',
                'remember_token' => null,
                'created_at' => '2023-07-04 08:51:46',
                'updated_at' => '2023-07-04 08:51:46',
                'role' => 'Customer',
            ],
            [
                'id' => 2,
                'name' => 'Greenline',
                'email' => 'abc@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$c5d4Lq1zFIiZhDIIQ2gGxuqK.Glce2vu6ukoymyFkj5VjjrmB9CsS',
                'remember_token' => null,
                'created_at' => '2023-07-04 09:53:09',
                'updated_at' => '2023-07-10 09:00:25',
                'role' => 'Brand',
            ],
        ]);

        // shopping items
        DB::table('shopping_items')->insert([
            ['item_id' => 1001, 'name' => 'Mineral Water', 'price' => 25.00, 'created_at' => null, 'updated_at' => null],
            ['item_id' => 1007, 'name' => 'Chips', 'price' => 25.00, 'created_at' => null, 'updated_at' => null],
            ['item_id' => 1008, 'name' => 'Biscuit', 'price' => 30.00, 'created_at' => null, 'updated_at' => null],
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}