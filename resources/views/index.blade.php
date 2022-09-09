@extends('layouts')
@section('title', 'トップページ')
@section('content')
<div class="top-view">
    <h1>新しい旅を見つけよう！</h1>
    <div class="search">
        <input type="search" placeholder="地名で旅先を検索" name="search">
        <button type="submit">検索</button>
    </div>
</div>
<div class="top-new">
    <h2>新着記事</h2>
    ***新着記事
    ***新着記事２
    ***新着記事３
    <a href="">新着記事一覧へ</a>
</div>
@endsection

