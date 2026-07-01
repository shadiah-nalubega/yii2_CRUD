<?php

namespace app\controllers;

use app\models\Interns;
use Yii;

class InternsController extends \yii\web\Controller
{
    
    //
    public function actionIndex(){

        return $this->render('index');

    }

    //create form
    public function actionCreate()
    {
        $model = new Interns();

        if($model->load(Yii::$app->request->post())){

           $model->save(false);
           return $this->refresh();

        }

        return $this->render('create',['model' => $model]);
    }

    //viewing
    public function actionView()
    {
        $data = Interns::find()->all();// getting all data from the db

        return $this->render('view',['query' => $data]);
    }


    public function actionUpdate($id)
{
    $model = Interns::findOne($id);

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['view']);
    }

    return $this->render('create', [
        'model' => $model,
    ]);
}

public function actionDelete($id)
{
    $model = Interns::findOne($id);

    if ($model !== null) {
        $model->delete();
    }

    return $this->redirect(['view']);
}



}