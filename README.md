# Storage機能
画像をstorageに保存して、画面に表示させるための実装sampleです。

## アプリケーションURL
ローカル環境

http://localhost

## 環境構築コマンド
### GitHubリポジトリのクローン
※SSH用GitHubクローンリンク : git@github.com:hirokam/storage.git

1.クローン : git clone git@github.com:hirokam/storage.git

2.リポジトリの紐付け先変更 : git remote set-url #変更前のリンク #新しい紐付け先リンク

3.リポジトリの紐付け先の変更確認 : git remote -v

### dockerコンテナの生成と起動
1.dockerコンテナの生成と起動 : docker-compose up -d --build

### Laravelの環境構築

1.PHPコンテナのコマンド操作 : docker-compose exec php bash

2.composerのインストール : composer install

3.composerのパージョン確認 : composer -v

4.(.env)ファイルの作成 : cp .env.example .env ->環境変数を変更

5.APP_KEYの生成 : php artisan key:generate

6.マイグレーションの実行 : php artisan migrate



## 環境変数
### mysql
MYSQL_ROOT_PASSWORD: root

MYSQL_DATABASE: storage_db

MYSQL_USER: storage_user

MYSQL_PASSWORD: storage_pass

### phpmyadmin (localhost:8080)
PMA_ARBITRARY= 1

PMA_HOST= mysql

PMA_USER= storage_user

PMA_PASSWORD= storage_pass

### .env
DB_DATABASE= storage_db

DB_USERNAME= storage_user

DB_PASSWORD= storage_pass

