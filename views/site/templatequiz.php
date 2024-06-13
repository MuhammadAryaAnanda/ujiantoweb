<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Navigasi Soal';
?>

<div class="row">
    <div class="col-sm-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Navigasi Soal</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body text-center" id="tampil_jawaban">
                <!-- Navigasi Soal -->
                <p><a href="#soal1">Soal 1</a></p>
                <p><a href="#soal2">Soal 2</a></p>
                <p><a href="#soal3">Soal 3</a></p>
                <!-- Tambahkan navigasi soal lainnya di sini -->
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <?php $form = ActiveForm::begin([
            'id' => 'ujian-form',
            'options' => ['enctype' => 'multipart/form-data'],
        ]); ?>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="badge bg-blue">Soal #<span id="soalke">1</span></span></h3>
                <div class="box-tools pull-right">
                    <span class="badge bg-red">Sisa Waktu <span class="sisawaktu" data-time="2024-12-31 23:59:59"></span></span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <!-- Contoh Soal dan Jawaban -->
                <div id="soal1">
                    <p>Soal 1: Apa ibu kota Indonesia?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban[1]" id="jawaban1a" value="Jakarta">
                        <label class="form-check-label" for="jawaban1a">Jakarta</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban[1]" id="jawaban1b" value="Bandung">
                        <label class="form-check-label" for="jawaban1b">Bandung</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban[1]" id="jawaban1c" value="Surabaya">
                        <label class="form-check-label" for="jawaban1c">Surabaya</label>
                    </div>
                </div>

                <div id="soal2">
                    <p>Soal 2: Siapa presiden pertama Indonesia?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban[2]" id="jawaban2a" value="Soekarno">
                        <label class="form-check-label" for="jawaban2a">Soekarno</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban[2]" id="jawaban2b" value="Suharto">
                        <label class="form-check-label" for="jawaban2b">Suharto</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban[2]" id="jawaban2c" value="Habibie">
                        <label class="form-check-label" for="jawaban2c">Habibie</label>
                    </div>
                </div>

                <div id="soal3">
                    <p>Soal 3: Apa mata uang Indonesia?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban[3]" id="jawaban3a" value="Rupiah">
                        <label class="form-check-label" for="jawaban3a">Rupiah</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban[3]" id="jawaban3b" value="Ringgit">
                        <label class="form-check-label" for="jawaban3b">Ringgit</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban[3]" id="jawaban3c" value="Dolar">
                        <label class="form-check-label" for="jawaban3c">Dolar</label>
                    </div>
                </div>
                <!-- Tambahkan soal dan jawaban lainnya di sini -->
            </div>
            <div class="box-footer text-center">
                <a class="action back btn btn-info" rel="0" onclick="return back();"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                <a class="ragu_ragu btn btn-warning" rel="1" onclick="return tidak_jawab();">Ragu-ragu</a>
                <a class="action next btn btn-info" rel="2" onclick="return next();"><i class="glyphicon glyphicon-chevron-right"></i> Next</a>
                <a class="selesai action submit btn btn-danger" onclick="return simpan_akhir();"><i class="glyphicon glyphicon-stop"></i> Selesai</a>
                <?= Html::hiddenInput('jml_soal', 3, ['id' => 'jml_soal']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<script type="text/javascript">
    var base_url = "<?= Yii::$app->request->baseUrl ?>";
    var id_tes = "1"; // ID tes manual
    var widget = $(".step");
    var total_widget = widget.length;

    function back() {
        // Logika untuk kembali ke soal sebelumnya
        alert('Back button clicked');
        return false;
    }

    function tidak_jawab() {
        // Logika untuk menandai soal sebagai ragu-ragu
        alert('Ragu-ragu button clicked');
        return false;
    }

    function next() {
        // Logika untuk lanjut ke soal berikutnya
        alert('Next button clicked');
        return false;
    }

    function simpan_akhir() {
        // Logika untuk menyimpan jawaban akhir
        alert('Selesai button clicked');
        return false;
    }
</script>

<?php
$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/dist/js/app/ujian/sheet.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
