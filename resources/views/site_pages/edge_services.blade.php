@extends('layouts.frontend')
@section('content')
    @include('frontend-layouts.header')
    @include('headers.otherpages_header')
    <div class="row">
        <div class="col-md-12 pt-5">
            <h2 style="text-align: center;">Shelter Plug Edge</h2>
        </div>
    </div>

    <div class="d-flex p-2 justify-content-center flex-row flex-wrap">
        <div class="p-3 align-middle m-3 rounded"
            style="width:100px; height: 100px; text-align:center; line-height: 13px; background-color:#f1f1f1; border:#707070 solid 1px;">
            <div class="w-100 pb-2">
                <img src="{{ asset('images/house-svgrepo-com.svg') }}" width="50%" height="auto" alt="Home Interior">
            </div>

            <a href="{{ route('homeinterior') }}" style="color: #707070; font-weight:900;">Home Interior</a>
        </div>
        <div class="p-3 align-middle m-3 rounded"
            style="width:100px; height: 100px; text-align:center; line-height: 13px; background-color:#f1f1f1; border:#707070 solid 1px;">
            <div class="w-100 pb-2">
                <img src="{{ asset('images/house-rent.svg') }}" width="50%" height="auto" alt="Rent Agreement">
            </div>

            <div>
                <a href="#">Rent Agreement</a>
            </div>

        </div>
        <div class="p-3 align-middle m-3 rounded"
            style="width:100px; height: 100px; text-align:center; line-height: 13px; background-color:#f1f1f1; border:#707070 solid 1px;">
            <div class="w-100 pb-2">
                <img src="{{ asset('images/home-1.svg') }}" width="50%" height="auto" alt="Property Management">
            </div>
            <a href="#">Shelter Plug Premium</a>
        </div>
        <div class="p-3 align-middle m-3 rounded"
            style="width:100px; height: 100px; text-align:center; line-height: 13px; background-color:#f1f1f1; border:#707070 solid 1px;">
            <div class="w-100 pb-2">
                <img src="{{ asset('images/propertymanager.png') }}" width="50%" height="auto" alt="Parkers Movers">
            </div>
            <a href="{{ route('propertymanagement') }}">Property Management</a>

        </div>

        <div class="p-3 align-middle m-3 rounded"
            style="width:100px; height: 100px; text-align:center; line-height: 13px; background-color:#f1f1f1; border:#707070 solid 1px;">
            <div class="w-100 pb-2">
                <img src="{{ asset('images/fridge.png') }}" width="50%" height="auto" alt="Parkers Movers">
            </div>

            <a href="{{ route('parkers.index') }}">Parkers &amp; Movers</a>

        </div>

        <div class="p-3 align-middle m-3 rounded"
            style="width:100px; height: 100px; text-align:center; line-height: 13px; background-color:#f1f1f1; border:#707070 solid 1px;">
            <div class="w-100 pb-2">
                <img src="{{ asset('images/776927.png') }}" width="50%" height="auto" alt="Parkers Movers">
            </div>

            <a href="#">Buy Property</a>

        </div>

        <div class="p-3 align-middle m-3 rounded"
            style="width:100px; height: 100px; text-align:center; line-height: 13px; background-color:#f1f1f1; border:#707070 solid 1px;">
            <div class="w-100 pb-2">
                <img src="{{ asset('images/sub.svg') }}" width="50%" height="auto" alt="Parkers Movers">
            </div>

            <a href="{{ route('plans') }}">Subscriptions</a>

        </div>

        <div class="p-3 align-middle m-3 rounded"
            style="width:100px; height: 100px; text-align:center; line-height: 13px; background-color:#f1f1f1; border:#707070 solid 1px;">
            <div class="w-100 pb-2">
                <img src="{{ asset('images/rent.svg') }}" width="50%" height="auto" alt="Parkers Movers">
            </div>

            <a href="#">Rent Property</a>

        </div>

        <div class="p-3 align-middle m-3 rounded"
            style="width:100px; height: 100px; text-align:center; line-height: 13px; background-color:#f1f1f1; border:#707070 solid 1px;">
            <div class="w-100 pb-2">
                <img src="{{ asset('images/5024420.png') }}" width="50%" height="auto" alt="Parkers Movers">
            </div>

            <a href="#">PG/Co-Living</a>

        </div>
    </div>
    @include('frontend-layouts.footer')
@endsection
