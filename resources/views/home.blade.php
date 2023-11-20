@extends('layouts.master')
@section('content')
<main role="main" class="container">
    <div class="wrapper">
        <h1 class="mt-5 text-danger">CSS Theme Switcher</h1>
        <p>Switch from light to dark mode using the toggle.</p>
    </div>

    <div class="row mt-5">
        @foreach($blogs as $blog)
            @if($blog['status'] == 1)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $blog['title'] }}</h2>
                            <p>
                                {{ $blog['body'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $blog['title'] }}</h2>
                            <p>
                                {{ $blog['body'] }}
                            </p>
                            <div class="btn-sm btn-warning">
                                pending
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. repudiandae rerum unde veniam!
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
