<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicle';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'type',
        'price',
        'valoration',
        'contract_duration',
        'brand',
        'speed',
        'autonomy',
        'image'
    ];

    /**
     * Get all the uses for the vehicle.
     */
    public function uses()
    {
        return $this->belongsToMany(UseV::class, 'vehicle_use', 'use_id','vehicle_id');
    }

    /**
     * Get all the requirements for the vehicle.
     */
    public function requirements()
    {
        return $this->belongsToMany(Requirement::class, 'vehicle_requirements', 'requirement_id','vehicle_id');
    }

    /**
     * Get all the client types for the vehicle.
     */
    public function client_types()
    {
        return $this->belongsToMany(ClientType::class, 'vehicle_client_type', 'client_type_id','vehicle_id');
    }

    public static function getByFilters($where)
    {
        return self::where($where)->get();
    }
}
