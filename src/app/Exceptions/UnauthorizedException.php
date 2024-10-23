<?php

namespace App\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{
    public function render($request)
    {
        return response()->json([
            'error' => 'Unauthorized',
            'message'  => $this->getMessage(),
        ], 401);
    }
}
