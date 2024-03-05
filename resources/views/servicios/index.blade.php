@extends('layouts.app')
@section('titulo', 'Listar Servicios')
@section('cabecera', 'Listar Servicios')
@section('contenido')
 <div class="flex justify-end m-4">
 <a href="{{ route('servicios.create') }}" class="btn btn-outline btn-sm">Crear Servicio</a>
 </div>
 <div class="flex justify-center">
 <div class="overflow-x-auto">
 <table class="table table-zebra">
 <thead>
 <tr>
 <th>Nombre</th>
 <th>Descripción</th>
 <th>Acciones</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($servicios as $servicio)
 <tr>
 <td>{{ $servicio->nombre }}</td>
 <td>{{ $servicio->descripcion }}</td>
 <td class="flex space-x-2">
 <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning btn-xs">Editar</a>
 {{-- si la servicio no tiene productos asociados, se puede eliminar --}}

 <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST">
 @csrf
 @method('DELETE')
 <button type="submit" onclick="return confirm('¿Desea eliminar el servicio {{ $servicio->nombre }}?')" class="btn 
btn-error btn-xs">Eliminar</button>
 </form>

 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </div>
@endsection