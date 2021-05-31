<?php
namespace Page\Acceptance;

class MainPage
{
    
    public static $URL = '';
    
     /**
     * селектор ввода поля логин
     */

    public static $MoveElement ='//li[@class="sfHover"]//a[@title="Dresses"]';

     /**
     * селектор блока меню 
     */
    public static $SubMenu =   '//li[@class="sfHover"]//ul[@class="submenu-container clearfix first-in-line-xs"]';
  /**
     * селектор клика на блок Summer Dresses
     */
    public static $ClickBlock =   '//li[@class="sfHover"]//ul[@class="submenu-container clearfix first-in-line-xs"]';

     
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
