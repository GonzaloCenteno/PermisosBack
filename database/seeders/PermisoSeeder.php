<?php

namespace Database\Seeders;

use App\Models\Permiso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = new Permiso();
        $p1->detalle = "manage_all";
        $p1->action = "manage";
        $p1->subject = "all";
        $p1->save();

        $p1 = new Permiso();
        $p1->detalle = "viewAny_user";
        $p1->action = "viewAny";
        $p1->subject = "user";
        $p1->save();

        $p1 = new Permiso();
        $p1->detalle = "view_user";
        $p1->action = "view";
        $p1->subject = "user";
        $p1->save();

        $p1 = new Permiso();
        $p1->detalle = "create_user";
        $p1->action = "create";
        $p1->subject = "user";
        $p1->save();

        $p1 = new Permiso();
        $p1->detalle = "update_user";
        $p1->action = "update";
        $p1->subject = "user";
        $p1->save();

        $p1 = new Permiso();
        $p1->detalle = "delete_user";
        $p1->action = "delete";
        $p1->subject = "user";
        $p1->save();

        $p1 = new Permiso();
        $p1->detalle = "viewAny_role";
        $p1->action = "viewAny";
        $p1->subject = "role";
        $p1->save();

        $p1 = new Permiso();
        $p1->detalle = "view_role";
        $p1->action = "view";
        $p1->subject = "role";
        $p1->save();

        $p1 = new Permiso();
        $p1->detalle = "create_role";
        $p1->action = "create";
        $p1->subject = "role";
        $p1->save();

        $p1 = new Permiso();
        $p1->detalle = "update_role";
        $p1->action = "update";
        $p1->subject = "role";
        $p1->save();

        $p1 = new Permiso();
        $p1->detalle = "delete_role";
        $p1->action = "delete";
        $p1->subject = "role";
        $p1->save();
    }
}
