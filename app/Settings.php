<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'setting_id';

    protected $fillable = ['setting_value'];

    public $timestamps = false;
}
