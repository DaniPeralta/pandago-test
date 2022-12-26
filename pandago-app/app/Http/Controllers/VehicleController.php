<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VehicleController extends Controller
{
    public function getAll()
    {
        try
        {
            return response()->json([
                'status' => 'Success',
                'data' => Vehicle::all()->load('requirements', 'uses', 'client_types')
            ]);
        }
        catch (\Exception $exception)
        {
            return response()->json([
                'status' => 'Error',
                'message' => $exception->getMessage(),
            ], $exception->getCode());
        }
    }

    public function getByFilters(Request $request)
    {
        try
        {
            Log::debug($request->all());
            return response()->json([
                'status' => 'Success',
                'data' => Vehicle::getByFilters($request->all())
            ]);
        }
        catch (\Exception $exception)
        {
            return response()->json([
                'status' => 'Error',
                'message' => $exception->getMessage(),
            ], 500);
        }
    }
}
