<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\buffets;

class BuffetController extends Controller
{
    private $buffets;

    public function __construct()
    {
        $this->buffets = new buffets();
    }

    public function novobuffet(Request $request) 
    {
       buffets::create($request->all());

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
