<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArchivedUser
 * 
 * @property int $id
 * @property string $username
 * @property string|null $password
 * @property string $first_name
 * @property string|null $middle_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $title
 * @property bool $committee
 * @property Carbon $date_registered
 * @property string|null $position
 * @property string|null $institution
 * @property string|null $bio
 * @property string|null $testimonial
 *
 * @package App\Models
 */
class ArchivedUser extends Model
{
	protected $table = 'archived_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'committee' => 'bool'
	];

	protected $dates = [
		'date_registered'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'id',
		'username',
		'password',
		'first_name',
		'middle_name',
		'last_name',
		'email',
		'title',
		'committee',
		'date_registered',
		'position',
		'institution',
		'bio',
		'testimonial'
	];
}
