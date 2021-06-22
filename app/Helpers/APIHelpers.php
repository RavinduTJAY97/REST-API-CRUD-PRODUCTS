<?php
namespace App\Helpers;
class APIHelpers
{
    public static function createAPIResponse($is_error, $code, $message, $content)
    {
        $results = [];
        if ($is_error) {
            $results['success'] = false;
            $results['code'] = $code;
            $results['message'] = $message;
        } else {
            $results['success'] = true;
            $results['code'] = $code;
            if ($content == null) {
                $results['message'] = $message;
            } else {
                $results['data'] = $content;

            }
        }

    return $results;
    }

}


