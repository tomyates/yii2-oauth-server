<?php

namespace tomyates\yii2\oauth2server\filters\auth;

use tomyates\yii2\oauth2server\Module;

class CompositeAuth extends \yii\filters\auth\CompositeAuth
{
    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        $server = Module::getInstance()->getServer();
        $server->verifyResourceRequest();
        
        return parent::beforeAction($action);
    }
}
