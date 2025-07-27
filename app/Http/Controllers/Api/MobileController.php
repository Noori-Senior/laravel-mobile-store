<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Mobile;
use Illuminate\Http\Request;


class MobileController extends Controller
{
    public function index()
    {
       return response()->json([
        'mobiles' => Mobile::all(),
    ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $mobile = Mobile::create($request->all());

        return response()->json($mobile, 201);
    }


    public function show($id)
    {
        return response()->json(Mobile::findOrFail($id));
    }


    public function update(Request $request, $id)
    {
        $mobile = Mobile::findOrFail($id);
        $mobile->update($request->all());

        return response()->json($mobile);
    }


    public function destroy($id)
    {
        Mobile::destroy($id);

        return response()->json(['message' => 'Mobile deleted']);
    }


}
