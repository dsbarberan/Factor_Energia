<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $url = env('URL_SERVER','https://api.stackexchange.com/2.3/questions?order=desc&sort=activity&tagged=android&site=stackoverflow');//url guardada previamente, en caso de error mostrar una predeterminada.
        
        $tagged = $request->tagged; //Lectura de las variables
        $todate = $request->todate; //Lectura de las variables
        $fromdate = $request->fromdate; //Lectura de las variables

        // return  $tagged."----".$todate."---".$fromdate;


        if(strlen($tagged)>0){// Comprobamos que la variable venga con valor y lo añadimos al filtro 
            $tagged2 = "tagged=".$tagged."&";
        }else{
            $tagged2 = "";
        }

        if(strlen($todate)>0){// Comprobamos que la variable venga con valor y lo añadimos al filtro
            $todate2 = "tagged=".$todate."&";
        }else{
            $todate2 = "";
        }
        
        if(strlen($fromdate)>0){// Comprobamos que la variable venga con valor y lo añadimos al filtro
            $fromdate2 = "tagged=".$fromdate."&";
        }else{
            $fromdate2 = "";
        }


        $url_extend = $url."?order=desc&sort=activity&".$tagged2.$fromdate2.$todate2."site=stackoverflow"; //Prepramos la url con todos los filtros.
        $response = Http::get($url_extend); //Hacemos la petición
        $data = $response->json();//La transofrmamos como json
        // dd($data);
        return $data;//Mostramos el json
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $proceso = "El proceso se ha guardado corrrectamente"; //Mensaje conforme los datos se han guardado correctamente.
        $url = env('URL_SERVER','https://api.stackexchange.com/2.3/questions?order=desc&sort=activity&tagged=android&site=stackoverflow'); //url guardada previamente, en caso de error mostrar una predeterminada.
        
        $tagged = $request->tagged;//Lectura de las variables
        $todate = $request->todate;//Lectura de las variables
        $fromdate = $request->fromdate;//Lectura de las variables

        if(strlen($tagged)>0){// Comprobamos que la variable venga con valor y lo añadimos al filtro
            $tagged2 = "tagged=".$tagged."&";
        }else{
            $tagged2 = "";
        }

        if(strlen($todate)>0){// Comprobamos que la variable venga con valor y lo añadimos al filtro
            $todate2 = "tagged=".$todate."&";
        }else{
            $todate2 = "";
        }
        
        if(strlen($fromdate)>0){// Comprobamos que la variable venga con valor y lo añadimos al filtro
            $fromdate2 = "tagged=".$fromdate."&";
        }else{
            $fromdate2 = "";
        }

        $url_extend = $url."?order=desc&sort=activity&".$tagged2.$fromdate2.$todate2."site=stackoverflow";//Prepramos la url con todos los filtros.
        $response = Http::get($url_extend);//Hacemos la petición
        $data = $response->json();//La transofrmamos como json
        // dd($data);


        foreach ($data["items"] as $item) {
            $i = new Item; //Incializamos nuevo registor


            // echo $item["content_license"]."<br>";
            //añadimos atributos
            $i->is_answered = $item["is_answered"];
            $i->view_count = $item["view_count"];
            $i->tags = implode(", ", $item["tags"]);
            $i->owner_id = $item["owner"]["user_id"];
            $i->answer_count = $item["answer_count"];
            $i->score = $item["score"];
            $i->last_activity_date = $item["last_activity_date"];
            $i->creation_date = $item["creation_date"];
            $i->question_id = $item["question_id"];
            $i->link = $item["link"];
            $i->title = $item["title"];
            $i->save(); //Funcion para guaradar en base de datos
        }
        return $proceso;//Devolvemos el mensaje conforme el estado de la peticion.
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
