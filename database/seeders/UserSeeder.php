<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User;
        $user1->name = "Administrador";
        $user1->email = "admin@mail.com";
        $user1->password = bcrypt("123456");
        $user1->save();

        $user2 = new User;
        $user2->name = "Gonzalo";
        $user2->email = "gonzalo@mail.com";
        $user2->password = bcrypt("123456");
        $user2->save();

        $user3 = new User;
        $user3->name = "Mike";
        $user3->email = "carlos@mail.com";
        $user3->password = bcrypt("123456");
        $user3->save();

        $user4 = new User;
        $user4->name = "sara";
        $user4->email = "sara@mail.com";
        $user4->password = bcrypt("123456");
        $user4->save();

        $user1->asignarRol("Admin");
        $user2->asignarRol("Gerente");
        $user3->asignarRol("Usuario");
        $user3->asignarRol("Anonimo");
    }
}