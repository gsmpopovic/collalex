<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resource
 * 
 * @property int|null $id
 * @property string|null $type
 * @property string|null $author
 * @property int|null $year
 * @property string|null $title
 * @property string|null $journal
 * @property string|null $volume
 * @property string|null $issue
 * @property string|null $pages
 * @property string|null $url
 * @property string|null $publisher
 * @property string|null $city
 * @property string|null $series
 * @property string|null $edition
 * @property string|null $book
 * @property string|null $chapter
 * @property string|null $institution
 * @property string|null $department
 * @property string|null $file
 *
 * @package App\Models
 */
class Resource extends Model
{
	protected $table = 'resources';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'year' => 'int'
	];

	protected $fillable = [
		'id',
		'type',
		'author',
		'year',
		'title',
		'journal',
		'volume',
		'issue',
		'pages',
		'url',
		'publisher',
		'city',
		'series',
		'edition',
		'book',
		'chapter',
		'institution',
		'department',
		'file'
	];
}
