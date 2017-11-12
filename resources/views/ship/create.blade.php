@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create ship
    </h1>

    <br>
    <a href="{!!url('ship')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Ship Index</a>
    <br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method = 'POST' action = '{!!url("ship")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="IMO_nummer">IMO_nummer</label>
            <input id="IMO_nummer" name = "IMO_nummer" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="scheepsnaam">scheepsnaam</label>
            <input id="scheepsnaam" name = "scheepsnaam" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="bouwjaar">bouwjaar</label>
            <input id="bouwjaar" name = "bouwjaar" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="thuishaven">thuishaven</label>
            <input id="thuishaven" name = "thuishaven" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="thuisland">thuisland</label>
            <input id="thuisland" name = "thuisland" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="MMSI_nummer">MMSI_nummer</label>
            <input id="MMSI_nummer" name = "MMSI_nummer" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="lengte">lengte</label>
            <input id="lengte" name = "lengte" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="breedte">breedte</label>
            <input id="breedte" name = "breedte" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="diepte">diepte</label>
            <input id="diepte" name = "diepte" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="draagvermogen">draagvermogen</label>
            <input id="draagvermogen" name = "draagvermogen" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ruim_lengte">ruim_lengte</label>
            <input id="ruim_lengte" name = "ruim_lengte" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ruim_breedte">ruim_breedte</label>
            <input id="ruim_breedte" name = "ruim_breedte" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ruim_hoogte">ruim_hoogte</label>
            <input id="ruim_hoogte" name = "ruim_hoogte" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="max_gevaarlijke_stoffen">max_gevaarlijke_stoffen</label>
            <input id="max_gevaarlijke_stoffen" name = "max_gevaarlijke_stoffen" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ruim_max_totaal_vloer_belasting">ruim_max_totaal_vloer_belasting</label>
            <input id="ruim_max_totaal_vloer_belasting" name = "ruim_max_totaal_vloer_belasting" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ruim_max_kolom_vloerblasting">ruim_max_kolom_vloerblasting</label>
            <input id="ruim_max_kolom_vloerblasting" name = "ruim_max_kolom_vloerblasting" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection