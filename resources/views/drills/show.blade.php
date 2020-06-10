@extends('layouts.app')

@section('content')
    <div id="app">
        <example-component title="{{ __('Practice').'「'.$drill->title.'」' }}" :drill="{{$drill}}"></example-component>
    </div>
@endsection