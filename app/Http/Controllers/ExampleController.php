<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show()
    {
        $data = [
            'username' => 'John Doe',
            'items' => ['Item 1', 'Item 2', 'Item 3'],
            'showMessage' => true,
            'message' => 'This is a sample message.'
        ];

        return view('example', $data);
    }
}
