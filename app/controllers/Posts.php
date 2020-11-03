<?php 
	
	class Posts extends Controller {

		private $data;

		public function __construct(){
		 	$this->currentmodel = $this->model('Post');
		}

		public function get_all_posts() {
			$this->data = $this->currentmodel->getPosts();
			return $this->data;
		}

		public function index() {
			$this->view('posts/index', $this->get_all_posts());
		}

		public function show($id) {
			$this->view('posts/post', $this->currentmodel->getPostById($id));
		}


	}

?>