<?php

namespace App\Http\Controllers\Api\V1;

use App\Teacher;
use App\Http\Controllers\Controller;
use App\Http\Resources\Teacher as TeacherResource;
use App\Http\Requests\Admin\StoreTeachersRequest;
use App\Http\Requests\Admin\UpdateTeachersRequest;
use Illuminate\Http\Request;



class TeachersController extends Controller
{
    public function index()
    {
        return new TeacherResource(Teacher::with([])->get());
    }

    public function show($id)
    {
        $teacher = Teacher::with([])->findOrFail($id);

        return new TeacherResource($teacher);
    }

    public function store(StoreTeachersRequest $request)
    {
        $request->merge([
            'subject' => $request->subject['name'],
        ]);
        $teacher = Teacher::create($request->all());
        

        return (new TeacherResource($teacher))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateTeachersRequest $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        

        return (new TeacherResource($teacher))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return response(null, 204);
    }
}
