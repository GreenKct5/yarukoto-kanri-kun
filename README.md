# すること管理くん
### 使用技術
* PHP：　使用言語
* Laravel：　フレームワーク
* Tailwind CSS：　CSSフレームワーク
* Pint：　フォーマッター
* GitHubActions：　CI/CD
### 使用ツール
* Figma：　デザイン作成ツール
* miro: オンラインホワイトボード

## プロジェクトのクローン手順
1. 作業用フォルダを用意
2. 作業用フォルダに移動し，
   ```bash
   git clone git@github.com:GreenKct5/yarukoto-kanri-kun.git
   ```

4. 以下のコマンドを上から順に実行する
   ```bash
    cd yarukoto-kanri-kun
    npm install
    composer install
    npm run dev
   ```
5. 別のターミナルを開く
   ```bash
    php artisan serve
   ```
   データベースにアクセスする場合
   ```bash
    make run
   ```

## 自動整形ツールコマンド
* 自動整形実行
  ```bash
    vendor/bin/pint -v
  ```
* ドライラン(チェックのみでファイル変更は行われない)
  ```bash
    vendor/bin/pint --test -v
  ```

## ブランチの命名法則
ブランチ名は`タイトル/issue/#issue番号`の形式

例: feature/issue/#5
|タイトル|内容|
|---|---|
|main|公開用のブランチ，木の幹みたいなイメージ|
|feature|新機能開発用のブランチ|
|fix|バグ解決用のブランチ|

## コミットの命名法則
コミットメッセージは`タイトル: 詳細`の形式

例: add: home.phpファイルの追加
|タイトル|内容|
|---|---|
|add|新規（ファイル）機能追加|
|update|（バグではない）機能修正|
|fix|バグ修正|
|change|仕様変更|
|clean|整理（リファクタリング等）|
|remove|削除（ファイル）|
|upgrade|バージョンアップ|
|revert|変更取り消し|

## loadingの使い方
```bash
@extends('loading')

@section('content')
    <h1>Welcome to My Laravel App</h1>
    <p>This is the content of the page.</p>
@endsection
```
