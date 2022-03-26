@extends('layouts.app')

@section('leftmenu')
@include('technolog.sidemenu'); 
@endsection

@section('content')
<!-- NormaModal -->
<div class="modal editesmodal fade" id="normModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Нормани текшириш</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-select">
                        <select id="start" onchange="start()" class="form-select" required aria-label="Default select example">
                            <option value="">0</option>
                            <?php
                                $t = 1;
                            ?>
                            @foreach($menus as $row)
                            <option value="{{$row['id']}}">{{ $t++ }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-select">
                        <select id="end" onchange="end()" class="form-select" required aria-label="Default select example">
                            <option value="">0</option>
                            <?php
                                $t = 1;
                            ?>
                            @foreach($menus as $row)
                            <option value="{{$row['id']}}">{{ $t++ }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-select">
                        <select id="age" onchange="age()" class="form-select" required aria-label="Default select example">
                            <option value="">-Tanlang-</option>
                            <?php
                                $t = 1;
                            ?>
                            @foreach($ages as $row)
                            <option value="{{$row['id']}}">{{ $row['age_name'] }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body composition"> 
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
</div>
<!-- End  -->
<div class="container-fluid px-4">
    <div style="text-align: end;">
        <button class="btn" data-bs-toggle="modal" data-bs-target="#normModal" style="margin-right: 120px; background-color: lightblue;">Norma</button>
        <button class="btn btn-success"><a href="/technolog/addtitlemenu/{{ $id }}" style="color: white">+ qo'shish</a></button>
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

@section('script')
<script>
    function start(){
        var x = document.getElementById("start").value;
    };

    function end(){

    };

    function age(){
        var a = document.getElementById("start").value;
        var b = document.getElementById("end").value;
        var s = 2;
        var div = $('.composition');
        $.ajax({
            method: "GET",
            url: '/technolog/concnorm',
            data: {
                'a': a,
                'b': b,
                'season': s
            },
            success: function(data) {
                div.html(data);
            }
        })
    };

</script>
@endsection