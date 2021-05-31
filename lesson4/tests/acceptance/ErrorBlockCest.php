<?php

use Page\Acceptance\Login;

class ErrorBlockCest
{
public const USERNAME = 'locked_out_user';
public const PASSWORD = 'secret_sauce';
public function checkErrorBlock(AcceptanceTester $I)
{
    $login = new Login($I);
    $I->amOnPage(Login::$URL);
    $I->fillfield(Login::$LoginInput,self::USERNAME);
    $I->fillfield(Login::$PasswordInput, self::PASSWORD);
    $I->click(Login::$LoginButtom);
    $I->waitForElementVisible(Login::$ErrorBlock);
    $login->clickErrorBlockClose();
    $I->wait(5);
    $I->dontSeeElement(Login::$ErrorBlockButton);
  
  }
}
