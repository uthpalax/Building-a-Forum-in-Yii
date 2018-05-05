<?php
use app\models\User;
use app\models\Thread;
use app\tests\fixtures\ThreadFixture;

class ThreadCest
{
    public function _fixtures() 
    {
        return [
            'threads' => [
                'class' => ThreadFixture::className()
            ]
        ];     
    }
    
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage(['thread/index']);
    }

    public function _after(FunctionalTester $I)
    {

    }

    // tests
    public function openThreadPage(FunctionalTester $I)
    {
        $I->see('Threads', 'h1');
    }

    public function aUserCanSeeThread(FunctionalTester $I) 
    {
        $thread = $I->grabFixture('threads', 'thread1');
        $I->see($thread->title, 'td');
    }
}
