<?php

namespace app\controllers;

use app\models\AuthorForm;
use app\models\MagazineForm;
use app\models\Magazine;
use app\models\Author;
use app\models\AuthorMagazine;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class MagazineController extends Controller
{
    public $layout = 'main';

    public function actionIndex()
    {
        $data = Magazine::find()->all();
        return $this->render('index', compact('data'));
    }

    public function actionCreate()
    {
        $form_magazine = new MagazineForm();
        $authors = Author::find()->all();
        if ($form_magazine->load(Yii::$app->request->post())) {
            if (!$form_magazine->validate()) {
                Yii::$app->session->setFlash('error', '{Validation error here}');
            }
            Yii::$app->session->setFlash('success', 'New magazine successfully created');
            return $this->refresh();
        }
        return $this->render('form', compact('form_magazine', 'authors'));
    }
    public function actionAuthor()
    {
        $form_author = new AuthorForm();

        if ($form_author->load(Yii::$app->request->post())) {
            if (!$form_author->save()) {
                Yii::$app->session->setFlash('error', '{Validation error here}');
            }
            Yii::$app->session->setFlash('success', 'New author successfully created');
            return $this->refresh();
        }
        return $this->render('author', compact('form_author'));

    }
}
