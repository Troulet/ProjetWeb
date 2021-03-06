<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectController extends Controller
{
    public static function objToArray($obj)
    {
        $arr = null;
        // Not an object or array
        if (!is_object($obj) && !is_array($obj)) {
            return $obj;
        }

        // Parse array
        foreach ($obj as $key => $value) {
            $arr[$key] = ObjectController::objToArray($value);
        }

        // Return parsed array
        return $arr;
    }
}
