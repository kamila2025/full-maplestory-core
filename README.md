# Laravel 系統

## 專案簡介
簡要介紹專案的功能和目標。

## 安裝步驟

1. 安裝相依套件
    ```bash
    composer install
    npm install
    ```

2. 設定環境變數
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

3. 設定資料庫連線
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. 初始化資料庫並建立使用者
    ```bash
    php artisan migrate
    php artisan make:user
    ```

5. 啟動 PHP 開發伺服器
    ```bash
    php artisan serve
    ```
