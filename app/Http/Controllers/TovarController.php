<?php

namespace App\Http\Controllers;

use App\Models\Tovar;
use Illuminate\Http\Request;

class TovarController extends Controller
{
    public function index()
    {
        $tovar = Tovar::all();
        return view('tovar.index', compact('tovar'));
    }

    public function create()
    {
        return view('tovar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_tovar' => 'required',
            'kolvo_tovar' => 'required|integer',
            'cena_tovar' => 'required|numeric',
        ]);

        Tovar::create($request->all());

        return redirect()->route('tovar.index')->with('success', 'Товар успешно добавлен');
    }

    public function edit($id)
    {
        $tovar = Tovar::findOrFail($id);
        return view('tovar.edit', compact('tovar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_tovar' => 'required',
            'kolvo_tovar' => 'required|integer',
            'cena_tovar' => 'required|numeric',
        ]);

        $tovar = Tovar::findOrFail($id);
        $tovar->update($request->all());

        return redirect()->route('tovar.index')->with('success', 'Товар успешно обновлен');
    }

    public function destroy($id)
    {
        $tovar = Tovar::findOrFail($id);
        $tovar->delete();

        return redirect()->route('tovar.index')->with('success', 'Товар успешно удален');
    }
    public function view($id)
    {
    $tovar = Tovar::findOrFail($id);
    return view('tovar.view', compact('tovar'));
}
}