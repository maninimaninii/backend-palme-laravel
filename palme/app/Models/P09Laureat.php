<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class P09Laureat
 * 
 * @property int $idLaureat
 * @property string $nomLaureat
 * @property string|null $sexe
 * @property string|null $pays
 * @property string|null $metier
 *
 * @package App\Models
 */
class P09Laureat extends Model
{
	protected $table = 'p09_laureat';
	protected $primaryKey = 'idLaureat';
	public $timestamps = false;

	protected $fillable = [
		'nomLaureat',
		'sexe',
		'pays',
		'metier'
	];	

	public function recompenses()
    {
        return $this->hasMany(P09Recompenserlaureat::class, 'idLaureat', 'idLaureat');
    }

}
