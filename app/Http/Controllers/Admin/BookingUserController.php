<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateBookingUserRequest;
use App\Http\Requests\UpdateBookingUserRequest;
use App\Repositories\BookingUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Booking;
use App\Models\Course;
use App\User;


class BookingUserController extends AppBaseController
{
    /** @var  BookingUserRepository */
    private $bookingUserRepository;

    public function __construct(BookingUserRepository $bookingUserRepo)
    {
        $this->bookingUserRepository = $bookingUserRepo;
    }

    /**
     * Display a listing of the BookingUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bookingUsers = $this->bookingUserRepository->all();

        return view('booking_users.index')
            ->with('bookingUsers', $bookingUsers);
    }

    /**
     * Show the form for creating a new BookingUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('booking_users.create');
    }

    /**
     * Store a newly created BookingUser in storage.
     *
     * @param CreateBookingUserRequest $request
     *
     * @return Response
     */
    public function store(CreateBookingUserRequest $request)
    {
        $input = $request->all();

        $bookingUser = $this->bookingUserRepository->create($input);

        Flash::success('Booking User saved successfully.');

        return redirect(route('bookingUsers.index'));
    }

    /**
     * Display the specified BookingUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bookingUser = $this->bookingUserRepository->find($id);

        if (empty($bookingUser)) {
            Flash::error('Booking User not found');

            return redirect(route('bookingUsers.index'));
        }

        return view('booking_users.show')->with('bookingUser', $bookingUser);
    }

    /**
     * Show the form for editing the specified BookingUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bookingUser = $this->bookingUserRepository->find($id);

        if (empty($bookingUser)) {
            Flash::error('Booking User not found');

            return redirect(route('bookingUsers.index'));
        }

        $bookings = Booking::all();
        $courses = Course::all();
        $user = User::all();

        $bookings = $bookings->mapWithKeys(function ($item) {
            return [$item['id'] => $item['bname']];
        });

        $courses = $courses->mapWithKeys(function ($item) {
            return [$item['id'] => $item['cname']];
        });

        $users = $user->mapWithKeys(function ($item) {
            return [$item['id'] => $item['name']];
        });

        return view('booking_users.edit')->with('bookingUser', $bookingUser)->with('bookings', $bookings)->with('courses', $courses)->with('users', $users);
    }

    /**
     * Update the specified BookingUser in storage.
     *
     * @param int $id
     * @param UpdateBookingUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookingUserRequest $request)
    {
        $bookingUser = $this->bookingUserRepository->find($id);

        if (empty($bookingUser)) {
            Flash::error('Booking User not found');

            return redirect(route('bookingUsers.index'));
        }

        $bookingUser = $this->bookingUserRepository->update($request->all(), $id);

        Flash::success('Booking User updated successfully.');

        return redirect(route('bookingUsers.index'));
    }

    /**
     * Remove the specified BookingUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bookingUser = $this->bookingUserRepository->find($id);

        if (empty($bookingUser)) {
            Flash::error('Booking User not found');

            return redirect(route('bookingUsers.index'));
        }

        $this->bookingUserRepository->delete($id);

        Flash::success('Booking User deleted successfully.');

        return redirect(route('bookingUsers.index'));
    }
}
