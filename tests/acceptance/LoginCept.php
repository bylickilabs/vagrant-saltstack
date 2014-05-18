<?php
$wg = new WebGuy($scenario);
$wg->wantTo('sign in');
$wg->amOnPage('/login.php');
$wg->fillField('signin[username]', 'mickey');
$wg->fillField('signin[password]','password1');
$wg->click('LOGIN');
$wg->see('Welcome, Mickey!');
