<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
      
        $products = ['Product1', 'Product2', 'Product3'];

        return $products;
    }
    public function show($id)
    {
        return "exibindo o produto de id: ($id)";
    }

    public function create()
    {
        return "exibindo o formulario de cadastro de um novo produto";
    }

    public function edit($id)
    {
        return "formulario para editar o produto: {$id}";
    }

    public function store()
    {
        return "Cadastro de um novo produto";
    }

    public function update($id)
    {
        return "Editando o produto: {$id}";
    }

    public function destroy($id)
    {
        return "Deletando o produto: {$id}";
    }
}