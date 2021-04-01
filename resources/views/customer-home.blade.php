@extends('layouts.all')
@section('title')
    execute user
@endsection

@section('content')
@foreach($info as $e)
<div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{asset('/storage/'.$e->img)}}" alt="" height="100" class="rounded-circle">
                                        </div>
    
                                      
    
    
                            <div class="container">
                                        <p class="text-muted text-start">
                                         first-name:{{$e->firstName}} <br>
                                         last-name:{{$e->lastName}}  <br>
                                         created_at:{{$e->created_at}}
                                        </p>
                                        </div>
                                        <div class="clearfix"></div>
    
                                        <h5>Description</h5>
                                        <p class="text-muted">{{$e->text}}</p>
    
           
                                    </div>

                                </div>
@endforeach
@endsection