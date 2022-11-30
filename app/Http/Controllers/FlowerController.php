<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class FlowerController extends Controller
{
    public function index()
    {
        $flowers = Flower::all();
        return view('flowers', ['flowers' => $flowers]);
    }

    public function show($id)
    {
        $flower = Flower::where('id', $id)->first();

        // $flower = DB::table('flowers')->where('id', $id)->first();
        return response(view('flower-detail', ['flower' => $flower]));
    }

    public function create()
    {
        return view('new-flower');
    }

    public function insert(Request $request)
    {
        // validate
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric'],
        ]);

        $newFlower = new Flower;
        $newFlower->name = $request->name;
        $newFlower->price = $request->price;

        return ($newFlower) ? redirect('/flowers')->with('message', '<p style="display:flex; justify-content: center;"><span style="color:green; text-transform: uppercase; font-size: 1.25rem;">' . $request->name . ' : Insert Successful</span></p>') : back()->with('message', 'Insert Failed');
    }

    public function editFlowerDetails($id)

    {
        $flower = DB::table('flowers')->where('id', $id)->first();
        return view('update', ['flower' => $flower]);
    }

    public function update(Request $request, $id)
    {
        // validate
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:5'],
        ]);
        $editedFlower = Flower::find($id);
        $editedFlower->name = $request->name;
        $editedFlower->price = $request->price;
        $editedFlower->save();

        return ($editedFlower) ? redirect('/flowers')->with('message', '<p style="display:flex; justify-content: center;"><span style="color:green; text-transform: uppercase; font-size: 1.25rem;">' . $request->name . ' : Update Successful</span></p>') : back()->with('message', 'Update Failed');
    }

    public function deleteThisFlower($id)
    {
        $deletedFlower = Flower::find($id);
        $deletedFlower->delete();

        // $deletedFlower = DB::table('flowers')
        //     ->where('id', $id)->delete();
        return ($deletedFlower) ? redirect('/flowers')->with('message', '<p style="display:flex; justify-content: center;"><span style="color:green; text-transform: uppercase; font-size: 1.25rem;">   Delete Successful</span></p>') : redirect('/update')->with('message', 'Delete Failed');
    }

    public function flowerAPI()
    {
        $flowers = DB::table('flowers')->get();
        return response()->json([
            'flowers' => [
                [
                    'flower' => $flowers
                ]
            ]
        ]);
    }
}
