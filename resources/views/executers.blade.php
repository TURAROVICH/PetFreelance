@extends('layouts.all')
@section('title')
executors
@endsection

@section('content')
@foreach($all as $el)
<div class="col-xl-3 col-sm-6">
                                <div class="text-center card">
                                    <div class="card-body">
                                        
                                        <img src="{{asset('/storage/'.$el->img)}}" class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">

                                        <h4 class="mt-3 mb-1"><a href="/executor/{{$el->firstName}}/{{$el->id}}" class="text-dark">{{$el->firstName}} {{$el->lastName}}</a></h4>

                                        <ul class="social-list list-inline mt-4 mb-2">
                                            <li class="list-inline-item">
                                                <a href="https://t.me/{{$el->telegram}}" class="social-list-item border-purple text-purple"><i style="align-items:center;" class="fa ri-send-plane-fill"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://github.com/{{$el->github}}" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                            </li>
                                        </ul>
    
                                    </div>
                                </div> <!-- end card -->
                            </div>
                            @endforeach
@endsection