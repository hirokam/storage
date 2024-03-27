# Storage機能
画像をstorageに保存して、画面に表示させるための実装sampleです。

## コマンド
1.SSH用GitHubクローンURL : 

2.リポジトリの紐付け先変更 : 

3.dockerコンテナの生成と起動 : docker-compose up -d --build

4.PHPコンテナのコマンド操作 : docker-compose exec php bash

5.composerの確認 : composer -v

6.

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

