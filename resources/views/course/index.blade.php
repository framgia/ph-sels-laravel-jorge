@extends('layouts.app')

 @section('content')
<div class="container">
    <div class="mt-3">
      <h2>Categories</h2>
    </div>
    <div class="row">
      @foreach($courses as $course) 
        <div class="mt-4 col-md-6 col-sm-12">
          <div class="card hoverable">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">{{ $course->title }}</h5>
                <p class="card-text font-weight-light">{{ $course->description }}</p>
              </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="mt-3 d-flex justify-content-end">
      <?php echo $courses->render(); ?>
    </div>
</div>
@endsection