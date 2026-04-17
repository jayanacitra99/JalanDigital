<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        // Data untuk Unduh Mantu
        Event::create([
            'slug' => 'unduh-mantu-thea-alan',
            'title' => 'Unduh Mantu',
            'bride_nickname' => 'Thea',
            'bride_fullname' => 'Naridha Thea Wardhani, S.Tr.Li',
            'bride_parents' => "Putri Bungsu dari\nBapak Eko Agus Winardi, M.Pd & Ibu Lestari, A.Md",
            'bride_ig' => 'naridhathea',
            'groom_nickname' => 'Alan',
            'groom_fullname' => 'Arkhab Maulana U., S.Kom',
            'groom_parents' => "Putra Sulung dari\nBapak Tri Tjahyo Prasetiyo, S.T & Ibu Ririn Sulintari, A.Md.Farm, S.T",
            'groom_ig' => 'arkhabmaulana',
            'event_date' => '2026-05-30 14:00:00',
            'event_time_text' => '14.00 - 17.00 WIB',
            'location_name' => 'Resto Lumbung Dahar',
            'location_address' => 'Jl. Diponegoro, Karangploso, Girimoyo, Kec. Karang Ploso, Kabupaten Malang',
            'maps_link' => 'https://maps.app.goo.gl/3w9vhEjYMuNoK4R56',
            'bank_name' => 'BCA',
            'bank_account' => '4390508994',
            'bank_account_name' => 'Arkhab Maulana Uzlahbillah',
            'gift_address' => 'Jl. Sulfat Agung V/18 RT.6 RW.21, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65122',
        ]);

        // Data untuk Akad & Resepsi (Misal datanya mirip tapi judul berbeda)
        Event::create([
            'slug' => 'akad-resepsi-thea-alan',
            'title' => 'Akad & Resepsi',
            'bride_nickname' => 'Thea',
            'bride_fullname' => 'Naridha Thea Wardhani, S.Tr.Li',
            'bride_parents' => "Putri Bungsu dari\nBapak Eko Agus Winardi, M.Pd & Ibu Lestari, A.Md",
            'bride_ig' => 'naridhathea',
            'groom_nickname' => 'Alan',
            'groom_fullname' => 'Arkhab Maulana U., S.Kom',
            'groom_parents' => "Putra Sulung dari\nBapak Tri Tjahyo Prasetiyo, S.T & Ibu Ririn Sulintari, A.Md.Farm, S.T",
            'groom_ig' => 'arkhabmaulana',
            'event_date' => '2026-05-23 08:00:00',
            'event_time_text' => '08.00 - Selesai',
            'location_name' => 'Kediaman Wanita',
            'location_address' => 'Jl. Pemuda No. 44, RT.1 RW.1, Kalipakem, Donomulyo',
            'maps_link' => 'https://maps.app.goo.gl/SHfygBnSegNQp3Kq7',
            'bank_name' => 'Mandiri',
            'bank_account' => '000',
            'bank_account_name' => 'Naridha Thea Wardhani',
            'gift_address' => 'Jl. Sulfat Agung V/18 RT.6 RW.21, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65122',
        ]);
    }
}