<?php
namespace Page\Acceptance;

class WishlistsPage
{
    /**
     * страница с wishlist
     */
    public static $URL = '/index.php?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * селектор количества добавленных карт в wishlist
     */
    public static $colOfAddedProducts = '//td[contains(@class, "align_center")]';

    /**
     * селектор кнопки удалить все из wishlist
     */
    public static $deleteAllProducts = '//td[@class="wishlist_delete"]/a';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * метод конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * функция, которая берет текст из таблицы, где указано количество добавленных продуктов
     */
    public function getColOfAddedProducts()
    {
        return $this->acceptanceTester->grabTextFrom(self::$colOfAddedProducts);
    }

    /**
     * ОЧИСТИТЬ wishlist
     */
    public function clearWishlist()
    {   
        $this->acceptanceTester->click(self::$deleteAllProducts);
        $this->acceptanceTester->acceptPopup();

        return $this;
    }


}