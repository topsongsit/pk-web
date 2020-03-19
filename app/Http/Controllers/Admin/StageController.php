<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateStageRequest;
use App\Http\Requests\UpdateStageRequest;
use App\Repositories\StageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class StageController extends AppBaseController
{
    /** @var  StageRepository */
    private $stageRepository;

    public function __construct(StageRepository $stageRepo)
    {
        $this->stageRepository = $stageRepo;
    }

    /**
     * Display a listing of the Stage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $stages = $this->stageRepository->all();

        return view('stages.index')
            ->with('stages', $stages);
    }

    /**
     * Show the form for creating a new Stage.
     *
     * @return Response
     */
    public function create()
    {
        return view('stages.create');
    }

    /**
     * Store a newly created Stage in storage.
     *
     * @param CreateStageRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        // upload image  
        $imageName = time() . '.' . request()->stimg->getClientOriginalExtension();
        request()->stimg->move(public_path('uploads'), $imageName);
        $input = $request->all();
        $input['stimg'] = '/uploads/' . $imageName;

        $stages = $this->stageRepository->create($input);

        Flash::success('Stage saved successfully.');

        return redirect(route('stages.index'));
    }
    /**
     * Display the specified Stage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stage = $this->stageRepository->find($id);

        if (empty($stage)) {
            Flash::error('Stage not found');

            return redirect(route('stages.index'));
        }

        return view('stages.show')->with('stage', $stage);
    }

    /**
     * Show the form for editing the specified Stage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stage = $this->stageRepository->find($id);

        if (empty($stage)) {
            Flash::error('Stage not found');

            return redirect(route('stages.index'));
        }

        return view('stages.edit')->with('stage', $stage);
    }

    /**
     * Update the specified Stage in storage.
     *
     * @param int $id
     * @param UpdateStageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStageRequest $request)
    {
        $input = $request->all();
        if ($request->has('stimg_new')) {
            // upload image  
            $path = $request->file('stimg_new')->store('uploads');
            $input['stimg'] = $path;
        }

        $stages = $this->stageRepository->find($id);

        if (empty($stages)) {
            Flash::error('Stage not found');

            return redirect(route('stages.index'));
        }

        $stages = $this->stageRepository->update($input, $id);

        Flash::success('Stage updated successfully.');

        return redirect(route('stages.index'));
    }


    /**
     * Remove the specified Stage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stage = $this->stageRepository->find($id);

        if (empty($stage)) {
            Flash::error('Stage not found');

            return redirect(route('stages.index'));
        }

        $this->stageRepository->delete($id);

        Flash::success('Stage deleted successfully.');

        return redirect(route('stages.index'));
    }
}
