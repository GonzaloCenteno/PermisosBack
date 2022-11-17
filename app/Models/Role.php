<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function permisos()
    {
        return $this->belongsToMany(Permiso::class)->withTimestamps();
    }

    public function allowTo($permiso)
    {
        if(is_string($permiso)) {
            $permiso = Permiso::where("detalle", $permiso)->firstOrFail();
        }

        $this->permisos()->sync($permiso, false);
    }
}