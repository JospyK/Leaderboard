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
        '4' => "ADMINISTRATION INTELLIGENTE",
        '5' => "COUP DE CŒUR",
        '6' => "ENTREPRISE DIGITALE",
        '7' => "INDUSTRIE 4.0",
        '8' => "LEADER DU SERVICE IT",
        '9' => "CHAMPION DE L’EDUCATION",
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
