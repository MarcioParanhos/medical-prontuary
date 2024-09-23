<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalRecord;

class MedicalRecordController extends Controller
{
    public function index() {
        // Lógica para listar prontuários
        $records = MedicalRecord::all();
        return view('medical-records.index', compact('records'));
    }

    public function show($id) {
        // Exibe detalhes de um prontuário específico
        $record = MedicalRecord::findOrFail($id);
        return view('medical-records.show', compact('record'));
    }

    public function store(Request $request) {
        // Valida e armazena um novo prontuário
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'details' => 'required|string',
        ]);

        MedicalRecord::create($validated);
        return redirect()->route('medical-records.index')->with('success', 'Prontuário criado com sucesso!');
    }
}

