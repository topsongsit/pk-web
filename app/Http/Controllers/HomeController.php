<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Repositories\CourseRepository;
use App\Repositories\StageRepository;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $courseRepository,$stageRepository;

    public function __construct(CourseRepository $courseRepo,StageRepository $stageRepo)
    {
        $this->courseRepository = $courseRepo;
        $this->stageRepository = $stageRepo;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->courseRepository->all();
        $stages = $this->stageRepository->all();

        // return $courses;
        return view('welcome')->with('courses',$courses)->with('stages',$stages);
    }

    public function course()
    {  
        $courses = $this->courseRepository->all();
        return view('_frontend.course')->with('courses',$courses);  
    }

    public function trainer()
    {
        return view('_frontend.trainer');
    }

    public function boxer()
    {
        return view('_frontend.boxer');
    }

    public function stage()
    {
        $stages = $this->stageRepository->all();

        return view('_frontend.stage')->with('stages',$stages);      }

    public function contact()
    {
        return view('_frontend.contact');
    }
}
