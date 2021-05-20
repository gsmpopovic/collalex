<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Headword
 * 
 * @property int $id
 * @property string|null $headword
 * @property int|null $entry
 * @property string|null $derivation
 * @property string|null $pronunciation
 * @property string|null $comments
 * @property int|null $user
 * @property Carbon $date
 * @property string $validity
 * @property string|null $loan_lg
 * @property string|null $loan_lx
 * @property string|null $seealso
 *
 * @package App\Models
 */
class Headword extends Model
{

    use LogsActivity;
	protected $table = 'headwords';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'entry' => 'int',
		'user' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'headword',
		'entry',
		'derivation',
		'pronunciation',
		'comments',
		'user',
		'date',
		'validity',
		'loan_lg',
		'loan_lx',
		'seealso'
	];

	protected static $logAttributes = [		
	'headword',
	'pronunciation',
	'user',
	'date',
	'validity',
];

	// protected static $logAttributes = [		
	// 	'headword',
	// 	'entry',
	// 	'derivation',
	// 	'pronunciation',
	// 	'comments',
	// 	'user',
	// 	'date',
	// 	'validity',
	// 	'loan_lg',
	// 	'loan_lx',
	// 	'seealso'];

		// Only log those attributes which have been changed.

    protected static $logOnlyDirty = true;

	// Return the senses associated with each headword; refer. on headword id.
	public function senses(){
		return $this->hasMany('App\Models\Sense', 'headword_id');
	}
}
