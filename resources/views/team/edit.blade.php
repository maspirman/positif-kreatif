@extends('layouts.app')

@section('title')
    Edit Team
@endsection

@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-body p-0">
                    <div class="wizard wizard-1" id="kt_projects_add" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-7">
                                <!--begin::Form Wizard-->
                                <form class="form" id="kt_projects_add_form" action="{{ route("admin.team-update", ["id" => $team->id]) }}" method="POST" enctype="multipart/form-data">
                                    <!--begin::Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <h3 class="mb-10 font-weight-bold text-dark">Service Details:</h3>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <input class="form-control form-control-lg form-control-solid" required name="name" type="text" value="{{ $team->name }}" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Position</label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <input class="form-control form-control-lg form-control-solid" required name="position" type="text" value="{{ $team->position }}" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Jargon</label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <input class="form-control form-control-lg form-control-solid" required name="jargon" type="text" value="{{ $team->jargon }}" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Image</label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <input class="form-control form-control-solid" name="image" type="file" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Step 1-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div class="mr-2">
                                        </div>
                                        <div>
                                            @csrf
                                            @method("PUT")
                                            <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Edit</button>
                                        </div>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form Wizard-->
                            </div>
                        </div>
                        <!--end::Wizard Body-->
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection