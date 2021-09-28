@extends('layouts.app')

@section('title')
    Portofolio
@endsection

@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row mb-4">
                <div class="col">
                    <a href="{{ route("admin.portofolio-create") }}" class="btn btn-primary">Add Portofolio</a>
                </div>
            </div>
            <div class="row">
                <!--begin::Col-->
                @foreach ($portofolios as $item)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Pic-->
                                <div class="">
                                    <div class="">
                                        <img src="{{ asset("storage/$item->image")}}" style="width:100%" alt="image" />
                                    </div>
                                </div>
                                <!--end::Pic-->
                            </div>
                            <!--end::User-->
                            <div class="d-flex flex-column">
                                <span class="text-dark font-weight-bold font-size-h4 mb-0">{{$item->title}}</span>
                            </div>
                            <!--begin::Desc-->
                            <p class="mb-7"> {{ $item->category }} </p>
                            <p class="mb-7"> {{ $item->client }} </p>
                            <p class="mb-7"> {{ $item->date }} </p>
                            <p class="mb-7"> {{ $item->skills }} </p>
                            <p class="mb-7"> {{ $item->link }} </p>
                            <p class="mb-7"> {{ $item->description }} </p>
                            <!--end::Desc-->
                         
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route("admin.portofolio-edit", ["id" => $item->id]) }}" class="mt-7 btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">Edit</a>
                                </div>
                                <div class="col">
                                    <form action="{{ route("admin.portofolio-delete", ["id" => $item->id ]) }}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button class="d-inline mt-7 btn btn-block btn-sm btn-danger font-weight-bolder text-uppercase py-4">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:: Card-->
                </div>
                @endforeach

                <!--end::Col-->
              
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection