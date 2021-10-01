<a href="?page=transaksi&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Judul</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Terlambat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php

                                    		$sql = $koneksi->query("select * from tb_transaksi where status='pinjam'");

                                    		while ($data=$sql->fetch_assoc()) {


                                    	?>

                                    	</tr>
                                    		<td><?php echo $no++; ?></td>
                                    		<td><?php echo $data['nis'];?></td>
                                    		<td><?php echo $data['nama'];?></td>
                                    		<td><?php echo $data['judul'];?></td>
                                    		<td><?php echo $data['tanggal_pinjam'];?></td>
                                    		<td><?php echo $data['tanggal_pengembalian'];?></td>
                                    		<td>

                                    			<?php

                                    				$denda = 1000;

                                    				$tgl_deadline = $data['tanggal_pengembalian'];
                                    				$tanggal_pengembalian = date('Y-m-d');

                                    				$lambat = terlambat($tgl_deadline, $tanggal_pengembalian);
                                    				$denda1 = $lambat*$denda;

                                    				if ($lambat>0) {
                                    					echo "

                                    							<font color='red'>$lambat hari<br> (Rp $denda1)</font>

                                    						 ";
                                    				}else{
                                    					echo $lambat ."Hari";
                                    				}


                                    			?>

                                    		</td>
                                    		<td><?php echo $data['status'];?></td>
                                    		<td>
                                    			<a href="?page=transaksi&aksi=kembali&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul']; ?>" class="btn btn-info" style="margin-bottom: 5px;" > Kembali</a>

                                    			<a href="?page=transaksi&aksi=perpanjang&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul']; ?>&lambat=<?php echo $lambat ?>$tanggal_pengembalian=<?php echo $data['tanggal_pengembalian']?>" class="btn btn-danger" > Perpanjang</a>

                                    		</td>
                                    	</tr>

                                    	<?php  } ?>
                                    <tbody>

                                  </div>
                        </div>
                      </div>
                    </div>
    </div>                                	