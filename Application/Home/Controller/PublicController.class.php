<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 公共
 */
class PublicController extends Controller {

    // 菜單頁面
    public function menu() {
        if(F('menuTree')){
            $this->menuTree = F('menuTree');
        }else{
            $allMenu = include CONF_PATH.'mainMenu.php';
            $menuTree = list_to_tree($this->allMenu,'id','parent_id');
            F('menuTree',$menuTree);
        }

       return $this->_mainMenu($allMenu);
    }

    //树形菜单
    public function _mainMenu($attr) {

        $current  = '/'.MODULE_NAME.'/'.ACTION_NAME;
        $menuList = $attr;
        $parseStr .= '<ul class="mainnav">';
          
        foreach($menuList as $value) {
            $currentMenu = '';
            if($topMenuId == 1) {
                $currentMenu = ' active';
                
            }
            
            $arrow = empty($value['_child']) ? '' : '<i class="arrow"></i>';
            
            // 判断是否为空链接
            if($value['link'] == '#'){
                $link = "#";
            }else{
                $link = __APP__.'/'.MODULE_NAME.$value['link'];
            }
            $parseStr .='<li>
                <a href="'. $link .'">
                    '.L($value['name']).$arrow.'
                </a></li>';
            //     <ul class="subnav">';
            // foreach($value['_child'] as $subMenu) {
                
            //     if($subMenu['close'] !=1){
                   
            //     $subClass = $subMenu['link'] == $current ? 'active' : '';
            //     // 判断是否为空链接
            //     if($subMenu['link'] == '#'){
            //         $subMenuLink = "#";
            //     }else{
            //         $subMenuLink = __APP__.$subMenu['link'];
            //     }
            //     $parseStr .= '<li>
            //                     <a href="'. $subMenuLink .'" class="'.$subClass.'">'.L($subMenu['name']).'</a>
            //                   </li>';
            //     }
            // }
                        
            // $parseStr .='</ul></li>';
        }
        $parseStr .= '</ul>';
        return $parseStr;
    }

    //登录
    public function login(){
        $this->display();
    }

    //注册
    public function signup(){
        $this->display();
    }

    //忘记密码
    public function forgot(){
        $this->display();
    }

}
