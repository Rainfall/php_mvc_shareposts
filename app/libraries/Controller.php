<?php 
	
	class Controller {

		public function model($Model) {

			require_once('../app/models/'.$Model.'.php');

			return new $Model();

		}

		public function view($view, $data = []) {

			require_once('../app/views/'.$view.'.php');

		}

	}

?>