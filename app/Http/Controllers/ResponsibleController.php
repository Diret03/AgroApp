<?php

namespace App\Http\Controllers;

use App\Models\Responsible;
use Illuminate\Http\Request;

class ResponsibleController extends Controller
{
    public function index()
    {
        $responsibles = Responsible::all();
        return view('responsibles.index', compact('responsibles'));
    }

    public function create()
    {
        return view('responsibles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'area' => 'required',
            'phone_number' => 'nullable'
        ]);

        Responsible::create($request->all());
        return redirect()->route('responsibles.index')->with('success', 'Responsible created successfully.');
    }

    public function edit($id)
    {
        $responsible = Responsible::findOrFail($id);
        return view('responsibles.edit', compact('responsible'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'area' => 'required',
            'phone_number' => 'nullable'
        ]);

        $responsible = Responsible::findOrFail($id);
        $responsible->update($request->all());
        return redirect()->route('responsibles.index')->with('success', 'Responsible updated successfully.');
    }

    public function destroy($id)
    {
        $responsible = Responsible::findOrFail($id);
        $responsible->delete();
        return redirect()->route('responsibles.index')->with('success', 'Responsible deleted successfully.');
    }
}
