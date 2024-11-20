<?php

namespace App\Http\Controllers;

use App\Models\Marh;
use Illuminate\Http\Request;

class MarhController extends Controller
{
    public function index()
    {
        $marh = Marh::all();
        return view('marh.index', compact('marh'));
    }

    public function create()
    {
        return view('marh.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mesto' => 'required',
            'rasstoyanie' => 'required|integer',
        ]);

        Marh::create($request->all());

        return redirect()->route('marh.index')->with('success', 'Маршрут успешно добавлен');
    }

    public function edit($id)
    {
        $marh = Marh::findOrFail($id);
        return view('marh.edit', compact('marh'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mesto' => 'required',
            'rasstoyanie' => 'required|integer',
        ]);

        $marh = Marh::findOrFail($id);
        $marh->update($request->all());

        return redirect()->route('marh.index')->with('success', 'Маршрут успешно обновлен');
    }

    public function destroy($id)
    {
        $marh = Marh::findOrFail($id);
        $marh->delete();

        return redirect()->route('marh.index')->with('success', 'Маршрут успешно удален');
    }
    public function view($id)
    {
    $marh = Marh::findOrFail($id);
    return view('marh.view', compact('marh'));
}
}