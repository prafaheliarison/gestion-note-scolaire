<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Classe
 * 
 * @property int $id
 * @property string $label
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Eleve[] $eleves
 *
 * @package App\Models
 */
class Classe extends Model
{
	protected $table = 'classe';

	protected $fillable = [
		'label'
	];

	public function eleves()
	{
		return $this->hasMany(Eleve::class);
	}
}
