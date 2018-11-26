@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
          你現在所看到的是 <a href="https://laravel-china.org/courses/laravel-essential-training-5.5">Laravel 入门教程</a> 的示例项目主页。
        </p>
        <p>
          一切，将从这里开始。
        </p>
        <p>
          <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Register Now</a>
        </p>
    </div>
@endsection