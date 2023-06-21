<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'role' => 'Admin',
        ]);

        DB::table('users')->insert([
            'nama' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'role' => 'User',
        ]);

        DB::table('tickets')->insert([
            'title' => 'Vending Machine GKB 4 Rusak',
            'category' => 'Sarana dan Prasana',
            'description' => 'Vending machine pada GKB 4, tidak dapat mengeluarkan minuman',
            'priority_id' => 5,
            'status_id' => 5,
            'user_id' => 2,
            'created_at' => date('Y-m-d'),
        ]);

        DB::table('ticket_responses')->insert([
            'message' => 'Dear User yang terhormat, maaf atas ketidak nyamanan anda. Sarana dan Prasana tersebut akan kami tindak lanjuti',
            'ticket_id' => 1,
            'admin_id' => 1,
            'created_at' => date('Y-m-d'),
        ]);

        DB::table('knowledges')->insert([
            'ticket_id' => 1,
            'ticket_response_id' => 1,
        ]);

        DB::table('statues')->insert([
            'title' => 'Open',
            'description' => 'Tiket atau permintaan layanan baru yang telah diterima dan belum ditangani.',
        ]);
        DB::table('statues')->insert([
            'title' => 'In Progress',
            'description' => 'Tiket sedang dalam proses penanganan oleh tim support.',
        ]);
        DB::table('statues')->insert([
            'title' => 'On Hold',
            'description' => 'Tiket ditunda penanganannya karena alasan tertentu, seperti menunggu informasi tambahan dari pelanggan atau masalah yang membutuhkan koordinasi lebih lanjut.',
        ]);
        DB::table('statues')->insert([
            'title' => 'Resolved',
            'description' => ' Tiket telah diselesaikan dan masalah telah teratasi.',
        ]);
        DB::table('statues')->insert([
            'title' => 'Closed',
            'description' => 'Tiket telah ditutup dan tidak memerlukan tindakan lebih lanjut.',
        ]);
        DB::table('statues')->insert([
            'title' => 'Re Open',
            'description' => 'Tiket telah ditutup dan dibuka kembali oleh peminta.',
        ]);

        DB::table('priorities')->insert([
            'title' => 'Urgent',
            'description' => 'Tiket yang membutuhkan penanganan segera karena berdampak besar pada bisnis atau pengguna.',
        ]);
        DB::table('priorities')->insert([
            'title' => 'High',
            'description' => 'Tiket dengan kepentingan yang tinggi dan memerlukan respons dan penyelesaian dalam waktu singkat.',
        ]);
        DB::table('priorities')->insert([
            'title' => 'Medium',
            'description' => ' Tiket dengan tingkat kepentingan yang sedang dan membutuhkan respons dan penyelesaian dalam waktu wajar.',
        ]);
        DB::table('priorities')->insert([
            'title' => 'Low',
            'description' => ' Tiket dengan tingkat kepentingan yang rendah atau permintaan non-kritis yang bisa ditangani dengan fleksibilitas waktu yang lebih longgar.',
        ]);
        DB::table('priorities')->insert([
            'title' => 'Normal',
            'description' => 'Tiket dengan tingkat kepentingan standar atau default.',
        ]);
    }
}
