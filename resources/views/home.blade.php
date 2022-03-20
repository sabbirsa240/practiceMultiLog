@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}

                    @if(Auth::user()->role == '2')
                    <li>admin</li>
                    <li>admin add</li>
                    <li>admin update</li>

                    @elseif(Auth::user()->role == '1')
                    <li>user</li>
                    <li>add</li>
                    <li>update</li>
                    @else
                    you are enimies
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
