@extends('app')

@section('content')
    <div id="app">
        <!-- デフォルトだとこの中ではvue.jsが有効 -->
        <!-- example-component はLaravelに入っているサンプルのコンポーネント -->
        <example-component title="{{ __('Practice').'「'.$drill->title.'」' }}" :drill="{{$drill}}"></example-component>
    </div>
@endsection