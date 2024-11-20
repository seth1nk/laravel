<?php

namespace App\Http\Controllers;

use App\Models\Dispet;
use App\Models\Avto;
use App\Models\Voditeli;
use App\Models\Marh;
use App\Models\Tovar;
use Illuminate\Http\Request;

class DispetController extends Controller
{
    public function index()
    {
        $dispet = Dispet::all();
        return view('dispet.index', compact('dispet'));
    }

    public function create()
    {
        $avtos = Avto::all();
        $voditeli = Voditeli::all();
        $marhs = Marh::all();
        $tovars = Tovar::all();
        return view('dispet.create', compact('avtos', 'voditeli', 'marhs', 'tovars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'time_prib' => 'required|date',
            'time_otb' => 'required|date',
            'id_vod' => 'required|integer|exists:voditeli,id_vod', // Проверка существования id_vod в таблице voditeli
            'pytevka' => 'required|integer|exists:marh,id_marh', // Проверка существования pytevka в таблице marh
            'tovar' => 'required|integer|exists:tovar,id_tovar', // Проверка существования tovar в таблице tovar
            'id_avto' => 'required|integer|exists:avtos,id_avto', // Проверка существования id_avto в таблице avtos
        ]);

        Dispet::create($request->all());

        return redirect()->route('dispet.index')->with('success', 'Диспетчерская успешно добавлена');
    }

    public function edit($id_avto)
    {
        $dispet = Dispet::findOrFail($id_avto);
        $avtos = Avto::all();
        $voditeli = Voditeli::all();
        $marhs = Marh::all();
        $tovars = Tovar::all();
        return view('dispet.edit', compact('dispet', 'avtos', 'voditeli', 'marhs', 'tovars'));
    }

    public function update(Request $request, $id_avto)
    {
        $request->validate([
            'time_prib' => 'required|date',
            'time_otb' => 'required|date',
            'id_vod' => 'required|integer|exists:voditeli,id_vod', // Проверка существования id_vod в таблице voditeli
            'pytevka' => 'required|integer|exists:marh,id_marh', // Проверка существования pytevka в таблице marh
            'tovar' => 'required|integer|exists:tovar,id_tovar', // Проверка существования tovar в таблице tovar
            'id_avto' => 'required|integer|exists:avtos,id_avto', // Проверка существования id_avto в таблице avtos
        ]);

        $dispet = Dispet::findOrFail($id_avto);
        $dispet->update($request->all());

        return redirect()->route('dispet.index')->with('success', 'Диспетчерская успешно обновлена');
    }

    public function destroy($id_avto)
    {
        $dispet = Dispet::findOrFail($id_avto);
        $dispet->delete();

        return redirect()->route('dispet.index')->with('success', 'Диспетчерская успешно удалена');
    }
    public function view($id_avto)
    {
    $dispet = Dispet::findOrFail($id_avto);
    return view('dispet.view', compact('dispet'));
}
}