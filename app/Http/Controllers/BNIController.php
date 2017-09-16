<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

/**
 *
 */
class BNIController extends Controller
{

  public function show()
  {
    $dariDB = DB::table('guide')->get();

    return view('search', ['fromDB' => $dariDB]);
  }

  public function showhome()
  {
    $dariDB = DB::table('guide')->get();

    return view('welcome', ['fromDB' => $dariDB]);
  }

  public function showprofil($id)
  {


           $hasilprofil = DB::table('guide')->where('Nomor', $id)->get();

    return view('profil', ['profil' => $hasilprofil]);

  }

  public function getSearch()
        {
            //get keywords input for search
            $keyword=  Input::get('q');

            $hasilprofil = DB::table('guide')
                  ->select(DB::raw("*"))
                   ->where('tempat', '=', $keyword)
                   ->get();

            return view('search', ['fromDB' => $dariDB]);

        }
}


 ?>
