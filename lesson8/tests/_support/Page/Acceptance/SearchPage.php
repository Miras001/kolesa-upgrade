<?php
namespace Page\Acceptance;

class SearchPage
{
    
    public static $URL = '/index.php?id_category=11&controller=category';
 /**
     *  селектор дефолтной раскладки
     */

    public static $DefoltLayout ='//li[contains(@class, "selected") and @id="grid"]';

     /**
     * селектор кнопки смены раскладки
     */
    public static $ListLayout =   '//i[@class="icon-th-list"]';
  /**
     * селектор для проверки смены раскладки на List
     */
    public static $ListLayoutCheck =   '//li[contains(@class, "selected") and @id="list"]';
   
    
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
