@extends('layouts.Main')
@section('title')
customer register
@endsection

@section('content')

<div class="tab-pane active container" id="settings">
                                                <form enctype="multipart/form-data"  method="post" action="{{ route('register-customer') }}">
                                                @csrf
                                                    <h5 class="mb-3 text-center text-uppercase bg-light p-2"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
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
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="firstname" class="form-label">First Name</label>
                                                                <input name="firstName" type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="lastname" class="form-label">Last Name</label>
                                                                <input name="lastName" type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label for="userbio" class="form-label">
who are you looking for</label>
                                                                <textarea name="text" class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
<div class="row">
                                                    <div class="col-md-8">
                                                            <div class="mb-2">
                                                                <label for="lastname" class="form-label">price for work</label>
                                                                <input name="price" type="number" class="form-control" id="lastname" placeholder="1000RUB...">
                                                            </div>
                                                        </div> <!-- end col -->

                                                    <div class="col-md-4">
                                                    
                                                    <label for="cars">currency</label>

<select CLASS="form-control" name="currency" id="cars">
  <option value="USD">USD</option>
  <option value="RUB">RUB</option>
  <option value="COM">COM</option>

</select>
                                                    
                                                    </div>
</div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="useremail" class="form-label">Email Address</label>
                                                                <input name="email" type="email" class="form-control" id="useremail" placeholder="Enter email">
                                                                <!-- <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="userpassword" class="form-label">Password</label>
                                                                <input name="password" type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                                <!-- <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span> -->
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->

                                                    <div class="mb-2 row">
                                                            <label class="col-md-2 col-form-label" for="example-fileinput">фото профиля</label>
                                                            <div class="col-md-10">
                                                                <input name="img" type="file" class="form-control" id="example-fileinput">
                                                            </div>
                                                        </div>
    
                                                  
                                                    
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-info waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> register</button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="container">
                                            <h5>У вас есть данные авторируйтесь как executor</h5>
                                            <a href="{{route('executor-login') }}"><button class="btn btn-link">login as executor</button></a>
                                          
                                            <h5>У вас нет данные регистрируйтесь как executor</h5>
                                            <a href="{{route('executor-register') }}"><button class="btn btn-link">register as executor</button></a>
                                          
                                            <h5>У вас есть данные авторируйтесь как customer</h5>
                                            <a href="{{route('customer-login') }}"><button class="btn btn-link">login as customer</button></a>
                                            
                                              </div>
@endsection