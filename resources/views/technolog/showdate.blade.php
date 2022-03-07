@extends('layouts.app')

@section('css')
<style>
    th, td{
        text-align: center;
        vertical-align: middle;
        border-bottom-color: currentColor;
        border-right: 1px solid #c2b8b8;
    }
</style>
@endsection

@section('leftmenu')
@include('technolog.sidemenu');
@endsection

@section('content')
<div class="py-4 px-4">
<div class="row">
    <div class="col-md-6">
        <b>Haqiqiy menyu</b>
        <a href="/technolog/createnewdaypdf/{{ $day }}">
            <i class="far fa-file-pdf" style="color: dodgerblue; font-size: 18px;"></i>
        </a>
    </div>
    <div class="col-md-3">
        
    </div>
    <div class="col-md-3">
        <b>Bog'chalarga menyu yuborish</b>
        <a href="/technolog/activsendmenutoallgardens/{{ $day }}">
            <i class="far fa-paper-plane" style="color: dodgerblue; font-size: 18px;"></i>
        </a>
    </div>
</div>
<hr>
<table class="table table-light py-4 px-4">
    <thead>
        <tr>
            <th scope="col" rowspan="2">ID</th>
            <th scope="col" rowspan="2">MTT-nomi</th>
            <th scope="col" rowspan="2">Xodimlar 
            @foreach($ages as $age)
            <th scope="col" colspan="2"> 
                <span class="age_name{{ $age->id }}">{{ $age->age_name }} </span>
            </th>
            @endforeach
            <th style="width: 70px;" rowspan="2">Nakladnoy</th>
            <th style="width: 70px;" rowspan="2">Menyu</th>
        </tr>
        <tr style="color: #888888;">
            @foreach($ages as $age)
            <th><i class="fas fa-users"></i></th>
            <th><i class="fas fa-book-open"></i></th>
            @endforeach
        </tr>
    </thead>
    <tbody>
    <?php $t = 1;  ?>   
    @foreach($nextdayitem as $row)
        <tr>
            <td>{{ $t++ }}</td>
            <td>{{ $row['kingar_name'] }}</td>
            <td>{{ $row['workers_count'] }} </td>
            @foreach($ages as $age)
            @if(isset($row[$age->id]))
                <td>
                    {{ $row[$age->id][1]."  " }}
                    @if($row[$age->id][2] != null)
                    <i class="far fa-envelope" style="color: #c40c0c"></i> 
                    @endif
                </td>
                <td><a href="/activmenuPDF/{{ $day }}/{{ $row['kingar_name_id'] }}/{{ $age->id }}" target="_blank"><i class="far fa-file-pdf" style="color: dodgerblue; font-size: 18px;"></i></a></td>
            @else
                <td>{{ ' ' }}</td>
                <td>{{ ' ' }}</td>
            @endif
            @endforeach
            <td><a href="/activnakladPDF/{{ $day }}/{{ $row['kingar_name_id'] }}" target="_blank"><i class="far fa-file-pdf" style="color: dodgerblue; font-size: 18px;"></i></a></td>
            <td><a href="/technolog/activsendmenutoonegarden/{{ $day }}/{{ $row['kingar_name_id'] }}"><i class="far fa-paper-plane" style="color: dodgerblue;"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection

@section('script')

@endsection