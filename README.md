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
   別のターミナルを開く
   ```bash
    php artisan serve
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

