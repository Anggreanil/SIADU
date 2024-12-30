<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuan Flyer Saya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/user/tabel.css">
</head>

<body>
    <?php include "ajuan-flyer-saya-tabel.php"; ?>

    <?php include "head.php"; ?>
    <?php include "navbar-user.php"; ?>

    <div class="container">
        <div id="content">
            <div style="text-align: center">
                <h2 style="color:#57ae6c" class="h3 mb-2">AJUAN FLYER SAYA</h2>
            </div>
        </div>
        <br>
        <div class="table-responsive">
            <table id="lookup" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="text-align: center;">No Ajuan</th>
                        <th style="text-align: center;">Tanggal Ajuan</th>
                        <th style="text-align: center;">Jenis Ajuan</th>
                        <th style="text-align: center;">Surat Permohonan</th>
                        <th style="text-align: center;">Flyer</th>
                        <th style="text-align: center;">Deskripsi Flyer</th>
                        <th style="text-align: center;">Status Permohonan</th>
                        <th style="text-align: center;">Status Ajuan</th>
                        <th style="text-align: center;">Bukti Penyelesaian</th>
                        <th style="text-align: center;">Tanggal Penyelesaian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_array($hasil)) { $no++; ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data["tanggal_ajuan"]; ?></td>
                            <td><?php echo $data["jenis_ajuan"]; ?></td>
                            <td>
                                <?php
                                $surat_permohonan = $data['surat_permohonan'];
                                $surat_permohonan_base64 = base64_encode($surat_permohonan);
                                ?>
                                <form action="view-pdf.php" method="post" target="_blank">
                                    <input type="hidden" name="pdf_data" value="<?php echo $surat_permohonan_base64; ?>">
                                    <button style="border: none; background-color: transparent; color: blue;" type="submit">
                                        <i class="fas fa-file-pdf text-danger"></i> Lihat File
                                    </button>
                                </form>
                            </td>
                            <td>
                                <?php if ($data["jenis_ajuan"] !== "buat flyer") { ?>
                                    <a href="view-foto-ajuan.php?id=<?php echo $data['id_ajuan']; ?>" target="_blank" class="btn btn-photo">
                                        <button style="border: none; background-color: transparent; color: blue;" type="button">
                                            <i class="fas fa-image text-danger"></i> Lihat Flyer
                                        </button>
                                    </a>
                                <?php } ?>
                            </td>
                            <td><?php echo $data["deskripsi_iklan"]; ?></td>
                            <td>
                                <center>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetailStatusPermohonan_<?php echo $data['id_ajuan']; ?>">
                                        <i class="fa fa-eye"></i> Cek Status
                                    </button>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetail_<?php echo $data['id_ajuan']; ?>">
                                        <i class="fa fa-eye"></i> Cek Status
                                    </button>
                                </center>
                            </td>
                            <td>
                                <?php if ($data["status_ajuan"] == "selesai" && !empty($data["bukti_penyelesaian"])) { ?>
                                    <a href="view-foto-ajuan-penyelesaian.php?id=<?php echo $data['id_ajuan']; ?>" target="_blank" class="btn btn-photo">
                                        <button style="border: none; background-color: transparent; color: blue;" type="button">
                                            <i class="fas fa-image text-danger"></i> Bukti Penyelesaian
                                        </button>
                                    </a>
                                <?php } ?>
                            </td>
                            <td><?php echo htmlspecialchars($data["tanggal_selesai"], ENT_QUOTES, 'UTF-8'); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modals Detail Status Permohonan -->
    <?php mysqli_data_seek($hasil, 0); // Reset pointer to start of result set ?>
    <?php while ($data = mysqli_fetch_array($hasil)) { ?>
        <div class="modal fade" id="modalDetailStatusPermohonan_<?php echo $data['id_ajuan']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailStatusPermohonanLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDetailStatusPermohonanLabel">Detail Status Permohonan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php if ($data["status_permohonan"] == "ditolak") { ?>
                            <a style="color: black;">Status Permohonan:</a> <br>
                            <p style="color: red;">Ditolak</p>
                            
                            <p style="color: black;">Catatan: <br> Flyer yang diajukan belum memenuhi kriteria iklan layanan masyarakat.</p>
                        <?php } else { ?>
                            <a style="color: black;">Status Permohonan:</a> <br>
                            <p style="color: green;">Diterima</p>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Modals Detail Ajuan Flyer -->
    <?php mysqli_data_seek($hasil, 0); // Reset pointer to start of result set ?>
    <?php while ($data = mysqli_fetch_array($hasil)) { ?>
        <div class="modal fade" id="modalDetail_<?php echo $data['id_ajuan']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDetailLabel">Detail Status Ajuan Flyer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="track">
                            <div class="step <?php echo ($data["status_ajuan"] == "menunggu konfirmasi" || $data["status_ajuan"] == "diproses" || $data["status_ajuan"] == "selesai") ? "active" : ""; ?>">
                                <span class="icon"><i class="fa fa-hourglass-half"></i></span>
                                <span class="text">Menunggu Konfirmasi</span>
                            </div>
                            <div class="step <?php echo ($data["status_ajuan"] == "diproses" || $data["status_ajuan"] == "selesai") ? "active" : ""; ?>">
                                <span class="icon"><i class="fa fa-spinner"></i></span>
                                <span class="text">Diproses</span>
                            </div>
                            <div class="step <?php echo ($data["status_ajuan"] == "selesai") ? "active" : ""; ?>">
                                <span class="icon"><i class="fa fa-check"></i></span>
                                <span class="text">Selesai</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Footer -->
    <?php include "footer.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>
