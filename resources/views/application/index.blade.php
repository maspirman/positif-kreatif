@extends('layouts.app')

@section('title')
    Application
@endsection

@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">


              <div class="row">
                <!--begin::Col-->
                
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <span class="text-dark font-weight-bold font-size-h4 mb-0">Logo : {{$logo->value}}</span>
                            </div>
                            <!--begin::Desc-->
                            
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route("admin.application-edit", ["id" => $logo->id]) }}" class="mt-7 btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">Edit</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                
                <!--end::Col-->
              
            </div>



            <div class="row">
                <!--begin::Col-->
                
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <span class="text-dark font-weight-bold font-size-h4 mb-0">Email : {{$email->value}}</span>
                            </div>
                            <!--begin::Desc-->
                            
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route("admin.application-edit", ["id" => $email->id]) }}" class="mt-7 btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">Edit</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                
                <!--end::Col-->
              
            </div>
            <!--end::Row-->
            <div class="row">
                <!--begin::Col-->
                
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <span class="text-dark font-weight-bold font-size-h4 mb-0">Alamat : {{$address->value}}</span>
                            </div>
                            <!--begin::Desc-->
                            
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route("admin.application-edit", ["id" => $address->id]) }}" class="mt-7 btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">Edit</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                
                <!--end::Col-->
              
            </div>
            <div class="row">
                <!--begin::Col-->
                
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <span class="text-dark font-weight-bold font-size-h4 mb-0">Phone : {{$phone->value}}</span>
                            </div>
                            <!--begin::Desc-->
                            
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route("admin.application-edit", ["id" => $phone->id]) }}" class="mt-7 btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">Edit</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                
                <!--end::Col-->
              
            </div>
            <div class="row">
                <!--begin::Col-->
                
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <span class="text-dark font-weight-bold font-size-h4 mb-0">Whatsapp : {{$whatsapp->value}}</span>
                            </div>
                            <!--begin::Desc-->
                            
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route("admin.application-edit", ["id" => $whatsapp->id]) }}" class="mt-7 btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">Edit</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                
                <!--end::Col-->
              
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection