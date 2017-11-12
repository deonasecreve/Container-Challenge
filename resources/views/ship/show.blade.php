@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show ship
    </h1>
    <br>
    <a href='{!!url("ship")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Ship Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>IMO_nummer</b> </td>
                <td>{!!$ship->IMO_nummer!!}</td>
            </tr>
            <tr>
                <td> <b>scheepsnaam</b> </td>
                <td>{!!$ship->scheepsnaam!!}</td>
            </tr>
            <tr>
                <td> <b>bouwjaar</b> </td>
                <td>{!!$ship->bouwjaar!!}</td>
            </tr>
            <tr>
                <td> <b>thuishaven</b> </td>
                <td>{!!$ship->thuishaven!!}</td>
            </tr>
            <tr>
                <td> <b>thuisland</b> </td>
                <td>{!!$ship->thuisland!!}</td>
            </tr>
            <tr>
                <td> <b>MMSI_nummer</b> </td>
                <td>{!!$ship->MMSI_nummer!!}</td>
            </tr>
            <tr>
                <td> <b>lengte</b> </td>
                <td>{!!$ship->lengte!!}</td>
            </tr>
            <tr>
                <td> <b>breedte</b> </td>
                <td>{!!$ship->breedte!!}</td>
            </tr>
            <tr>
                <td> <b>diepte</b> </td>
                <td>{!!$ship->diepte!!}</td>
            </tr>
            <tr>
                <td> <b>draagvermogen</b> </td>
                <td>{!!$ship->draagvermogen!!}</td>
            </tr>
            <tr>
                <td> <b>ruim_lengte</b> </td>
                <td>{!!$ship->ruim_lengte!!}</td>
            </tr>
            <tr>
                <td> <b>ruim_breedte</b> </td>
                <td>{!!$ship->ruim_breedte!!}</td>
            </tr>
            <tr>
                <td> <b>ruim_hoogte</b> </td>
                <td>{!!$ship->ruim_hoogte!!}</td>
            </tr>
            <tr>
                <td> <b>max_gevaarlijke_stoffen</b> </td>
                <td>{!!$ship->max_gevaarlijke_stoffen!!}</td>
            </tr>
            <tr>
                <td> <b>ruim_max_totaal_vloer_belasting</b> </td>
                <td>{!!$ship->ruim_max_totaal_vloer_belasting!!}</td>
            </tr>
            <tr>
                <td> <b>ruim_max_kolom_vloerblasting</b> </td>
                <td>{!!$ship->ruim_max_kolom_vloerblasting!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection