<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->nik = '122134435665';
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin1234');
        $admin->tlp = '081223334444';
        $admin->level = 'admin';
        $admin->save();

        $petugas = new User();
        $petugas->nik = '122134435666';
        $petugas->name = 'petugas';
        $petugas->email = 'petugas@gmail.com';
        $petugas->password = bcrypt('petugas1234');
        $petugas->tlp = '081223334445';
        $petugas->level = 'petugas';
        $petugas->save();

        $user = new User();
        $user->nik = '122134435667';
        $user->name = 'user';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('user1234');
        $user->tlp = '081223334444';
        $user->level = 'masyarakat';
        $user->save();
    }
}
