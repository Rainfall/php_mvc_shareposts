<?php 

	class Core {

		protected $currentController = 'Pages';
		protected $currentMethod = 'index';

		public function __construct() {

			$url = $this->getUrl();

			if (isset($url[0]) && file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
				$this->currentController = ucwords($url[0]);

				unset($url[0]);
			}

			if (isset($url[1]) && method_exists($this->currentController, $url[1])) {
				$this->currentMethod = $url[1];
				unset($url[1]);
			}

			require_once('../app/controllers/'.$this->currentController.'.php');

			$this->currentController = new $this->currentController;

			$params = $url == '' || count($url) == 0 ? [] : $url;

			call_user_func_array(array($this->currentController, $this->currentMethod), $params);

		}

		public function getUrl(){
		  if(isset($_GET['url'])){
		    $url = rtrim($_GET['url'], '/');
		    $url = filter_var($url, FILTER_SANITIZE_URL);
		    $url = explode('/', $url);
		    return $url;
		  }
		}

	}

?>