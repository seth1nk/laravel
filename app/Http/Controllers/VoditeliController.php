<?php

namespace App\Http\Controllers;

use App\Models\Voditeli;
use Illuminate\Http\Request;

class VoditeliController extends Controller
{
    public function index()
    {
        $voditeli = Voditeli::all();
        return view('voditeli.index', compact('voditeli'));
    }

    public function create()
    {
        return view('voditeli.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_vod' => 'required',
            'stazh' => 'required|integer',
            'number_pass' => 'required',
            'adress' => 'required',
            'phone' => 'required',
        ]);

        Voditeli::create($request->all());

        return redirect()->route('voditeli.index')->with('success', 'Водитель успешно добавлен');
    }

    public function edit($id)
    {
        $voditeli = Voditeli::findOrFail($id);
        return view('voditeli.edit', compact('voditeli'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_vod' => 'required',
            'stazh' => 'required|integer',
            'number_pass' => 'required',
            'adress' => 'required',
            'phone' => 'required',
        ]);

        $voditeli = Voditeli::findOrFail($id);
        $voditeli->update($request->all());

        return redirect()->route('voditeli.index')->with('success', 'Водитель успешно обновлен');
    }

    public function destroy($id)
    {
        $voditeli = Voditeli::findOrFail($id);
        $voditeli->delete();

        return redirect()->route('voditeli.index')->with('success', 'Водитель успешно удален');
    }
    public function view($id)
    {
    $voditeli = Voditeli::findOrFail($id);
    return view('voditeli.view', compact('voditeli'));
}
}