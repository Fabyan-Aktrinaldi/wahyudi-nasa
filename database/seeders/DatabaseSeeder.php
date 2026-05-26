<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Admin Nasa',
            'email' => 'admin@nasa.com',
            'password' => Hash::make('nasa123'),
            'role' => 'admin',
        ]);

        $kategori1 = Category::create(['nama_kategori' => 'Tata Surya', 'deskripsi' => 'Artikel seputar planet dan benda langit dalam tata surya']);
        $kategori2 = Category::create(['nama_kategori' => 'Galaksi', 'deskripsi' => 'Artikel tentang galaksi dan alam semesta']);
        $kategori3 = Category::create(['nama_kategori' => 'Astronomi Dasar', 'deskripsi' => 'Pengenalan dasar ilmu astronomi']);
        $kategori4 = Category::create(['nama_kategori' => 'Fenomena Luar Angkasa', 'deskripsi' => 'Fenomena unik dan menarik di luar angkasa']);
        $kategori5 = Category::create(['nama_kategori' => 'Eksplorasi Antariksa', 'deskripsi' => 'Misi dan eksplorasi manusia ke luar angkasa']);

        $articles = [
            [
                'title' => 'Mengenal Planet Mars',
                'slug' => 'mengenal-planet-mars',
                'content' => 'Mars adalah planet keempat dari Matahari dan dikenal sebagai Planet Merah karena permukaannya yang berwarna kemerahan akibat kandungan besi oksida. Planet ini memiliki dua bulan kecil bernama Phobos dan Deimos. Mars memiliki gunung berapi terbesar di tata surya, Olympus Mons, yang tingginya sekitar 21 km. Atmosfer Mars sangat tipis, terdiri dari 95% karbon dioksida, membuatnya tidak bisa mendukung kehidupan manusia tanpa bantuan teknologi. NASA dan berbagai lembaga luar angkasa terus mengirim rover untuk menjelajahi permukaan Mars dalam upaya mencari tanda-tanda kehidupan masa lalu.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/OSIRIS_Mars_true_color.jpg/800px-OSIRIS_Mars_true_color.jpg',
                'category_id' => $kategori1->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Galaksi Bima Sakti',
                'slug' => 'galaksi-bima-sakti',
                'content' => 'Bima Sakti adalah galaksi tempat Tata Surya kita berada. Galaksi ini berbentuk spiral berpalang dengan diameter sekitar 100.000 tahun cahaya dan mengandung antara 100 hingga 400 miliar bintang. Tata Surya kita terletak di lengan Orion, sekitar 26.000 tahun cahaya dari pusat galaksi. Di pusat Bima Sakti terdapat lubang hitam supermasif bernama Sagittarius A* dengan massa sekitar 4 juta kali massa Matahari. Galaksi ini diperkirakan berusia sekitar 13,6 miliar tahun, hampir setua alam semesta itu sendiri.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/ESO-VLT-Laser-phot-0a-99.jpg/800px-ESO-VLT-Laser-phot-0a-99.jpg',
                'category_id' => $kategori2->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Apa itu Tahun Cahaya?',
                'slug' => 'apa-itu-tahun-cahaya',
                'content' => 'Tahun cahaya adalah satuan jarak yang digunakan dalam astronomi, bukan satuan waktu. Satu tahun cahaya setara dengan jarak yang ditempuh cahaya dalam satu tahun di ruang hampa, yaitu sekitar 9,46 triliun kilometer atau 5,88 triliun mil. Cahaya bergerak dengan kecepatan sekitar 299.792 kilometer per detik. Bintang terdekat dari Bumi selain Matahari adalah Proxima Centauri, yang berjarak sekitar 4,24 tahun cahaya. Artinya, cahaya dari Proxima Centauri membutuhkan lebih dari 4 tahun untuk sampai ke Bumi.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Above_Andromeda.jpg/800px-Above_Andromeda.jpg',
                'category_id' => $kategori3->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Lubang Hitam: Misteri Alam Semesta',
                'slug' => 'lubang-hitam-misteri-alam-semesta',
                'content' => 'Lubang hitam adalah wilayah di ruang angkasa dengan gravitasi yang sangat kuat sehingga tidak ada yang bisa lolos darinya, termasuk cahaya. Lubang hitam terbentuk ketika bintang masif kehabisan bahan bakar dan kolaps akibat gravitasinya sendiri. Batas di sekitar lubang hitam disebut cakrawala peristiwa atau event horizon. Pada tahun 2019, teleskop Event Horizon berhasil mengambil foto pertama lubang hitam di pusat galaksi M87, berjarak 55 juta tahun cahaya dari Bumi. Lubang hitam supermasif diyakini ada di pusat hampir setiap galaksi besar.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Black_hole_-_Messier_87_crop_max_res.jpg/800px-Black_hole_-_Messier_87_crop_max_res.jpg',
                'category_id' => $kategori4->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Misi Apollo: Manusia Pertama di Bulan',
                'slug' => 'misi-apollo-manusia-pertama-di-bulan',
                'content' => 'Program Apollo adalah program luar angkasa NASA yang berhasil mendaratkan manusia pertama di Bulan. Pada 20 Juli 1969, astronaut Neil Armstrong menjadi manusia pertama yang berjalan di permukaan Bulan dalam misi Apollo 11, diikuti Buzz Aldrin. Armstrong mengucapkan kalimat bersejarah "Satu langkah kecil bagi manusia, satu lompatan raksasa bagi umat manusia." Total ada 12 astronaut yang berjalan di Bulan dalam 6 pendaratan sukses antara 1969-1972. Program Apollo mendorong kemajuan teknologi luar angkasa yang masih dirasakan dampaknya hingga saat ini.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Aldrin_Apollo_11_original.jpg/800px-Aldrin_Apollo_11_original.jpg',
                'category_id' => $kategori5->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Saturnus dan Cincinnya yang Menakjubkan',
                'slug' => 'saturnus-dan-cincinnya',
                'content' => 'Saturnus adalah planet keenam dari Matahari dan dikenal dengan sistem cincinnya yang spektakuler. Cincin Saturnus terdiri dari es dan batuan dengan ukuran partikel dari sekecil debu hingga sebesar rumah. Saturnus adalah planet terbesar kedua di tata surya setelah Jupiter dan memiliki 146 bulan yang telah dikonfirmasi, termasuk Titan yang memiliki atmosfer tebal. Saturnus sangat ringan dibanding ukurannya, bahkan lebih ringan dari air. Misi Cassini-Huygens NASA yang berakhir pada 2017 telah memberikan data luar biasa tentang planet yang menakjubkan ini.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Saturn_during_Equinox.jpg/800px-Saturn_during_Equinox.jpg',
                'category_id' => $kategori1->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Nebula: Pabrik Bintang di Alam Semesta',
                'slug' => 'nebula-pabrik-bintang',
                'content' => 'Nebula adalah awan gas dan debu raksasa di luar angkasa yang menjadi tempat lahirnya bintang-bintang baru. Kata nebula berasal dari bahasa Latin yang berarti kabut. Nebula Orion adalah salah satu nebula yang paling terkenal dan bisa dilihat dengan mata telanjang dari Bumi. Ada berbagai jenis nebula, termasuk nebula emisi yang bercahaya, nebula refleksi yang memantulkan cahaya bintang, dan nebula gelap yang menghalangi cahaya dari belakangnya. Teleskop Hubble dan James Webb telah mengambil gambar nebula yang sangat menakjubkan dengan detail luar biasa.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Orion_Nebula_-_Hubble_2006_mosaic_18000.jpg/800px-Orion_Nebula_-_Hubble_2006_mosaic_18000.jpg',
                'category_id' => $kategori4->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'James Webb Space Telescope',
                'slug' => 'james-webb-space-telescope',
                'content' => 'Teleskop Luar Angkasa James Webb (JWST) adalah teleskop inframerah terbesar dan paling kuat yang pernah diluncurkan ke luar angkasa. Diluncurkan pada 25 Desember 2021, JWST beroperasi di titik Lagrange L2, sekitar 1,5 juta kilometer dari Bumi. Teleskop ini memiliki cermin utama berdiameter 6,5 meter yang terdiri dari 18 segmen heksagonal berlapis emas. JWST dirancang untuk mengamati galaksi-galaksi pertama yang terbentuk setelah Big Bang dan mempelajari atmosfer eksoplanet. Gambar-gambar pertama yang dirilis pada Juli 2022 memperlihatkan detail alam semesta yang belum pernah terlihat sebelumnya.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/The_James_Webb_Space_Telescope_during_final_inspection.jpg/800px-The_James_Webb_Space_Telescope_during_final_inspection.jpg',
                'category_id' => $kategori5->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Aurora Borealis: Cahaya Utara yang Memukau',
                'slug' => 'aurora-borealis-cahaya-utara',
                'content' => 'Aurora borealis atau cahaya utara adalah fenomena cahaya alami yang spektakuler di langit malam di daerah kutub utara. Fenomena ini terjadi ketika partikel bermuatan dari Matahari berinteraksi dengan medan magnet Bumi dan atmosfer. Warna-warni aurora, mulai dari hijau, merah, biru hingga ungu, disebabkan oleh jenis gas atmosfer yang berbeda pada ketinggian yang berbeda. Oksigen menghasilkan warna hijau dan merah, sementara nitrogen menghasilkan warna biru dan ungu. Aurora borealis paling baik diamati dari Norwegia, Islandia, Kanada, dan Alaska, terutama saat aktivitas matahari tinggi.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/A_Colorful_Aurora_Australis.jpg/800px-A_Colorful_Aurora_Australis.jpg',
                'category_id' => $kategori4->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Exoplanet: Dunia di Luar Tata Surya',
                'slug' => 'exoplanet-dunia-di-luar-tata-surya',
                'content' => 'Exoplanet atau planet ekstrasurya adalah planet yang mengorbit bintang selain Matahari kita. Hingga kini lebih dari 5.500 exoplanet telah dikonfirmasi keberadaannya. Exoplanet pertama yang dikonfirmasi mengorbit bintang mirip Matahari ditemukan pada 1995 oleh Michel Mayor dan Didier Queloz yang kemudian memenangkan Nobel Fisika 2019. Teleskop Kepler NASA telah menemukan ribuan exoplanet dengan berbagai ukuran dan karakteristik. Beberapa exoplanet berada di zona layak huni bintangnya, yang berarti mungkin memiliki air cair dan berpotensi mendukung kehidupan.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/NASA-ExoplanetSystems-20141023.jpg/800px-NASA-ExoplanetSystems-20141023.jpg',
                'category_id' => $kategori3->id,
                'user_id' => $user->id,
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}