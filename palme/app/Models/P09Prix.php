<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class P09Prix
 * 
 * @property int $idPrix
 * @property string $nomPrix
 * @property string|null $typePrix
 *
 * @package App\Models
 */
class P09Prix extends Model
{
	protected $table = 'p09_prix';
	protected $primaryKey = 'idPrix';
	public $timestamps = false;

	protected $fillable = [
		'nomPrix',
		'typePrix'
	];
}
