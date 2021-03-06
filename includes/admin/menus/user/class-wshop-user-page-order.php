<?php 
if (! defined ( 'ABSPATH' ))
    exit (); // Exit if accessed directly

/**
 * 菜单：登录设置
 *
 * @since 1.0.0
 * @author ranj
 */
class WShop_User_Page_Order extends Abstract_WShop_Settings_Page{    
    /**
     * Instance
     * @since  1.0.0
     */
    private static $_instance;
    
    /**
     * Instance
     * @since  1.0.0
     */
    public static function instance() {
        if ( is_null( self::$_instance ) )
            self::$_instance = new self();
            return self::$_instance;
    }
    
    /**
     * 菜单初始化
     *
     * @since  1.0.0
     */
    private function __construct(){
        $this->id='page_user_order';
        $this->title=__('My Orders',WSHOP);
    }
    
    /* (non-PHPdoc)
     * @see Abstract_WShop_Settings_Menu::menus()
     */
    public function menus(){
        require_once 'class-wshop-user-menu-order-default.php';
        return apply_filters("wshop_admin_page_{$this->id}", array(
            WShop_User_Menu_Order_Default::instance()
        ));
    }
}?>