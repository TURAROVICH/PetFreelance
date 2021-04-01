@extends('layouts.all')
@section('title')
    execute user
@endsection

@section('content')
@foreach($info as $e)

<div style="text-align:center;" class="card-body center container">
    <img width="250" height='150' src="{{ asset('/storage/'.$e->img)}}" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

    <h4 class="mt-3 mb-0">{{$e->firstName}} {{ $e->lastName}}</h4>
    <p class="text-muted">@webdesigner</p>

    <a href="{{ asset('/storage/'.$e->resume) }}" download><button type="button" class="btn btn btn-success btn-xs waves-effect mb-2 waves-light">resume download</button></a>

    <div class="text-start container ml-5 mt-3">
        <h4 class="font-13 text-uppercase">About Me :</h4>
        <p class="text-muted font-13 mb-3">
          {{$e->bio}}
        </p>


        <ul class="social-list list-inline mt-4 mb-2">
                                            <li class="list-inline-item text-center">
                                                <a  href="https://t.me/{{$e->telegram}}" class="social-list-item  text-dark"><i class="fa ri-send-plane-fill"></i></a>
                                            </li>
                                            <li class="list-inline-item text-center">
                                                <a  href="https://github.com/{{$e->github}}" class="social-list-item  text-dark"><i class="mdi mdi-github"></i></a>
                                            </li>
        </ul>

        <div class="table-responsive">
            <table class="table table-borderless table-sm text-start">
                <tbody>
                    <tr>
                        <th scope="row">Full Name :</th>
                        <td class="text-muted">{{$e->firstName}} {{ $e->lastName}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email :</th>
                        <td class="text-muted">{{$e->email}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Telegram :</th>
                        <td class="text-muted">{{$e->telegram}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Github :</th>
                        <td class="text-muted">{{$e->github}}</td>
                    </tr>
            
                </tbody>
            </table>


        </div>
    </div>

 
</div>
@endforeach
@endsection