<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateTimetableRequest;
use App\Http\Requests\UpdateTimetableRequest;
use App\Repositories\TimetableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Trainer;
use App\Models\Day;
use App\User;

class TimetableController extends AppBaseController
{
    /** @var  TimetableRepository */
    private $timetableRepository;

    public function __construct(TimetableRepository $timetableRepo)
    {
        $this->timetableRepository = $timetableRepo;
    }

    /**
     * Display a listing of the Timetable.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $timetables = $this->timetableRepository->all();

        return view('timetables.index')
            ->with('timetables', $timetables);
    }

    /**
     * Show the form for creating a new Timetable.
     *
     * @return Response
     */
    public function create()
    {
        $trainer = Trainer::all();
        $days = Day::all();

        // dd($days);
        $trainers = $trainer->mapWithKeys(function ($item) {
            return [$item['id'] => $item['tname']];
        });

        $days = $days->mapWithKeys(function ($item) {
            return [$item['id'] => $item['dname']];
        });


        return view('timetables.create')->with('trainers', $trainers)->with('days', $days);
    }

    /**
     * Store a newly created Timetable in storage.
     *
     * @param CreateTimetableRequest $request
     *
     * @return Response
     */
    public function store(CreateTimetableRequest $request)
    {
        $input = $request->all();

        $timetable = $this->timetableRepository->create($input);

        Flash::success('Timetable saved successfully.');

        return redirect(route('timetables.index'));
    }

    /**
     * Display the specified Timetable.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $timetable = $this->timetableRepository->find($id);

        if (empty($timetable)) {
            Flash::error('Timetable not found');

            return redirect(route('timetables.index'));
        }

        return view('timetables.show')->with('timetable', $timetable);
    }

    /**
     * Show the form for editing the specified Timetable.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $timetable = $this->timetableRepository->find($id);

        if (empty($timetable)) {
            Flash::error('Timetable not found');

            return redirect(route('timetables.index'));
        }


        $trainer = Trainer::all();
        $days = Day::all();

        $trainers = $trainer->mapWithKeys(function ($item) {
            return [$item['id'] => $item['tname']];
        });

        $days = $days->mapWithKeys(function ($item) {
            return [$item['id'] => $item['dname']];
        });

        return view('timetables.edit')->with('timetable', $timetable)->with('trainers', $trainers)->with('days', $days);
    }

    /**
     * Update the specified Timetable in storage.
     *
     * @param int $id
     * @param UpdateTimetableRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTimetableRequest $request)
    {
        $timetable = $this->timetableRepository->find($id);

        if (empty($timetable)) {
            Flash::error('Timetable not found');

            return redirect(route('timetables.index'));
        }

        $timetable = $this->timetableRepository->update($request->all(), $id);

        Flash::success('Timetable updated successfully.');

        return redirect(route('timetables.index'));
    }

    /**
     * Remove the specified Timetable from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $timetable = $this->timetableRepository->find($id);

        if (empty($timetable)) {
            Flash::error('Timetable not found');

            return redirect(route('timetables.index'));
        }

        $this->timetableRepository->delete($id);

        Flash::success('Timetable deleted successfully.');

        return redirect(route('timetables.index'));
    }
}
