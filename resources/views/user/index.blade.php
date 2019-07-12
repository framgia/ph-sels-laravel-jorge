@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-3">
      <h2>Users</h2>
    </div>
    <div class="row">
      @foreach($users as $user)
        <a href="/user/{{ $user->id }}">
          <div class="mt-4 col-md-3 col-sm-4">
            <div class="card hoverable">
                <img src="{{ asset('images/user-profile.png') }}" alt="default-user-profile" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>  
                  <a href="" class="btn btn-block btn-primary">Follow</a>
                </div>
            </div>
          </div>
        </a>
      @endforeach
    </div>
    <div class="mt-3 d-flex justify-content-end">
      <?php echo $users->render(); ?>
    </div>
</div>
@endsection
