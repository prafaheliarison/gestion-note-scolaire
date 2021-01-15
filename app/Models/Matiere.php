<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Matiere
 * 
 * @property int $id
 * @property int $enseignant_id
 * @property string $name
 * @property int $coeff
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Enseignant $enseignant
 * @property Collection|Note[] $notes
 *
 * @package App\Models
 */
class Matiere extends Model
{
	protected $table = 'matiere';

	protected $casts = [
		'enseignant_id' => 'int',
		'coeff' => 'int'
	];

	protected $fillable = [
		'enseignant_id',
		'name',
		'coeff'
	];

	public function enseignant()
	{
		return $this->belongsTo(Enseignant::class);
	}

	public function notes()
	{
		return $this->hasMany(Note::class);
	}
}
