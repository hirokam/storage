<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage確認</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/storage.css') }}">
</head>

<style>
    body {
        background: #dcdcdc;
        font-size: 15px;
    }
</style>

<body>
    <div class="storage-form__rename-group">
        <form action="/storage" method="post" enctype="multipart/form-data">
        @csrf
            <label class="rename">リネームされて保存<span class="colon">：</span><input type="file" name="image" class="input"></label>
            <button class="upload__button">アップロード</button>
        </form>
    </div>

    <div class="storage-form__named-group">
        <form action="/storage/named" method="post" enctype="multipart/form-data">
        @csrf
            <label class="named">アップロードした時の名前で保存：<input type="file" name="image" class="input"></label>
            <button class="upload__button">アップロード</button>
        </form>
    </div>
</body>
</html>