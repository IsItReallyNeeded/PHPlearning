<?php

namespace App\Http\Controllers;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;



class peopleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(People::all());
        
    }

    public function show($id): JsonResponse
    {
        $person = People::find($id);
        return response()->json($person);
        
    }

    public function create(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'mobile' => 'required|integer',
        'city' => 'required|string',
        'street' => 'required|string',
        'age' => 'required|integer',
        'country' => 'required|string',
    ]);

    $newRecord = People::create([
        'name' => $request->input('name'),
        'mobile' => $request->input('mobile'),
        'city' => $request->input('city'),
        'street' => $request->input('street'),
        'age' => $request->input('age'),
        'country' => $request->input('country'),
    ]);

    return response()->json($newRecord);
}

public function edit(Request $request, $id)
{
  
    $request->validate([
        'name' => 'required|string',
        'mobile' => 'required|integer',
        'city' => 'required|string',
        'street' => 'required|string',
        'age' => 'required|integer',
        'country' => 'required|string',
    ]);

    
    $people = People::find($id);

    $people->update([
        'name' => $request->input('name'),
        'mobile' => $request->input('mobile'),
        'city' => $request->input('city'),
        'street' => $request->input('street'),
        'age' => $request->input('age'),
        'country' => $request->input('country'),
    ]);

  
    return response()->json($people);
} 

    public function delete($id): JsonResponse
    {
        $person = People::find($id);
        $person->delete();

        return response()->json(null);
        
    }
}