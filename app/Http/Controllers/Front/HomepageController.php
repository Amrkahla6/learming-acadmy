<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Trainer;
use App\Student;
use App\testimonial;

class HomepageController extends Controller
{
    public function index()
    {
        $data['courses']       = Course::select('id' , 'name' , 'small_desc' , 'cat_id' ,'trainer_id' , 'img' , 'price')
        ->orderBy('id' , 'DESC')
        ->take(3)
        ->get();

        $data['courses_count']  = Course::count();
        $data['trainers_count'] = Trainer::count();
        $data['students_count'] = Student::count();

        $data['testimonials']   = testimonial::select('name' , 'spec' , 'desc' , 'img')->get();

        return view('front.index')->with($data);
    }
}
