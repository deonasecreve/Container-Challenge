@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit ship
    </h1>
    <a href="{!!url('ship')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Ship Index</a>
    <br>
    <form method = 'POST' action = '{!! url("ship")!!}/{!!$ship->
        id!!}/update'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="IMO_nummer">IMO_nummer</label>
            <input id="IMO_nummer" name = "IMO_nummer" type="text" class="form-control" value="{!!$ship->
            IMO_nummer!!}"> 
        </div>
        <div class="form-group">
            <label for="scheepsnaam">scheepsnaam</label>
            <input id="scheepsnaam" name = "scheepsnaam" type="text" class="form-control" value="{!!$ship->
            scheepsnaam!!}"> 
        </div>
        <div class="form-group">
            <label for="bouwjaar">bouwjaar</label>
            <input id="bouwjaar" name = "bouwjaar" type="text" class="form-control" value="{!!$ship->
            bouwjaar!!}"> 
        </div>
        <div class="form-group">
            <label for="thuishaven">thuishaven</label>
            <input id="thuishaven" name = "thuishaven" type="text" class="form-control" value="{!!$ship->
            thuishaven!!}"> 
        </div>
        <div class="form-group">
            <label for="thuisland">thuisland</label>
            <input id="thuisland" name = "thuisland" type="text" class="form-control" value="{!!$ship->
            thuisland!!}"> 
        </div>
        <div class="form-group">
            <label for="MMSI_nummer">MMSI_nummer</label>
            <input id="MMSI_nummer" name = "MMSI_nummer" type="text" class="form-control" value="{!!$ship->
            MMSI_nummer!!}"> 
        </div>
        <div class="form-group">
            <label for="lengte">lengte</label>
            <input id="lengte" name = "lengte" type="text" class="form-control" value="{!!$ship->
            lengte!!}"> 
        </div>
        <div class="form-group">
            <label for="breedte">breedte</label>
            <input id="breedte" name = "breedte" type="text" class="form-control" value="{!!$ship->
            breedte!!}"> 
        </div>
        <div class="form-group">
            <label for="diepte">diepte</label>
            <input id="diepte" name = "diepte" type="text" class="form-control" value="{!!$ship->
            diepte!!}"> 
        </div>
        <div class="form-group">
            <label for="draagvermogen">draagvermogen</label>
            <input id="draagvermogen" name = "draagvermogen" type="text" class="form-control" value="{!!$ship->
            draagvermogen!!}"> 
        </div>
        <div class="form-group">
            <label for="ruim_lengte">ruim_lengte</label>
            <input id="ruim_lengte" name = "ruim_lengte" type="text" class="form-control" value="{!!$ship->
            ruim_lengte!!}"> 
        </div>
        <div class="form-group">
            <label for="ruim_breedte">ruim_breedte</label>
            <input id="ruim_breedte" name = "ruim_breedte" type="text" class="form-control" value="{!!$ship->
            ruim_breedte!!}"> 
        </div>
        <div class="form-group">
            <label for="ruim_hoogte">ruim_hoogte</label>
            <input id="ruim_hoogte" name = "ruim_hoogte" type="text" class="form-control" value="{!!$ship->
            ruim_hoogte!!}"> 
        </div>
        <div class="form-group">
            <label for="max_gevaarlijke_stoffen">max_gevaarlijke_stoffen</label>
            <input id="max_gevaarlijke_stoffen" name = "max_gevaarlijke_stoffen" type="text" class="form-control" value="{!!$ship->
            max_gevaarlijke_stoffen!!}"> 
        </div>
        <div class="form-group">
            <label for="ruim_max_totaal_vloer_belasting">ruim_max_totaal_vloer_belasting</label>
            <input id="ruim_max_totaal_vloer_belasting" name = "ruim_max_totaal_vloer_belasting" type="text" class="form-control" value="{!!$ship->
            ruim_max_totaal_vloer_belasting!!}"> 
        </div>
        <div class="form-group">
            <label for="ruim_max_kolom_vloerblasting">ruim_max_kolom_vloerblasting</label>
            <input id="ruim_max_kolom_vloerblasting" name = "ruim_max_kolom_vloerblasting" type="text" class="form-control" value="{!!$ship->
            ruim_max_kolom_vloerblasting!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection