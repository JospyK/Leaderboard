<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidat extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const CATEGORIE_RADIO = [
        '1' => "DSI INNOVANT(E)",
        '2' => "DSI RESILIENT",
        '3' => "LEADERSHIP FEMININ ",
        '4' => "CYBERSECURITE",
        '5' => "GAMING",
        '6' => "ADMINISTRATION INTELLIGENTE",
        '7' => "DEVELOPPEUR DE PLATEFORME ET SOLUTIONS LOGICIELLES",
        '8' => "LEADER DU SERVICE IT",
        '9' => "MEILLEURE ECOLE DE FORMATION",
        '10' => "DEFENSEURS",
    ];

    public $table = 'candidats';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'order',
        'nom',
        'projet',
        'categorie',
        'vpro',
        'vjury',
        'vpublic',
        'total',
        'classement',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
