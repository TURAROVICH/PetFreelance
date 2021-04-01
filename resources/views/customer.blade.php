@extends('layouts.all')
@section('title')
    execute user
@endsection

@section('content')
@foreach($executor as $e)
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
    
                                        <div class="clearfix"></div>
    
                                      
    
    
                                        <div id="b"  class="text-center pt-4">
                                            <a  href="javascript: void(0);" class="btn btn-info" id="thankyou-tour">откликнутся</a>
                                        </div>
                                    </div>

                                    @endforeach

                    
                                </div>
<div class="center">
<h3>{{$lenght}} отклик</h3>
</div>
@foreach($actions as $e)
<div class="card center" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('/storage/'.$e->img)}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$e->firstName}} {{$e->lastName}}</h5>
    <p class="card-text">{{$e->bio}}</p>
    <p class="card-text">{{$e->email}}</p>

    <ul class="social-list list-inline mt-4 mb-2">
                                            <li class="list-inline-item">
                                                <a style="text-decoration:none;" href="https://t.me/{{$e->telegram}}" class="social-list-item border-purple text-purple"><i class="fa ri-send-plane-fill">Telegram</i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a style="text-decoration:none;" href="https://github.com/{{$e->github}}" class="social-list-item border-purple text-purple"><i class="mdi mdi-github">Github</i></a>
                                            </li>
        </ul>

    <a href="{{asset('/storage/'.$e->resume)}}" class="btn btn-primary" download>download resume</a>

  </div>
</div>
@endforeach
        <script>
        const b = $('#b'); 
b.click(()=>{
        axios
  .post("/vacance/action", {
    id:'{{$id}}',
    dd:'hhh'
  })
  .then(response => console.log(response.data))
  .catch(error => console.log('error'));
})
        </script>

@endsection


