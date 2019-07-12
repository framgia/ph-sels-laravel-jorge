@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="container">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="row  align-items-center">
                        <div class="col-md-6">
                        <img src="{{ asset('images/user-profile.png') }}" alt="default-user-profile" class="img-thumbnail">
                        </div>
                        <div class="col-md-6">
                            <h3> {{ Auth::user()->name }} </h3>
                            <a href="">Learned 20 words</a>
                            <a href="">Learned 5 lessons</a>
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
                            <img src="{{ asset('images/user-profile.png') }}" alt="default-user-profile" class="img-thumbnail-sm">
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
