<li class="{{ Request::is('admin.courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-align-justify"></i><span>Course</span></a>
</li>
<li class="{{ Request::is('admin.stages*') ? 'active' : '' }}">
    <a href="{{ route('stages.index') }}"><i class="fa fa-align-justify"></i><span>Stages</span></a>
</li>
<li class="{{ Request::is('admin.trainers*') ? 'active' : '' }}">
    <a href="{{ route('trainers.index') }}"><i class="fa fa-align-justify"></i><span>Trainers</span></a>
</li>

<li class="{{ Request::is('admin.bookings*') ? 'active' : '' }}">
    <a href="{{ route('bookings.index') }}"><i class="fa fa-align-justify"></i><span>Booking</span></a>
</li>