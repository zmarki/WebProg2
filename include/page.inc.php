<?php

Class pageMenu
{
	public static $menu = array();
	public static $submenu = array();

	public static function setMenu() {
		self::$menu = array();
		self::$submenu = array();
		$connect = Database::getConnection();
		$stmt = $connect->query("select * from page where jog like '".$_SESSION['userlevel']."' order by sorrend");
		while ($menuitem = $stmt ->fetch(PDO::FETCH_ASSOC)) {
			self::$menu[$menuitem['url']] = array($menuitem['név'], $menuitem['MainMenu'], $menuitem['jog']);

			if ($menuitem['MainMenu'] != "")
			{
				self::setSubmenu($menuitem['MainMenu']);
								
			}			
		}

	}

	protected static function setSubmenu($s)
	{
		self::$submenu = array();
		$connect = Database::getConnection();
		$stmt2 = $connect->query("select * from page where MainMenu='".$s."' and jog like '".$_SESSION['userlevel']."'");
		while ($subitem = $stmt2 -> fetch(PDO::FETCH_ASSOC)) {
					self::$submenu[$subitem['url']] = array($subitem['név'], $subitem['MainMenu'], $subitem['jog']);
				}
	}

	protected static function ellenor($url)
	{
		$valid=false;

		foreach (self::$submenu as $subindex => $subitem) {
			
			if (in_array($url, $subitem))
				{return true;
				}
		}
	}

	protected static function almenu($url)
	{
		$eredmeny="<div class='dropdown-menu'>";
		foreach (self::$submenu as $subindex => $subitem) {
			 
			$eredmeny.="<a class 'dropdown-item' href='".SITE_ROOT.$subindex."'> ".$subitem[0]."</a>";
		}
		$eredmeny.="</div></li>";
		return $eredmeny;
	}
	
	public static function getMenu($s) {
		

		$menu="<ul class='nav nav-tabs nav-justified'>";

		foreach (self::$menu as $menuindex => $menuitem) 
		{  

			if (!self::ellenor($menuindex) && $menuitem[1] =="")
			//if ($menuitem[1]=="")
			{
				$menu.="<li class='nav-item'><a href='".SITE_ROOT.$menuindex."' ".($menuindex==$s[0]? "class='nav-link active'":"class='nav-link'").">".$menuitem[0]."</a></li>";
			}

			elseif (self::ellenor($menuindex)) {
				$menu.="<li class='nav-item dropdown'><a class='nav-link dropdown-toggle'  data-toggle='dropdown'  href='".SITE_ROOT.$menuindex."' ".($menuindex==$s[0]? "class='nav-link dropdown-toggle active'  data-toggle='dropdown' ":"class='nav-link dropdown-toggle'  data-toggle='dropdown'").">".$menuitem[0]."</a>";
				$menu.=self::almenu($menuindex);


				
				
			}
			
		}
		
		//$menu.="</ul>";

		

		return $menu;
	}
	
}

pageMenu::setMenu();
?>