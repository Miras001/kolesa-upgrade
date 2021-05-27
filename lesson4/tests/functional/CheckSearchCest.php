<?php 
class CheckSearchCest
{

public function checkTextThroughtModalWindoww(FunctionalTester $I)
{
    $searchQueryXpath=('//input[@id="search_query_top"]');
    $searchBoxXpath= ('//button[@name="submit_search"]');
    $productContainerXpath=('//div[@class="product-container"]');
    $I->amOnPage('');
    $I->seeElement('#search_query_top');
    $I->click('#search_query_top');
    $I->fillfield('#search_query_top', 'Printed dress');
    $I->seeElement('#searchbox > button');
    $I->click('#searchbox > button');
    $I->seeNumberOfElements('.product-container', 5); 
  }
}
