<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller
	{
	public function act()
	{ 
		$title = 'Действие act контроллера page';
		return $this->render('page/act', ['var1' => 'eee','var2' => 'bbb','var3' => 'kkk',]);
	}
}
?>