@extends('components.layout')

<div class="container">
    <a href="/pacientes/insert" class="btn btn-primary">Adicionar Paciente</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Estado</th>
                <th scope="col">Enf. Responsável</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>

            {{-- <th scope="row align-middle"></th> --}}
            @foreach ($listaPaciente as $pacientes)
                <tr>
                    <td class="align-middle">{{ $pacientes->nome_paciente }}</td>
                    <td class="align-middle">{{ $pacientes->estado_paciente }}</td>
                    <td class="align-middle">{{ $pacientes->responsavel }}</td>
                    <td class="align-middle">
                        <a class="btn btn-primary" href="{{ route('pacientes.show', $pacientes->id)}}" role="button">Acessar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Proxímo</a>
            </li>
        </ul>
    </nav>
</div>
