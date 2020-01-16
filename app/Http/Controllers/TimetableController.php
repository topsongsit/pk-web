<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTimetableRequest;
use App\Http\Requests\UpdateTimetableRequest;
use App\Repositories\TimetableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

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
        return view('timetables.create');
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

        return view('timetables.edit')->with('timetable', $timetable);
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
