<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Repositories\BookingRepository;
use App\Repositories\BookingUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Status;

class BookingController extends AppBaseController
{
    /** @var  BookingRepository */
    private $bookingRepository;

    private $bookingUserRepository;

    public function __construct(BookingRepository $bookingRepo, BookingUserRepository $bookingUserRepo)
    {
        $this->bookingRepository = $bookingRepo;
        $this->bookingUserRepository = $bookingUserRepo;
    }

    /**
     * Display a listing of the Booking.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bookings = $this->bookingRepository->all();

        return view('bookings.index')
            ->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new Booking.
     *
     * @return Response
     */
    public function create()
    {
        $status = Status::all();

        $status = $status->mapWithKeys(function ($item) {
            return [$item['id'] => $item['sname']];
        });

        return view('bookings.create')->with('status', $status);
    }

    /**
     * Store a newly created Booking in storage.
     *
     * @param CreateBookingRequest $request
     *
     * @return Response
     */
    public function store(CreateBookingRequest $request)
    {
        $input = $request->all();

        $booking = $this->bookingRepository->create($input);

        Flash::success('Booking saved successfully.');

        return redirect(route('bookings.index'));
    }

    /**
     * Display the specified Booking.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        return view('bookings.show')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified Booking.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        $status = Status::all();

        $status = $status->mapWithKeys(function ($item) {
            return [$item['id'] => $item['sname']];
        });

        return view('bookings.edit')->with('booking', $booking)->with('status', $status);
    }

    /**
     * Update the specified Booking in storage.
     *
     * @param int $id
     * @param UpdateBookingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookingRequest $request)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        $booking = $this->bookingRepository->update($request->all(), $id);

        if ($booking->status_id == 3) {
            // insert data to booking_user
            $day = $booking->course->cday;
            for ($i = 0; $i < $day; $i++) {
                $bookingUser = $this->bookingUserRepository->create([
                    'user_id' => $booking->user_id,
                    'course_id' => $booking->course_id,
                    'status' => 0,
                    'booking_id' => $booking->id
                ]);
            }
        }

        Flash::success('Booking updated successfully.');

        return redirect(route('bookings.index'));
    }

    /**
     * Remove the specified Booking from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        $this->bookingRepository->delete($id);

        Flash::success('Booking deleted successfully.');

        return redirect(route('bookings.index'));
    }
}
