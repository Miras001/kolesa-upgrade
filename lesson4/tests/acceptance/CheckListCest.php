<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;
class CheckListkCest
{

public function checkCardViev(AcceptanceTester $I)
{
    $I->amOnPage('');
    $I->moveMouseOver(MainPage::$MoveElement);
    $I->wait(3);
    $I->waitForElementVisible(MainPage::$SubMenu);
    $I->click(MainPage::$ClickBlock);
    $I->seeInCurrentUrl(SearchPage::$URL);
    $I->waitForElementVisible(SearchPage::$DefoltLayout);
    $I->click(SearchPage::$ListLayout);
    $I->waitForElementVisible(SearchPage::$ListLayoutCheck);
    $I->wait(5);
  }
}
