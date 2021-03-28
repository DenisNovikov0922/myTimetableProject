<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teacher
 *
 * @package App
 * @property string $name
 * @property String $subject
 * @property String $timeoff
*/
class Teacher extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'subject', 'timeoff'];
    protected $hidden = [];
    
    
    
}
