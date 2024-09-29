<?php
namespace App\Base\Traits\Custom;

use Illuminate\Http\Exceptions\HttpResponseException;

trait HttpExceptionTrait
{
    public function throwHttpExceptionForWebAndApi($message, $statusCode = 400)
    {
        if (request()->wantsJson())
            throw new HttpResponseException($this->setStatusCode($statusCode)->respondWithError($message));

        return redirect()->back()->with('error', $message);
    }
}
