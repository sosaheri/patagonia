@extends('layouts.admin')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Change Password') }}
    <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a>
    </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Change Password') }}</li>
        </ol>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            @include('includes.admin.form-both')
              <div class="card-body">
              
                <form id="pageForm" action="{{route('admin.password.update')}}" method="POST">
                  @csrf
                  
                    <div class="form-group mt-2">
                      <label for="cpass">{{ __('Current Password') }}</label>
                        <input type="password" class="form-control form-control-sm" name="cpass" id="cpass">
                    </div>
                    
                    <div class="form-group mt-2">
                      <label for="newpass">{{ __('New Password') }}</label>
                        <input type="password" class="form-control form-control-sm" name="newpass" id="newpass">
                    </div>
                    
                    <div class="form-group mt-2">
                      <label for="renewpass">{{ __('Re - Password') }}</label>
                        <input type="password" class="form-control form-control-sm" name="renewpass" id="renewpass">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                  </form>
                </div>
            </div>
    </div>
</div>

@endsection

