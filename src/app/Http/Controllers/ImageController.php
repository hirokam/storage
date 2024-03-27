<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        // 登録した画像を取得して$imageに格納
        $images = Image::all();
        // viewに$imageを渡してあげる
        return view('storage_test', compact('images'));
    }

    public function upload(Request $request)
    {
        // ディレクトリ名を格納
        $dir = 'sample';

        // 登録された画像のハッシュ名を格納
        $file_name = $request->file('image')->hashName();

        // 画像を"storage/app/public/sample"に保存
        $request->file('image')->store('public/' . $dir);

        // ファイル情報をDBに保存
        $image = new Image();
        $image->name = $file_name;
        $image->path = 'storage/' . $dir . '/' . $file_name;
        $image->save();

        return redirect('/');
    }

    public function uploadNamed(Request $request)
    {
        // ディレクトリ名を格納
        $dir = 'named_sample';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        // ファイル情報をDBに保存
        $image = new Image();
        $image->name =  $file_name;
        $image->path = 'storage/' . $dir . '/' . $file_name;
        $image->save();

        return redirect('/');
    }

    public function uploadNamedToPublic(Request $request)
    {
        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/', $file_name);

        // ファイル情報をDBに保存
        $image = new Image();
        $image->name =  $file_name;
        $image->path = 'storage/' . $file_name;
        $image->save();

        return redirect('/');
    }
}
