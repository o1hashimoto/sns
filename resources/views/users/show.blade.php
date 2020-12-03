@extends('app')

@section('title', $user->name)

@section('content')

  {{-- トップのナビゲーションを表示 --}}
  @include('nav')

  <div class="container">

    {{-- ユーザーの情報を表示 --}}
    @include('users.user')

    {{-- ユーザーのタブを表示 --}}
    @include('users.tabs', ['hasArticles' => true, 'hasLikes' => false])
    
    {{-- 全ての記事を表示 --}}
    @foreach($articles as $article)
      @include('articles.card')
    @endforeach


  </div>
@endsection