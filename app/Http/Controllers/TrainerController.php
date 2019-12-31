<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrainerRequest;
use App\Http\Requests\UpdateTrainerRequest;
use App\Repositories\TrainerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class TrainerController extends AppBaseController
{
    /** @var  TrainerRepository */
    private $trainerRepository;

    public function __construct(TrainerRepository $trainerRepo)
    {
        $this->trainerRepository = $trainerRepo;
    }

    /**
     * Display a listing of the Trainer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $trainers = $this->trainerRepository->all();

        return view('trainers.index')
            ->with('trainers', $trainers);
    }

    /**
     * Show the form for creating a new Trainer.
     *
     * @return Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created Trainer in storage.
     *
     * @param CreateTrainerRequest $request
     *
     * @return Response
     */
    public function store(CreateTrainerRequest $request)
    {
        // upload image  
        $imageName = time().'.'.request()->timg->getClientOriginalExtension();
        request()->timg->move(public_path('images'), $imageName);
        $input = $request->all();
        $input['timg'] = '/images/'.$imageName;

        $trainer = $this->trainerRepository->create($input);

        Flash::success('Trainer saved successfully.');

        return redirect(route('trainers.index'));
    }

    /**
     * Display the specified Trainer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trainer = $this->trainerRepository->find($id);

        if (empty($trainer)) {
            Flash::error('Trainer not found');

            return redirect(route('trainers.index'));
        }

        return view('trainers.show')->with('trainer', $trainer);
    }

    /**
     * Show the form for editing the specified Trainer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trainer = $this->trainerRepository->find($id);

        if (empty($trainer)) {
            Flash::error('Trainer not found');

            return redirect(route('trainers.index'));
        }

        return view('trainers.edit')->with('trainer', $trainer);
    }

    /**
     * Update the specified Trainer in storage.
     *
     * @param int $id
     * @param UpdateTrainerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrainerRequest $request)
    {
        $trainer = $this->trainerRepository->find($id);

        if (empty($trainer)) {
            Flash::error('Trainer not found');

            return redirect(route('trainers.index'));
        }
        if(request()->timg){
        // upload image  
        $imageName = time().'.'.request()->timg->getClientOriginalExtension();
        request()->timg->move(public_path('images'), $imageName);
        $input = $request->all();
        $input['timg'] = '/images/'.$imageName;

        }

        $trainer = $this->trainerRepository->update($request->all(), $id);

        Flash::success('Trainer updated successfully.');

        return redirect(route('trainers.index'));
    }

    /**
     * Remove the specified Trainer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trainer = $this->trainerRepository->find($id);

        if (empty($trainer)) {
            Flash::error('Trainer not found');

            return redirect(route('trainers.index'));
        }

        $this->trainerRepository->delete($id);

        Flash::success('Trainer deleted successfully.');

        return redirect(route('trainers.index'));
    }
}
