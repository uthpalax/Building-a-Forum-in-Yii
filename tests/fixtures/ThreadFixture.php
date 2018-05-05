<?php 
namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class ThreadFixture extends ActiveFixture
{
    public $modelClass = 'app\models\Thread';
    public $depends = ['app\tests\fixtures\UserFixture'];
}