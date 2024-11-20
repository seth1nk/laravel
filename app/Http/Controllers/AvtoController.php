<?php

namespace App\Http\Controllers;

use App\Models\Avto;
use Illuminate\Http\Request;

class AvtoController extends Controller
{
    public function index()
    {
        $avto = Avto::all();
        return view('avto.index', compact('avto'));
    }

    public function create()
    {
        return view('avto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'registration_number' => 'required',
            'name_avto' => 'required',
            'god' => 'required|integer',
            'probeg' => 'required|integer',
            'category' => 'required',
        ]);

        Avto::create($request->all());

        return redirect()->route('avto.index')->with('success', 'Автомобиль успешно добавлен');
    }

    public function edit($id_avto)
    {
        $avto = Avto::findOrFail($id_avto);
        return view('avto.edit', compact('avto'));
    }

    public function update(Request $request, $id_avto)
    {
        $request->validate([
            'registration_number' => 'required',
            'name_avto' => 'required',
            'god' => 'required|integer',
            'probeg' => 'required|integer',
            'category' => 'required',
        ]);

        $avto = Avto::findOrFail($id_avto);
        $avto->update($request->all());

        return redirect()->route('avto.index')->with('success', 'Автомобиль успешно обновлен');
    }

    public function destroy($id_avto)
    {
        $avto = Avto::findOrFail($id_avto);
        $avto->delete();

        return redirect()->route('avto.index')->with('success', 'Автомобиль успешно удален');
    }
    public function view($id_avto)
{
    $avto = Avto::findOrFail($id_avto);
    return view('avto.view', compact('avto'));
}
}