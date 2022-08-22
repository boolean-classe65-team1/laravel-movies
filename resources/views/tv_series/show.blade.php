@extends('layouts.base')
@section('page_title', '#' . $show['id']. " - ". $show['title'])

@section('script')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css' integrity='sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==' crossorigin='anonymous'/>
<script>
    function showModal(id){
        const modal = document.getElementById('modal'+id);
        if(modal.style.display === 'none'){
            modal.style.display = 'block';
        }else{
            modal.style.display = 'none';
        }
        console.log(id);
    };
</script>
@endsection

@php
$showJson = file_get_contents('https://api.themoviedb.org/3/search/tv?api_key=6fc530c8a4a5679024aea82b062cbd34&language=it&query=' . str_replace(' ', '+', $show['original_title']));
$showObj = json_decode($showJson, true);
$showImg = 'https://image.tmdb.org/t/p/w400/' . $showObj['results'][0]['poster_path'];
$showOverview = $showObj['results'][0]['overview'];
$showPop = $showObj['results'][0]['popularity'];
@endphp

@section('main_content')
    <div class="container py-3">
        <a href="{{ route('tv_series.index') }}" class="btn btn-success">Home</a>
        <h1 class="pt-5">{{ $show['title'] }}</h1>
        <h2>({{ $show['original_title'] }})</h2>
        <div class="py-3 d-flex gap-3">
            <div class="image">
                <img src="{{ $showImg }}" alt="{{$show['title']}}" style="width: 200px; height:auto;">
            </div>
            <div>
                <p class="fs-4">{{ $showOverview }}</p>
                <div class="d-flex gap-5">
                    <p><i class="fa fa-solid fa-globe text-success"></i> {{ $show['nationality'] }}</p>
                    <p><i class="fa-solid fa-calendar-check text-primary"></i> {{ $show['date'] }}</p>
                    <p><i class="fa-solid fa-star text-warning"></i> {{ $show['vote'] }}</p>
                </div>
            </div>
        </div>
        <div class="d-flex gap-4">
            <button class="btn btn-danger" onclick="showModal({{$show['id']}})">Elimina</button>
            <a href="{{route('tv_series.edit', $show['id'])}}" class="btn btn-secondary">Modifica</a>
        </div>
        <div class="position-absolute w-100 hv-100 bg-danger" id="modal{{$show['id']}}" style="display: none; top:0; bottom:0; right:0; left:0; z-index:10;">
            <div class="w-50 m-auto p-3 bg-light rounded mt-5">
                <h3>Sei sicuro di voler eliminare "{{$show['title']}}" dal database?</h3>
                <h4>Non potrai recuperarlo in alcun modo!</h4>
                <div class="d-flex gap-4 align-items-center">
                    <form action="{{ route('tv_series.destroy', $show['id']) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Sì, elimina" class="btn btn-danger mt-3">
                    </form>
                    <button class="btn btn-success my-3" onclick="showModal({{$show['id']}})">No, annulla</button>
                </div>
            </div>
        </div>
    </div>
@endsection
