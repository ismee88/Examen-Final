<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    public function index(){
        $ville = Ville::all();
        return view('admin.ville', [VilleController::class, 'ville'=>$ville]);
    }

    public function store(Request $request){
        $input = $request->all();
        Ville::create($input);
        return redirect('/admin/ville');
    }

    public function delete($id){
        $ville = Ville::FindOrFail($id);
        $ville -> delete();
        return redirect('/admin/ville');
    }
}
