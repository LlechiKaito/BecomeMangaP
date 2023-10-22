<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="/css/guest.css">
        <link rel="stylesheet" href="/css/user.css">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

        <!-- Bootstrap JavaScript (Popper.js and Bootstrap JS) CDN -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" style="padding-top:4.4rem">
        <header> 
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a href="#" class="navber-brand title">漫画家になろう</a>
                    <!--<%= link_to "漫画家になろう", root_path, class: "navber-brand title" %>-->
                    <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                        aria-expanded="false" aria-controls="offcanvasNavbar" aria-label="ナビゲーションの切替">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">メニュー</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="閉じる"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                @if ( Auth::check() )
                                <!--<%if user_signed_in? %>-->
                                    <div class="row">
                                        <div class="col-5">
                                            <a href="/users/{{ Auth::user()->id }}" class="login">マイページ</a>
                                            <!--<%= link_to "マイページ", user_path(current_user), class: "login" %>-->
                                        </div>
                                        <div class="col-5">
                                            <a href="#" class="registration">ログアウト</a>
                                            <!--<%= link_to "ログアウト", destroy_user_session_path, method: :delete, class: "registration" %>-->
                                        </div>
                                    </div>
                                @else
                                <!--<% else %>-->
                                    <div class="row">
                                        <div class="col-5">
                                            <a href="/login" class="login">ログイン</a>
                                            <!--<%= link_to "ログイン", new_user_session_path, class: "login" %>-->
                                        </div>
                                        <div class="col-5">
                                            <a href="/register" class="registration">新規登録</a>
                                            <!--<%= link_to "新規登録", new_user_registration_path, class: "registration" %>-->
                                        </div>
                                    </div>
                                <!--<% end %>-->
                                @endif
                                <a href="#" class="nav-link">新規漫画作成</a>
                                <a href="#" class="nav-link">ブックマーク一覧</a>
                                <a href="#" class="nav-link">お問い合わせ</a>
                                <!--<%= link_to "新規漫画作成", new_work_path(), class: "nav-link" %>-->
                                <!--<%= link_to "ランキング", works_path(), class: "nav-link" %>-->
                                <!--<%= link_to "追加漫画作成", "#", class: "nav-link" %>-->
                                <!--<%= link_to "マイプロフィール", "#", class: "nav-link", id: "my-profile", remote: true %>-->
                                <!--<%= link_to "ブックマーク一覧", book_marks_path(), class: "nav-link" %>-->
                                <!--<%= link_to "お問い合わせ", new_inquiry_path(), class: "nav-link" %>-->
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
