<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        try {
            //code...
       
        $validated = $request->validate([
            'title' => 'nullable|string',
            'content' => 'nullable|string',
            'type' => 'nullable|string',
            'bhk' => 'nullable|string',
            'stype' => 'nullable|string',
            'bedroom' => 'nullable|integer|min:0',
            'bathroom' => 'nullable|integer|min:0',
            'balcony' => 'nullable|integer|min:0',
            'kitchen' => 'nullable|integer|min:0',
            'hall' => 'nullable|integer|min:0',
            'floor' => 'nullable|string',
            'size' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'location' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'feature' => 'nullable|string',
            'status' => 'nullable|string',
            'totalfloor' => 'nullable|string',
            'isfeatured' => 'nullable|integer|min:0',

            // Imagens
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'mapimage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'topmapimage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'groundmapimage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // dd($validated);

        // Salvar imagens e substituir nomes no $validated
        $imageFields = ['image', 'image1', 'image2', 'image3', 'image4', 'mapimage', 'topmapimage', 'groundmapimage'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $filename = Str::uuid() . '.' . $request->file($field)->getClientOriginalExtension();
                $request->file($field)->storeAs('properties', $filename, 'public');
                $validated[$field] = $filename;
            }
        }

        // Criar o Property
        $validated["user_id"] = Auth::user()->id;
        $property = Property::create($validated);

        return back()->with('message', 'Propriedade cadastrada com sucesso!');

         } catch (\Throwable $th) {
            //throw $th;
            dd($th->getMessage());
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $property = Property::find($id);

        return view('property.updateproperty', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'title' => 'nullable|string',
                'content' => 'nullable|string',
                'type' => 'nullable|string',
                'bhk' => 'nullable|string',
                'stype' => 'nullable|string',
                'bedroom' => 'nullable|integer|min:0',
                'bathroom' => 'nullable|integer|min:0',
                'balcony' => 'nullable|integer|min:0',
                'kitchen' => 'nullable|integer|min:0',
                'hall' => 'nullable|integer|min:0',
                'floor' => 'nullable|string',
                'size' => 'nullable|string',
                'price' => 'nullable|numeric|min:0',
                'location' => 'nullable|string',
                'city' => 'nullable|string',
                'state' => 'nullable|string',
                'feature' => 'nullable|string',
                'status' => 'nullable|string',
                'totalfloor' => 'nullable|string',
                'isfeatured' => 'nullable|integer|min:0',

                // Imagens
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'image1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'image2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'image3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'image4' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'mapimage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'topmapimage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'groundmapimage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $property = Property::findOrFail($id);

            // Atualizar imagens (somente se novas forem enviadas)
            $imageFields = ['image', 'image1', 'image2', 'image3', 'image4', 'mapimage', 'topmapimage', 'groundmapimage'];

            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $filename = Str::uuid() . '.' . $request->file($field)->getClientOriginalExtension();
                    $request->file($field)->storeAs('properties', $filename, 'public');
                    $validated[$field] = $filename;
                }
            }

            // Atualizar os dados
            $property->update($validated);

            return back()->with('message', 'Propriedade atualizada com sucesso!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $proprerty = Property::find($id);
        $proprerty->delete();
         return back()->with('message', 'Propriedade excluida com sucesso!');

    }
}
