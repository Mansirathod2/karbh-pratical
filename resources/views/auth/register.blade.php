@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST" data-parsley-validate id="RegisterForm">
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" value="{{old('name')}}" data-parsley-required
                                  data-parsley-required-message="Please enter the product Name" placeholder="Name" data-parsley-errors-container='#name_error' autofocus>
                                  @if ($errors->has('name'))
                                      <span id="name_error" class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="mobile_number" class="col-md-4 col-form-label text-md-right">Mobile Number</label>
                            <div class="col-md-6">
                                <input type="text" id="mobile_number" class="form-control" name="mobile_number" value="{{old('mobile_number')}}" placeholder="Mobile Number"
                                data-parsley-required data-parsley-required-message="Please enter Mobile Number"
                                data-parsley-errors-container='#mobile_number_error'
                                data-parsley-type="number" onkeypress='return isNumber(event)' maxlength="10" autofocus>
                                @if ($errors->has('mobile_number'))
                                    <span id="mobile_number_error" class="text-danger">{{ $errors->first('mobile_number') }}</span>
                                @endif
                            </div>
                        </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" value="{{old('email')}}" placeholder="Email"
                                  data-parsley-required data-parsley-required-message="Please enter E-Mail Address
                                  "
                                  data-parsley-errors-container='#email_error' autofocus>
                                  @if ($errors->has('email'))
                                      <span id="email_error" class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" value="{{old('password')}}" data-parsley-required data-parsley-required-message="Please enter Password" placeholder="Password"
                                  data-parsley-errors-container='#password_error'>
                                  @if ($errors->has('password'))
                                      <span id="password_error" class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection

@section('page-js')
<script src="{{ asset('admin/modulejs/register.js') }}"></script>
@endsection