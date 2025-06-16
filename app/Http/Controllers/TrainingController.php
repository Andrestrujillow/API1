<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    // GET /api/trainings - Lista todas las capacitaciones
    public function index()
    {
        $trainings = Training::all(); // o usar algún scope si lo tienes
        return response()->json($trainings);
    }

    // POST /api/trainings - Guarda una nueva capacitación
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'provider' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $training = Training::create($request->all());

        return response()->json($training, 201); // 201 Created
    }

    // GET /api/trainings/{id} - Muestra una capacitación específica
    public function show($id)
    {
        $training = Training::findOrFail($id);
        return response()->json($training);
    }

    // PUT/PATCH /api/trainings/{training} - Actualiza una capacitación
    public function update(Request $request, Training $training)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'provider' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $training->update($request->all());

        return response()->json($training);
    }

    // DELETE /api/trainings/{training} - Elimina una capacitación
    public function destroy(Training $training)
    {
        $training->delete();
        return response()->json(['message' => 'Training deleted successfully.']);
    }
}
