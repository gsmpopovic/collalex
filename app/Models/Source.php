<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Source
 * 
 * @property int $id
 * @property string $name
 * @property string|null $type
 * @property string|null $description
 *
 * @package App\Models
 */
class Source extends Model
{
	protected $table = 'sources';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'name',
		'type',
		'description'
	];
}
