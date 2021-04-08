<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Text
 * 
 * @property int $id
 * @property string|null $bfx
 * @property string|null $ceb
 * @property string|null $eng
 * @property string $source
 * @property string $user_creator
 * @property Carbon $date_created
 * @property string|null $user_editor
 * @property Carbon|null $date_edited
 * @property string|null $comments
 *
 * @package App\Models
 */
class Text extends Model
{
	protected $table = 'texts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'date_created',
		'date_edited'
	];

	protected $fillable = [
		'id',
		'bfx',
		'ceb',
		'eng',
		'source',
		'user_creator',
		'date_created',
		'user_editor',
		'date_edited',
		'comments'
	];
}
