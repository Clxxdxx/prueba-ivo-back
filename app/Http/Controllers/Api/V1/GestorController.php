<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Resources\V1\GestorResource;
use App\Http\Controllers\Controller;
use App\Models\Gestor;
use Illuminate\Http\Request;

class GestorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gestores = GestorResource::collection(Gestor::all());
        return response()->json(['results' => $gestores], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gestor $gestor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gestor $gestor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gestor $gestor)
    {
        //
    }
}
