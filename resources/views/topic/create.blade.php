@extends('layouts.master')
@section ('title', 'Page Title')
    @section('menu')
        @parent
    @endsection
@section('content')
    <div class="row">
        <div class="label label-info" style="display:inline-block; width:100%;">{{$page}}
            @if(count(session('errors')) > 0)
                <div class="alert alert-danger">
                    @foreach(session('errors') – >all() as $er)
                        {{$er}}<br/>
                    @endforeach
                </div>
            @endif
            @if(session('message'))
                <div class="alert alert-success" >
                    {{session('message')}}
                </div>
            @endif
        </div>
    </div>
    <div class="row mb-2">
        {!! Form::model($topic, ['route'=>['topic.store']])!!}
        <div class='form-group  mb-2'>
            {!! Form::label('topicnameform','Topic name')!!}
            {!! Form::text('topicnameform', '',['class'=>'form-control'])!!}

        </div>
        <button class="btn btn-success"type="submit">Add Topic</button>
        {!! Form::close() !!}
    </div>
@endsection

