<?php

declare(strict_types=1);

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="Vetiq API",
 * )
 * @OA\Server(
 *     url="http://localhost:8080"
 * )
 * @OA\Tag(
 *     name="Admin",
 *     description="管理者"
 * )
 * @OA\Tag(
 *     name="Hospital",
 *     description="病院スタッフ"
 * )
 * @OA\Tag(
 *     name="User",
 *     description="ユーザー"
 * )
 */
abstract class Controller
{
    //
}
