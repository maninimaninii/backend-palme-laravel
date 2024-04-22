<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class P09Recompenserlaureat
 * 
 * @property int $idLaureat
 * @property int $idPrix
 * @property Carbon|null $EditionPrixL
 *
 * @package App\Models
 */
class P09Recompenserlaureat extends Model
{
	protected $table = 'p09_recompenserlaureat';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idLaureat' => 'int',
		'idPrix' => 'int',
		'EditionPrixL' => 'datetime'
	];

	protected $fillable = [
		'EditionPrixL'
	];

	public function prix()
    {
        return $this->belongsTo(P09Prix::class, 'idPrix', 'idPrix');
    }
}
