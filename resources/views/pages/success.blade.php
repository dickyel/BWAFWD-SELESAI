@extends('layouts.success')

@section('title','Checkout Success')

@section('content')
    <main>
        <div class="section-succes d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/success.png') }}" width="400px" height="400px">
                <h1>Yay! Succcess</h1>
                <p>
                    We've sent you email for trip instruction
                    <br/>
                    please read it as well
                </p>
                <a href="{{ route('home') }}" class="btn btn-join-now mt-3 px-5">
                    Home Page
                </a>
            </div>

        </div>
    </main>
@endsection

