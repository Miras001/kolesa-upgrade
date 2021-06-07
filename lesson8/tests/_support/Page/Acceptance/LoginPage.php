<?php
namespace Page\Acceptance;

class LoginPage
{
    /**
     * константа логина
     */
    public const EMAIL = 'mirasvtipo001@gmail.com';

    /**
     * константа пароля
     */
    public const PASSWORD = '123456';


    /**
     * урл страницы логин
     */
    public static $URL = '/index.php?controller=authentication&back=my-account';

    /**
     * селектор ввода email
     */
    public static $emailInput = '//input[@id="email"]';

    /**
     * селектор ввода password
     */
    public static $passwordInput = '//input[@id="passwd"]';

    /**
     * селектор кнопки login
     */
    public static $signInButton = '//button[@id="SubmitLogin"]';

    /**
     * селеектор кнопки logout
     */
    public static $signOutButton = '//a[@class="logout"]';

    /**
     * авторизация юзера
     */
    public function signIn()
    {
        $this->acceptanceTester->amOnPage(LoginPage::$URL);
        $this->acceptanceTester->fillField(self::$emailInput, self::EMAIL);
        $this->acceptanceTester->fillField(self::$passwordInput, self::PASSWORD);
        $this->acceptanceTester->click(self::$signInButton);
        $this->acceptanceTester->seeInCurrentUrl('/index.php?controller=my-account');

        return $this;
    }
    
    /**
     * Разлогиниваемся
     */
    public function signOut()
    {
        $this->acceptanceTester->click(self::$signOutButton);

        return $this;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
}