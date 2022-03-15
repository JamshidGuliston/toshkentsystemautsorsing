@extends('layouts.app')

@section('leftmenu')
@include('technolog.sidemenu'); 
@endsection


@section('css')
<link href="/css/multiselect.css" rel="stylesheet"/>
<script src="/js/multiselect.min.js"></script>
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



@section('content')
<div class="py-5 px-5">
    <h2>Янги боғча</h2>
    <form method="POST" action="{{route('technolog.createkingarden')}}">
        @csrf
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Номи: </label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="staticEmail" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">ҳудуди</label>
            <div class="col-sm-10">
                <select required id='testSelect1' name="regionid" class="form-select" >
                    <option value="">--Tanlang--</option>
                    @foreach($regions as $row)
                    <option value='{{ $row->id }}'>{{ $row->region_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">

        <label for="inputPassword" class="col-sm-3 col-form-label">Bolalar guruhi</label>
        @foreach($ages as $rows)
        <?php $i = 1; ?>
        <div class="col-sm-3"> 
            <input class="form-check-input" name="yongchek[]" type="checkbox" id="inlineCheckbox1" value="{{$rows['id']}}">
            <label class="form-check-label" for="inlineCheckbox1">{{$rows['age_name']}}</label>
        </div>
        @endforeach
        </div>
        
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Ish faoliyati</label>
            <div class="col-sm-10">
                <input type="number" required name="hide" class="form-control" value="1">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Saqlash</button>
            </div>
        </div>
    </form>
    <a href="/technolog/seekingardens">Orqaga</a>
</div>
@endsection


@section('script')

<script>
 const reloadUsingLocationHash = () => {
      window.location.hash = "reload";
    }
    window.onload = reloadUsingLocationHash();
</script>

@endsection