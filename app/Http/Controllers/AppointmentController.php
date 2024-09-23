<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index() {
        // Lógica para listar consultas
        // $appointments = Appointment::all();
        $title = "Consultas";
        return view('appointments.index', compact([
            'title'
        ]));
    }

    public function create() {
        // Retorna a view para criação de consulta
        return view('appointments.create');
    }

    public function store(Request $request) {
        // Valida e armazena uma nova consulta
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'date' => 'required|date',
            'time' => 'required',
            'notes' => 'nullable|string',
        ]);

        Appointment::create($validated);
        return redirect()->route('appointments.index')->with('success', 'Consulta marcada com sucesso!');
    }
}

