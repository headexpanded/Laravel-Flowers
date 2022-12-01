<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

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
        $newFlower->save();

        return ($newFlower) ? redirect('/flowers')->with('message', '<p class="_flowerEditUpdateMsg_OK"><span>' . $request->name . ' : Insert Successful</span></p>') : back()->with('message', '<p class="_flowerEditUpdateMsg_Not_OK"><span>Insert Failed</span></p>');
    }

    public function editFlowerDetails($id)

    {
        $flower = Flower::find($id);
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

        return ($deletedFlower) ? redirect('/flowers')->with('message', '<p style="display:flex; justify-content: center;"><span style="color:green; text-transform: uppercase; font-size: 1.25rem;">   Delete Successful</span></p>') : redirect('/update')->with('message', 'Delete Failed');
    }


    public function flowerAPI()
    {
        $flowers = Flower::all();
        return response()->json([
            'flowers' => [
                [
                    'flower' => $flowers
                ]
            ]
        ]);
    }
}
