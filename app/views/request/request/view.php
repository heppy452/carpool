<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <?php if(!empty($panel)){echo $panel;}?>
                </div>
                <div class="card-body">
                    <?php
                        $level_user = $this->session->userdata('sess_level');
                        if ($level_user==5){
                    ?>
                    <button id="add_btn" class="btn btn-default"><i class="fa fa-user-plus"></i> Tambah Data</button><hr>
                    <?php } ?>
                    <table class="table table-bordered table-hover" id="tabel_custom">
                        <thead>
                            <tr>
                                <th>Nomor Tiket</th>
                                <th>Waktu Penjemputan</th>
                                <th>Jenis Kebutuhan</th>
                                <th>Lokasi Awal</th>
                                <th>Lokasi Tujuan</th>
                                <th>Approval Atasan</th>
                                <th>Approval GA</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="popup_menu" class="popup_box">
    <button class="btn btn-default btn-block" id="edit_btn"><i class="ion-edit"></i>&nbsp;&nbsp;Ubah</button>
    <button class="btn btn-default btn-block" id="delete_btn"><i class="ion-trash-a"></i>&nbsp;&nbsp;Hapus</button>
    <button class="btn btn-default btn-block" id="reset_btn"></i>&nbsp;&nbsp;Tampil</button>
</div>