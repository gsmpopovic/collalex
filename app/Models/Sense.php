<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sense
 * 
 * @property int $id
 * @property int|null $headword_id
 * @property string|null $syncat
 * @property string|null $g_eng
 * @property string|null $g_ceb
 * @property string|null $g_hil
 * @property string|null $g_tgl
 * @property string|null $d_eng
 * @property string|null $d_ceb
 * @property string|null $d_hil
 * @property string|null $d_tgl
 * @property string|null $semdom_id
 * @property string|null $semdom_other
 * @property string|null $comments
 * @property int|null $user
 * @property Carbon $date
 * @property string $validity
 * @property string|null $seealso
 *
 * @package App\Models
 */
class Sense extends Model
{
	protected $table = 'senses';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'headword_id' => 'int',
		'user' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'id',
		'headword_id',
		'syncat',
		'g_eng',
		'g_ceb',
		'g_hil',
		'g_tgl',
		'd_eng',
		'd_ceb',
		'd_hil',
		'd_tgl',
		'semdom_id',
		'semdom_other',
		'comments',
		'user',
		'date',
		'validity',
		'seealso'
	];

	// How senses and semdoms are related needs to be rewritten in db. 

	public function semdoms(){

		// hasOne('Model', foreign key, local key)
		// return $this->hasOne('App\Models\Semdom', 'sd_eng', 'semdom_other');

		// return $this->hasOne('App\Models\Semdom', 'semdom_other', 'sd_eng');

		return $this->hasOne('App\Models\Semdom', 'semdom_id');

	}
}
