<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{

    public function index(){
        return Card::where('uvol', null)
        ->orderby('id', 'desc')
        ->orderBy('D10', 'desc')
        ->get();
    }


    public function store(Request $request){
        $card = new Card();
        $card->TABN = $request->TABN;
        $card->FIO = $request->FIO;
        $card->SEX = $request->SEX;
        $card->DATAR = $request->DATAR;
        $card->MESTOR = $request->MESTOR;
        $card->NATION = $request->NATION;
        $card->VIDOBRAZ = $request->VIDOBRAZ;
        $card->UCHZAV = $request->UCHZAV;
        $card->FORMAUCH = $request->FORMAUCH;
        $card->SPECOBR = $request->SPECOBR;
        $card->POSLMESTO = $request->POSLMESTO;
        $card->SEM_POL = $request->SEM_POL;
        $card->ADRES = $request->ADRES;
        $card->PASPNOM = $request->PASPNOM;
        $card->PASPKEM = $request->PASPKEM;
        $card->STRANA = $request->STRANA;
        $card->PASPKOGDA = $request->PASPKOGDA;
        $card->PASPDEYST = $request->PASPDEYST;
        $card->UCHAST_CHS = $request->UCHAST_CHS;
        $card->V_GRUCHETA = $request->V_GRUCHETA;
        $card->V_KAT = $request->V_KAT;
        $card->V_SOSTAV = $request->V_SOSTAV;
        $card->V_ZVANIE = $request->V_ZVANIE;
        $card->V_VUSNOM = $request->V_VUSNOM;
        $card->V_GODNOST = $request->V_GODNOST;
        $card->V_ODO = $request->V_ODO;
        $card->DATAPRIEM = $request->DATAPRIEM;
        $card->DATAPRIEM = $request->DATAPRIEM;
        $card->PODRAZD = $request->PODRAZD;
        $card->PROF = $request->PROF;
        $card->RAZRYAD = $request->RAZRYAD;
        $card->leavetext = $request->leavetext;
        $card->desc_time = $request->desc_time;
        $card->bron = $request->bron;
        $card->D10 = now();
        $card->save();

        return $card->fresh();
    }


    public function update($id , Request $request){
        $card = Card::find($id);

        
        $card->TABN =           $request->TABN;
        $card->FIO =            $request->FIO;
        $card->SEX =            $request->SEX;
        $card->DATAR =          $request->DATAR;
        $card->MESTOR =         $request->MESTOR;
        $card->NATION =         $request->NATION;
        $card->VIDOBRAZ =       $request->VIDOBRAZ;
        $card->UCHZAV =         $request->UCHZAV;
        $card->FORMAUCH =       $request->FORMAUCH;
        $card->SPECOBR =        $request->SPECOBR;
        $card->POSLMESTO =      $request->POSLMESTO;
        $card->SEM_POL =        $request->SEM_POL;
        $card->ADRES =          $request->ADRES;
        $card->PASPNOM =        $request->PASPNOM;
        $card->PASPKEM =        $request->PASPKEM;
        $card->STRANA =         $request->STRANA;
        $card->PASPKOGDA =      $request->PASPKOGDA;
        $card->PASPDEYST =      $request->PASPDEYST;
        $card->UCHAST_CHS =     $request->UCHAST_CHS;
        $card->V_GRUCHETA =     $request->V_GRUCHETA;
        $card->V_KAT =          $request->V_KAT;
        $card->V_SOSTAV =       $request->V_SOSTAV;
        $card->V_ZVANIE =       $request->V_ZVANIE;
        $card->V_VUSNOM =       $request->V_VUSNOM;
        $card->V_GODNOST =      $request->V_GODNOST;
        $card->V_ODO =          $request->V_ODO;
        $card->DATAPRIEM =      $request->DATAPRIEM;
        $card->DATAPRIEM =      $request->DATAPRIEM;
        $card->PODRAZD =        $request->PODRAZD;
        $card->PROF =           $request->PROF;
        $card->RAZRYAD =        $request->RAZRYAD;
        $card->leavetext =      $request->leavetext;
        $card->desc_time =      $request->desc_time;
        $card->bron =           $request->bron;
        $card->save();

        return $card;
    }


    public function destroy($id){
        Card::find($id)->delete();
    }
}
