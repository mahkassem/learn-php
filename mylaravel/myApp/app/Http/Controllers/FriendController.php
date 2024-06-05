<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        return [
            [
                'name' => 'John Doe',
                'location' => 'New York'
            ],
            [
                'name' => 'Jane Doe',
                'location' => 'Paris'
            ],
            [
                'name' => 'John Smith',
                'location' => 'Berlin'
            ],
            [
                'name' => 'Jane Smith',
                'location' => 'London'
            ]
        ];
    }
}
