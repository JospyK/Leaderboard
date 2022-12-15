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

    public function edit(Candidat $candidat)
    {
        abort_if(Gate::denies('candidat_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidats.edit', compact('candidat'));
    }

    public function update(UpdateCandidatRequest $request, Candidat $candidat)
    {
        $candidat->update($request->all());

        return redirect()->route('admin.candidats.index');
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
