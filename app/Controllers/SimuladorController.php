<?php
	
	namespace App\Controllers;
	
	use App\Controllers\BaseController;
	use CodeIgniter\HTTP\RedirectResponse;
	
	class SimuladorController extends BaseController {
		public function index (): string|RedirectResponse {
			if ( $this->validateSession () ) {
				return view ( 'simulador', [ 'session' => TRUE,  'title' => 'Simulador' ]  );
				/*$data = [ 'main' => view ( 'simulador', [ 'session' => TRUE ] ), 'title' => 'Simulador' ];
				return view ( 'plantilla', $data );*/
			}
			return redirect ()->route ( 'signin' );
		}
	}