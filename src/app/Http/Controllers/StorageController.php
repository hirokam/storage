<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function upload(Request $request)
    {
        $dir = 'sample';

        // 画像を"storage/app/public/sample"に保存
        $request->file('image')->store('public/' . $dir);

        return redirect('/');
    }

    public function uploadNamed(Request $request)
    {
        $dir = 'named_sample';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        return redirect('/');
    }
}
