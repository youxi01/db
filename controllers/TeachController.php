<?php
namespace backend\controllers;
use Yii;
use backend\controllers\CommonController;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\db\Query;
use common\components\Company;
use backend\models\UploadForm;
use yii\web\UploadedFile;
use yii\data\Pagination;
use backend\models\InstitutionStudent;
use backend\models\Teach;
use yii\helpers\Url;
/**
 * Site controller
 */
class TeachController extends CommonController
{
    
 	//public $enableCsrfValidation = false;	
	public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
			'ueditor'=>[
				'class' => 'common\widgets\ueditor\UeditorAction',
				'config'=>[
					//上传图片配置
					'imageUrlPrefix' => "", /* 图片访问路径前缀 */
					'imagePathFormat' => "/attached/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
				]
			]			
        ];
    }
   /**
     * 收支流水
     */	
    public function actionIndex()
    {
		$goods_data=[];
		$listrows=(int)Yii::$app->request->get('listrows',10);
		$page=(int)Yii::$app->request->get('page',1);
		$params = ['uid' => $this->uid,'status'=>1];
		$query = Teach::find()->where($params);
		//权限判断，除了超级管理员以外的都只能看到自己负责区域的客户
        if (!Yii::$app->session->get('isSuperAdmin')) {
			//取最小值权限最大
			$scope=1;	
			//管辖校区
			if($scope==1){
				if (!empty($this->belong_campus)) {
					$findArr = [];
					foreach (explode(',',$this->belong_campus) as $u) {
						$findArr[] = 'FIND_IN_SET(' . (int) $u . ',campus_id)';
					}
					$findStr = implode(' or ', $findArr);
					$query->andWhere( $findStr );
				}else{
					$query->andWhere(['campus_id'=>'0']);
				}
			}
        }		
		$countQuery = clone $query;
		$totalCount=$countQuery->count();
		$pagination = new Pagination(['totalCount'=>$totalCount,'pageSize'=>$listrows]);
		$teach_data = $query->offset($pagination->offset)
		->limit($pagination->limit)->orderby('is_top desc,id desc')
		->asArray()
		->all();
		//var_dump($fms_data);
		$pageSize= ceil($totalCount/$listrows);
		return $this->render("index", ['uid' => $this->uid,'page' => $page,'pageSize' => $pageSize,'teach_data' => $teach_data,'pagination' => $pagination,'listrows' => $listrows,'totalCount' => $totalCount]);
    }
 

}