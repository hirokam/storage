<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage確認</title>
</head>
<body>
    <div class="storage-form">
        <form action="/storage" method="post" enctype="multipart/form-data">
        @csrf
            <label>リネームされて保存：<input type="file" name="image"></label>
            <button>アップロード</button>
        </form>
    </div>

    <div class="storage-form">
        <form action="/storage/named" method="post" enctype="multipart/form-data">
        @csrf
            <label>アップロードした時の名前で保存：<input type="file" name="image"></label>
            <button>アップロード</button>
        </form>
    </div>
</body>
</html>