<?php

namespace app\controllers;

use app\models\DataLayanan;
use app\models\spesialis\McuSpesialisAudiometri;
use Yii;
use app\models\spesialis\McuSpesialisTht;
use app\models\spesialis\McuSpesialisThtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SpesialisThtController implements the CRUD actions for McuSpesialisTht model.
 */
class SpesialisThtController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all McuSpesialisTht models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new McuSpesialisThtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single McuSpesialisTht model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new McuSpesialisTht model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new McuSpesialisTht();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_spesialis_tht]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing McuSpesialisTht model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_spesialis_tht]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing McuSpesialisTht model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the McuSpesialisTht model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return McuSpesialisTht the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = McuSpesialisTht::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    //------------------------------------------------
    public function actionPeriksa($no_rm = null)
    {
        if ($no_rm != null) {
            $pasien = DataLayanan::find()->where(['no_rekam_medik' => $no_rm])->one();
            if (!$pasien) {
                return $this->redirect(['/site/ngga-nemu', 'no_rm' => $no_rm]);
            }
            $model = McuSpesialisTht::find()->where(['no_rekam_medik' => $no_rm])->one();
            if (!$model)
                $model = new McuSpesialisTht();
            $model->cari_pasien = $no_rm;
        } else {
            $pasien = null;
            $model = new McuSpesialisTht();
        }

        if ($model->load(Yii::$app->request->post())) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            if ($model->save()) {
                return [
                    's' => true,
                    'e' => null
                ];
            } else {
                return [
                    's' => false,
                    'e' => $model->errors
                ];
            }
        }

        if ($model->isNewRecord) {
            $model->tl_daun_telinga_kanan = 'Normal';
            $model->tl_daun_telinga_kiri = 'Normal';
            $model->tl_liang_telinga_kanan = 'Normal';
            $model->tl_liang_telinga_kiri = 'Normal';
            $model->tl_serumen_telinga_kanan = 'Tidak Ada';
            $model->tl_serumen_telinga_kiri = 'Tidak Ada';
            $model->tl_membrana_timpani_telinga_kanan = 'Intak';
            $model->tl_membrana_timpani_telinga_kiri = 'Intak';
            $model->tl_test_berbisik_telinga_kanan = 'Normal';
            $model->tl_test_berbisik_telinga_kiri = 'Normal';
            $model->tl_test_berbisik_telinga_kanan_6 = 'Normal';
            $model->tl_test_berbisik_telinga_kiri_6 = 'Normal';
            $model->tl_test_berbisik_telinga_kanan_4 = 'Normal';
            $model->tl_test_berbisik_telinga_kiri_4 = 'Normal';
            $model->tl_test_berbisik_telinga_kanan_3 = 'Normal';
            $model->tl_test_berbisik_telinga_kiri_3 = 'Normal';
            $model->tl_test_berbisik_telinga_kanan_1 = 'Normal';
            $model->tl_test_berbisik_telinga_kiri_1 = 'Normal';
            $model->tl_test_garpu_tala_rinne_telinga_kanan = 'Normal';
            $model->tl_test_garpu_tala_rinne_telinga_kiri = 'Normal';
            // $model->tl_weber_telinga_kanan = 'Normal';
            // $model->tl_weber_telinga_kiri = 'Normal';
            $model->tl_weber_telinga_kanan = 'Tidak Ada Lateralisasi';
            $model->tl_weber_telinga_kiri = 'Tidak Ada Lateralisasi';
            $model->tl_swabach_telinga_kanan = 'Normal';
            $model->tl_swabach_telinga_kiri = 'Normal';
            // $model->tl_bing_telinga_kanan = 'Normal';
            // $model->tl_bing_telinga_kiri = 'Normal';
            $model->hd_meatus_nasi = 'Normal';
            $model->hd_septum_nasi = 'Normal';
            $model->hd_konka_nasal = 'Normal';
            $model->hd_nyeri_ketok_sinus_maksilar = 'Normal';
            $model->hd_penciuman = 'Normal';
            $model->tg_pharynx = 'Normal';
            $model->tg_tonsil_kanan = 'T0';
            $model->tg_tonsil_kiri = 'T0';
            $model->tg_ukuran_kanan = 'Normal';
            $model->tg_ukuran_kiri = 'Normal';
            $model->tg_palatum = 'Normal';

            // ambil data rinne dari perika audiometri
            $dataAudiometri = McuSpesialisAudiometri::findOne(['no_rekam_medik' => $no_rm]);
            if ($dataAudiometri) {
                if ($dataAudiometri->rata_kanan_ac < $dataAudiometri->rata_kanan_bc) {
                    $model->tl_test_garpu_tala_rinne_telinga_kanan = 'Negatif (AC < BC)';
                } else {
                    $model->tl_test_garpu_tala_rinne_telinga_kanan = 'Positif (AC > BC)';
                }
                if ($dataAudiometri->rata_kiri_ac < $dataAudiometri->rata_kiri_bc) {
                    $model->tl_test_garpu_tala_rinne_telinga_kiri = 'Negatif (AC < BC)';
                } else {
                    $model->tl_test_garpu_tala_rinne_telinga_kiri = 'Positif (AC > BC)';
                }
            }
        }

        return $this->render('periksa', [
            'model' => $model,
            'no_rm' => $no_rm,
            'pasien' => $pasien,
        ]);
    }
}