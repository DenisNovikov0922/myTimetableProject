<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course
 *
 * @package App
 * @property string $name
 * @property string $abbr
*/
class Course extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'abbr'];
    protected $hidden = [];
    
    
    
}
