<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'floor', 'bed_type_id', 'bathroom_type_id', 'view_id', 'is_suite', 'price',
        'reduced_mobily_acces', 'area', 'created_at', 'updated_at',
    ];
}
