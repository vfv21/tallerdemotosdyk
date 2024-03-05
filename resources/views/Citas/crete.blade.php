@extends('layouts.app')
@section('titulo', 'Crear Cita')
@section('cabecera', 'Crear Cita')
@section('contenido') 
 <div class="flex justify-center">
 <div class="card w-96 shadow-2xl bg-base-100">
 <div class="card-body">
 {{-- Formulario para crear cita --}}
 <form action="{{route('citas.store')}}" method="POST" enctype="multipart/form-data">
 @csrf
 {{-- Cita --}}
 <div class="form-control">
 <label class="label" for="cita_id">
 <span class="label-text">Cita</span>
 </label>
 <select name="cita_id" class="select select-bordered">
 @foreach ($citas as $cita)
 <option value="{{ $cita->id }}">{{ $cita->nombre }}</option>
 @endforeach
 </select>
 </div>
 {{-- Fecha --}}
 <div class="form-control">
 <label class="label" for="fecha">
 <span class="label-text">Fecha</span>
 </label>
 <input type="text" name="fecha" placeholder="Fecha de la cita" maxlength="50" class="input input-bordered" 
value="{{old('fecha')}}" required />
 </div>
 {{-- Imagne--}}
 <div class="form-control">
 <label class="label" for="imagen">
 <span class="label-text">Imagen</span>
 </label>
 <input type="file" name="imagen" class="file-input file-input-bordered file-input-success file-input-sm w-full max-w-xs" accept=".jpg" 
required />
 </div>
 {{-- Datos_moto--}}
 <div class="form-control">
 <label class="label" for="datos_moto">
 <span class="label-text">Datos_moto</span>
 </label>
 <input type="text" name="datos_moto" placeholder="Escriba los datos_moto" maxlength="150" class="input input-bordered" 
value="{{old('datos_moto')}}" />
 </div>
 
 
<div class="form-control mt-6">
 <button class="btn btn-primary">Crear Producto</button>
 <a href="{{ route('citas.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
 </div>
 </form>
 </div>
 </div>
 </div>
@endsection
