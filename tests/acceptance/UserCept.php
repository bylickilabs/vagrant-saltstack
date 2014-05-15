<?php
$wg = new WebGuy($scenario);
$wg->wantTo('ensure that user list page works');
$wg->amOnPage('/users.html');
$wg->see('Users');
$wg->see('User 1');
$wg->see('User 2');
$wg->see('User 3');