<div class="jumbotron text-center bg-transparent mt-5 mb-5">
    <h1 class="display-4">Ujian Online Magang PPKS</h1>
    <hr>

    <p class="lead">TPA</p>
    <?php if($checkujian): ?>
        <?php if($checkujian['waktu_selesai'] !== '00:00:00'): ?>
            <p><a class="btn btn-lg btn-success" href="site/quiz">Lanjutkan Ujian</a></p>
        <?php else: ?>
            <p><button class="btn btn-lg btn-secondary" disabled>Anda Sudah Melakukan Ujian</button></p>
        <?php endif; ?>
    <?php else: ?>
        <p><a class="btn btn-lg btn-success" href="site/quiz">Mulai Ujian</a></p>
    <?php endif; ?>

    <p class="lead">Tes Bidang</p>
    <?php if($checkujian2): ?>
        <?php if($checkujian2['waktu_selesai'] !== '00:00:00'): ?>
            <p><a class="btn btn-lg btn-success" href="site/tps">Lanjutkan Ujian</a></p>
        <?php else: ?>
            <p><button class="btn btn-lg btn-secondary" disabled>Anda Sudah Melakukan Ujian</button></p>
        <?php endif; ?>
    <?php else: ?>
        <p><a class="btn btn-lg btn-success" href="site/tps">Mulai Ujian</a></p>
    <?php endif; ?>
</div>