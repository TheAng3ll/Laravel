@extends('admin/dashboard/index')
@section('titulo','Usuarios')
@section('main')
@include('admin/usuarios/create')

@include('admin/usuarios/table')
@endsection