@extends('layouts.app')

@section('leftmenu')
@include('technolog.sidemenu'); 
@endsection

@section('content')
<div class="container-fluid px-4">
    <div style="text-align: end;">
        <a href="/technolog/addtitlemenu/{{ $id }}">+ qo'shish</a>
    </div>
    <div class="row g-3 my-2">
        @foreach($menus as $row)
        <div class="col-md-2">
            <div class="p-3 bg-white shadow-sm d-flex flex-column justify-content-around align-items-center rounded">
                <i class="fas fa-utensils fs-1 primary-text border rounded-full secondary-bg p-2" style="color:chocolate"></i>
                <div class="text-center">
                    <p class="fs-4" style="font-size: 18px !important;">{{$row['titlemenu_name']}}</p>
                    <a href="#" style="color: #959fa3; margin-right: 6px; font-size: 20px;"><i class="fas fa-cog"></i></a>
                    <a href="#" style="color: #959fa3; margin-right: 6px; font-size: 20px;"><i class="fas fa-eye"></i></a>
                    @if($row->us == "1111")
                        <i class="fas fa-bullseye" style="color: #22aa6b; margin-right: 6px; font-size: 20px;"></i>
                    @else
                        <a href="/technolog/menuitem/{{$row['id']}}" style="color: #959fa3; margin-right: 6px; font-size: 20px;"><i class="far fa-edit"></i></a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a href="/technolog/seasons">Orqaga</a>
</div>
@endsection