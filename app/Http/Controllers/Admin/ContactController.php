<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
		protected $request;

		public function __construct( Request $m_request) {
				$this->request = $m_request;
		}

		public function show() {
				$var = '';
				$this->request->flash();
				$data = [ 'title' => 'Контакты',
						  'var' => $var];
				return view('default.contact', $data);
		}
}
