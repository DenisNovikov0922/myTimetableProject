<?php

namespace App\Http\Controllers\Api\V1;

use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Resources\Course as CourseResource;
use App\Http\Requests\Admin\StoreCoursesRequest;
use App\Http\Requests\Admin\UpdateCoursesRequest;
use Illuminate\Http\Request;



class CoursesController extends Controller
{
    public function index()
    {
        return new CourseResource(Course::with([])->get());
    }

    public function show($id)
    {
        $course = Course::with([])->findOrFail($id);

        return new CourseResource($course);
    }

    public function store(StoreCoursesRequest $request)
    {
        $course = Course::create($request->all());
        

        return (new CourseResource($course))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateCoursesRequest $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        

        return (new CourseResource($course))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return response(null, 204);
    }
}
