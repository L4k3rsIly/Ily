<?php

namespace App\Http\Controllers;

use App\Http\Requests\OffersValidation;
use App\User;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Offer;
use function Sodium\compare;
use function Symfony\Component\Console\Tests\Command\createClosure;

class OfferController extends Controller
{
    public function index(){
        $users = User::get();
        $offers= Offer::with('users')->get();

        return view('offers/index',compact('offers','users'));
    }
    public function add(){
        $users = User::get();
        $types = Offer::$typeCurrency;
        return view('offers/add', compact('offers', 'types', 'users'));
    }



    public function submit(OffersValidation $request)
    {

    $offers = Offer:: create([
        'type_object' => $request -> input('type_object'),
        'price' => $request -> input('price'),
        'type_wall' => $request -> input('type_wall'),
        'number_rooms' => $request -> input('number_rooms'),
        'phone' => $request -> input('phone'),
        'information' => $request -> input('information'),
        'type_price' => $request -> input('type_price'),
        'status' => $request -> input('status'),
        'user_id' => $request -> input('user_id')

    ]);
    $offers -> save();

    return redirect()->route('offer.index');
  }
  public function edit(Offer $offer){
        $users= User::get();
        $types=Offer::$typeCurrency;
      return view('offers/edit',compact('offer','types',  'users'));
  }
    public function update(Request $request,$id){
        $offers = Offer::findorfail($id);
        $offers->update([
            'type_object' => $request->input('type_object'),
            'price' => $request->input('price'),
            'type_price' => $request->input('type_price'),
            'type_wall' => $request->input('type_wall'),
            'number_rooms' => $request->input('number_rooms'),
            'user_id' => $request->input('user_id'),
            'phone' => $request->input('phone'),
            'remember' => $request->input('remember'),
            'information' => $request->input('information'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('offer.index');
    }

    public function delete($id){
        $offers = Offer::findorfail($id);
        $offers->delete();
        return redirect()->route('offer.index');
    }

}

