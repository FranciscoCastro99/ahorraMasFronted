<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contador extends Model
{
    use HasFactory;


    public function User(){
        return $this->belongsTo('App\Models\User');
    }
    
    //relacion con historial

    public function Historial(){
        return $this->hasMany('App\Models\Historial');
    }

    //relacion con reporte de daños
    public function ReporteDaños(){
        return $this->belongsToMany(ReporteDaños::class, 'contador_reporte_daños', 'contador_id', 'reporte_daños_id');
    }
}
