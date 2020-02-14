<?php
include("header-bendes.php");
$qy = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM perangkat_desa WHERE id_perangkat_desa = '$_SESSION[id_perangkat_desa]'"));
?>
		<div class="app-content content">
		<div class="content-wrapper">
			<div class="content-header row"></div>
					<div class="content-body"><!-- Stats -->
							<section id="base-style">
									<div class="row">
										<div class="col-12">
												<div class="card">
														<div class="card-header">
							<h3 class="panel-title"> <i class="lnr lnr-cog"></i> Kelola Akun</h3>
							<p class="panel-subtitle">Halaman untuk mengelola akun Bendahara Desa</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<form class="" enctype="multipart/form-data" action="update-user-bendes.php" method="post">
										<div class="modal-body">
												<div class="form-group">
													<label class="nk-label">Nama</label>
													<input type="hidden" class="form-control" name="id_perangkat_desa" value="<?= $qy['id_perangkat_desa'] ?>" required>
													<input type="text" class="form-control input-md" name="nama" value="<?= $qy['nama'] ?>" placeholder="Nama" required>
												</div>
												<div class="form-group">
													<label class="nk-label">Username</label>
													<input type="text" class="form-control input-md" name="username" value="<?= $qy['username'] ?>" placeholder="Username" readonly>
												</div>
												<div class="form-group">
													<?php if($qy['foto'] == ''){ ?>
														<img src="images/avatar0.jpg" class="img-circle" width="100px" alt="image" />
													<?php }else{ ?>
													<div class="hd-message-img">
														<img src="images/<?= $qy['foto']; ?>" class="img-circle" width="100px" alt="image" />
													</div>
													<?php } ?>
													<br>
													<label class="fancy-checkbox">
													<input type="checkbox"  id="toggle" name="ubah_foto">
													<span>Tambah Foto</span>
													</label>
												</div>
												<div class="nk-int-st">
														<input type="file" accept="image/*" name="foto" class="form-control" id="foto" required disabled>
												</div>
										</div>
										<div class="modal-footer">
												<button type="submit" class="btn btn-default">Save changes</button>
												<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		</div>
						  </div>
					  </div>
					</div>
				</section>
			</div>
		</div>
	  </div>
		<!-- END MAIN -->
		<?php include('footer.php'); ?>
