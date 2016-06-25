<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfilController extends Controller {

	//
	public function index()
	{
		// $data['nama'] = "benny";
		// $data['umur'] = "24";

		// return view('profil')->with('data',$data);

		$nama = "<strong>Benny</strong>";
		$umur = "<strong>24</strong>";

		return view('profil',compact('nama', 'umur'));
	} 
}
