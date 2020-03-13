@extends('layouts.app')


@section('content')
    <div class="justify-content-center row">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <div class="" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center">
                    <h3>ADD EVENTS</h3>
                </div>

                <div class="card-body">
                    {!! Form::open(['action' => 'PagesController@addEvents', 'method' => 'POST', 'enctype' => 'multipart/form-data','files'=>'true']) !!}
                    {{ csrf_field() }}

                    <div class="form-group text-center">
                        {{Form::label('title', 'EVENT TITLE')}}
                        {{Form::text('title', '',['class'=>'form-control', 'placeholder'=>'Event Title'])}}
                    </div>

                    <div class="form-group text-center">
                        {{Form::label('description', 'EVENT DESCRIPTION')}}
                        {{Form::textarea('description', '',['class'=>'form-control', 'placeholder'=>'Event Description', 'rows'=>'2'])}}
                    </div>

                    <div class="form-group text-center">
                        {{Form::label('start_date', 'START DATE')}}
                        {{Form::date('start_date','', ['class'=>'form-control timepicker', 'placeholder'=>' Start Date'])}}
                    </div>

                    <div class="form-group text-center">
                        {{Form::label('end_date', 'END DATE')}}
                        {{Form::date('end_date', '',['class'=>'form-control', 'placeholder'=>'End Date'])}}
                    </div>
                    {{--<div class="form-group text-center">--}}
                        {{--<input id="picker" width="234">--}}
                    {{--</div>--}}
                    <div class="form-group text-center">
                        {{Form::label('organiser', 'EVENT ORGANISER')}}
                        {{Form::text('organiser', '',['class'=>'form-control', 'placeholder'=>'Event Organiser'])}}
                    </div>

                    <div class="form-group text-center">
                        {{Form::label('location', 'EVENT LOCATION')}}
                        {{Form::text('location', '',['class'=>'form-control', 'placeholder'=>'Event Location'])}}
                    </div>

                    <div class="form-group text-center">
                        {{Form::label('image', 'UPLOAD IMAGES')}}
                        {{Form::file('images[]',['class'=>'form-control-file','multiple'])}}
                        {{--<input type="file" class="form-control" name="image[]"  multiple>--}}

                    </div>

                    <div class="form-group">
                        <div class="col-md-4 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="background: mediumvioletred;">
                                {{ __('Add Property') }}
                            </button>
                        </div>

                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

{{--<script>--}}
    {{--$(function()--}}
    {{--{--}}
       {{--$('#picker').datetimepicker({--}}
           {{--uiLibrary: 'bootstrap4',--}}
           {{--modal: true,--}}
           {{--footer: true,--}}
           {{--format: dd/mm/yyyy--}}
       {{--});--}}
    {{--}--}}
    {{--);--}}
{{--</script>--}}