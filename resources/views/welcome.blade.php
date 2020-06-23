@extends('layouts.app')

@section('content')
        {{-- @section("title", "ComenzarJuego") --}}
        {{-- @section("content") --}}
        <div class="container-fluid">
                <div class="row">
                        <div class="col-12">
                                <table class="table table-dark">
                                      <thead>
                                                <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Apodo Usuario</th>
                                                        <th scope="col">Puntaje</th>
                                                        <th scope="col">Nivel</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                {{-- {{ $puntajes }} --}}
                                                @forelse($puntajes  as $puntaje)
                                                        <tr>
                                                                <th scope="row">{{ $puntaje->id }}</th>
                                                                <td>{{ $puntaje->name }}</td>
                                                                <td>{{$puntaje->puntaje}}</td>
                                                                <td>{{$puntaje->id_nivel}}</td>
                                                        </tr>
                                                 @empty
                                                        <p class="text-center">No hay Datos para Mostrar</p>
                                                @endforelse

                          </tbody>
                  </table>
          </div>
        </div>
        </div>
        @endsection