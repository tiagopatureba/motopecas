<?php

use Illuminate\Support\Facades\Route;

/*
 * Possibilidades com rotas:
 * Rotas com parâmetros (por padrão obrigatórios)
 * Rotas com parâmetros opcionais (interrogação)
 * Rotas com regras (regex - expressões regulares dentro de clausulas Where)
 * Rotas agrupadas (prefix / group)
 * Rotas nomeadas (->name())
 * Redirecionamento de Rotas
 * Rotas que não são GET(todas as outras) têm que ter tratamento CSRF para a segurança da aplicação
 * (que gera um token no lado do Form e faz o check no Backend - para garantir que não foi feito injection e que a fonte é realmente do form)
 * Rotas associadas (resource - porém controller têm que estar no padrão Laravel)
 */

Route::get('/', function () {
    //    return view('welcome');
    return redirect('/marcas');
});

Route::resource('marcas', "App\Http\Controllers\BrandController");
