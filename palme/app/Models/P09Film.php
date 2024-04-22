<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class P09Film
 * 
 * @property int $idFilm
 * @property string $titreFilm
 * @property string|null $paysFilm
 * @property int $idRealisateur
 *
 * @package App\Models
 */
class P09Film extends Model
{
	protected $table = 'p09_film';
	protected $primaryKey = 'idFilm';
	public $timestamps = false;

	protected $casts = [
		'idRealisateur' => 'int'
	];

	protected $fillable = [
		'titreFilm',
		'paysFilm',
		'idRealisateur'
	];

	public function recompenses(){
		return $this->hasMany(P09Recompenserfilm::class, 'idFilm', 'idFilm');
	}
	

	public function realisateur(){
        return $this->belongsTo(P09Laureat::class, 'idRealisateur', 'idLaureat');
    }
}
