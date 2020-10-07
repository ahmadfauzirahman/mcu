<?php

use yii\helpers\Url;

?>
<li class="text-muted menu-title">Pemeriksaan Spesialis</li>
<li>
    <a href="<?= Url::to(['/spesialis-gigi/periksa']) ?>" class="waves-effect"><i class="fas fa-tooth"></i> <span> Gigi </span> </a>
</li>
<li>
    <a href="<?= Url::to(['/spesialis-mata/periksa']) ?>" class="waves-effect"><i class="fas fa-eye"></i> <span> Mata </span> </a>
</li>
<li class="has_sub">
    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-folder-search"></i> <span> THT </span> <span class="menu-arrow"></span></a>
    <ul class="list-unstyled">
        <li>
            <a href="<?= Url::to(['/spesialis-audiometri/periksa']) ?>"">Audiometri</a>
        </li>
        <li>
            <a href=" <?= Url::to(['/spesialis-tht/periksa-berbisik']) ?>"">Tes Berbisik</a></li>
        <li>
            <a href="<?= Url::to(['/spesialis-tht/periksa-garpu-tala']) ?>"">Tes Garpu Tala</a>
        </li>
    </ul>
</li>