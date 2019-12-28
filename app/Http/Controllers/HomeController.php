<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Repositories\CourseRepository;
use App\Repositories\StageRepository;
use App\Repositories\TrainerRepository;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $courseRepository,$stageRepository,$trainerRepositor;

    public function __construct(CourseRepository $courseRepo,StageRepository $stageRepo,TrainerRepository $trainerRepo)
    {
        $this->courseRepository = $courseRepo;
        $this->stageRepository = $stageRepo;
        $this->trainerRepositor = $trainerRepo;
    
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
        $trainers = $this->trainerRepositor->all();


        // return $courses;
        return view('welcome')->with('courses',$courses)->with('stages',$stages)->with('trainers',$trainers);
    }

    public function course()
    {  
        $courses = $this->courseRepository->all();
        return view('_frontend.course')->with('courses',$courses);  
    }

    public function trainer()
    {
        $trainers = $this->trainerRepositor->all();

        return view('_frontend.trainer')->with('trainers',$trainers);      }

    public function boxer()
    {
        $trainers = $this->trainerRepositor->all();

        return view('_frontend.trainer')->with('trainers',$trainers);      }

    public function stage()
    {
        $stages = $this->stageRepository->all();

        return view('_frontend.stage')->with('stages',$stages);      }

    public function contact()
    {
        return view('_frontend.contact');
    }

    public function check(Request $request)
    {
        $course = $this->courseRepository->find($request->course);
        $trainer = $this->trainerRepositor->find($request->trainer);

        return view('_frontend.check')->with('course',$course)->with('trainer',$trainer);
    }

    public function finalbooking()
    {
        return view('_frontend.finalbooking');
    }
}
