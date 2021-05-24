<?php 
class CheckSearchCest
{
public function _before(FunctionalTester $I)
{
}
//tests
public function checkTextThroughtModalWindoww(FunctionalTester $I)
{
    $I->amOnPage('');
    $I->seeElement('#search_query_top');
    $I->click('#search_query_top');
    $I->fillfield('#search_query_top', 'Printed dress');
    $I->seeElement('#searchbox > button');
    $I->click('#searchbox > button');
    $I->seeNumberOfElements('.product-container', 5);
  
    #codecept_debug($I->grabTextFrom('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1'));
}
}
