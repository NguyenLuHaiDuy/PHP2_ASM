<?php
	//load file model
	include "models/HomeModel.php";
	class HomeController extends Controller{
		//ke thua HomeModel
		use HomeModel;
		public function index(){
			header("Location: /bandienmay/admin/index.php");

			//load view
			$this->loadView("HomeView.php");
		}
	}
 ?>
