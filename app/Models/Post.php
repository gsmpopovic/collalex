<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $id
 * @property string|null $page
 * @property Carbon $date_created
 * @property Carbon|null $date_edited
 * @property Carbon|null $date_published
 * @property string|null $user_creator
 * @property string|null $user_editor
 * @property string|null $title
 * @property string|null $subtitle
 * @property string|null $content
 * @property string|null $picture
 * @property string|null $picture_alt
 * @property string|null $status
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'posts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'date_created',
		'date_edited',
		'date_published'
	];

	protected $fillable = [
		'id',
		'page',
		'date_created',
		'date_edited',
		'date_published',
		'user_creator',
		'user_editor',
		'title',
		'subtitle',
		'content',
		'picture',
		'picture_alt',
		'status'
	];
}
