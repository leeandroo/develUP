

<form action="{{ url('pages/categoria') }}" autocomplete="off" method="GET" role="search">

<div class="form-group">
<div class="input-group">
        <input type="text" class="form-control" name="searchText" placeholder="Buscar...." value="{{ $searchtext }}">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </span>
    </div> 
</div>

</form>










