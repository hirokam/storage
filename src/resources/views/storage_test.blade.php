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
    }

    main {
        margin: 80px 50px;
        font-size: 15px;
    }
</style>

<body>
    <header>
        <h1>Storage保存と表示サンプル</h1>
    </header>
    <main>
        <div class="content-all">
            <div class="frame">
                <div class="storage-form__to-sample-group">
                    <form action="/storage/rename/to_sample" method="post" enctype="multipart/form-data">
                    @csrf
                        <label class="rename">リネームされてsampleに保存
                            <div class="input"><input type="file" name="image" class="input"></div>
                        </label>
                        <button class="upload__button">アップロード</button>
                    </form>
                </div>
            </div>
            <div class="frame">
                <div class="storage-form__to-sample-group">
                    <form action="/storage/named/to_named_sample" method="post" enctype="multipart/form-data">
                    @csrf
                        <label class="named">アップロードした時の名前でnamed_sampleに保存
                            <div class="input"><input type="file" name="image" class="input"></label></div>
                        <button class="upload__button">アップロード</button>
                    </form>
                </div>
            </div>
            <div class="frame">
                <div class="storage-form__to-public-group">
                    <form action="/storage/named/to_public" method="post" enctype="multipart/form-data">
                    @csrf
                        <label class="named">アップロードした時の名前でpublicに保存
                            <div class="input"><input type="file" name="image" class="input"></label></div>
                        <button class="upload__button">アップロード</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="show-images">
            @foreach($images as $image)
            <div class="show-image">
                <img src="{{ asset($image->path) }}" class="picture">
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>