<?php
namespace Step\Acceptance;

use Page\Acceptance\MainMarketPage;

/**
 * 
 */
class AddToFavoriteStep extends \AcceptanceTester
{
    /**
     * hardcoded value for number of products we need to add to wishlist in cycle
     */
    public const PRODUCTS_NMB = 2;

    /**
     * step for adding product to wishlist
     */
    public function addProductToWishlist(){
        $I=$this;

        for($i = 1; $i <= self::PRODUCTS_NMB; $i++){
            $I->waitForElement(sprintf(MainMarketPage::$productCard, $i));
            $I->moveMouseOver(sprintf(MainMarketPage::$productCard, $i));
            $I->waitForElement(sprintf(MainMarketPage::$quickViewButton, $i));
            $I->click(sprintf(MainMarketPage::$quickViewButton, $i));
            $I->switchToIFrame(MainMarketPage::$productCardIframe);
            // TODO: refactor this hardcoded wait
            $I->wait(5);
            $I->waitForElement(MainMarketPage::$addToWishlistButton);
            $I->click(MainMarketPage::$addToWishlistButton);
            $I->waitForElement(MainMarketPage::$closeMessageButton);
            $I->waitForElementClickable(MainMarketPage::$closeMessageButton);
            $I->click(MainMarketPage::$closeMessageButton);
            $I->switchToIFrame();
            $I->click(MainMarketPage::$iframeCloseButton);
            // TODO: refactor this hardcoded wait
            $I->wait(5);
        }
    }
}