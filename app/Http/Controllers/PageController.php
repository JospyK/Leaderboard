<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function classement(Request $request)
    {
        $candidats = Candidat::where('categorie', $request->categorie)->orderBy('total')->orderBy('vpro')->get();

        dd($candidats->first());
        return view('admin.candidats.classement', compact('candidats'));
    }

}
