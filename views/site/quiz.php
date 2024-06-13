<?php

use yii\bootstrap5\Alert;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'TPA';
?>

<body>
    <style>
        .ck-editor__editable[role="textbox"] {
            /* Editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* Block images */
            max-width: 50%;
            margin: 20px auto;
        }
    </style>
    <?php if (Yii::$app->session->hasFlash('success')) : ?>
        <?= Alert::widget([
            'options' => [
                'class' => 'alert-success',
            ],
            'body' => Yii::$app->session->getFlash('success'),
        ]) ?>
    <?php elseif (Yii::$app->session->hasFlash('error')) : ?>
        <?= Alert::widget([
            'options' => [
                'class' => 'alert-danger',
            ],
            'body' => Yii::$app->session->getFlash('error'),
        ]) ?>
    <?php endif; ?>
    <form action="/site/submitquiz?quiz=<?= $quiz ?>" id="formquiz" method="post" class="rows card p-5">
    <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken) ?>
        
        <header class="w-full">
            <p class="text-center fs-1 fw-semibold">Tes TPA</p>
            <p class="text-end fs-5">Sisa Waktu : <span class="fw-semibold" id="durasi_pengerjaan"></span></p>
        </header>
        <div class="d-flex flex-column gap-5 py-3">
            <input type="hidden" name="idquiz" value="<?= $data['id'] ?>">
            <div class="d-flex flex-column gap-3">
                <?php
                    $a = 0;
                foreach ($combined as $key => $question) {
                    $number = $key + 1;
                ?>
                    <p class="fs-4 fw-medium"><?= $number . '.  ' . $question['pertanyaan'] ?></p>

                    <div class="d-flex flex-column gap-1 px-3">
                        <?php if ($question['tipe_pertanyaan'] == 'pilihan_ganda') {
                            $key = 0;
                            foreach ($question['answers'] as $answer) {
                                $uniqueKey = $question['id'] . '_' . $answer['id']; ?>

                                <div class="form-check d-flex align-items-center gap-3">
                                    <input class="form-check-input fs-6 mb-2" name="jawaban[<?= $a; ?>]" type="radio" value="<?= $answer['id'] ?>" id="option<?= $uniqueKey ?>">
                                    <label class="form-check-label fs-5" for="option<?= $uniqueKey ?>"><?= $answer['jawaban'] ?></label>
                                </div>
                            <?php $key++;
                            }
                            $a++;
                        } else { ?>
                            <div class="d-flex flex-column gap-1 px-3" style="min-height: 100px;">
                                <input type="hidden" value="<?= $question['id'] ?>" name="soalessay[]">
                                <textarea id="editor" class="form-control h-100" name="jawaban_essay[]" rows="3"></textarea>
                            </div>

                        <?php } ?>
                    </div>
                <?php  } ?>


            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">

            <button type="button" class="btn btn-success fs-3 px-4 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-3" id="exampleModalLabel">Apakah Anda Yakin Ingin Mensubmit
                                Jawaban?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body fs-5">Periksa Kembali Jawaban Anda Sebelum Melakukan Submit, Quiz
                            Tidak
                            Bisa Dilanjutkan Kembali/Diulang Apabila Anda Melakukan Submit Jawaban</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                            <button type="button" class="btn btn-primary" id="submitform" type="submit">Yakin</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="selesai" id="status" name="status">

    </form>
    </container>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        setInterval(fecthWaktu, 1000);

        function fecthWaktu() {
            $.ajax({
                url: '/site/getwaktu',
                type: 'GET',
                data: {
                    id: <?= json_encode($data['id']) ?>
                },
                success: function(data) {
                    if (data !== '00:00:00') {
                        $('#durasi_pengerjaan').text(data);
                    } else {
                        var status = document.getElementById('status')
                        status.value = "belum"
                        document.getElementById("formquiz").submit();
                    }
                    console.log(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        }
        document.getElementById('submitform').addEventListener('click', function() { 
            // Submit the form
            this.disbled = true;
            document.getElementById('formquiz').submit();
        });
    </script>

</body>