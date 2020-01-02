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
    private $courseRepository, $stageRepository, $trainerRepository;

    public function __construct(CourseRepository $courseRepo, StageRepository $stageRepo, TrainerRepository $trainerRepo)
    {
        $this->courseRepository = $courseRepo;
        $this->stageRepository = $stageRepo;
        $this->trainerRepository = $trainerRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->courseRepository->makeModel()->limit(3)->get();
        $stages = $this->stageRepository->makeModel()->limit(1)->get();
        $trainers = $this->trainerRepository->makeModel()->limit(4)->get();

        // return $courses;
        return view('_frontend.index')->with('courses', $courses)->with('stages', $stages)->with('trainers', $trainers);
    }

    public function course()
    {
        $courses = $this->courseRepository->all();
        return view('_frontend.course')->with('courses', $courses);
    }

    public function trainer()
    {
        // $trainers = 
        $trainers = $this->trainerRepository->makeModel()->Where('tcategory', 'เทรนเนอร์')->get();
        $boxers = $this->trainerRepository->makeModel()->Where('tcategory', 'นักมวย')->get();

        return view('_frontend.trainer')->with('trainers', $trainers)->with('boxers', $boxers);
    }

    public function trainerDetail($id)
    {
        $trainer = $this->trainerRepository->find($id);
        return view('_frontend.trainer_detail')->with('trainer', $trainer);
    }

    public function boxer()
    {
        $trainers = $this->trainerRepository->all();

        return view('_frontend.trainer')->with('trainers', $trainers);
    }

    public function stage()
    {
        $stages = $this->stageRepository->all();

        return view('_frontend.stage')->with('stages', $stages);
    }

    public function contact()
    {
        return view('_frontend.contact');
    }

    public function check(Request $request)
    {
        $course = $this->courseRepository->find($request->course);
        $trainer = $this->trainerRepository->find($request->trainer);

        return view('_frontend.check')->with('course', $course)->with('trainer', $trainer);
    }

    public function finalbooking()
    {
        return view('_frontend.finalbooking');
    }

    public function editprofile()
    {
        return view('_frontend.editprofile');
    }
}
