@extends('layouts.Main')
@section('title')
executor register
@endsection

@section('content')

<div class="tab-pane active container" id="settings">

                                                <form enctype="multipart/form-data" method='post' action="{{route('register-executor')}}">
                                                @csrf
                                                    <h5 class="mb-3 text-center text-uppercase bg-light p-2"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                                    <h4><i style="font-size:25px;" class="text-danger">*</i>обезательные данные помечены звездочкой!</h4>

                                                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="firstname" class="form-label">First Name <i style="font-size:25px;line-height:10px;" class="text-danger">*</i></label>
                                                                <input name="firstName" type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="lastname" class="form-label">Last Name <i style="font-size:25px;line-height:10px;" class="text-danger">*</i></label>
                                                                <input name="lastName" type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label for="userbio" class="form-label">Bio<i style="font-size:25px;line-height:10px;" class="text-danger">*</i></label>
                                                                <textarea name="bio" class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    

                                                    <div class="mb-2 row">
                                                            <label class="col-md-2 col-form-label" for="example-date">Birth day <i style="font-size:25px;line-height:10px;" class="text-danger">*</i></label>
                                                            <div class="col-md-10">
                                                                <input name="birthday" class="form-control" type="date" name="date" >
                                                            </div>
                                                        </div>

                                                        <div class="mb-2 row">
                                                            <label class="col-md-2 col-form-label" for="example-fileinput">Резюме <i style="font-size:25px;line-height:10px;" class="text-danger">*</i></label>
                                                            <div class="col-md-10">
                                                                <input name="resume" type="file" class="form-control" id="example-fileinput">
                                                            </div>
                                                        </div>

                                                        <div class="mb-2 row">
                                                            <label class="col-md-2 col-form-label" for="example-fileinput">фото профиля</label>
                                                            <div class="col-md-10">
                                                                <input name="img" type="file" class="form-control" id="example-fileinput">
                                                            </div>
                                                        </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="useremail" class="form-label">Email Address <i style="font-size:25px;line-height:10px;" class="text-danger">*</i></label>
                                                                <input name="email" type="email" class="form-control" id="useremail" placeholder="Enter email">
                                                                <!-- <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="userpassword" class="form-label">Password <i style="font-size:25px;line-height:10px;" class="text-danger">*</i></label>
                                                                <input name="password" type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                                <!-- <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span> -->
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->

    
                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Social</h5>
                                                    <div class="row">
                                                    
                                                        <div class="col-md-10">
                                                            <div class="mb-2">
                                                            
                                                                <label for="social-gh" class="form-label">Github <i style="font-size:25px;line-height:10px;" class="text-danger">*</i></label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="fab fa-github"></i></span>
                                                                    
                                                                    <input name="github" type="text" class="form-control" id="social-gh" placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                  
                                                        <div class="col-md-10">
                                                            <div class="mb-2">
                                                                <label for="social-lin" class="form-label">Telegram <i style="font-size:25px;line-height:10px;" class="text-danger">*</i></label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="fab  ri-send-plane-fill"></i></span>
                                                                    
                                                                    <input name="telegram" type="text" class="form-control" id="social-lin" placeholder="@username">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                             
                                                    
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> register</button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="container">
                                            <h5>У вас есть данные авторируйтесь как executor</h5>
                                            <a href="{{route('executor-login') }}"><button class="btn btn-link">login as executor</button></a>
                                          
                                            <h5>У вас есть данные авторируйтесь как customer</h5>
                                            <a href="{{route('customer-login') }}"><button class="btn btn-link">login as customer</button></a>
                                            
                                            <h5>У вас нет данные регистрируйтесь как customer</h5>
                                            <a href="{{route('customer-register') }}"><button class="btn btn-link">Register as customer</button></a>
                                            </div>
@endsection