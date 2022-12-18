<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function classement(Request $request)
    {
        $winner = Candidat::where('categorie', $request->categorie)->orderBy('total', 'ASC')->orderBy('vpro', 'ASC')->orderBy('vpro', 'ASC')->first();

        //dd($winner);
        return view('admin.candidats.classement', compact('winner'));
    }

}
