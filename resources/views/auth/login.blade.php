<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/login.css'])
    <title>laravel-user-management</title>
</head>
<body>
@include('layouts.header')
    <main>
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div id="login-form" class="login-form form-signin w-100 m-auto">
                @error('user')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
                <h1 class="h3 mb-3 fw-normal">ログインフォーム</h1>
                <div id="username-form" class="form-floating">
                    <input id="user_name" name="user_name" class="form-control" type="text" placeholder="name">
                    <label for="floatingInput">ユーザーネーム</label>
                </div>
                <div id="password-form" class="form-floating">
                    <input id="password" name="password" class="form-control" type="password" placeholder="password">
                    <label for="floatingPassword">パスワード</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">ログイン</button>
            </div>
        </form>
    </main>
@include('layouts.footer')
</body>
</html>
