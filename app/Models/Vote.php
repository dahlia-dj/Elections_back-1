<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $table = 'votes';
	public $timestamps = false;

	protected $casts = [
	    'id_election' => 'int',
	 	'id_bulletin' => 'int',
	 	'id_participant' => 'int'
	 ];

	 protected $fillable = [
		'date',
	 	'id_election',
	 	'id_bulletin',
	 	'id_participant'
	 ];

	 public function bulletin()
	 {
	 	return $this->belongsTo(Bulletin::class, 'id_bulletin');
	 }

	 public function election()
	 {
	 	return $this->belongsTo(Election::class, 'id_election');
	 }

	 public function participant()
	 {
	 	return $this->belongsTo(Participant::class, 'id_participant');
	 }
}
