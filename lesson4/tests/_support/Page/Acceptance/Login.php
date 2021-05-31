<?php
namespace Page\Acceptance;
/**
* Страница авторизации
     */

class Login
{
    /**
     * URL страницы авторизации
     */
    public static $URL = '';
    /**
     * секлектор ввода поля логин
     */
    public static $LoginInput ='//input[@id="user-name"]';
    
 /**
     * секлектор ввода поля пароль
     */
    public static $PasswordInput ='//input[@id="password"]';
     /**
     * секлектор кнопки логин
     */
    public static $LoginButtom = '//input[@id="login-button"]';
     /**
     * секлектор блока ошибки
     */
    public static $ErrorBlock =  '//h3[contains(text(),"Epic sadface: Sorry, this user has been locked out")]';
    /**
     * секлектор кнопки для закрытия блока ошибки
     */
    public static $ErrorBlockButton =  '//button[@class="error-button"]//*[local-name()="svg"]';
    
    /**
     * Метод для нажатия крестика в блоке с ошибкой при авторизации
     */
    
    public function clickErrorBlockClose()
    {
        $this->AcceptanceTester->click(self::$ErrorBlockButton);
    }

    /**
     * Объект Testera
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;
 /**
     * Метод конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }


}
