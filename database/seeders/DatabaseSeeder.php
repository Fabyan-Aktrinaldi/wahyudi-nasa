<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // User
        $user = User::factory()->create([
            'name' => 'Admin Nasa',
            'email' => 'admin@nasa.com',
            'password' => Hash::make('nasa123'),
            'role' => 'admin',
        ]);

        // Kategori
        $kategori1 = Category::create([
            'nama_kategori' => 'Tata Surya',
            'deskripsi' => 'Artikel seputar planet dan benda langit dalam tata surya',
        ]);
        $kategori2 = Category::create([
            'nama_kategori' => 'Galaksi',
            'deskripsi' => 'Artikel tentang galaksi dan alam semesta',
        ]);
        $kategori3 = Category::create([
            'nama_kategori' => 'Astronomi Dasar',
            'deskripsi' => 'Pengenalan dasar ilmu astronomi',
        ]);

        // Artikel
        Article::create([
            'title' => 'Mengenal Planet Mars',
            'slug' => 'mengenal-planet-mars',
            'content' => 'Mars adalah planet keempat dari Matahari. Planet ini dikenal sebagai Planet Merah karena permukaannya yang berwarna kemerahan akibat kandungan besi oksida.',
            'category_id' => $kategori1->id,
            'user_id' => $user->id,
        ]);

        Article::create([
            'title' => 'Galaksi Bima Sakti',
            'slug' => 'galaksi-bima-sakti',
            'content' => 'Bima Sakti adalah galaksi tempat Tata Surya kita berada. Galaksi ini berbentuk spiral dengan diameter sekitar 100.000 tahun cahaya.',
            'category_id' => $kategori2->id,
            'user_id' => $user->id,
        ]);

        Article::create([
            'title' => 'Apa itu Tahun Cahaya?',
            'slug' => 'apa-itu-tahun-cahaya',
            'content' => 'Tahun cahaya adalah satuan jarak yang digunakan dalam astronomi. Satu tahun cahaya setara dengan jarak yang ditempuh cahaya dalam satu tahun, yaitu sekitar 9,46 triliun kilometer.',
            'category_id' => $kategori3->id,
            'user_id' => $user->id,
        ]);
    }
}