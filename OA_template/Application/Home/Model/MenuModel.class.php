<?php
//菜单栏
class MenuModel {
	public $menuTree; // 菜单树
	
	//注意，link链接请按照 /SystemNotify/index 格式填写，不能多其他的斜杠
		
	public $allMenu = array();
		
		
	function __construct() {
		//$this->allMenu = $allMenu;
		if(F('menuTree')){
			$this->menuTree = F('menuTree');
		}else{
            $this->allMenu = include CONF_PATH.'mainMenu.php';
            $this->menuTree = list_to_tree($this->allMenu,'id','parent_id');
            F('menuTree',$this->menuTree);
        }

        $this->allMenu = include CONF_PATH.'mainMenu.php';
	}

	//获取所有树形菜单
	public function getMenuTree() {
		return $this->menuTree;
	}

	//获取所有原始菜单
	public function getAllMenu() {
		return $this->allMenu;
	}

}
?>