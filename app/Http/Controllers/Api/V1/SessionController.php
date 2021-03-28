<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;



class SessionController extends Controller
{
    public function store(Request $request)
    {
        $grade = $request->grade;
        $class = $request->classNum;
        $course_id = $request->course['id'];
        $checkedLessons = $request->checkedLessons;
        $checkedLessons = serialize($checkedLessons);
        $checkedSubjects = $request->checkedSubjects;
        $checkedSubjects = serialize($checkedSubjects);
        DB::table('sessions')->insert([
            'grade' => $grade,
            'class' => $class,
            'course_id' => $course_id,
            'checkedLessons' => $checkedLessons,
            'checkedSubjects' => $checkedSubjects
        ]);
        return response(null, 204);
    }
}
