<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Geral;

class Auth extends Controller{
	private $content;

    public function __construct(){
    }

	public function index(){
        $_data['title'] = 'Login';
		$_data['page'] = 'index';

		return view('auth/'.$_data['page'], compact('_data'));
	}
}