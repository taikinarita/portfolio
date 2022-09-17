@extends('layouts')
@section('title', '新規投稿')
@section('content')
<h1 class="page_title">新規投稿①</h1>
<div class="create_form_number">
    <p class="create_form_number_p"><span class="create_form_number_span">①旅の概要</span>　＞　②旅の詳細</p>
</div>
{{-- actionの飛ぶ先（たぶんcreate1:post）を指定する --}}
<form action="{{ route('create1') }}" method="post" enctype="multipart/form-data">
    <div class="create_form">
        @csrf
        <div class="create_form_box">
            <label for="title" class="create_form_label">タイトル<span class="form_required">必須</span></label>
            <input type="text" name="title" class="create_form_input" required>
        </div>
        <div class="create_form_box">
            <label for="place_name" class="create_form_label">旅先<span class="form_required">必須</span></label>

            {{-- 旅先、jsによる追加処理 --}}
            <input type="text" name="place_name" class="create_form_input" required>
            <input type="text" name="arrival_date" class="create_form_input" required>
            <input type="text" name="departure_date" class="create_form_input" required>
            {{-- jsによる追加のためのボタン --}}
            <button>+▼</button>
        </div>
        <div class="create_form_box">
            <label for="type" class="create_form_label">ジャンル<span class="form_required">必須</span></label>
            <select name="type" required>
                <option value="0">旅行</option>
                <option value="1">世界一周</option>
                <option value="2">終わりなき旅</option>
            </select>
        </div>
        <div class="create_form_box">
            <label for="date_first" class="create_form_label">日程</label>
            {{-- 日程の記入方法、形式要再考 --}}
            <input type="date" name="date_first" class="create_form_input">
            &nbsp;&nbsp;〜&nbsp;&nbsp;
            <input type="date" name="date_last" class="create_form_input">
        </div>
        <div class="create_form_box">
            <label for="number_of_people" class="create_form_label">人数</label>
            <input type="number" name="number_of_people" class="create_form_input">
        </div>
        <div class="create_form_box">
            <label for="main_image" class="create_form_label">トップ画像</label>
            <input type="file" name="main_image">
        </div>
    </div>
    <div class="create_form_button_wrapper">
        <button type="submit" name="button" value="finish" class="create_form_button">保存して終了</button>
        <button type="submit" name="button" value="continue" class="create_form_button">保存して次のステップへ</button>
    </div>
</form>
@endsection