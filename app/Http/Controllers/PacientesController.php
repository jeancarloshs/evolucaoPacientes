<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index()
    {
        $paciente = new Pacientes();
        $paciente = Pacientes::paginate(20);
        $listaPaciente = Pacientes::get();

        return view(
            'pacientes.index',
            [
                'paciente' => $paciente,
                'listaPaciente' => $listaPaciente,
            ]
        );
    }

    public function show($id)
    {
        $paciente = Pacientes::findOrFail($id);
        $pacientesPaginados = Pacientes::paginate(20);
        $listaPacientes = Pacientes::all();


        return view(
            'pacientes.show',
            [
                'paciente' => $paciente,
                'pacientesPaginados' => $pacientesPaginados,
                'listaPacientes' => $listaPacientes,
            ]
        );
    }

    public function insert(Request $request)
    {
        return view('pacientes.insert');
    }

    public function save(Request $request, $id = NULL)
    {
        $paciente = new Pacientes();

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

        return to_route('pacientes.index')->with('mensagem.sucesso');
    }


    public function update(Request $request, $id = NULL)
    {
        $paciente = new Pacientes();
        $paciente = Pacientes::find($id);
        $updateInfo = $request->all();

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
        ];
        //Pacientes::updated($data);

        $paciente->fill($updateInfo);
        $paciente->update($updateInfo);


        return to_route('pacientes.index')->with('mensagem.sucesso');
    }

//     public function update(Request $request, $id)
// {
//     $paciente = Pacientes::find($id);

//     // Atualizar os campos do paciente com os dados do formulário
//     $paciente->nome_paciente = $request->input('nome_paciente');
//     $paciente->idade_paciente = $request->input('idade_paciente');
//     $paciente->estado_paciente = $request->input('estado_paciente');

//     // Salvar as mudanças no banco de dados
//     $paciente->save();

//     // Redirecionar para a página de exibição do paciente atualizado
//     return redirect()->route('pacientes.show', ['id' => $paciente->id]);
// }
}
