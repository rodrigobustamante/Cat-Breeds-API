<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breed;

class BreedController extends Controller
{
    
    public function index()
    {
        return response()->json(['status'=>'ok','breeds'=>Breed::all()]);
    }

    public function store(Request $request)
    {
        $breed = new Breed;
        $breed->breed = $request['breed'];
        $breed->country = $request['country'];
        $breed->origin = $request['origin'];
        $breed->coat = $request['coat'];
        $breed->pattern = $request['pattern'];
        $breed->save();
        $message = array('message' => 'Cat breed added correctly');
        return $message;
    }

    public function show($id)
    {
        $breed = Breed::find($id);
        if(!$breed){
            $message = array('message' => 'Cat breed not found');
            return $message;
        }else{
            return $breed;   
        }
    }

    public function update(Request $request, $id)
    {
        $breed = Breed::find($id);
        if(!$breed){
            $message = array('message' => 'Cat breed not found');
            return $message;
        }else{
            $breed->breed = $request['breed'];
            $breed->country = $request['country'];
            $breed->origin = $request['origin'];
            $breed->coat = $request['coat'];
            $breed->pattern = $request['pattern'];
            $breed->save();
            $message = array('message' => 'Cat breed updated correctly');
            return $message;
        }
    }

    public function destroy($id)
    {
        $breed = Breed::find($id);
        if(!$breed){
            $message = array('message' => 'Cat breed not found');
            return $message;
        }

        if($breed->delete()){
            $message = array('message' => 'Cat breed erased correctly');
            return $message;
        }
    }
}
