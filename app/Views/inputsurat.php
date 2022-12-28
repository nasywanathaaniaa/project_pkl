<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header bg-danger text-white">

                    <center> INPUT SURAT JAWABAN PKL </center>

                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thred>
                            <tr>
                                <th>
                                    <center>Nomor</center>
                                </th>
                                <th>
                                    <center>Tanggal</center>
                                </th>
                                <th>
                                    <center>Perihal</center>
                                </th>
                                <th>
                                    <center>Nama Anggota Pertama</center>
                                </th>
                                <th>
                                    <center>Nama Anggota Kedua</center>
                                </th>
                                <th>
                                    <center>Nama Anggota Ketiga</center>
                                </th>
                                <th>
                                    <center>Bidang</center>
                                </th>
                                <th>
                                    <center>Nama Pembimbing</center>
                                </th>
                            </tr>
                        </thred>
                        <tbody>
                            <?php
                            foreach ($surat as $surat) : ?>
                                <tr>
                                    <th scope="row"></th>
                                    <center><?= $surat['nomor_surat'] ?>
                                        </td>
                                    </center>
                                    <td>
                                        <center><?= $surat['tanggal_surat'] ?>
                                    </td>
                                    <td>
                                        <center><?= $surat['perihal'] ?>
                                    </td>
                                    <td>
                                        <center><?= $surat['nama1'] ?>
                                    </td>
                                    <td>
                                        <center><?= $surat['nama2'] ?>
                                    </td>
                                    <td>
                                        <center><?= $surat['nama3'] ?>
                                    </td>
                                    <td>
                                        <center><?= $surat['bidang'] ?>
                                    </td>
                                    <td>
                                        <center><?= $surat['pembimbing'] ?>
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