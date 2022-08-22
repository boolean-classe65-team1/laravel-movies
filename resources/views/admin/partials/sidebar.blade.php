<div class="d-flex flex-column p-3 bg-primary text-white">
    <img class="img-thumbnail mb-3" style="width: 100px" src="{{asset('img/team1.png')}}" alt="">
    <div>
        <ul class="list-unstyled py-3">
            <li class="pb-3"><a class="btn btn-light" href="{{ route("admin.") }}">Home</a></li>
            <li class="pb-3"><a class="btn btn-light" href="{{ route("admin.movies.index") }}">Movies</a></li>
            <li class="pb-3"><a class="btn btn-light" href="{{ route("admin.tv_series.index") }}">Serie TV</a></li>
            <li class="pb-3"><form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form></li>
        </ul>
    </div>
</div>