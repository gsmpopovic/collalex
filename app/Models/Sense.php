<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;


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

	use LogsActivity; 

	protected $table = 'senses';
	public $incrementing = true;
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

	protected static $logAttributes = [		
		'headword_id',
		'syncat',
		'g_eng',
		'g_ceb',
		'semdom_id',
		'semdom_other',

		'user',
		'date',
		'validity',

	];

	// protected static $logAttributes = [		
	// 	'headword_id',
	// 	'syncat',
	// 	'g_eng',
	// 	'g_ceb',
	// 	'g_hil',
	// 	'g_tgl',
	// 	'd_eng',
	// 	'd_ceb',
	// 	'd_hil',
	// 	'd_tgl',
	// 	'semdom_id',
	// 	'semdom_other',
	// 	'comments',
	// 	'user',
	// 	'date',
	// 	'validity',
	// 	'seealso'
	// ];

	// Only log those attributes which have been changed.
	protected static $logOnlyDirty = true;


	// protected $fillable = [
	// 	'id',
	// 	'headword_id',
	// 	'syncat',
	// 	'g_eng',
	// 	'g_ceb',
	// 	'g_hil',
	// 	'g_tgl',
	// 	'd_eng',
	// 	'd_ceb',
	// 	'd_hil',
	// 	'd_tgl',
	// 	'semdom_id',
	// 	'semdom_other',
	// 	'comments',
	// 	'user',
	// 	'date',
	// 	'validity',
	// 	'seealso'
	// ];

	// How senses and semdoms are related needs to be rewritten in db. 

	public function semdoms(){

		// hasOne('Model', foreign key, local key)
		// The foreign key is the column referemced in the second table; 
		// the local key, the column in the first table that references it in the first. 

		return $this->hasOne('App\Models\Semdom', 'is_eng','semdom_id');

		// return $this->hasOne('App\Models\Semdom', 'sd_eng', 'semdom_other');

		// return $this->hasOne('App\Models\Semdom', 'semdom_other', 'sd_eng');

		// return $this->hasOne('App\Models\Semdom', 'id'. 'is_eng');
	}
}
