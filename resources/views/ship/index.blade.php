@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Ship Index
    </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href='{!!url("ship")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <br>
    <div class="table-responsive">
        <table class = "table table-striped table-bordered table-hover" style = 'background:#fff;'>
            <thead>
            <tr>
                <th>IMO_nummer</th>
                <th>scheepsnaam</th>
                <th>bouwjaar</th>
                <th>thuishaven</th>
                <th>thuisland</th>
                <th>MMSI_nummer</th>
                <th>lengte</th>
                <th>breedte</th>
                <th>diepte</th>
                <th>draagvermogen</th>
                <th>ruim_lengte</th>
                <th>ruim_breedte</th>
                <th>ruim_hoogte</th>
                <th>max_gevaarlijke_stoffen</th>
                <th>ruim_max_totaal_vloer_belasting</th>
                <th>ruim_max_kolom_vloerblasting</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ships as $ship)
                <tr>
                    <td>{!!$ship->IMO_nummer!!}</td>
                    <td>{!!$ship->scheepsnaam!!}</td>
                    <td>{!!$ship->bouwjaar!!}</td>
                    <td>{!!$ship->thuishaven!!}</td>
                    <td>{!!$ship->thuisland!!}</td>
                    <td>{!!$ship->MMSI_nummer!!}</td>
                    <td>{!!$ship->lengte!!}</td>
                    <td>{!!$ship->breedte!!}</td>
                    <td>{!!$ship->diepte!!}</td>
                    <td>{!!$ship->draagvermogen!!}</td>
                    <td>{!!$ship->ruim_lengte!!}</td>
                    <td>{!!$ship->ruim_breedte!!}</td>
                    <td>{!!$ship->ruim_hoogte!!}</td>
                    <td>{!!$ship->max_gevaarlijke_stoffen!!}</td>
                    <td>{!!$ship->ruim_max_totaal_vloer_belasting!!}</td>
                    <td>{!!$ship->ruim_max_kolom_vloerblasting!!}</td>
                    <td>
                        <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/ship/{!!$ship->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                        <a href="{{url('/ship/edit')}}/{{$ship->id}}" class = 'btn btn-primary btn-sm'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a href = 'show' class = 'viewShow btn btn-warning btn-xs' data-link = '/ship/{!!$ship->id!!}'><i class = 'fa fa-eye'> info</i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {!! $ships->render() !!}

</section>
@endsection