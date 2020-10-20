<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\buffets;

class BuffetController extends Controller
{
    

    public function novobuffet(Request $request) 
    {
       buffets::create($request->all());

       return view('/home');
    }

    public function lista() {
            $buffets = DB::select('select * from buffets');         
		   return view('lista',['buffets'=>$buffets]);	
    }

    
    
}
