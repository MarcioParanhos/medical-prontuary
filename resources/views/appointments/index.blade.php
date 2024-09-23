@extends('layouts.main')

@section('title', $title . ' - MP Medical')

@section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Atendimento
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <div id="table-default" class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Paciente</th>
                                <th>Data</th>
                                <th>Hora</th>
                                <th>Médico</th>
                                <th>Especialidade</th>
                                <th>Tipo</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="table-tbody">
                            <tr>
                                <td class="sort-name">1</td>
                                <td class="sort-name">Marcio Paranhos</td>
                                <td class="sort-city">10/09/2024</td>
                                <td class="sort-type">13:10</td>
                                <td class="sort-score">Yuri Cardoso</td>
                                <td class="sort-score">Urologista</td>
                                <td class="sort-score">Consulta</td>
                                <td class="sort-score">Em atendimento</td>
                                <td class="">
                                    <a href="#" class="btn p-1 center btn-cyan">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection