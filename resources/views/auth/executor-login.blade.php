@extends('layouts.Main')
@section('title')
executor login
@endsection

@section('content')

<div class="tab-pane active container" id="settings">
                                                <form method="post" action="{{ route('login-executor') }}">
                                                @csrf
                                                    <h5 class="mb-3 text-center text-uppercase bg-light p-2"><i class="mdi mdi-account-circle me-1"></i>Login as executor</h5>
                                                    <h4><i style="font-size:25px;" class="text-danger">*</i> все данные обезательны!</h4>
                                                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('noLogin'))
<div class="alert alert-danger">
  <h2>{{ session('noLogin') }}</h2>
</div>
@endif
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-2">
                                                                <label for="useremail" class="form-label">Email Address</label>
                                                                <input name="email" type="email" class="form-control" id="useremail" placeholder="Enter email">
                                                                <!-- <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-2">
                                                                <label for="userpassword" class="form-label">Password</label>
                                                                <input name='password' type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                                <!-- <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span> -->
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-info"><i class="mdi mdi-content-save"></i> register</button>
                                                    </div>
                                                    </form>

                                                    <div class="container">
                                            <h5>У вас нет данные регистрируйтесь как executor</h5>
                                            <a href="{{route('executor-register') }}"><button class="btn btn-link">register as executor</button></a>
                                          
                                            <h5>У вас есть данные авторируйтесь как customer</h5>
                                            <a href="{{route('customer-login') }}"><button class="btn btn-link">login as customer</button></a>
                                            
                                            <h5>У вас нет данные регистрируйтесь как customer</h5>
                                            <a href="{{route('customer-register') }}"><button class="btn btn-link">Register as customer</button></a>
                                            </div>
@endsection