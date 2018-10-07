@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="badge badge-primary">Категорий 0</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="badge badge-primary">Материалов 0</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="badge badge-primary">Сегодня 0</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="badge badge-primary">Категорий 0</p>
        </div>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <a href="#" class="btn btn-secondary btn-lg btn-block">Создать категорию</a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Категория первая</h4>
          <p class="list-group-item-text">Кол-во материалов</p>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="#" class="btn btn-secondary btn-lg btn-block">Создать материал</a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Материал первый</h4>
          <p class="list-group-item-text">Категория</p>
        </a>
      </div>
    </div>
  </div>
  </div>
@endsection
