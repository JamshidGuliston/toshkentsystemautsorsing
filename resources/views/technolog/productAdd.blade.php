@extends('layouts.app')

@section('css')
<style>
    form {
        width: 85%;
        margin-top: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group .btn {
        width: 100%;
        background-color: #2f8d2f;
    }
</style>
@endsection

@section('leftmenu')
<div class="list-group list-group-flush my-3">
    <a href="/technolog/home" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fas fa-tachometer-alt me-2"></i>Bosh sahifa</a>
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-project-diagram me-2"></i>Projects</a>
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-chart-line me-2"></i>Analytics</a>
    <a href="/technolog/seasons" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('technolog/seasons') ? 'active' : null }}"><i class="fas fa-paste"></i> Menyular</a>
    <a href="/technolog/food" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('technolog/food') ? 'active' : null }}"><i class="fas fa-hamburger"></i> Taomlar</a>
    <a href="/technolog/allproducts" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('technolog/allproducts') ? 'active' : null }}"><i class="fas fa-carrot"></i> Products</a>
    <a href="/technolog/getbotusers" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('technolog/getbotusers') ? 'active' : null }}"><i class="fas fa-comment-dots me-2"></i>Chat bot</a>
    <a href="/technolog/shops" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('technolog/shops') ? 'active' : null }}"><i class="fas fa-store-alt"></i> Shops</a>
    <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a> -->
</div>
@endsection

@section('content')
<div class="py-5 px-5">
    <h2>{{ $product->product_name }}</h2>
    <form method="POST" action="{{route('productAdd')}}">
        @csrf
        <input type="hidden" name="productid" value="{{ $product->id }}" >
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Сатегория</label>
            <div class="col-sm-10">
                <select class="form-select" name="catid" aria-label="Default select example">
                    @foreach($categories as $row)
                    @if($product->category_name_id == $row->id)
                    <option selected value="{{$row['id']}}">{{$row['pro_cat_name']}}</option>
                    @else
                    <option value="{{$row['id']}}">{{$row['pro_cat_name']}}</option>
                    @endif

                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Ўлчов бирлиги</label>
            <div class="col-sm-10">
                <select class="form-select" name="sizeid" aria-label="Default select example">
                    @foreach($sizes as $row)
                    @if($product->size_name_id == $row->id)
                    <option selected value="{{$row['id']}}">{{$row['size_name']}}</option>
                    @else
                    <option value="{{$row['id']}}">{{$row['size_name']}}</option>
                    @endif

                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Ўлчов бирлигини ифодаловчи бўлувчи миқдори</label>
            <div class="col-sm-10">
                <input type="text" name="div" class="form-control" id="staticEmail" value="{{ $product->div }}" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Тартиби</label>
            <div class="col-sm-10">
                <input type="text" name="sort" class="form-control" id="staticEmail" value="{{ $product->sort }}" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Ish faoliyati</label>
            <div class="col-sm-10">
                <input type="number" required name="hide" class="form-control" value="{{ $product->hide }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Saqlash</button>
            </div>
        </div>
    </form>
    <a href="/technolog/allproducts">Orqaga</a>
</div>
@endsection


@section('script')


@endsection