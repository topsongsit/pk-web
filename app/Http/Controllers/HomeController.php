<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Repositories\CourseRepository;
use App\Repositories\StageRepository;
use App\Repositories\TrainerRepository;
use App\Repositories\BookingRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $courseRepository, $stageRepository, $trainerRepository, $bookingRepository;

    public function __construct(BookingRepository $bookingRepo, CourseRepository $courseRepo, StageRepository $stageRepo, TrainerRepository $trainerRepo)
    {
        $this->courseRepository = $courseRepo;
        $this->stageRepository = $stageRepo;
        $this->trainerRepository = $trainerRepo;
        $this->bookingRepository = $bookingRepo;
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
        if (!empty($request->input('course'))) {
            $course = $this->courseRepository->find($request->course);
            $trainer = $this->trainerRepository->find($request->trainer);
            $request->session()->put('check', ['course' => $request->course, 'trainner' =>  $request->trainer]);
            $summary = $this->calculate($course->cprice, $trainer->tprice);

            return view('_frontend.check')->with('course', $course)->with('trainer', $trainer)->with('summary', $summary);
        }
        $check = $request->session()->get('check', []);
        if (count($check) == 0) {
            return redirect('/course');
        }

        $course = $this->courseRepository->find($check['course']);
        $trainer = $this->trainerRepository->find($check['trainner']);
        $summary = $this->calculate($course->cprice, $trainer->tprice);

        return view('_frontend.check')->with('course', $course)->with('trainer', $trainer)->with('summary', $summary);
    }

    public function saveBooking(Request $request)
    {
        $check = $request->session()->get('check', []);
        if (count($check) == 0) {
            return redirect('/course');
        }
        //
        $course = $this->courseRepository->find($check['course']);
        if ($course == null) {
            return redirect('/course');
        }
        //
        $trainer = $this->trainerRepository->find($check['trainner']);
        if ($trainer == null) {
            return redirect('/course');
        }
        $userid = auth()->user()->id;
        $date =   date('YmdHis');
        $bookingNumber = 'BK' . sprintf("%'.015s", $date);
        $bookingfinish = $this->bookingRepository->create([
            'user_id' => $userid,
            'course_id' => $course->id,
            'trainer_id' => $trainer->id,
            'status_id' => '1',
            'bmoney_img' => '',
            'booking_number' => $bookingNumber,
        ]);
        if ($bookingfinish == null) {
            // Flash::success('Booking saved successfully.');
            return redirect('/check');
        }

        return redirect()->route('booking.show', ['id' => $bookingfinish->id]);
    }

    public function booking($id, Request $request)
    {
        $booking = $this->bookingRepository->makeModel()
            ->where('id', $id)
            ->where('user_id',  auth()->user()->id)
            ->with(['user', 'course', 'trainer', 'status'])->first();
        return view('_frontend.booking')->with('booking', $booking);
    }


    private function calculate($coursePrice, $trainerPrice)
    {
        $total = (int) $coursePrice + (int) $trainerPrice;
        $totalBeforeVat = (int) $total - 0.07;
        $deposit = (int) $total / 2;
        $vat = '7%';
        return compact('total', 'totalBeforeVat', 'deposit', 'vat');
    }


    public function editprofile()
    {
        return view('_frontend.editprofile');
    }

    public function transfer()
    {
        return view('_frontend.transfer');
    }

    public function tabletime()
    {
        return view('_frontend.tabletime');
    }
}
