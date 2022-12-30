<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header bg-danger text-white">

                    <center> SURAT MASUK (PERMINTAAN PKL) </center>

                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thred>
                            <tr>
                                <th>
                                    <center>KODE</center>
                                </th>
                                <th>
                                    <center>NAMA PENGIRIM</center>
                                </th>
                                <th>
                                    <center>TANGGAL MASUK SURAT</center>
                                </th>

                            </tr>
                        </thred>
                        <tbody>
                            <?php $kode = 1;
                            foreach ($smasuk as $smasuk) : ?>
                                <tr>
                                    <th scope="row"><?= $kode++ ?></th>
                                    <td>
                                        <center><?= $smasuk['kode'] ?>
                                    </td>
                                    <center><?= $smasuk['nama'] ?>
                                        </td>
                                    </center>
                                    <td>
                                        <center><?= $smasuk['tanggal'] ?>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>