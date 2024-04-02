<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function show($id)
    {
        // Aqui você pode recuperar as informações do filme do banco de dados
        // Ou você pode definir um array com as informações do filme diretamente aqui
        $filme = [
            'titulo' => 'Sonic',
            'descricao' => 'Sonic é um extraterrestre azul super-rápido que viaja para a Terra para escapar do vilão Dr. Robotnik.',
            'diretor' => 'Jeff Fowler',
            'ano_lancamento' => 2020,
            // E assim por diante...
        ];

        return view('filme', compact('filme'));
    }



    public function showMaquinasMortais()
    {
        $filme = [
            'titulo' => 'Máquinas Mortais',
            'descricao' => 'A filha de Hellena Shor quer vingança.',
            'diretor' => 'Diretor de Máquinas Mortais',
            'ano_lancamento' => 2018,
            // E assim por diante...
        ];
        return view('maquinas-mortais', compact('filme'));
    }



    public function showZillavsKong()
    {
        $filme = [
            'titulo' => 'Zilla vs Kong',
            'descricao' => 'A filha de Hellena Shor quer vingança.',
            'diretor' => 'Diretor de Máquinas Mortais',
            'ano_lancamento' => 2018,
            // E assim por diante...
        ];
        return view('zilla-vs-kong', compact('filme'));
    }












}



