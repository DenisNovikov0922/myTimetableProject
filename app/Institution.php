<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Institution
 *
 * @package App
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property text $description
*/
class Institution extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','address', 'phone', 'description'];
    protected $hidden = [];
    
    
    
}
