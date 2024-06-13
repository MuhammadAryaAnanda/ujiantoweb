<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Administrator';
$this->title = 'Data Administrator';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administrator-index">
    <h6 class="mb-0 text-uppercase"><?= Html::encode($this->title); ?></h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <?php echo $this->render('@app/views/layouts/components/headpage.php');
            ?>
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataProvider->models as $index => $model) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= Html::encode($model->nama) ?></td>
                                <td><?= Html::encode($model->tanggal_lahir) ?></td>
                                <td><?= Html::encode($model->email) ?></td>
                                <td><?= Html::encode($model->alamat) ?></td>
                                <td><?= Html::encode($model->nomor_telepon) ?></td>
                                <td><?= Html::encode($model->foto) ?></td>
                                <td>
                                    <?= Html::a('<i class="fadeIn animated bx bx-search-alt-2"></i>', ['view', 'id' => $model->id], ['class' => 'btn btn-outline-info px-1', 'title' => 'View']) ?>
                                    <?= Html::a('<i class="fadeIn animated bx bx-edit"></i>', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-success px-1', 'title' => 'Edit']) ?>
                                    <?= Html::a('<i class="fadeIn animated bx bx-trash"></i>', '#', [
                                        'class' => 'btn btn-outline-danger px-1',
                                        'title' => 'Delete',
                                        'data-toggle' => 'modal',
                                        'data-target' => '#deleteModal',
                                        'data-url' => Url::to(['administrator/delete', 'id' => $model->id]),
                                    ]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php echo $this->render('@app/views/layouts/components/footpage.php'); ?>