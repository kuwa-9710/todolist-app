<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## このアプリの概要
ご覧いただきありがとうございます。
今回作成したアプリの要件は以下の通りです。

<ul>
    <li>タスクの追加</li>
    <li>タスクの一覧を表示</li>
    <li>タスクの編集、ステータスの更新</li>
    <li>タスクの削除</li>
</ul>

今回初の自作ということで、CRUDを実装できるようになることを意識して作成しました。
また、フロントエンドは一度Figmaで仮デザインを作成してから、Tailwind CSSを使用して作成しました。
Figma：https://www.figma.com/file/Ve8hQoFmye5KVOAsTodTSD/todolist-app?node-id=0%3A1

アプリの表示されている言語は英語になっていますが、mysqlは日本語対応にも対応させています。

## 今回作成した感想と、課題
作成するWebアプリとしては、２つ目ですが、１つ目で学んだことをアウトプットすることはかなり勉強になると感じました。
前回のアプリでは、CRUDを全て分けてControllerを作成していましたが、今回はresousesで一括管理できる方法を使用しました。
簡易的なアプリであればこれで十分だと感じました。
次に作成するアプリはユーザー登録にも対応させていきたいと思います。

## 同じ環境で構築する場合

docker run --rm \
    -u "$(id -u):$(id -g)" 1
    -v $ (pwd): /var /www/html \
    -w /var /www/html \
    laravelsail/php81-composer: latest composer install --ignore-platform-reqs