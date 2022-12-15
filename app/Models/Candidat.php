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
        '1' => 'Cat1',
        '2' => 'Cat2',
        '3' => 'Cat3',
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
        'prenom',
        'photo',
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
