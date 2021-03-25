<?php
namespace backend\controllers;

use Yii;
use backend\controllers\CommonController;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
use yii\db\Query;
/**
 * Site controller
 */
class IndexController extends CommonController
{
    /**
     * {@inheritdoc}
     */


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

		return $this->render('index');
		
    }
    public function actionMain()
    {				
							
		return $this->render('main');				
		
    }
		
	
    public function actionError()
    {
		return $this->render('error');
    }	
    /**
     * Login action.
     *
     * @return string
     */


    /**
     * Logout action.
     *
     * @return string
     */

}
