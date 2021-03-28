<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subject
 *
 * @package App
 * @property string $name
 * @property string $abbr
*/
class Subject extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'abbr'];
    protected $hidden = [];
    
    
    
}
