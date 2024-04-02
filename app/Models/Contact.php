<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'tblContact';

    protected $primaryKey = 'cntId';

    protected $fillable = ['cntName', 'cntEmail', 'cntMessage', 'cntDate'];

    public $timestamps = false;
}
