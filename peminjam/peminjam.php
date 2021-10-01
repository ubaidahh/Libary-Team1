
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Peminjam
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $sql = $koneksi->query("select * from tb_peminjam");

                                            while ($data=$sql->fetch_assoc()) {

                                           
                                        ?>

                                        </tr>
                                            <td><?php echo $data['nis'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['kelas'];?></td>
                                            <td><?php echo $data['jenis_kelamin'];?></td>
                                            <td>
                                                <a href="?page=peminjam&aksi=ubah&nis=<?php echo $data['nis']; ?>" class="btn btn-info" >Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')" href="?page=peminjam&aksi=hapus&nis=<?php echo $data['nis']; ?>" class="btn btn-danger" >Hapus</a>

                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    <tbody>

                                    </table>

                                  </div>

                                <a href="?page=peminjam&aksi=tambah" class="btn btn-primary" style="margin-top: 8px;">Tambah Data</a>

                                <a href="./laporan/laporan_peminjam_excel.php" target="blank"  class="btn btn-default" style="margin-top: 8px"><i class="fa fa-print"></i> ExportToExcel</a>

                        </div>
                      </div>
                    </div>
    </div>                                  