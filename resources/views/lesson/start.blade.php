@extends('layouts.app')

 @section('content')
<div class="container">
    <div class="row mt-3">
      <div class="col-md-8">
        <h2 id="course-title" 
            course-id={{ $course->id }}>
          {{ $course->title }}
        </h2>
      </div>
      <div id="progress" class="col-md-4 text-right text-progress-md"
           current-lesson={{ 1 }} 
           total-lesson={{ count($lessons) }}>1 of {{ count($lessons) }}</div>
    </div>
    <div id="course-lessons">
      @for($i=0; $i < count($lessons); $i++)
        <div id="lesson" class="lesson row mt-5 align-items-center" 
            lesson-id="{{ $lessons[$i]->id }}" >
          <div class="col-md-6 text-center word-lg">{{ $lessons[$i]->word }}</div>
          <div class="col-md-6 text-center">
            @for($j=0; $j <  count($choices[$i]); $j++)
              <div class="mt-4">
                <button id="btn-choice" class="btn btn-lg btn-primary btn-block"
                        lesson-id="{{ $lessons[$i]->id}}"
                        choice-id="{{ $choices[$i][$j]->id }}" >
                  {{ $choices[$i][$j]->name }}
                </button>
              </div>
            @endfor
          </div>
        </div>
      @endfor
    </div>
</div>
@endsection