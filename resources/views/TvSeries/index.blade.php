@extends('layouts.base')

@section('page_title', 'Lista Serie Tv')
@section('script')
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

@section('main_content')
    <div class="container py-3">
        <h1>Lista Serie Tv</h1>
        @foreach ($tv_series as $tv_show)
            <hr>
            <h3>{{ $tv_show['title'] }}</h3>
            <div class="d-flex align-items-center pt-3 gap-3">
                <a href="{{ route('tv_series.show', $tv_show['id']) }}" class="btn btn-primary">Visualizza</a>
                <a href="{{ route('tv_series.edit', $tv_show['id']) }}" class="btn btn-secondary">Modifica</a>
                <button class="btn btn-danger" onclick="showModal({{$tv_show['id']}})">Elimina</button>
            </div>
            <hr>
            <div class="position-absolute w-100 hv-100 bg-danger" id="modal{{$tv_show['id']}}" style="display: none; top:0; bottom:0; right:0; left:0; z-index:10;">
                <div class="w-50 m-auto p-3 bg-light rounded mt-5">
                    <h3>Sei sicuro di voler eliminare "{{$tv_show['title']}}" dal database?</h3>
                    <h4>Non potrai recuperarlo in alcun modo!</h4>
                    <div class="d-flex gap-4 align-items-center">
                        <form action="{{ route('tv_series.destroy', $tv_show['id']) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Sì, elimina" class="btn btn-danger mt-3">
                        </form>
                        <button class="btn btn-success my-3" onclick="showModal({{$tv_show['id']}})">No, annulla</button>
                    </div>
                </div>
            </div>
        @endforeach
        
        <a href="{{ route('tv_series.create') }}" class="btn btn-success">Aggiungi film</a>
    </div>
@endsection