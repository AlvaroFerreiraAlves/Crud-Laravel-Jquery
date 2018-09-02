@extends('layouts.app')

@section('content')
<div class="container">

 <div class="alert alert-danger collapse" role="alert" id="alert-login">
  É necessário efetuar <a href="{{ route('login') }}">Login</a>
</div>

    <div class="panel panel-primary">
  
        <div class="panel-heading">Produtos
        @if(Auth::check())
            <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Adicionar Produto</button>
       @else
       <button id="btn_add" name="btn_add" class="btn btn-default pull-right" onclick="alertLogin()">Add New Product</button>
       @endif
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Detalhes</th>
                    @if(Auth::check())
                    <th>Ações</th>
                    @endif
                </tr>
                </thead>
                <tbody id="products-list" name="products-list">
                @foreach ($products as $product)
                    <tr id="product{{$product->id}}">
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->details}}</td>
                        <td>
                        @if(Auth::check())
                            <button class="btn btn-warning btn-detail open_modal" value="{{$product->id}}">Edit</button>
                            <button class="btn btn-danger btn-delete delete-product" value="{{$product->id}}">Delete</button>
                        @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if(Auth::check())
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Product</h4>
                </div>
                <div class="modal-body">
                    <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                        <div class="form-group error">
                            <label for="inputName" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control has-error" id="name" name="name" placeholder="Product Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDetail" class="col-sm-3 control-label">Details</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="details" name="details" placeholder="details" value="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                    <input type="hidden" id="product_id" name="product_id" value="0">
                </div>
            </div>
        </div>
    </div>
    @endif

    
</div>
@endsection
