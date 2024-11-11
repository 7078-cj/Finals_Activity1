<section style="display: flex; flex-direction:column; gap:20px; justiify-content:center; align-items:center;">
<div>{{ $user->name }}</div>
<div>{{ $profile->bio }}</div>
<div>{{ $profile->school }}</div>
Courses:
@foreach ($courses as $course )

<div><a href="/course/{{ $course->id }}">{{ $course->course_name }}(Course)</a></div>
    
@endforeach
</section>
