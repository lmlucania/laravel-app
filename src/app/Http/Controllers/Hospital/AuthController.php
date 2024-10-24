<?php

declare(strict_types=1);

namespace App\Http\Controllers\Hospital;

use App\Exceptions\UnauthorizedException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Hospital\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @OA\Post(
     *     path="/hospital/login",
     *     tags={"Hospital"},
     *     summary="ログイン",
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/Requests~1Hospital~1LoginRequest")
     *     ),
     *     @OA\Response(
     *          response="200",
     *          description="ログイン成功",
     *     ),
     *     @OA\Response(
     *          response="401",
     *          description="ログイン失敗",
     *     )
     * )
     */
    public function login(LoginRequest $request)
    {
        if (Auth::guard('staffs')->attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return response()->json();
        }

        throw new UnauthorizedException('ログインに失敗しました。メールアドレスまたはパスワードが正しくありません。');
    }

    /**
     * @OA\Post(
     *     path="/hospital/logout",
     *     tags={"Hospital"},
     *     summary="ログアウト",
     *     @OA\Response(
     *          response="200",
     *          description="ログアウト成功",
     *     ),
     * )
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'ログアウトが成功しました。']);
    }
}
