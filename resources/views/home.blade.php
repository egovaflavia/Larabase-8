@extends('template.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ Str::ucfirst(Request::segment(1)) }}</h3>
                <p class="text-subtitle text-muted">A page for user to checkout</p>
            </div>
            
            {{-- Automatic Breadcrumb --}}
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        @for($i = 1; $i <= count(Request::segments()); $i++)
                        <li class="breadcrumb-item active" aria-current="page">{{ucfirst(Request::segment($i))}}</li>
                        @endfor
                    </ol>
                </nav>
            </div>
            
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Coming Soon!</h5>
                    </div>
                    <div class="card-body">
                        If you want to contribute. Check out this <a href="https://github.com/zuramai/mazer"
                            target="_blank">template repository</a>.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection