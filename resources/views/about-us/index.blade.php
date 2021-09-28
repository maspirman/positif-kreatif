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
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-12">
                                               <textarea class="form-control" rows="20" disabled >{{ $aboutUs->description ?? "" }}</textarea>
                                            </div>
                                        </div>
                                        
                                        
                                    <div class="form-group float-right">
                                        <a href="{{ route("admin.about-us.create") }}" class="btn btn-primary px-5">Edit</a>
                                    </div>
                                    
                                    </div>
                            </div>
                            <!--end::Card-->
                    </div>
                </div>
                <!--end::Container-->
            </div>
      
@endsection