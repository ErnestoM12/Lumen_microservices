<?php

namespace App\Traits;


use Illuminate\Http\Response;

trait ApiResponser
{

    /**
     * Build a success response
     * @param strin|array $data
     * @param int $code
     * @return  [type] [description]
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {

        return response()->json([
            'data' => $data
        ], $code);
    }


    /**
     * Build a error response
     * @param string  $message,
     * @param int $code
     * @return  Illuminate\Http\Response;
     */

    public function errorResponse($message, $code)
    {
        return response()->json([
            'message' => $message,
            'code' => $code
        ], $code);
    }
}
