@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
      <div class="card-header">Profile</div>
      <div class="card-body">
        <form method="POST" action="/user/{{ $user->id }}">
            @csrf
            @method('PATCH')
            <div class="form-group row">
              <label for="profile-image" class="col-md-4 col-form-label text-md-right">{{ __('Profile picture') }}</label>

              <div class="col-md-6">
                <img src="{{ asset('images/user-profile.png') }}" alt="default-user-profile" class="img-thumbnail">
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error($user->name) is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                @error($user->name)
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error($user->email) is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                @error($user->email)
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="old-password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

              <div class="col-md-6">
                <input id="old-password" type="password" class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword">

                @error('oldPassword')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="new-password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

              <div class="col-md-6">
                <input id="new-password " type="password" class="form-control @error('newPassword') is-invalid @enderror" name="newPassword">

                @error('newPassword')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="new-password-confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password') }}</label>

              <div class="col-md-6">
                <input id="new-password-confirmation" type="password" class="form-control @error('newPassword_confirmation') is-invalid @enderror" name="newPassword_confirmation">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Update') }}
                </button>
              </div>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection
