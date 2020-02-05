<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>DOKTER LIST</h3>
            </div>           
        </div>

        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">          
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Darah</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>Telpon</th>
                                <th>Status</th>
                                <th>Spesialis</th>
                                <th>Alumni</th>
                                <th>Izin Praktek</th>                         
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($dokter_all as $dokter) {?>
                            <tr>
                                <td><?php echo $dokter['kd_dokter'] ?></td>
                                <td><?php echo $dokter['nm_dokter'] ?></td>
                                <td><?php echo $dokter['jk'] ?></td>                                   
                                <td><?php echo $dokter['tmp_lahir'] ?></td>
                                <td><?php echo $dokter['tgl_lahir'] ?></td>
                                <td><?php echo $dokter['gol_drh'] ?></td>
                                <td><?php echo $dokter['agama'] ?></td>
                                <td><?php echo $dokter['almt_tgl'] ?></td>
                                <td><?php echo $dokter['no_telp'] ?></td>
                                <td><?php echo $dokter['stts_nikah'] ?></td>
                                <td><?php echo $dokter['nm_sps'] ?></td>
                                <td><?php echo $dokter['alumni'] ?></td>
                                <td><?php echo $dokter['no_ijn_praktek'] ?></td>                       
                            </tr>
                            <?php } ?>  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>           
    </div>
</div>
        
<!-- /page content -->