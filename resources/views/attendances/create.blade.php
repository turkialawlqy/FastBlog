@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>@lang('models/attendances.header.create')</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'attendances.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('attendances.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit(__('models/attendances.button.save'), ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('attendances.index') }}" class="btn btn-default">@lang('models/attendances.button.cancel')</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
