<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;
use App\Http\Resources\PrestamoResource;
class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
         $query = Prestamo::query();
        if ($s = $request->query('search')) { 
                $query->where('fecha_prestamo', 'like', "%{$s}%")
                  ->orWhere('libro_id', 'like', "%{$s}%")
                  ->orWhere('estado', 'like', "%{$s}%");
        
        }
        return PrestamoResource::collection($query->orderBy('libro_id', 'desc')->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }
}
