<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Timeline
 * 
 * @property int $id
 * @property string|null $year
 * @property int|null $month
 * @property int|null $day
 * @property string|null $description
 * @property string|null $link
 *
 * @package App\Models
 */
class Timeline extends Model
{
	protected $table = 'timeline';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'month' => 'int',
		'day' => 'int'
	];

	protected $fillable = [
		'id',
		'year',
		'month',
		'day',
		'description',
		'link'
	];
}
