<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Psy\debug;

class BrandController extends Controller
{
    public function __construct()
    {
        $brands = session('brands');
        if (!isset($brands))
            session(['brands' => $this->brands]);
    }

    private $brands = [
        ['id' => 0, 'name' => 'Royal Enfield'],
        ['id' => 1, 'name' => 'Honda'],
        ['id' => 2, 'name' => 'Yamaha'],
    ];

    public function index()
    {
        $brands = session('brands');
        $title = "Listagem de Marcas";
        return view('marcas.index', compact(['brands', 'title']));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
        $brands = session('brands');
        $id = end($brands)['id'] + 1;
        $brands[] = ['id' => $id, 'name' => $request->all()['name']];
        session(['brands' => $brands]);
        return redirect()->route('marcas.index');

    }

    public function show($id)
    {
        $brands = session('brands');
        $index = $this->getIndex($id, $brands);
        $brand = $brands[$index];
        return view('marcas.info', compact(['brand']));
    }

    public function edit($id)
    {
        $brands = session('brands');
        $index = $this->getIndex($id, $brands);
        $brand = $brands[$index];
        return view('marcas.edit', compact(['brand']));
    }

    public function update(Request $request, $id)
    {
        $brands = session('brands');
        $index = $this->getIndex($id, $brands);
        $brands[$index]['name'] = $request->name;
        session(['brands' => $brands]);
        return redirect()->route('marcas.index');

    }

    public function destroy($id)
    {
        $brands = session('brands');
        $index = $this->getIndex($id, $brands);
        array_splice($brands, $index, 1);
        session(['brands' => $brands]);
        return redirect()->route('marcas.index');
    }

    private function getIndex($id, $brands)
    {
        $ids = array_column($brands, 'id');
        $index = array_search($id, $ids);
        return $index;
    }
}
