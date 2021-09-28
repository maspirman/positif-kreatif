@extends('layouts.app')

@section('title', 'About US')

@section('content')

            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b example example-compact">
                                <!--begin::Form-->
                                <form action="{{ route("admin.about-us.post") }}" method="POST">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">About Us</label>
                                            <div class="col-10">
                                               <textarea class="form-control" rows="20" name="description" >{{ $aboutUs->description ?? "" }}</textarea>
                                            </div>
                                        </div>
                                        
                                    <div class="form-group float-right">
                                        @csrf
                                        <a href="{{ route("admin.about-us") }}" class="btn btn-danger">Cancel</a>
                                        <button type="submit" class="btn btn-primary px-5">Edit</button>
                                    </div>
                                    
                                    </div>
                                </form>
                            </div>
                            <!--end::Card-->
                    </div>
                </div>
                <!--end::Container-->
            </div>
      
@endsection