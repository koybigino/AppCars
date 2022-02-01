<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['name', 'founded', 'desciption'];

    protected $hidden = ['updated_at'];

    protected $visible = ['name', 'founded', 'desciption'];

    // protected $dateFormat = 'h:m:s';

}
