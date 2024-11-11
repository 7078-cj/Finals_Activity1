<section style="display: flex; flex-direction:column; gap:20px; justiify-content:center; align-items:center;">
<div>
    <div>all Users</div>

@foreach ($profiles as $profile )

    <div><a href="/profile/{{ $profile->user->id }}">{{ $profile->user->name }}</a></div>
    
@endforeach
</div>

<div>
   <div>All courses</div>
@foreach ($courses as $course )

    <div><a href="/course/{{ $course->id }}">{{ $course->course_name }}(Course)</a></div>

@endforeach
 
</div>
</section>