<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\buffets;
use Illuminate\Support\Facades\Validator;
Use Illuminate\Support\Facades\Auth;

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
       

       $anunciante = Auth::user()->id;

       $buffets = DB::select('select * from buffets where anunciante = '. $anunciante);    
       

       return view('dashboard',['buffets'=>$buffets]);

       
    }

    public function lista() {
            $buffets = DB::select('select * from buffets');         
		   return view('lista',['buffets'=>$buffets]);	
    }

    public function listarBuffets() {

        $anunciante = Auth::user()->id;

        $buffets = DB::select('select * from buffets where anunciante = '. $anunciante);    
        

		return view('dashboard',['buffets'=>$buffets]);

    }



    public function alugarView($id) {
        
        return view('alugarbuffet', [
            'buffets' => $this->getBuffets($id)
        ]);
    }

    public function filtrarbuffet(Request $request) {

        $diferencial = ($request->all('diferenciais'));
        extract($diferencial);

        $tipo = ($request->all('tipolocal'));
        extract($tipo);

        $buffets = DB::select('select * from buffets'); 

        if ($buffets == null) {

            return view('lista', [
            'buffets' => $buffets = 0
            ]);

        } else if ($diferenciais === "todos" && $tipolocal === "todos") {

           $buffets = DB::select('select * from buffets');         
		   return view('lista',['buffets'=>$buffets]);	

        } else if ($diferenciais === "todos" && $tipolocal === "1") {

            //$buffets = buffets::where('tipo', '=', '1')->get();
            $buffets = DB::select('select * from buffets where tipo = 1');


            return view('lista', [
            'buffets' => $buffets
            ]);

            } else if ($diferenciais === "todos" && $tipolocal === "2") {

               // $buffets = buffets::where('tipo', '=', '2')->get();
               $buffets = DB::select('select * from buffets where tipo = 2');


                return view('lista', [
                'buffets' => $buffets
                ]);
    
                } else if ($diferenciais === "todos" && $tipolocal === "3") {

                   // $buffets = buffets::where('tipo', '=', '3')->get();

                    $buffets = DB::select('select * from buffets where tipo = 3');
        
                    return view('lista', [
                    'buffets' => $buffets
                    ]);
        
                    } else if ($diferenciais === "casamento" && $tipolocal === "todos") {

                        $buffets = DB::select('select * from buffets where casamento is null and tipo');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "residencial" && $tipolocal === "todos") {

                        $buffets = DB::select('select * from buffets where residencial is null and tipo');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "infantil" && $tipolocal === "todos") {

                        $buffets = DB::select('select * from buffets where infantil is null and tipo');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "debutante" && $tipolocal === "todos") {

                        $buffets = DB::select('select * from buffets where debutante is null and tipo');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);
                    } 



                    
                    else if ($diferenciais === "casamento" && $tipolocal === "1") {

                        $buffets = DB::select('select * from buffets where casamento is null and tipo = 1');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "residencial" && $tipolocal === "1") {

                        $buffets = DB::select('select * from buffets where residencial is null and tipo = 1');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "infantil" && $tipolocal === "1") {

                        $buffets = DB::select('select * from buffets where infantil is null and tipo = 1');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "debutante" && $tipolocal === "1") {

                        $buffets = DB::select('select * from buffets where debutante is null and tipo = 1');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);
                    }


                    else if ($diferenciais === "casamento" && $tipolocal === "2") {

                        $buffets = DB::select('select * from buffets where casamento is null and tipo = 2');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "residencial" && $tipolocal === "2") {

                        $buffets = DB::select('select * from buffets where residencial is null and tipo = 2');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "infantil" && $tipolocal === "2") {

                        $buffets = DB::select('select * from buffets where infantil is null and tipo = 2');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "debutante" && $tipolocal === "2") {

                        $buffets = DB::select('select * from buffets where debutante is null and tipo = 2');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);
                    }


                    


                    else if ($diferenciais === "casamento" && $tipolocal === "3") {

                        $buffets = DB::select('select * from buffets where casamento is null and tipo = 3');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "residencial" && $tipolocal === "3") {

                        $buffets = DB::select('select * from buffets where residencial is null and tipo = 3');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "infantil" && $tipolocal === "3") {

                        $buffets = DB::select('select * from buffets where infantil is null and tipo = 3');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);

                    } else if ($diferenciais === "debutante" && $tipolocal === "3") {

                        $buffets = DB::select('select * from buffets where debutante is null and tipo = 3');
                    
                        return view('lista', [
                        'buffets' => $buffets
                        ]);
                    }

                    else {
                        echo 'erro';
                    }





        
    }

    protected function getBuffets($id)
    {
        return $this->buffets->find($id);
    }


    
    
}
