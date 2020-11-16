<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\buffets;
use Illuminate\Support\Facades\Validator;

class BuffetController extends Controller
{
    private $buffets;

    public function __construct()
    {
        $this->buffets = new buffets();
    }

    public function novobuffet(Request $request) 
    {

        
        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('images'))
        {

           foreach($request->file('images') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/images/', $name); 
               $data[] = $name;  
               
           }
        }

        $pessoa= new buffets($request->all());
        $pessoa->images=json_encode($data);
       
       $pessoa->save();
       return view('/dashboard');

       
    }

    public function lista() {
            $buffets = DB::select('select * from buffets');         
		   return view('lista',['buffets'=>$buffets]);	
    }

    public function alugarView($id) {
        
        return view('alugarbuffet', [
            'buffets' => $this->getBuffets($id)
        ]);
    }

    protected function getBuffets($id)
    {
        return $this->buffets->find($id);
    }

    
    
}
