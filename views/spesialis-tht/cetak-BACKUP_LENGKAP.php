<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2020-09-13 18:14:13 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2020-10-05 10:28:11
 */

use app\components\Helper;
use app\models\DataLayanan;
use app\models\spesialis\BaseModel;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\spesialis\McuSpesialisTht */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Pemeriksaan Kesehatan THT Tenaga Kerja';
$this->params['breadcrumbs'][] = ['label' => 'Unit Medical Check Up', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<style type="text/css">
    .mcu-spesialis-audiometri-form {
        font-size: 10px;
    }

    table {
        border-collapse: collapse;
        font-size: 12px;
    }

    table td {
        padding: 4.800;
    }

    .form-group {
        margin-bottom: 0px !important;
    }

    .tabel-tht label {
        margin-bottom: 0px !important;
    }
</style>

<div class="mcu-spesialis-audiometri-form">

    <table style="width: 100%;">
        <tbody>
            <tr>
                <td style="width: 10%; border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=7 height="19" align="left" valign=top><b>
                        <font color="#000000">I. TELINGA</font>
                    </b>
                </td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=7 height="19" align="left" valign=top><b>
                    <table style="width: 100%;">
                        <tbody>
                            <tr>
                                <td>Nama Pasien</td>
                                <td>: </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nomor Rekam Medis</td>
                                <td>: </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir/Umur</td>
                                <td>: </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <div style="text-align: center;">
        <h3 style="font-weight: bold; margin-bottom: 0px;">Unit Medical Check Up</h3>
        <h3 style="font-weight: bold; margin-top: 0px;"><?= Html::encode($this->title) ?></h3>
    </div>

    <table style="width: 100%;">
        <colgroup width="35"></colgroup>
        <colgroup width="207"></colgroup>
        <colgroup width="29"></colgroup>
        <colgroup span="4" width="160"></colgroup>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 height="19" align="left" valign=top><b>
                    <font color="#000000">I. TELINGA</font>
                </b>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 height="19" align="center" valign=bottom>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                    <font color="#000000">TELINGA KANAN</font>
                </b>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                    <font color="#000000">TELINGA KIRI</font>
                </b>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="1" sdnum="1033;">
                <font color="#000000">1</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Daun Telinga</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_daun_telinga_kanan',  ['id' => 'mcuspesialistht_tl_daun_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_daun_telinga_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_daun_telinga_kanan_1" name="McuSpesialisTht[tl_daun_telinga_kanan]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_daun_telinga_kiri',  ['id' => 'mcuspesialistht_tl_daun_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_daun_telinga_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_daun_telinga_kiri_1" name="McuSpesialisTht[tl_daun_telinga_kiri]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="2" sdnum="1033;">
                <font color="#000000">2</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Liang Telinga</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_liang_telinga_kanan',  ['id' => 'mcuspesialistht_tl_liang_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_liang_telinga_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_liang_telinga_kanan_1" name="McuSpesialisTht[tl_liang_telinga_kanan]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_liang_telinga_kiri',  ['id' => 'mcuspesialistht_tl_liang_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_liang_telinga_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_liang_telinga_kiri_1" name="McuSpesialisTht[tl_liang_telinga_kiri]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="38" align="center" valign=top sdval="3" sdnum="1033;">
                <font color="#000000">3</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="left" valign=top>
                <font color="#000000">Serumen</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_serumen_telinga_kanan',  ['id' => 'mcuspesialistht_tl_serumen_telinga_kanan_0', 'value' => 'Tidak Ada', 'label' => 'Tidak Ada']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_serumen_telinga_kanan == 'Ada Serumen') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_serumen_telinga_kanan_1" name="McuSpesialisTht[tl_serumen_telinga_kanan]" value="Ada Serumen">
                    Ada Serumen
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_serumen_telinga_kiri',  ['id' => 'mcuspesialistht_tl_serumen_telinga_kiri_0', 'value' => 'Tidak Ada', 'label' => 'Tidak Ada']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_serumen_telinga_kiri == 'Ada Serumen') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_serumen_telinga_kiri_1" name="McuSpesialisTht[tl_serumen_telinga_kiri]" value="Ada Serumen">
                    Ada Serumen
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_serumen_telinga_kanan == 'Menyumbat (Prop)') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_serumen_telinga_kanan_2" name="McuSpesialisTht[tl_serumen_telinga_kanan]" value="Menyumbat (Prop)">
                    Menyumbat (Prop)
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_serumen_telinga_kiri == 'Menyumbat (Prop)') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_serumen_telinga_kiri_2" name="McuSpesialisTht[tl_serumen_telinga_kiri]" value="Menyumbat (Prop)">
                    Menyumbat (Prop)
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="38" align="center" valign=top sdval="4" sdnum="1033;">
                <font color="#000000">4</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="left" valign=top>
                <font color="#000000">Membrana Timpani</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_membrana_timpani_telinga_kanan',  ['id' => 'mcuspesialistht_tl_membrana_timpani_telinga_kanan_0', 'value' => 'Intak', 'label' => 'Intak']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_membrana_timpani_telinga_kanan == 'Tidak Intak') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_membrana_timpani_telinga_kanan_1" name="McuSpesialisTht[tl_membrana_timpani_telinga_kanan]" value="Tidak Intak">
                    Tidak Intak
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_membrana_timpani_telinga_kiri',  ['id' => 'mcuspesialistht_tl_membrana_timpani_telinga_kiri_0', 'value' => 'Intak', 'label' => 'Intak']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_membrana_timpani_telinga_kiri == 'Tidak Intak') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_membrana_timpani_telinga_kiri_1" name="McuSpesialisTht[tl_membrana_timpani_telinga_kiri]" value="Tidak Intak">
                    Tidak Intak
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_membrana_timpani_telinga_kanan == 'Lainnya') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_membrana_timpani_telinga_kanan_2" name="McuSpesialisTht[tl_membrana_timpani_telinga_kanan]" value="Lainnya">
                    Lainnya
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_membrana_timpani_telinga_kiri == 'Lainnya') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_membrana_timpani_telinga_kiri_2" name="McuSpesialisTht[tl_membrana_timpani_telinga_kiri]" value="Lainnya">
                    Lainnya
                </label>
            </td>
        </tr>
        <tr>
            <td rowspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="5" sdnum="1033;">
                <font color="#000000">5</font>
            </td>
            <td colspan="6" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000" style="font-weight: bold;">Tes Berbisik</font>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Jarak 6-5 Meter</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_test_berbisik_telinga_kanan_6',  ['id' => 'mcuspesialistht_tl_test_berbisik_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_test_berbisik_telinga_kanan_6 == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_test_berbisik_telinga_kanan_1" name="McuSpesialisTht[tl_test_berbisik_telinga_kanan_6]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_test_berbisik_telinga_kiri_6',  ['id' => 'mcuspesialistht_tl_test_berbisik_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_test_berbisik_telinga_kiri_6 == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_test_berbisik_telinga_kiri_1" name="McuSpesialisTht[tl_test_berbisik_telinga_kiri_6]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Jarak 4 Meter</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_test_berbisik_telinga_kanan_4',  ['id' => 'mcuspesialistht_tl_test_berbisik_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_test_berbisik_telinga_kanan_4 == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_test_berbisik_telinga_kanan_1" name="McuSpesialisTht[tl_test_berbisik_telinga_kanan_4]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_test_berbisik_telinga_kiri_4',  ['id' => 'mcuspesialistht_tl_test_berbisik_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_test_berbisik_telinga_kiri_4 == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_test_berbisik_telinga_kiri_1" name="McuSpesialisTht[tl_test_berbisik_telinga_kiri_4]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Jarak 3-2 Meter</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_test_berbisik_telinga_kanan_3',  ['id' => 'mcuspesialistht_tl_test_berbisik_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_test_berbisik_telinga_kanan_3 == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_test_berbisik_telinga_kanan_1" name="McuSpesialisTht[tl_test_berbisik_telinga_kanan_3]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_test_berbisik_telinga_kiri_3',  ['id' => 'mcuspesialistht_tl_test_berbisik_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_test_berbisik_telinga_kiri_3 == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_test_berbisik_telinga_kiri_1" name="McuSpesialisTht[tl_test_berbisik_telinga_kiri_3]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Jarak &ge; 1 Meter</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_test_berbisik_telinga_kanan_1',  ['id' => 'mcuspesialistht_tl_test_berbisik_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_test_berbisik_telinga_kanan_1 == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_test_berbisik_telinga_kanan_1" name="McuSpesialisTht[tl_test_berbisik_telinga_kanan_1]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_test_berbisik_telinga_kiri_1',  ['id' => 'mcuspesialistht_tl_test_berbisik_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_test_berbisik_telinga_kiri_1 == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_test_berbisik_telinga_kiri_1" name="McuSpesialisTht[tl_test_berbisik_telinga_kiri_1]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
        </tr>
        <tr>
            <td rowspan="6" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="5" sdnum="1033;">
                <font color="#000000">6</font>
            </td>
            <td colspan="6" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000" style="font-weight: bold;">Tes Garpu Tala</font>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Rinne</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_test_garpu_tala_rinne_telinga_kanan',  ['id' => 'mcuspesialistht_tl_test_garpu_tala_rinne_telinga_kanan_0', 'value' => 'Negatif (AC < BC)', 'label' => 'Negatif (AC < BC)']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_test_garpu_tala_rinne_telinga_kanan == 'Positif (AC > BC)') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_test_garpu_tala_rinne_telinga_kanan_1" name="McuSpesialisTht[tl_test_garpu_tala_rinne_telinga_kanan]" value="Positif (AC > BC)">
                    Positif (AC > BC)
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_test_garpu_tala_rinne_telinga_kiri',  ['id' => 'mcuspesialistht_tl_test_garpu_tala_rinne_telinga_kiri_0', 'value' => 'Negatif (AC < BC)', 'label' => 'Negatif (AC < BC)']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_test_garpu_tala_rinne_telinga_kiri == 'Positif (AC > BC)') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_test_garpu_tala_rinne_telinga_kiri_1" name="McuSpesialisTht[tl_test_garpu_tala_rinne_telinga_kiri]" value="Positif (AC > BC)">
                    Positif (AC > BC)
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Weber</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_weber_telinga_kanan',  ['id' => 'mcuspesialistht_tl_weber_telinga_kanan_0', 'value' => 'Tidak Ada Lateralisasi', 'label' => 'Tidak Ada Lateralisasi']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_weber_telinga_kanan == 'Lateralisasi Kanan') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_weber_telinga_kanan_1" name="McuSpesialisTht[tl_weber_telinga_kanan]" value="Lateralisasi Kanan">
                    Lateralisasi Kanan
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_weber_telinga_kiri',  ['id' => 'mcuspesialistht_tl_weber_telinga_kiri_0', 'value' => 'Tidak Ada Lateralisasi', 'label' => 'Tidak Ada Lateralisasi']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_weber_telinga_kiri == 'Lateralisasi Kiri') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_weber_telinga_kiri_1" name="McuSpesialisTht[tl_weber_telinga_kiri]" value="Lateralisasi Kiri">
                    Lateralisasi Kiri
                </label>
            </td>
        </tr>
        <tr>
            <td rowspan="2" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Swabach</font>
            </td>
            <td rowspan="2" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_swabach_telinga_kanan',  ['id' => 'mcuspesialistht_tl_swabach_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_swabach_telinga_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_swabach_telinga_kanan_1" name="McuSpesialisTht[tl_swabach_telinga_kanan]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_swabach_telinga_kiri',  ['id' => 'mcuspesialistht_tl_swabach_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_swabach_telinga_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_swabach_telinga_kiri_1" name="McuSpesialisTht[tl_swabach_telinga_kiri]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_swabach_telinga_kanan == 'Memendek') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_swabach_telinga_kanan_2" name="McuSpesialisTht[tl_swabach_telinga_kanan]" value="Memendek">
                    Memendek
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_swabach_telinga_kanan == 'Memanjang') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_swabach_telinga_kanan_3" name="McuSpesialisTht[tl_swabach_telinga_kanan]" value="Memanjang">
                    Memanjang
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_swabach_telinga_kiri == 'Memendek') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_swabach_telinga_kiri" name="McuSpesialisTht[tl_swabach_telinga_kiri]" value="Memendek">
                    Memendek
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_swabach_telinga_kiri == 'Memanjang') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_swabach_telinga_kiri" name="McuSpesialisTht[tl_swabach_telinga_kiri]" value="Memanjang">
                    Memanjang
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Bing</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_bing_telinga_kanan',  ['id' => 'mcuspesialistht_tl_bing_telinga_kanan_0', 'value' => 'Bertambah Keras', 'label' => 'Bertambah Keras']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_bing_telinga_kanan == 'Tidak Bertambah Keras') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_bing_telinga_kanan_1" name="McuSpesialisTht[tl_bing_telinga_kanan]" value="Tidak Bertambah Keras">
                    Tidak Bertambah Keras
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tl_bing_telinga_kiri',  ['id' => 'mcuspesialistht_tl_bing_telinga_kiri_0', 'value' => 'Bertambah Keras', 'label' => 'Bertambah Keras']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tl_bing_telinga_kiri == 'Tidak Bertambah Keras') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tl_bing_telinga_kiri_1" name="McuSpesialisTht[tl_bing_telinga_kiri]" value="Tidak Bertambah Keras">
                    Tidak Bertambah Keras
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="10" sdnum="1033;">
                <font color="#000000">7</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Lain-lain</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 align="center" valign=top>
                <?= $model->tl_lain_lain ?>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 height="19" align="center" valign=bottom>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000"><br></font>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 height="19" align="left" valign=top><b>
                    <font color="#000000">II. HIDUNG</font>
                </b>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="1" sdnum="1033;">
                <font color="#000000">1</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Meatus Nasi</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'hd_meatus_nasi',  ['id' => 'mcuspesialistht_hd_meatus_nasi_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->hd_meatus_nasi == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_hd_meatus_nasi_1" name="McuSpesialisTht[hd_meatus_nasi]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="2" sdnum="1033;">
                <font color="#000000">2</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Septum Nasi</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'hd_septum_nasi',  ['id' => 'hd_septum_nasi', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top colspan="3">
                <label>
                    <input <?= ($model->hd_septum_nasi == 'Deviasi ke') ? 'checked' : null ?> type="radio" id="hd_septum_nasi_1" name="McuSpesialisTht[hd_septum_nasi]" value="Deviasi ke">
                    Deviasi ke ...
                </label>
                <?= $model->hd_septum_nasi_lainnya ?>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="3" sdnum="1033;">
                <font color="#000000">3</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Konka Nasal</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'hd_konka_nasal',  ['id' => 'hd_konka_nasal', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top colspan="3">
                <label>
                    <input <?= ($model->hd_konka_nasal == 'Oedema Lubang Hidung') ? 'checked' : null ?> type="radio" id="hd_konka_nasal_1" name="McuSpesialisTht[hd_konka_nasal]" value="Oedema Lubang Hidung">
                    Oedema Lubang Hidung ...
                </label>
                <?= $model->hd_konka_nasal_lainnya ?>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="4" sdnum="1033;">
                <font color="#000000">4</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Nyeri Ketok Sinus maksilar</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'hd_nyeri_ketok_sinus_maksilar',  ['id' => 'hd_nyeri_ketok_sinus_maksilar', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top colspan="3">
                <label>
                    <input <?= ($model->hd_nyeri_ketok_sinus_maksilar == 'Nyeri Tekan Positif di') ? 'checked' : null ?> type="radio" id="hd_nyeri_ketok_sinus_maksilar_1" name="McuSpesialisTht[hd_nyeri_ketok_sinus_maksilar]" value="Nyeri Tekan Positif di">
                    Nyeri Tekan Positif di ...
                </label>
                <?= $model->hd_nyeri_ketok_sinus_maksilar_lainnya ?>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="5" sdnum="1033;">
                <font color="#000000">5</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Penciuman</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'hd_penciuman',  ['id' => 'mcuspesialistht_hd_penciuman_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->hd_penciuman == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_hd_penciuman_1" name="McuSpesialisTht[hd_penciuman]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="6" sdnum="1033;">
                <font color="#000000">6</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Lain-lain</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 align="center" valign=top>
                <?= $model->hd_lain_lain ?>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 height="19" align="center" valign=bottom>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000"><br></font>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 height="19" align="left" valign=top><b>
                    <font color="#000000">III. TENGGOROKAN</font>
                </b>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="1" sdnum="1033;">
                <font color="#000000">1</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Pharynx</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tg_pharynx',  ['id' => 'mcuspesialistht_tg_pharynx_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tg_pharynx == 'Hiperemis') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tg_pharynx_1" name="McuSpesialisTht[tg_pharynx]" value="Hiperemis">
                    Hiperemis
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tg_pharynx == 'Granulasi') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tg_pharynx_2" name="McuSpesialisTht[tg_pharynx]" value="Granulasi">
                    Granulasi
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="2" sdnum="1033;">
                <font color="#000000">2</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Tonsil</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                    Kanan : <?php
                            echo 'T0 T1 T2 T3';
                            ?>
                </b>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                    Kiri : <?php
                            echo 'T0 T1 T2 T3';
                            ?>
                </b>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="3" sdnum="1033;">
                <font color="#000000">3</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Ukuran</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tg_ukuran_kanan',  ['id' => 'mcuspesialistht_tg_ukuran_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tg_ukuran_kanan == 'Hiperemis') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tg_ukuran_kanan_1" name="McuSpesialisTht[tg_ukuran_kanan]" value="Hiperemis">
                    Hiperemis
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tg_ukuran_kiri',  ['id' => 'mcuspesialistht_tg_ukuran_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tg_ukuran_kiri == 'Hiperemis') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tg_ukuran_kiri_1" name="McuSpesialisTht[tg_ukuran_kiri]" value="Hiperemis">
                    Hiperemis
                </label>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="4" sdnum="1033;">
                <font color="#000000">4</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Palatum</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <?= Html::activeRadio($model, 'tg_palatum',  ['id' => 'mcuspesialistht_tg_palatum_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <label>
                    <input <?= ($model->tg_palatum == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mcuspesialistht_tg_palatum_1" name="McuSpesialisTht[tg_palatum]" value="Tidak Normal">
                    Tidak Normal
                </label>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000"><br></font>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=middle sdval="5" sdnum="1033;">
                <font color="#000000">5</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                <font color="#000000">Lain-lain</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 align="center" valign=top>
                <?= $model->tg_lain_lain ?>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 height="19" align="center" valign=bottom>
                <font color="#000000"><br></font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top>
                <font color="#000000"><br></font>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 height="58" align="left" valign=middle><b>
                    <font color="#000000">IV. AUDIOMETRI</font>
                </b>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom>
                <?= $model->audiometri ?>
            </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 height="58" align="left" valign=middle><b>
                    <font color="#000000">IV. AUDIOMETRI</font>
                </b>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                <font color="#000000">:</font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom>
                <?= $model->audiometri ?>
            </td>
        </tr>
    </table>

    <table style="width: 100%; margin-top: 10px;">
        <tbody>
            <tr>
                <td style="width: 60%;"></td>
                <td>
                    PEKANBARU, <?= Yii::$app->formatter->asDate(date('Y-m-d'), 'php:d F Y') ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: center;">
                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    DOKTER PEMERIKSA
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: center;">
                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    <br><br><br><br>
                    Nama Dokter
                </td>
            </tr>
        </tbody>
    </table>

</div>

<?php

$this->registerJs($this->render('periksa.js'));