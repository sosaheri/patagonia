@extends('layouts.load')

@section('content')


<div class="col-lg-12">
  <!-- Form Basic -->
    <div class="card-body">
      @include('includes.admin.form-error')  
      <form id="ModalFormSubmit" action="{{route('admin-staff-store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group ShowImage d-none">
          <img src="" alt="image" class="rounded-circle img-fluid" width="150" height="150">
        </div>

        <div class="form-group">
          <label for="image">{{ __('Image') }}</label>
          <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
          <div class="custom-file">
              <input type="file" class="custom-file-input image" name="photo"  value="" accept="image/*">
              <label class="custom-file-label" for="image">{{ __('Choose file') }}</label>
          </div>
      </div>

          <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
          <input type="text" class="form-control" name="name" value="" id="name" placeholder="{{ __('Name') }}">
          </div>
  
          <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input type="text" class="form-control" name="email" id="email" value="" placeholder="{{ __('Email') }}">
          </div>

          <div class="form-group">
            <label for="phone">{{ __('Phone') }}</label>
            <input type="text" class="form-control" name="phone" id="phone" value="" placeholder="{{ __('Phone') }}">
          </div>

          <div class="form-group">
            <label for="phone">{{ __('Password') }}</label>
            <input type="password" class="form-control" name="password" id="password" value="" placeholder="{{ __('Password') }}">
          </div>


          <div class="form-group">
            <label for="role">{{ __('Role') }}</label>
            <select name="role" id="role" class="form-control">
                <option value="" selected>{{__('Select Role')}}</option>
                @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
          </div>


          <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </form>
      </div>
  </div>
@endsection