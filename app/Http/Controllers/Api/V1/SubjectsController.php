<?php

namespace App\Http\Controllers\Api\V1;

use App\Subject;
use App\Http\Controllers\Controller;
use App\Http\Resources\Subject as SubjectResource;
use App\Http\Requests\Admin\StoreSubjectsRequest;
use App\Http\Requests\Admin\UpdateSubjectsRequest;
use Illuminate\Http\Request;



class SubjectsController extends Controller
{
    public function index()
    {
        return new SubjectResource(Subject::with([])->get());
    }

    public function show($id)
    {
        $subject = Subject::with([])->findOrFail($id);

        return new SubjectResource($subject);
    }

    public function store(StoreSubjectsRequest $request)
    {
        $subject = Subject::create($request->all());
        

        return (new SubjectResource($subject))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateSubjectsRequest $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update($request->all());
        

        return (new SubjectResource($subject))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return response(null, 204);
    }
}
