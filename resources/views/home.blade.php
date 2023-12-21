@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container" id="myhome">
        <a href="{{ route('trains.index') }}" class="btn btn-success mt-5 mb-5 ">Treni in arrivo</a>

    </div>

@endsection
