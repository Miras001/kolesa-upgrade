<?php

use Page\Acceptance\AccountPage;
use Page\Acceptance\LoginPage;
use Page\Acceptance\MainMarketPage;
use Page\Acceptance\WishListsPage;
use Step\Acceptance\AddToFavoriteStep;


class AddFavoritesPageCest
{
   
    public function _before(\AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);

        $loginPage->signIn();
    }

   
    public function checkAddToWishlist(\Step\Acceptance\AddToFavoriteStep $I)
    {
        $wishlistPage = new WishlistsPage($I);
        $mainPage = new MainMarketPage($I);
        $accountPage = new AccountPage($I);

        $I->amOnPage('');
        $I->comment("I'm adding product to wislist");
        $I->addProductToWishlist();
        $mainPage->openMyAccount();
        $accountPage->openMyWishlists();
        $I->assertEquals( $wishlistPage->getColOfAddedProducts(), AddToFavoriteStep::PRODUCTS_NMB, "проверка фактического и ожидаемого результата");
    }


public function _after(\AcceptanceTester $I)
    {
        $wishlistPage = new WishlistsPage($I);

        $wishlistPage->clearWishlist();

        $loginPage = new LoginPage($I);
        
        $loginPage->signOut();
    }
}