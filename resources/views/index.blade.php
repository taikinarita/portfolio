@extends('layouts')
@section('title', 'トップページ')
@section('content')
<div class="top-view">
    <h1>新しい旅を見つけよう！</h1>
    <div class="search">
        <form action="" method="get">
            @csrf
            <input type="search" placeholder="地名で旅先を検索" name="search">
            <input type="submit" value="検索">
        </form>
    </div>
</div>
<div class="top-new">
    <h2>新着記事</h2>
    @foreach ($new_posts as $new_post)
        <div class="item_thumbnail_box">
            <img src="{{$new_post->main_image}}" alt="image" class="item_thumbnail_image">
            <div class="item_thumbnail_contents">
                <div class="item_thumbnail_header">
                @if ($new_post->type === 0)
                    <p class="item_thumbnail_header_p">旅</p>
                @elseif ($new_post->type === 1)
                    <p class="item_thumbnail_header_p">世界一周</p>
                @elseif ($new_post->type === 2)
                    <p class="item_thumbnail_header_p">終わりなき旅</p>
                @endif
                    <p class="item_thumbnail_header_p">{{$new_post->number_of_people}}</p>
                </div>
                <h3 class="item_thumbnail_header_title"><a href="">{{$new_post->title}}</a></h3>
                <p class="item_thumbnail_header_p"></p>
                <div class="item_thumbnail_footer">
                    <p class="item_thumbnail_header_p">{{$new_post->date_first}} - {{$new_post->date_last}}</p>
                    <p class="item_thumbnail_header_p">{{$new_post->user_name}}</p>
                </div>
            </div>
        </div>
    @endforeach
    <a href="">新着記事一覧へ</a>
</div>
@endsection

