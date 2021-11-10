<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brands = [
        ['id' => 1, 'name' => 'Royal Enfield']
    ];

    public function index()
    {
        echo "<ol>";
            foreach ($this->brands as $brand){
                echo "<li>". $brand['name']."</li>";
            }
        echo "<ol>";
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
