<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfilController extends Controller {

	//
	public function index()
	{
		$data['nama'] = "benny";
		$data['umur'] = "24";

		return view('profil')->with('data',$data);

		// return view('profil ');
	}
}
