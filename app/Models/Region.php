<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 * @property string $label
 */

class Region extends Model
{
    use HasFactory;
    protected $table ="regions"; //
    public $timestamps = false ; // annule les commandes create et update dans la table region
    protected $fillable = ['label']; // permet de passer directement les valeurs lors de la creation d'un objet dans le modele

    //public function participants(){}
}
