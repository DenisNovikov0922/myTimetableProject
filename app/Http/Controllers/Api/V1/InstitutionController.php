<?php

namespace App\Http\Controllers\Api\V1;

use App\Institution;
use App\Http\Controllers\Controller;
use App\Http\Resources\Institution as InstitutionResource;
use App\Http\Requests\Admin\StoreInstitutionRequest;
use App\Http\Requests\Admin\UpdateInstitutionRequest;
use Illuminate\Http\Request;



class InstitutionController extends Controller
{
    public function index()
    {
        return new InstitutionResource(Institution::with([])->get());
    }

    public function show($id)
    {
        $institution = Institution::with([])->findOrFail($id);

        return new InstitutionResource($institution);
    }

    public function store(StoreInstitutionRequest $request)
    {
        $institution = Institution::create($request->all());
        

        return (new InstitutionResource($institution))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateInstitutionRequest $request, $id)
    {
        $institution = Institution::findOrFail($id);
        $institution->update($request->all());
        

        return (new InstitutionResource($institution))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        $institution = Institution::findOrFail($id);
        $institution->delete();

        return response(null, 204);
    }
}
