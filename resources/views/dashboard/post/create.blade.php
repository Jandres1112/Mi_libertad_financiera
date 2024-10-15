@extends('dashboard.post.partials.master')
@section('contenido')
@include('dashboard.post.partials.validation-error')

 <form action="{{route('post.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="form-group">
            <label for="name">Articulo</label><input class="form-comtrol" type="text" name="name" id="name">
        </div>
        <div class="row form-group">
            <label for="description">Contenido</label>
            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
        </div>
    </div>
    <div class="row center">
        <div class="col s6">
            <button class="btn btn-sucess btn-sm" type="submit">Publicar</button>
            <button class="btn btn-danger btn-sm">Cancelar</button>
        </div>
    </div>
 </form>
 @endsection