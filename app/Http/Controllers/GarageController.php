<?php

namespace App\Http\Controllers;

use App\Models\Garage;
use App\Models\Avto;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    public function index()
    {
        $garage = Garage::all();
        return view('garage.index', compact('garage'));
    }

    public function create()
    {
        $avtos = Avto::all();
        return view('garage.create', compact('avtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_avto' => 'required|integer|exists:avtos,id_avto', // Проверка существования id_avto в таблице avtos
            'polomka' => 'required',
            'zapchast' => 'required',
            'cena_zapchast' => 'required|numeric',
            'data_nachalo' => 'required|date',
            'data_konec' => 'required|date',
        ]);

        Garage::create($request->all());

        return redirect()->route('garage.index')->with('success', 'Запись в гараже успешно добавлена');
    }

    public function edit($id)
    {
        $garage = Garage::findOrFail($id);
        $avtos = Avto::all();
        return view('garage.edit', compact('garage', 'avtos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_avto' => 'required|integer|exists:avtos,id_avto', // Проверка существования id_avto в таблице avtos
            'polomka' => 'required',
            'zapchast' => 'required',
            'cena_zapchast' => 'required|numeric',
            'data_nachalo' => 'required|date',
            'data_konec' => 'required|date',
        ]);

        $garage = Garage::findOrFail($id);
        $garage->update($request->all());

        return redirect()->route('garage.index')->with('success', 'Запись в гараже успешно обновлена');
    }

    public function destroy($id)
    {
        $garage = Garage::findOrFail($id);
        $garage->delete();

        return redirect()->route('garage.index')->with('success', 'Запись в гараже успешно удалена');
    }
    public function view($id)
    {
    $garage = Garage::findOrFail($id);
    return view('garage.view', compact('garage'));
}
}