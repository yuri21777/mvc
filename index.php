<?php
	class MainController {
		public function index()//
		{	
			$model = new MainModel;//создать данные модель
			$data = $model->getData();//вызов данных. Мы берем данные у модели
			include 'view.php';//выводим.
			//получение данных идет в контролере.

		}
	}

	class MainModel {
		public function getData()
		{
			return $this->getDataFromDatabase();
		}
		private function getDataFromDatabase() {
			return 'Data from MainModel!';
		}
	}
	//router Обращается к котролеру
	$controller = new MainController;//контролер
	call_user_func([$controller, 'index']);//

?>