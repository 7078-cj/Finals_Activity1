<section style="display: flex; flex-direction:column; gap:20px; justiify-content:center; align-items:center;"><div>course Name:{{ $course->course_name }}(Course) </div>
<div>Users:</div>
@foreach ($users as $user )

<div><a href="/profile/{{$user->id}}">{{ $user->name }}</a></div>
    
@endforeach
</section>
