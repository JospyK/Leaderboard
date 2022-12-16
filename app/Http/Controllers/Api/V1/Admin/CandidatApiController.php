<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCandidatRequest;
use App\Http\Requests\UpdateCandidatRequest;
use App\Http\Resources\Admin\CandidatResource;
use App\Models\Candidat;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CandidatApiController extends Controller
{
    public function race(Request $request)
    {
        $candidats = Candidat::query();
        // dd(intval($request->categorie));
        $candidats->when($request->categorie, function($q) use ($request){
            return $q->where('categorie', intval($request->categorie));
        });

        $data = [
            'vpro' => $candidats->pluck('vpro', 'nom'),
            'vjury' => $candidats->pluck('vjury', 'nom'),
            'vpublic' => $candidats->pluck('vpublic', 'nom'),
            'total' => $candidats->pluck('total', 'nom'),
        ];

        return response()->json($data, 200);
    }

    public function index()
    {
        abort_if(Gate::denies('candidat_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CandidatResource(Candidat::all());
    }

    public function store(StoreCandidatRequest $request)
    {
        $candidat = Candidat::create($request->all());

        return (new CandidatResource($candidat))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Candidat $candidat)
    {
        abort_if(Gate::denies('candidat_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CandidatResource($candidat);
    }

    public function update(UpdateCandidatRequest $request, Candidat $candidat)
    {
        $candidat->update($request->all());

        return (new CandidatResource($candidat))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Candidat $candidat)
    {
        abort_if(Gate::denies('candidat_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $candidat->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
