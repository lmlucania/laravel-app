<?php

declare(strict_types=1);

namespace App\Http\Requests\Hospital;

use App\Http\Requests\Base\ApiRequest;

class LoginRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @OA\Schema(
     *     schema="Requests/Hospital/LoginRequest",
     *     type="object",
     *     required={"email", "password",},
     *     description="病院スタッフログイン",
     *     @OA\Property(
     *          property="email",
     *          type="string",
     *          example="staff+1@example.com"
     *     ),
     *     @OA\Property(
     *          property="password",
     *          type="string",
     *          format="password",
     *          example="password"
     *     )
     * )
     */
    public function rules(): array
    {
        return [
            'email'    => 'required|string|email',
            'password' => 'required|string',
        ];
    }
}
