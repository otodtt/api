<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = 'manufacturers';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'name', 'country', 'alphabet', 'nameToSearch' , 'isActive'
    ];
	
	protected $guarded = ['_token'];

    public function pesticides(){
        return $this->hasMany('App\Pesticides', 'manufacturersId')->where('isActive', 0);
    }
}
