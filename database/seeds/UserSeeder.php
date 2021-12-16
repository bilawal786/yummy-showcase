<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname'     => 'Super',
            'lname'     => 'Admin',
            'phone'     => '00000000',
            'role'     => '1',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        \App\GeneralSettings::create([
            'logo' => 'front/assets/images/logo.png',
            'sitename' => 'YummyBox - L\'appli anti-gaspi des Outre-Mer',
            'phone' => '654978578',
            'email' => 'contact@yummybox.fr',
            'address' => 'address',
            'facebook' => 'www.facebook.com',
            'instagram' => 'www.instagram.com',
            'footer_logo' => 'front/assets/images/logo-vgnette.png',
            'd1' => '01.jpg',
            'video' => 'tgbNymZ7vqY',
            'aboutimage' => '01.jpg',
            'about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. ',
        ]);
    }
}
