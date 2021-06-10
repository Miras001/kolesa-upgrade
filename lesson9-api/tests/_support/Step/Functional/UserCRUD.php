<?php
namespace Step\Functional;

use Page\Functional\UserCRUDPage;



class UserCRUD extends \FunctionalTester


{   
    /**
     * Создание пользователя через ФЕЙКЕР
     */
    public function createUser() {

        $I = $this;
        $userData = [
            "email" => $I->getFaker()->email ,
            "name"  => $I->getFaker()->userName,
            "owner" => 'Miras24',
            "job"   => $I->getFaker()->company
            ]; 
        $I -> haveHttpHeader('Content-Type', 'application/json');
        $I -> sendPost(UserCRUDpage::$userCreateUrl, $userData);
        $I -> seeResponseCodeIsSuccessful();
        $I -> seeResponseContainsJson(['status' => 'ok']);
        $I -> sendGet(UserCRUDPage::getUsersUrl, $userData);
        $I -> canSeeResponseMatchesJsonType(UserCRUDPage::$defaultSchema);
        $userId = $I->grabDataFromResponseByJsonPath("0._id")[0];
        return $userId;

    }

    public function getUserId() {
        /**
         * Получение id пользовтеля
         */
        $I = $this;
        $I -> haveHttpHeader('Content-Type', 'application/json');
        $I -> sendGet('people?owner=',['owner'=>'Miras24']);
        $userId = $I->grabDataFromResponseByJsonPath("0._id")[0];
        return $userId;
    }

    public function getUserJob() {
        /**
         * Получение job пользователя 
         */
        $I = $this;
        $I -> haveHttpHeader('Content-Type', 'application/json');
        $I -> sendGet('people?owner=',['owner'=>'Miras24']);
        $userId = $I->grabDataFromResponseByJsonPath("0.job")[0];
        return $userId;
    }

}