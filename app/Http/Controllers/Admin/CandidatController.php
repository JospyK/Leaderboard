<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCandidatRequest;
use App\Http\Requests\StoreCandidatRequest;
use App\Http\Requests\UpdateCandidatRequest;
use App\Models\Candidat;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CandidatController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('candidat_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $candidats = Candidat::all();

        return view('admin.candidats.index', compact('candidats'));
    }

    public function create()
    {
        abort_if(Gate::denies('candidat_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidats.create');
    }

    public function store(StoreCandidatRequest $request)
    {
        $candidat = Candidat::create($request->all());

        return redirect()->route('admin.candidats.index');
    }

    public function vote(Request $request)
    {
        abort_if(Gate::denies('candidat_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categorie = Candidat::all()->sortBy('categorie')->groupBy('categorie');

        return view('admin.candidats.categories', compact('categorie'));
    }

    public function edit(Candidat $candidat)
    {
        abort_if(Gate::denies('candidat_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidats.edit', compact('candidat'));
    }

    public function update(UpdateCandidatRequest $request, Candidat $candidat)
    {

        $message = [];
        $check_vjury = null;
        $check_vpro = null;
        $check_vpublic = null;

        if ($request->has('vjury')) {
            $check_vjury = Candidat::where('categorie', $candidat->categorie)->where('id', '<>', $candidat->id)->where('vjury', intval($request->vjury))->first();
            if($check_vjury) {
                array_push($message, "Le candidat: " .$check_vjury->nom. " occupe deja la position (vjury): ". $request->vjury);
            }
        }


        if ($request->has('vpro')) {
            $check_vpro = Candidat::where('categorie', $candidat->categorie)->where('id', '<>', $candidat->id)->where('vpro', intval($request->vpro))->first();
            if($check_vpro) {
                array_push($message, "Le candidat: " .$check_vpro->nom. " occupe deja la position (vpro): ". $request->vpro);
            }
        }

        if ($request->has('vpro')) {
            $check_vpublic = Candidat::where('categorie', $candidat->categorie)->where('id', '<>', $candidat->id)->where('vpublic', intval($request->vpublic))->first();
            if($check_vpublic) {
                array_push($message, "Le candidat: " .$check_vpublic->nom. " occupe deja la position (vpublic): ". $request->vpublic);
            }
        }

        // dd($check_vjury, $check_vpro, $check_vpublic, $message, $request->all());

        if (!$message) {
            $candidat->update($request->all());
            $candidat->total = $candidat->vpro + $candidat->vjury + $candidat->vpublic;
            $candidat->save();
        }
        else {
            return back()->withErrors($message);
        }

        return redirect()->route('admin.candidats.vote');
    }

    public function show(Candidat $candidat)
    {
        abort_if(Gate::denies('candidat_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidats.show', compact('candidat'));
    }

    public function destroy(Candidat $candidat)
    {
        abort_if(Gate::denies('candidat_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $candidat->delete();

        return back();
    }

    public function massDestroy(MassDestroyCandidatRequest $request)
    {
        Candidat::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
