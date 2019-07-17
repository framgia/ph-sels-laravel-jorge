@extends('layouts.app')

 @section('content')
<div class="container">
    <div class="row mt-3">
      <div class="col-md-8">
        <h2>Basic 500</h2>
      </div>
      <div class="col-md-4 text-right text-progress-md">
        1 of 20
      </div>
    </div>
    
    <div class="row mt-5 align-items-center">
        <div class="col-md-6 text-center word-lg">
          人
        </div>
        <div class="col-md-6 text-center">
          @for($i=1; $i<=4; $i++)
          <div class="mt-4">
            <button class="btn btn-lg btn-primary btn-block">Choice {{ $i }}</button>
          </div>
          @endfor
        </div>
    </div>
</div>
@endsection