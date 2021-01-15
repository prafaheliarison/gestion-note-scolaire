<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Enseignant
 * 
 * @property int $id
 * @property string|null $first_name
 * @property string $last_name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Matiere[] $matieres
 *
 * @package App\Models
 */
class Enseignant extends Model
{
    
    use HasFactory;
    
	protected $table = 'enseignant';

	protected $fillable = [
		'first_name',
		'last_name'
	];

	public function matieres()
	{
		return $this->hasMany(Matiere::class);
	}
}
