<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Eleve
 * 
 * @property int $id
 * @property int $classe_id
 * @property string|null $first_name
 * @property string $last_name
 * @property string $sexe
 * @property Carbon|null $birthdate
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Classe $classe
 *
 * @package App\Models
 */
class Eleve extends Model
{
    
    use HasFactory;
    
	protected $table = 'eleve';

	protected $casts = [
		'classe_id' => 'int'
	];

	protected $dates = [
		'birthdate'
	];

	protected $fillable = [
		'classe_id',
		'first_name',
		'last_name',
		'birthdate',
	    'sexe'
	];

	public function classe()
	{
		return $this->belongsTo(Classe::class);
	}
}
