<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $nom
 * @property int $num_cni
 * @property string $age
 * @property int $sexe
 * @property string $statut
 * @property int $id_region
 * @property string $login
 * @property int $pwd
 * @property string $email 
 *  @property int $etat
 * @property string $tel 
 
 */


class Participant extends Model
{
    use HasFactory;
    protected $table ="participants"; 
    public $timestamps = false ; // annule les commandes create et update dans la table region
    protected $fillable = ['nom',
    'num_cni',
    'age',
    'sexe',
    'statut',
    'id_region',
    'login',
    'pwd',
    'email',
    'etat',
    'tel',
  ];
   
 
   
// permet de passer directement les valeurs lors de la creation d'un objet dans le modele

}
