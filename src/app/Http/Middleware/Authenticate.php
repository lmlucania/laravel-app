<?php

namespace App\Http\Middleware;

use App\Exceptions\UnauthorizedException;
use Illuminate\Auth\Middleware\Authenticate as _Authenticate;

class Authenticate extends _Authenticate
{
    protected function unauthenticated($request, array $guards)
    {
        throw new UnauthorizedException('ログインが必要です。正しいログイン情報を入力してください。');
    }
}
