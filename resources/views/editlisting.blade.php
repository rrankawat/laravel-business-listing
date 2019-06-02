@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Listing <span class="float-right"><a href="/dashboard" class="btn btn-success btn-sm">Go Back</a></span></div>

            <div class="card-body">
                {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'PUT']) !!}
                  <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', $listing->name, ['class' => 'form-control', 'placeholder' => 'Company Name']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('website', 'Website') }}
                    {{ Form::text('website', $listing->website, ['class' => 'form-control', 'placeholder' => 'Company Website']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::text('email', $listing->email, ['class' => 'form-control', 'placeholder' => 'Contact Email']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('phone', 'Phone') }}
                    {{ Form::text('phone', $listing->phone, ['class' => 'form-control', 'placeholder' => 'Contact Phone']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('address', 'Address') }}
                    {{ Form::text('address', $listing->address, ['class' => 'form-control', 'placeholder' => 'Business Address']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label('bio', 'Bio') }}
                    {{ Form::textarea('bio', $listing->bio, ['class' => 'form-control', 'placeholder' => 'About The Business']) }}
                  </div>
                  <div class="form-group">
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                  </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
