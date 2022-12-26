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
        return $this->morphToMany(UseV::class, 'vehicle_use');
    }

    /**
     * Get all the requirements for the vehicle.
     */
    public function requirements()
    {
        return $this->morphToMany(Requirement::class, 'vehicle_requirements');
    }

    /**
     * Get all the client types for the vehicle.
     */
    public function client_types()
    {
        return $this->morphToMany(ClientType::class, 'vehicle_client_type');
    }

}
