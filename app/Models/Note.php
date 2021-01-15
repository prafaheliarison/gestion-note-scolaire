<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 * 
 * @property int $id
 * @property int $eleve_id
 * @property int $matiere_id
 * @property float $value
 * @property float $total
 * @property string|null $observation
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Matiere $matiere
 *
 * @package App\Models
 */
class Note extends Model
{
	protected $table = 'note';

	protected $casts = [
		'eleve_id' => 'int',
		'matiere_id' => 'int',
		'value' => 'float',
		'total' => 'float'
	];

	protected $fillable = [
		'eleve_id',
		'matiere_id',
		'value',
		'total',
		'observation'
	];

	public function matiere()
	{
		return $this->belongsTo(Matiere::class);
	}
	
	public function eleve()
	{
	    return $this->belongsTo(Eleve::class);
	}
}
