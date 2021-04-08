<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Suggestion
 * 
 * @property int $id
 * @property string|null $lx
 * @property string|null $lx_bfx
 * @property string|null $ph_bfx
 * @property string|null $co_eng
 * @property string|null $ps_eng
 * @property string|null $g_eng
 * @property string|null $g_ceb
 * @property string|null $g_hil
 * @property string|null $g_tgl
 * @property string|null $d_eng
 * @property string|null $d_ceb
 * @property string|null $d_hil
 * @property string|null $d_tgl
 * @property string|null $is_eng
 * @property string|null $sd_eng
 * @property string|null $source
 * @property Carbon $dt
 * @property int|null $headword_id
 *
 * @package App\Models
 */
class Suggestion extends Model
{
	protected $table = 'suggestions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'headword_id' => 'int'
	];

	protected $dates = [
		'dt'
	];

	protected $fillable = [
		'id',
		'lx',
		'lx_bfx',
		'ph_bfx',
		'co_eng',
		'ps_eng',
		'g_eng',
		'g_ceb',
		'g_hil',
		'g_tgl',
		'd_eng',
		'd_ceb',
		'd_hil',
		'd_tgl',
		'is_eng',
		'sd_eng',
		'source',
		'dt',
		'headword_id'
	];
}
