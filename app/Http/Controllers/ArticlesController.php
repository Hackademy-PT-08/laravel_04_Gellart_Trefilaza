<?php

namespace App\Http\Controllers;

class ArticlesController extends Controller
{
    public $articles = [
        ['id' => 1, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 2, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 3, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 5, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 6, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 7, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 8, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 9, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 10, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 11, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 12, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 13, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
        ['id' => 14, 'name' => 'pc', 'description' => 'pc hc', 'price' => 600],
    ];
    public function index()
    {
        return view('articles', ['articles' => $this->articles]);
    }
}
