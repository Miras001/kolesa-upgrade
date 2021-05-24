<?php 
use \Codeception\Util\Locator;
class CheckTextCest
{
public function _before(AcceptanceTester $I)
{
}
//tests
public function checkTextThroughtModalWindow(AcceptanceTester $I)
{
    $I->amOnPage('');
    $I->scrollTo('#homefeatured > li:nth-child(2)', -300, 0);
    $I->moveMouseOver('#homefeatured > li:nth-child(2)');
    $I->waitForElementVisible('#homefeatured > li:nth-child(2)');
    $I->waitForElementVisible('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.quick-view');
    $I->click('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.quick-view');
    $I->waitForElementVisible('#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div');
    codecept_debug($I->grabTextFrom('#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div'));
    #$text = $I->grabTextFrom('//*[@id="product"]/div/div/div[2]/h1');
    #$I->assertEquals($text, 'Blouse');
    $I->see('Blouse'); 
    
}
}
