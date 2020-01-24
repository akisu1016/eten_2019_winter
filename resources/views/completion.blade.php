@extends('../layouts/app')

@section('title', '作品登録完了')
<link rel="stylesheet" href="{{ asset('css/registration.css') }}">
@section('content')
<h1 class="title">作品登録完了</h1>
{{-- <a>作品一覧へ</a> --}}
<a href="{{ route('projects.show', ['project' => $project->id]) }}">作品詳細へ</a>
@endsection