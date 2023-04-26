@extends('components.layout')

<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="/pacientes" class="btn btn-secondary me-md-2">Voltar</a>
    </div>

    <form action="{{ route('pacientes.update', ['id' => $paciente->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3 col-sm-5 formInput formInput">
            <label for="nome_paciente" class="form-label">Nome: </label>
            <input
                type="text"
                id="nome_paciente"
                name="nome_paciente"
                placeholder="Nome do Paciente"
                class="form-control"
                value="{{old('paciente', $paciente->nome_paciente)}}"
                min="3"
            >
        </div>

        <div class="mb-3 col-sm-5 formInput">
            <label for="rg" class="form-label">RG: </label>
            <input
                type="text"
                id="rg"
                name="rg"
                placeholder="RG do Paciente"
                value="{{old('paciente', $paciente->rg)}}"
                class="form-control"
            >
        </div>

        <div class="mb-3 col-sm-5 formInput">
            <label for="cpf" class="form-label">CPF: </label>
            <input
                type="text"
                id="cpf"
                name="cpf"
                placeholder="CPF do Paciente"
                value="{{old('paciente', $paciente->cpf)}}"
                class="form-control"
            >
        </div>

        <div class="mb-3 col-sm-5 formInput">
            <label for="data_nascimento" class="form-label">Data de Nascimento: </label>
            <input
                type="date"
                id="data_nascimento"
                name="data_nascimento"
                placeholder="Data de Nascimento do Paciente"
                value="{{old('paciente', $paciente->data_nascimento)}}"
                class="form-control"
            >
        </div>

        <div class="mb-3 col-sm-5 formInput">
            <label for="sexo" class="form-label">Sexo do Paciente: </label>
            <select name="sexo" id="sexo" class="form-control">
                <option value="Escolha" {{ $paciente->sexo == 'Escolha' ? 'selected' : '' }}>Escolha</option>
                <option value="Masculino" {{ $paciente->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Feminino" {{ $paciente->sexo == 'Feminino' ? 'selected' : '' }}>Feminino</option>
              </select>
        </div>

        <div class="mb-3 col-sm-5 formInput">
            <label for="cartao_sus" class="form-label">Cartão do SUS: </label>
            <input
                type="text"
                id="cartao_sus"
                name="cartao_sus"
                placeholder="Cartão do SUS do Paciente"
                value="{{old('paciente', $paciente->cartao_sus)}}"
                class="form-control"
            >
        </div>

        <div class="mb-3 col-sm-5 formInput">
            <label for="responsavel" class="form-label">Enf. Responsavel: </label>
            <input
                type="text"
                id="responsavel"
                name="responsavel"
                placeholder="Enf. Responsavel do Paciente"
                value="{{old('paciente', $paciente->responsavel)}}"
                class="form-control"
            >
        </div>

        <div class="mb-3 col-sm-5 formInput">
            <label for="estado_paciente" class="form-label">Estado do Paciente: </label>
            <select name="estado_paciente" id="estado_paciente" class="form-control">
                <option value="Escolha" {{ $paciente->estado_paciente == 'Escolha' ? 'selected' : '' }}>Escolha</option>
                <option value="Mal" {{ $paciente->estado_paciente == 'Mal' ? 'selected' : '' }}>Mal</option>
                <option value="Estavel" {{ $paciente->estado_paciente == 'Estavel' ? 'selected' : '' }}>Estavel</option>
                <option value="Alta" {{ $paciente->estado_paciente == 'Alta' ? 'selected' : '' }}>Alta</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="descricao_evolucao">Evolução do Paciente</label>
            <textarea class="form-control" id="descricao_evolucao" rows="15" name="descricao_evolucao" placeholder="Evolução do Paciente">{{old('paciente', $paciente->descricao_evolucao)}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
        <button type="submit" class="btn btn-primary">Exportar para Word</button>
    </form>
</div>

