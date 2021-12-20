<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CreateController extends Controller
{

    public function createTable(Request $request)
    {
        $data = $request-> input('text');
//        return view('index', [
//            'user' => $data
//        ]);
        return json_encode($data);
    }

}
