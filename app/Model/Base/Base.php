<?php
namespace App\Model\Base;

use Illuminate\Database\Eloquent\Model;
use App\Model\Scopes\BaseScopes;

class Base extends Model 
{
	/**
     * The "booting" method of the model.
     *
     * @return void
     */
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope(new BaseScopes);
    // }
}