<div class="row">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header"><i class="fa fa-book"></i> <strong>Data Permintaan </strong></div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td class="tdstyle" width="160">Nomor Tiket</td>
                        <td width="5">:</td>
                        <td><?=$id->nomor_request?></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Jenis Kebutuhan</td>
                        <td>:</td>
                        <td><?=$this->l_app_head->jenis_kebutuhan($id->jenis_kebutuhan)?></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Jenis Lokasi</td>
                        <td>:</td>
                        <td><?=$this->l_app_head->jenis_lokasi($id->jenis_lokasi)?></td>
                    </tr>
                    <?php if ($id->jns_pemesan==1){ ?>
                    <tr>
                        <td class="tdstyle">Perusahaan</td>
                        <td>:</td>
                        <td><?=$this->m_app_head->nama_perusahaan($id->id_perusahaan)?></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Departement</td>
                        <td>:</td>
                        <td><?=$this->m_app_head->nama_divisi($id->id_departement)?></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Nomor Induk</td>
                        <td>:</td>
                        <td><?=$id->nik_karyawan?></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Nama Lengkap</td>
                        <td>:</td>
                        <td><?=$this->m_app_head->nama_driver($id->nik_karyawan)?></td>
                    </tr>
                    <?php } else {?>
                    <tr>
                        <td class="tdstyle">Nama Tamu</td>
                        <td>:</td>
                        <td><?=$id->nama_lengkap?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td class="tdstyle">Nomor Handphone</td>
                        <td>:</td>
                        <td><?=$id->no_hp?></td>
                    </tr>
                    <?php if ($id->kategori==3) {
                        if ($id->jns_booking==1) {?>
                            <tr>
                                <td class="tdstyle">Tanggal Jadwal</td>
                                <td>:</td>
                                <td><?=date('d-m-Y',strtotime($id->dari_tanggal))?></td>
                            </tr>
                            <tr>
                                <td class="tdstyle">Dari Pukul</td>
                                <td>:</td>
                                <td><?=$id->dari_jam?></td>
                            </tr>
                            <tr>
                                <td class="tdstyle">Sampai Pukul</td>
                                <td>:</td>
                                <td><?=$id->sampai_jam?></td>
                            </tr>
                        <?php } else { ?>
                            <tr>
                                <td class="tdstyle">Dari Tanggal</td>
                                <td>:</td>
                                <td><?=date('d-m-Y',strtotime($id->dari_tanggal))?></td>
                            </tr>
                            <tr>
                                <td class="tdstyle">Sampai Tanggal</td>
                                <td>:</td>
                                <td><?=date('d-m-Y',strtotime($id->sampai_tanggal))?></td>
                            </tr>
                    <?php } } else { ?>
                    <tr>
                        <td class="tdstyle">Jumlah Penumpang</td>
                        <td>:</td>
                        <td><?=$id->jml_penumpang?> Orang</td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Tanggal Jadwal</td>
                        <td>:</td>
                        <td><?=date('d-m-Y',strtotime($id->dari_tanggal))?></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Lokasi Penjemputan</td>
                        <td>:</td>
                        <td><?=$id->lokasi_jemput?></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Jam Penjemputan</td>
                        <td>:</td>
                        <td><?=$id->dari_jam?></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Lokasi Keberangkatan</td>
                        <td>:</td>
                        <td><?=$this->m_app_head->lokasi($id->lokasi_awal)?></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Lokasi Tujuan</td>
                        <td>:</td>
                        <td><?=$this->m_app_head->lokasi($id->lokasi_tujuan)?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td class="tdstyle" style="vertical-align: top;">Keterangan</td>
                        <td style="vertical-align: top;">:</td>
                        <td style="vertical-align: top;"><?=$id->keterangan?></td>
                    </tr>
                     <tr>
                        <td class="tdstyle">Status</td>
                        <td><center>:</center></td>
                        <td><?=$this->l_app_head->status($id->status_request)?></td>
                    </tr>
                    <?php if ($id->status_request==4) { ?>
                    <tr>
                        <td class="tdstyle" style="vertical-align: top;">Keterangan</td>
                        <td style="vertical-align: top;">:</td>
                        <td style="vertical-align: top;"><?=$id->ket_cancel?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <?php 
        $kategori = $id->kategori;
        $jns_booking = $id->jns_booking;
        if ($kategori==3 AND $jns_booking==2) {?>
            <div class="card">
                <div class="card-header"><i class="fa fa-check"></i> <strong>Approval Direktur </strong></div>
                <div class="card-body">
                    <?php if ($id->apr_dir!=0) {?>
                        <table class="table">
                            <tr>
                                <td><?=$this->l_app_head->approve($id->apr_dir)?></td>
                            </tr>
                            <tr>
                                <td><?php if ($id->apr_dir_tgl==0000-00-00){ echo '';} else { echo date('d-m-Y',strtotime($id->apr_dir_tgl)); }?></td>
                            </tr>
                            <tr>
                                <td><?=$id->apr_dir_ket?></td>
                            </tr>
                        </table>
                    <?php } ?>
                </div>
            </div><br>
        <?php } else {?>
            <div class="card">
                <div class="card-header"><i class="fa fa-car"></i> <strong>Informasi Sopir </strong></div>
                <div class="card-body">
                    <?php 
                        $id_driver= $id->id_driver;
                        $id_kendaraan= $id->id_kendaraan;
                        if ($id_kendaraan!=0 OR $id_driver!=0){
                    ?>
                    <table class="table">
                        <tr>
                            <td><b><?=$this->m_app_head->plat($id->id_kendaraan).' ('.$this->m_app_head->no_internal($id->id_kendaraan).')'?></b></td>
                        </tr>
                        <tr>
                            <td><?php $nik=$this->m_app_head->nik_driver($id->id_driver); echo $this->m_app_head->nama_driver($nik);?></td>
                        </tr>
                        <tr>
                            <td><?=$this->m_app_head->no_hp($id->id_driver)?></td>
                        </tr>
                    </table>
                <?php } ?>
                </div>
            </div><br>
        <?php } ?>
        <div class="card">
            <div class="card-header"><i class="fa fa-check"></i> <strong>Approval Head Departement </strong></div>
            <div class="card-body">
                <?php if ($id->apr_spv!=0) {?>
                <table class="table">
                    <tr>
                        <td><?=$this->l_app_head->approve($id->apr_spv)?></td>
                    </tr>
                    <tr>
                        <td><?php if ($id->apr_spv_tgl==0000-00-00){ echo '';} else { echo date('d-m-Y',strtotime($id->apr_spv_tgl)); }?></td>
                    </tr>
                    <tr>
                        <td><?=$id->apr_spv_ket?></td>
                    </tr>
                </table>
            <?php } ?>
            </div>
        </div><br>
        <div class="card">
            <div class="card-header"><i class="fa fa-check"></i> <strong>Approval Administrator GA </strong></div>
            <div class="card-body">
                <?php if ($id->apr_ga!=0) {?>
                <table class="table">
                    <tr>
                        <td><?=$this->l_app_head->approve($id->apr_ga)?></td>
                    </tr>
                    <tr>
                        <td><?php if ($id->apr_ga_tgl==0000-00-00){ echo '';} else { echo date('d-m-Y',strtotime($id->apr_ga_tgl)); }?></td>
                    </tr>
                    <tr>
                        <td><?=$id->apr_ga_ket?></td>
                    </tr>
                </table>
            <?php } ?>
            </div>
        </div>
    </div>
</div>