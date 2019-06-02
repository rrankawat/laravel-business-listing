@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ $listing->name }} <span class="float-right"><a href="/" class="btn btn-success btn-sm">Go Back</a></span></div>

            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">Address: {{ $listing->address }}</li>
                    <li class="list-group-item">Website: <a href="{{ $listing->website }}" target="_blank">{{ $listing->address }}</a></li>
                    <li class="list-group-item">Email: {{ $listing->email }}</li>
                    <li class="list-group-item">Phone: {{ $listing->phone }}</li>
                </ul>
                <hr/>
                <div class="card">
                  <div class="card-body">
                      {{ $listing->bio }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
