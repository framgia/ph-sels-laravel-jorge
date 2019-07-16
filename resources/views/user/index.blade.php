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
                <h5 class="card-title text-dark">{{ $user->name }}</h5>
                  <a id="btn-toggle-follow"  is-following="{{ (Auth::user()->is_following($user->id))? 1 : 0 }}" class="btn btn-block btn-primary text-light" user-id="{{ $user->id }}">{{ (Auth::user()->is_following($user->id))? 'Unfollow' : 'Follow' }}</a>
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
