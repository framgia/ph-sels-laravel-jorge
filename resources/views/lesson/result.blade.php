@extends('layouts.app')

 @section('content')
<div class="container">
    <div class="row mt-3">
      <div class="col-md-8">
        <h2>{{ $course->title }}</h2>
      </div>
      <div class="col-md-4 text-right text-progress-md">
      <span class="font-weight-bold">Result:</span> {{ $result->score }} of {{ $result->totalScore }}
      </div>
    </div>
    
    <table class="table mt-5">
        <thead class="h3">
          <tr>
            <th scope="col"></th>
            <th scope="col">Word</th>
            <th scope="col">Answer</th>
          </tr>
        </thead>
        <tbody class="h4">
          @for($i=0; $i<count($answers); $i++)
          <tr>
            <td>{{ ($answers[$i]->isCorrect)? 'O' : 'X' }}</td>
            <td>{{ $answers[$i]->lesson->word }}</td>
            <td>{{ $answers[$i]->choice->name }}</td>
          </tr>
          @endfor
        </tbody>
    </table>
</div>
@endsection