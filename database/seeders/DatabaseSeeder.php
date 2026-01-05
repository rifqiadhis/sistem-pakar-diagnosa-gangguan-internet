<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // 1. Data Gangguan
        $p1 = \App\Models\Gangguan::create([
            'kode' => 'P1',
            'nama' => 'Kabel LAN Terputus / Longgar',
            'definisi' => 'Gangguan fisik pada media transmisi (kabel UTP), bisa disebabkan konektor RJ45 yang longgar, kabel putus digigit tikus, atau port LAN yang rusak.'
        ]);

        $p2 = \App\Models\Gangguan::create([
            'kode' => 'P2',
            'nama' => 'Konfigurasi IP Salah / DHCP Bermasalah',
            'definisi' => 'Kesalahan pengaturan alamat logis (IP Address) pada komputer, atau kegagalan Router/Modem dalam memberikan alamat IP otomatis (DHCP) ke perangkat.'
        ]);

        $p3 = \App\Models\Gangguan::create([
            'kode' => 'P3',
            'nama' => 'Modem / Router Bermasalah',
            'definisi' => 'Kegagalan fungsi pada perangkat pusat jaringan (Modem/Router), sering disebabkan oleh perangkat yang overheat (kepanasan), hang, atau kerusakan komponen internal.'
        ]);

        $p4 = \App\Models\Gangguan::create([
            'kode' => 'P4',
            'nama' => 'Gangguan dari ISP (Jaringan Eksternal)',
            'definisi' => 'Terputusnya koneksi internet dari sisi penyedia layanan (Provider), misalnya karena kabel fiber optik putus di jalan atau sedang ada maintenance server pusat.'
        ]);

        $p5 = \App\Models\Gangguan::create([
            'kode' => 'P5',
            'nama' => 'Masalah DNS',
            'definisi' => 'Kegagalan sistem dalam menerjemahkan nama domain (seperti https://www.google.com) menjadi alamat IP, menyebabkan website tidak bisa dibuka meskipun koneksi internet sebenarnya aktif.'
        ]);

        $p6 = \App\Models\Gangguan::create([
            'kode' => 'P6',
            'nama' => 'Sinyal WiFi Lemah / Interferensi',
            'definisi' => 'Penurunan kualitas koneksi nirkabel karena jarak perangkat terlalu jauh dari Access Point, terhalang tembok tebal, atau adanya gangguan gelombang dari perangkat elektronik lain.'
        ]);



        // 2. Data Gejala
        $g1 = \App\Models\Gejala::create([
            'kode' => 'G1',
            'nama' => 'Tidak bisa akses internet sama sekali'
        ]);

        $g2 = \App\Models\Gejala::create([
            'kode' => 'G2',
            'nama' => 'Ikon tanda seru kuning / No Internet Access'
        ]);

        $g3 = \App\Models\Gejala::create([
            'kode' => 'G3',
            'nama' => 'Lampu indikator Internet modem merah/mati'
        ]);

        $g4 = \App\Models\Gejala::create([
            'kode' => 'G4',
            'nama' => 'Lampu indikator LAN pada port mati'
        ]);

        $g5 = \App\Models\Gejala::create([
            'kode' => 'G5',
            'nama' => 'Kabel LAN terlihat longgar/rusak fisik'
        ]);

        $g6 = \App\Models\Gejala::create([
            'kode' => 'G6',
            'nama' => 'Hanya satu perangkat bermasalah, yang lain normal'
        ]);

        $g7 = \App\Models\Gejala::create([
            'kode' => 'G7',
            'nama' => 'IP Address 169.254.x.x (APIPA)'
        ]);

        $g8 = \App\Models\Gejala::create([
            'kode' => 'G8',
            'nama' => 'IP Manual tidak satu subnet'
        ]);

        $g9 = \App\Models\Gejala::create([
            'kode' => 'G9',
            'nama' => 'WiFi sering putus/gagal konek'
        ]);

        $g10 = \App\Models\Gejala::create([
            'kode' => 'G10',
            'nama' => 'SSID WiFi tidak muncul'
        ]);

        $g11 = \App\Models\Gejala::create([
            'kode' => 'G11',
            'nama' => 'Internet sangat lambat (semua perangkat)'
        ]);

        $g12 = \App\Models\Gejala::create([
            'kode' => 'G12',
            'nama' => 'Lambat hanya jam tertentu (jam sibuk)'
        ]);

        $g13 = \App\Models\Gejala::create([
            'kode' => 'G13',
            'nama' => 'Beberapa website tidak bisa diakses (lainnya bisa)'
        ]);

        $g14 = \App\Models\Gejala::create([
            'kode' => 'G14',
            'nama' => 'Ping IP publik sukses, tapi browsing gagal'
        ]);

        $g15 = \App\Models\Gejala::create([
            'kode' => 'G15',
            'nama' => 'Ping ke IP publik (8.8.8.8) gagal'
        ]);

        $g16 = \App\Models\Gejala::create([
            'kode' => 'G16',
            'nama' => 'Ping ke Gateway (Modem) gagal'
        ]);



        // =====================
        // G1 Tidak bisa akses internet sama sekali
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g1->id, 'cf_pakar' => 0.4]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g1->id, 'cf_pakar' => 0.4]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g1->id, 'cf_pakar' => 0.4]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g1->id, 'cf_pakar' => 0.4]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g1->id, 'cf_pakar' => 0.2]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g1->id, 'cf_pakar' => 0.2]);

        // =====================
        // G2 Ikon tanda seru kuning / No Internet Access
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g2->id, 'cf_pakar' => 0.4]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g2->id, 'cf_pakar' => 0.8]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g2->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g2->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g2->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g2->id, 'cf_pakar' => 0]);

        // =====================
        // G3 Lampu indikator Internet modem merah/mati
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g3->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g3->id, 'cf_pakar' => 0.9]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g3->id, 'cf_pakar' => 0.8]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g3->id, 'cf_pakar' => 0.8]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g3->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g3->id, 'cf_pakar' => 0]);

        // =====================
        // G4 Lampu indikator LAN pada port mati
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g4->id, 'cf_pakar' => 0.9]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g4->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g4->id, 'cf_pakar' => 0.8]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g4->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g4->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g4->id, 'cf_pakar' => 0]);

        // =====================
        // G5 Kabel LAN terlihat longgar/rusak fisik
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g5->id, 'cf_pakar' => 0.95]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g5->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g5->id, 'cf_pakar' => 0.8]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g5->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g5->id, 'cf_pakar' => 0.8]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g5->id, 'cf_pakar' => 0.8]);

        // =====================
        // G6 Hanya satu perangkat bermasalah
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g6->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g6->id, 'cf_pakar' => 0.6]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g6->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g6->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g6->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g6->id, 'cf_pakar' => 0.6]);

        // =====================
        // G7 IP Address 169.254.x.x (APIPA)
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g7->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g7->id, 'cf_pakar' => 0.9]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g7->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g7->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g7->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g7->id, 'cf_pakar' => 0]);

        // =====================
        // G8 IP Manual tidak satu subnet
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g8->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g8->id, 'cf_pakar' => 0.9]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g8->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g8->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g8->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g8->id, 'cf_pakar' => 0]);

        // =====================
        // G9 WiFi sering putus/gagal konek
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g9->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g9->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g9->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g9->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g9->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g9->id, 'cf_pakar' => 0.8]);

        // =====================
        // G10 SSID WiFi tidak muncul
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g10->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g10->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g10->id, 'cf_pakar' => 0.2]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g10->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g10->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g10->id, 'cf_pakar' => 0.9]);

        // =====================
        // G11 Internet sangat lambat
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g11->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g11->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g11->id, 'cf_pakar' => 0.5]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g11->id, 'cf_pakar' => 0.6]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g11->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g11->id, 'cf_pakar' => 0.4]);

        // =====================
        // G12 Lambat hanya jam tertentu
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g12->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g12->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g12->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g12->id, 'cf_pakar' => 0.8]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g12->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g12->id, 'cf_pakar' => 0]);

        // =====================
        // G13 Beberapa website tidak bisa diakses
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g13->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g13->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g13->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g13->id, 'cf_pakar' => 0.2]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g13->id, 'cf_pakar' => 0.8]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g13->id, 'cf_pakar' => 0]);

        // =====================
        // G14 Ping IP publik sukses, browsing gagal
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g14->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g14->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g14->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g14->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g14->id, 'cf_pakar' => 0.9]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g14->id, 'cf_pakar' => 0]);

        // =====================
        // G15 Ping ke IP publik (8.8.8.8) gagal
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g15->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g15->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g15->id, 'cf_pakar' => 0.5]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g15->id, 'cf_pakar' => 0.5]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g15->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g15->id, 'cf_pakar' => 0]);

        // =====================
        // G16 Ping ke Gateway (Modem) gagal
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p1->id, 'gejala_id' => $g16->id, 'cf_pakar' => 0.6]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p2->id, 'gejala_id' => $g16->id, 'cf_pakar' => 0.4]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p3->id, 'gejala_id' => $g16->id, 'cf_pakar' => 0.6]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p4->id, 'gejala_id' => $g16->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p5->id, 'gejala_id' => $g16->id, 'cf_pakar' => 0]);
        \App\Models\BasisPengetahuan::create(['gangguan_id' => $p6->id, 'gejala_id' => $g16->id, 'cf_pakar' => 0.4]);
    }
}
