<?php


class ThreadCest
{
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
        $I->see('Threads', 'h2');
    }
}
