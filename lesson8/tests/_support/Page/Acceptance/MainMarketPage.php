<?php
namespace Page\Acceptance;


class MainMarketPage
{
    /**
     *секлектор первой карты
     */
    public static $productCard = '//ul[@id="homefeatured"]//li[contains(@class, "ajax_block_product")][%s]';

    /**
     * селектор кнопки quick-view
     */
    public static $quickViewButton = '//ul[@id="homefeatured"]//li[%s]//a[@class="quick-view"]';

    /**
     * селектор для iframe карты
     */
    public static $productCardIframe = '.fancybox-iframe';

    /**
     * селектор кнопки добавления в wishlist
     */
    public static $addToWishlistButton = '//a[@id="wishlist_button"]';

    /**
     * селектор сообщения
     */
    public static $closeMessageButton = '//body[@id="product"]//a[@title="Close"]';

    /**
     * селектор закрытия iframe
     */
    public static $iframeCloseButton = '#index > div.fancybox-overlay.fancybox-overlay-fixed  > div > a';

    /**
     * кнопка для редиректа на страницу аккаунта
     */
    public static $userInfoButton = '//div[@class="header_user_info"][1]';

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
     * функция для открытия страницы аккаунта
     */
    public function openMyAccount()
    {
        $this->acceptanceTester->click(MainMarketPage::$userInfoButton);

        return new AccountPage($this->acceptanceTester->seeInCurrentUrl(AccountPage::$URL));
    }
}