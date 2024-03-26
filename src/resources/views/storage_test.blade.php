<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage確認</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/storage_test.css') }}">
</head>

<style>
    body {
        background: #dcdcdc;
        font-size: 15px;
    }
</style>

<body>
    <div class="storage-form__to-sample-group">
        <form action="/storage/rename/to_sample" method="post" enctype="multipart/form-data">
        @csrf
            <label class="rename">リネームされてsampleに保存<span class="colon">：</span><input type="file" name="image" class="input"></label>
            <button class="upload__button">アップロード</button>
        </form>
    </div>
    <div class="show-image">
        <img src="{{ asset('storage/sample/5CTKwTgDJ8LoTcYpf3wzyDVFy3R0JDMTzJ7ntzBf.jpg') }}" class="picture">
    </div>

    <div class="storage-form__to-sample-group">
        <form action="/storage/named/to_named_sample" method="post" enctype="multipart/form-data">
        @csrf
            <label class="named">アップロードした時の名前でnamed_sampleに保存：<input type="file" name="image" class="input"></label>
            <button class="upload__button">アップロード</button>
        </form>
    </div>
    <div class="show-image">
        <img src="{{ asset('storage/named_sample/4094772_s.jpg') }}" class="picture">
    </div>

    <div class="storage-form__to-public-group">
        <form action="/storage/named/to_public" method="post" enctype="multipart/form-data">
        @csrf
            <label class="named">アップロードした時の名前でpublicに保存<span class="public-colon">：</span><input type="file" name="image" class="input"></label>
            <button class="upload__button">アップロード</button>
        </form>
    </div>

    <div class="show-image">
        <img src="{{ asset('storage/22358039_s.jpg') }}" class="picture">
    </div>
</body>
</html>