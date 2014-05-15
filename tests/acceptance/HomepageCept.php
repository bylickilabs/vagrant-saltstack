<?php
$wg = new WebGuy($scenario);
$wg->wantTo('ensure that homepage works');
$wg->amOnPage('/');
$wg->see('Home');
$wg->see('Login');