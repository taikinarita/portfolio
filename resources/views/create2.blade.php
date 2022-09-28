@extends('layouts')
@section('title', '新規投稿')
@section('content')
<h1 class="page_title">新規投稿①</h1>
<div class="create_form_number">
    <p class="create_form_number_p">①旅の概要　　＞　<span class="create_form_number_span">②旅の詳細</span></p>
</div>
{{-- actionの飛ぶ先（たぶんcreate1:post）を指定する --}}
<form action="{{ route('create2') }}" method="post" enctype="multipart/form-data">
    <div class="create_form">
        @csrf
        <div class="create_form_line">
            <div class="create_form_box">
                <label for="main_impression" class="create_form_label">旅全体の感想</label>
                <input type="text" name="main_impression" class="create_form_input">
            </div>
            <div class="create_form_line">
                <label for="story_main_image" class="create_form_label">旅を代表する写真</label>
                <input type="file" name="story_main_image">
            </div>
        </div>
        <div class="create_form_box">
            <p>印象に残ったエピソード</p>
            <div class="create_form_line">
                <label for="story_pick_up_memory_title" class="create_form_label">タイトル</label>
                <input type="text" name="story_pick_up_memory_title" class="create_form_input">
            </div>
            <div class="create_form_line">
                <label for="story_pick_up_memory_image" class="create_form_label">感想</label>
                <input type="text" name="story_pick_up_memory_image" class="create_form_input">
            </div>
            <div class="create_form_line">
                <label for="story_pick_up_image" class="create_form_label">写真</label>
                <input type="file" name="story_pick_up_image">
            </div>
            {{-- jsによる追加のためのボタン --}}
            <button>+▼</button>
        </div>
    </div>
    <div class="create_form_button_wrapper">
        <button type="submit" name="button" value="finish" class="create_form_button">保存して終了</button>
        <button type="submit" name="button" value="public" class="create_form_button">公開する</button>
    </div>
</form>
@endsection