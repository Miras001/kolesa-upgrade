<?php


use function PHPUnit\Framework\assertFalse;

/**
 * Класс для работы с запросами юзера
 */

 class UserRequestCest
 
 { 

     public function checkUserUpdate($I){
      
      
      $userID = $I->createUser();
      $userJob = $I->getUserJob();
      $I -> sendPut(sprintf('human?_id=%s', $userID), ['job'=> 'WebQA']);
      $userJobAfter = $I->getUserJob();
      assertFalse($userJob==$userJobAfter);
      $I -> seeResponseContainsJson(["job"=> $userJobAfter ]);
     }


     /**
      * Функция для удаления юзера
      * 
      */
      public function checkUserDelete($I){
       /**
        * Функция для проверки удаления
        */
        $userID = $I->getUserId();
        $I -> sendDelete(sprintf('human?_id=%s', $userID));
        $I -> seeResponseContainsJson(['n' => 1,'ok' => 1,'deletedCount' => 1]);
       }
    }