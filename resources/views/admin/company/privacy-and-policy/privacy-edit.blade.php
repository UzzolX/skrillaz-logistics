@extends('admin.index')
@section('content')
<style>
    input.blogupimage.form-control {
	padding: 22px 15px;
	background: #36ccba;
	height: 70px;
	cursor: pointer;
}
</style>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Update Privacy & Policy
        </h3>
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    {{-- {{route('privacy.update',[$privacy->id])}} --}}
    <form action="#"  method="post">
        
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>privacy Code</label>
                {{-- <input type="text" name="privacy_code" class="form-control{{ $errors->has('privacy_code') ? ' is-invalid' : '' }}"
                    value="{{$privacy->privacy_code}}" placeholder="privacy_code" />
                @if ($errors->has('privacy_code'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('privacy_code') }}</strong>
                </span>
                @endif --}}
            </div>
            <div class="form-group">
                <label>privacy Title</label>
                {{-- <input type="text" name="privacy_title" class="form-control{{ $errors->has('privacy_title') ? ' is-invalid' : '' }}"
                    value="{{$privacy->privacy_title}}" placeholder="privacy_title" />
                @if ($errors->has('privacy_title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('privacy_title') }}</strong>
                </span>
                @endif --}}
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection