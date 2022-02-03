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

    // protected $hidden = ['updated_at'];

    // protected $visible = ['name', 'founded', 'desciption'];

    // protected $dateFormat = 'h:m:s';

    public function carModels(){

        return $this->hasMany(CarModel::class);
    }

    
    //Define a has many through relationship
    public function engines(){
        return $this->hasManyThrough(
            Engine::class, 
            Carmodel::class,
            'car_id', // Foreign key on CarModel table
            'model_id' //Foreign key on Engine table
        );
    }

    // Define a has one through relationship
    public function carProductionDate(){
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }


    public function products(){
        return $this->belongsToMany(Products::class);
    }

}
