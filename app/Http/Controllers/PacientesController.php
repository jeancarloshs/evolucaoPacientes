<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index()
    {
        $paciente = new Pacientes();
        $listaPaciente = Pacientes::get();
        //dd($listaPaciente);
        $nomePaciente = $paciente->nome_paciente;
        //$roles = Pacientes::all('id')->toArray();
        $roles = Pacientes::pluck('id')->all();


        //dd($teste);
        return view(
            'pacientes.index',
            [
                'paciente' => $paciente,
                'listaPaciente' => $listaPaciente,
                'nomePaciente' => $nomePaciente,
            ]
        );
    }

    public function show(Request $request, $id)
    {
        $paciente = new Pacientes();
        $listaPaciente = Pacientes::get();
        //$listaPaciente = Pacientes::push();
        $nomePaciente = $paciente->nome_paciente;
        $roles = Pacientes::all('id')->toArray();
        $roles = Pacientes::pluck('id')->all();

        return view(
            'pacientes.show',
            [
                'paciente' => $paciente,
                'listaPaciente' => $listaPaciente,
                'nomePaciente' => $nomePaciente,
            ]
        );
    }

    public function insert(Request $request)
    {
        return view('pacientes.insert');
    }

    public function save(Request $request)
    {
        $paciente = new Pacientes();
        //dd($paciente);
        //dd($request->input('descricao_evolucao'));


        //$nomePaciente = $request->input('nome');
        // $rgPaciente = $request->input('rg');
        // $cpfPaciente = $request->input('cpf');
        // $dataNascimentoPaciente = $request->input('dn');
        // $susPaciente = $request->input('sus');
        // $enfResponsavel = $request->input('responsavel');
        // $estadoPaciente = $request->input('estado');

        // $paciente->save();

        //return to_route('pacientes.insert')->with('mensagem.sucesso', 'Paciente ' . $nomePaciente . 'cadastrado com Sucesso!!!');
        // return to_route('pacientes.insert');


        $data = [
            'nome_paciente' => request('nome_paciente'),
            'rg' => request('rg'),
            'cpf' => request('cpf'),
            'data_nascimento' => request('data_nascimento'),
            'idade' => request('idade'),
            'sexo' => request('sexo'),
            'cartao_sus' => request('cartao_sus'),
            'estado_paciente' => request('estado_paciente'),
            'responsavel' => request('responsavel'),
            'descricao_evolucao' => request('descricao_evolucao'),
            'updated_at' => request('updated_at'),
            'created_at' => request('created_at')
        ];
        Pacientes::create($data);
        //dd($data);
        //$paciente->save();
        //return to_route('pacientes.insert')->with('mensagem.sucesso', 'Paciente ' . $nomePaciente . 'cadastrado com Sucesso!!!');
        return to_route('pacientes.index')->with('mensagem.sucesso');
    }
}
