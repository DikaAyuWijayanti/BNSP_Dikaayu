<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <left><font size="+3" face="arial">Arsip Surat</font></left>
                    <br><left>Berikut ini adalah surat - surat yang telah terbit dan diarsipkan,</left>
                    <br><left>Klik "Lihat" Pada kolom aksi untuk menampilkan surat</left></br>
                    <div class="panel panel-default">
                        <!--<div class="panel-heading">
                             Data Anggota!-->
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div>
                           <!-- <a href="?page=anggota&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>!-->
                            </div><br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nomor Surat</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Waktu Pengarsipan</th>
                                            <th width="30%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_anggota");

                                            while ($data= $sql->fetch_assoc()) {
                                                
                                        ?>

                                        <tr>
                                            <td><?php echo $data['nomor_surat'];?></td>
                                            <td><?php echo $data['kategori'];?></td>
                                            <td><?php echo $data['judul'];?></td>
                                            <td><?php echo $data['waktu_pengarsipan'];?></td>
                                            <td>
                                            
                                                <a onclick="return confirm('Apakah Anda yakin ingin menghapus arsip surat ini?')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nomor_surat']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                                                 <a href="download.php?nomor_surat=<?php echo $row["nomor_surat"]; ?>" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-cog"></span> Unduh</a>
                                                  <a href="lihat.php?nomor_surat=<?php echo $row['nomor_surat'];?>"><button class="btn btn-primary"> Lihat>></button></a>
                                            </td>
                                        </tr>


                                        <?php  } ?>
                                    </tbody>
<a href="?page=buku&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Arsipkan Surat</a>
                                    </table>

                                  </div>
                        </div>
                     </div>
                   </div>
     </div>                           