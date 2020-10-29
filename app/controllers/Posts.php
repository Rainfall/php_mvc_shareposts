<?php 
	
	class Posts extends Controller {

		public $some = 'hi';

		public function __construct(){
		 	echo $this->some;
		}

		public function index() {
			$this->view('posts/index');
		}


	}

?>