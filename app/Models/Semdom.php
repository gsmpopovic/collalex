<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;


/**
 * Class Semdom
 * 
 * @property int $id
 * @property string $is_eng
 * @property string $sd_eng
 *
 * @package App\Models
 */
class Semdom extends Model
{

	use LogsActivity; 
	
	protected $table = 'semdoms';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'is_eng',
		'sd_eng'
	];

	protected static $logAttributes = [		
		'id',
		'is_eng',
		'sd_eng'
	];

	public function senses(){
		// return$this->belongsToMany('App\Models\Sense', 'semdom_id');

		return $this->belongsToMany('App\Models\Semdom', 'semdom_id','is_eng');

		// In Sense->semdoms()
		// return $this->hasOne('App\Models\Semdom', 'is_eng','semdom_id');


	}
}
