<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

	public function senses(){
		return$this->belongsToMany('App\Models\Sense', 'semdom_id');
	}
}
