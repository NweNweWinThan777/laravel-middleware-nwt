@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="panel-body py-3 pl-4">
                    <a href="{{ route('admin') }}">Admin</a>
                </div>
                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> --}}
                @if(session()->has('error'))
                    <div class="alert alert-warning" role="alert">
                        {{ session()->get('error') }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
