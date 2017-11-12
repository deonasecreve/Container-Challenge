<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ship;
use Amranidev\Ajaxis\Ajaxis;


/**
 * Class ShipController.
 *
 * @author  The scaffold-interface created at 2017-11-12 03:24:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - ship';
        $ships = Ship::paginate(6);
        return view('ship.index',compact('ships','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - ship';
        
        return view('ship.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'IMO_nummer' => 'required|max:10',
            'scheepsnaam' => 'required|max:100',
            'bouwjaar' => 'required',
            'thuishaven' => 'required|max:100',
            'thuisland' => 'required|max:2',
            'MMSI_nummer' => 'required|max:9',
            'lengte' => 'required',
            'breedte' => 'required',
            'diepte' => 'required',
            'draagvermogen' => 'required',
            'ruim_lengte' => 'required',
            'ruim_breedte' => 'required',
            'ruim_hoogte' => 'required',
            'max_gevaarlijke_stoffen' => 'required',
            'ruim_max_totaal_vloer_belasting' => 'required',
            'ruim_max_kolom_vloerblasting' => 'required',
        ]);

        $ship = new Ship();


        $ship->IMO_nummer = $request->IMO_nummer;


        $ship->scheepsnaam = $request->scheepsnaam;


        $ship->bouwjaar = $request->bouwjaar;


        $ship->thuishaven = $request->thuishaven;


        $ship->thuisland = $request->thuisland;


        $ship->MMSI_nummer = $request->MMSI_nummer;


        $ship->lengte = $request->lengte;


        $ship->breedte = $request->breedte;


        $ship->diepte = $request->diepte;


        $ship->draagvermogen = $request->draagvermogen;


        $ship->ruim_lengte = $request->ruim_lengte;


        $ship->ruim_breedte = $request->ruim_breedte;


        $ship->ruim_hoogte = $request->ruim_hoogte;


        $ship->max_gevaarlijke_stoffen = $request->max_gevaarlijke_stoffen;


        $ship->ruim_max_totaal_vloer_belasting = $request->ruim_max_totaal_vloer_belasting;


        $ship->ruim_max_kolom_vloerblasting = $request->ruim_max_kolom_vloerblasting;



        $ship->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new ship has been created !!']);

        return redirect('ship');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - ship';

        if($request->ajax())
        {
            return URL::to('ship/'.$id);
        }

        $ship = Ship::findOrfail($id);
        return view('ship.show',compact('title','ship'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - ship';
        if($request->ajax())
        {
            return URL::to('ship/'. $id . '/edit');
        }

        
        $ship = Ship::findOrfail($id);
        return view('ship.edit',compact('title','ship'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $ship = Ship::findOrfail($id);
    	
        $ship->IMO_nummer = $request->IMO_nummer;
        
        $ship->scheepsnaam = $request->scheepsnaam;
        
        $ship->bouwjaar = $request->bouwjaar;
        
        $ship->thuishaven = $request->thuishaven;
        
        $ship->thuisland = $request->thuisland;
        
        $ship->MMSI_nummer = $request->MMSI_nummer;
        
        $ship->lengte = $request->lengte;
        
        $ship->breedte = $request->breedte;
        
        $ship->diepte = $request->diepte;
        
        $ship->draagvermogen = $request->draagvermogen;
        
        $ship->ruim_lengte = $request->ruim_lengte;
        
        $ship->ruim_breedte = $request->ruim_breedte;
        
        $ship->ruim_hoogte = $request->ruim_hoogte;
        
        $ship->max_gevaarlijke_stoffen = $request->max_gevaarlijke_stoffen;
        
        $ship->ruim_max_totaal_vloer_belasting = $request->ruim_max_totaal_vloer_belasting;
        
        $ship->ruim_max_kolom_vloerblasting = $request->ruim_max_kolom_vloerblasting;
        
        
        $ship->save();

        return redirect('ship');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/ship/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$ship = Ship::findOrfail($id);
     	$ship->delete();
        return URL::to('ship');
    }
}
