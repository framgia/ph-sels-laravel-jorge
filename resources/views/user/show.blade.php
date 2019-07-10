@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-8 justify-content-center">
                      <img src="{{ asset('images/user-profile.png') }}" alt="default-user-profile" class="img-thumbnail align-self-center">
                      </div>
                      <div class="col-md-8 text-center">
                          <br>
                          <h3> {{ $user->name }} </h3>
                          <hr>
                          <div class="row justify-content-center">
                              <div class="col-md-6"><a href="">20<br>Followers</a></div>
                              <div class="col-md-6"><a href="">5<br>Following</a></div>
                              <div class="mt-3 col-12 justify-content-center">
                                <button class="btn btn-block btn-primary">Follow</button>
                              </div>
                              <div class="mt-3 col-12 justify-content-center">
                                <a href="">Learned 20 words</a>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Activities</div>

                <div class="card-body">
                    <div class="row container align-items-center">
                        <div class="col-md-auto">
                            <img src="{{ asset('images/user-profile.png') }}" alt="default-user-profile" class="img-thumbnail-s">
                        </div>
                        <div class="col-md-auto">
                            <p>
                                <a href="">You</a> learned 20 of 20 Words in <a href="">Basic 500</a><br>
                                <span class="text-secondary">2 days ago</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
