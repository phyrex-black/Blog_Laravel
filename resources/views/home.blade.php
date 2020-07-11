@extends('layouts.app')

<style>
    .avatar{
        width: 200px;
        height: 200px;
        overflow: hidden;
        border-radius: 100%;
        border: 2px solid rgba(0, 0, 0, 0.5);
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            @if(session('response'))
                <div class="alert alert-success">{{session('response')}}</div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Blogs') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-4">
                        <img src="{{ $profile->profile_picture }}" class="avatar" alt="Cargando...">
                        <p class="lead">{{ $profile->name}}</p>
                        <p>{{ $profile->designation }}</p>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
