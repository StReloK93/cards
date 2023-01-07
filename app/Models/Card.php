<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv2';
    
    protected $table = "VKartoteka";
    protected $primaryKey = 'ID';
    protected $fillable = [
        'TABN',
        'FIO',
        'SEX',
        'DATAR',
        'MESTOR',
        'NATION',
        'VIDOBRAZ',
        'UCHZAV',
        'FORMAUCH',
        'SPECOBR',
        'POSLMESTO',
        'SEM_POL',
        'ADRES',
        'PASPNOM',
        'PASPKEM',
        'STRANA',
        'PASPKOGDA',
        'PASPDEYST',
        'UCHAST_CHS',
        'V_GRUCHETA',
        'V_KAT',
        'V_SOSTAV',
        'V_ZVANIE',
        'V_VUSNOM',
        'V_GODNOST',
        'V_ODO',
        'DATAPRIEM',
        'DATAPRIEM',
        'PODRAZD',
        'PROF',
        'RAZRYAD',
        'leavetext',
        'desc_time'
    ];
    public $timestamps = false;
}