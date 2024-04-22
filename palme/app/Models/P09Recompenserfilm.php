<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class P09Recompenserfilm
 * 
 * @property int $idFilm
 * @property int $idPrix
 * @property Carbon|null $editionPrixF
 *
 * @package App\Models
 */
class P09Recompenserfilm extends Model
{
	protected $table = 'p09_recompenserfilm';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idFilm' => 'int',
		'idPrix' => 'int',
		'editionPrixF' => 'datetime'
	];

	protected $fillable = [
		'editionPrixF'
	];

	public function prix(){
		return $this->belongsTo(P09Prix::class, 'idPrix', 'idPrix');
	}
}
