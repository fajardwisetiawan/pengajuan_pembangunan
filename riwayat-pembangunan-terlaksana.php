<?php
include("header-kaurpem.php");
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
										<h3 class="panel-title"> <i class="fa fa-building-o"></i> Riwayat Pembangunan Terlaksana</h3>
										<p class="panel-subtitle">Halaman berisi daftar riwayat pembangunan yang telah dilaksanakan dan selesai pengerjaannya</p>
									</div>
									<div class="panel-body">
										<!-- <div class="row">
											<div class="col-md-12">
											<div class="card-body card-dashboard" style="margin-top:-40px;margin-bottom:-40px;">
												<button type="button" class="btn btn-primary" data-toggle="modal" title="Tambah Pengajuan" data-target="#myModalthree" name="button"><i class="ft-plus"></i> Kirim Pengajuan</button>
											</div>
											</div>
										</div>
										<br> -->
										<div class="row">
											<div class="col-md-12">
											<div class="card-body card-dashboard" style="margin-top:-40px;">
											<div class="table-responsive">
												<!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
												<!--<table class="table table-bordered table-striped table-vcenter js-dataTable-full">-->
												<table class="table table-striped table-bordered base-style">
													<thead>
															<tr>
																<th>No</th>
																<th>Tanggal Proposal</th>
																<th>Nomor Proposal</th>
																<th>Jenis Kegiatan</th>
																<th>Judul Kegiatan</th>
																<th>Deskripsi Kegiatan</th>
																<th>Lampiran</th>
																<th>#</th>
																<th>#</th>
															</tr>
													</thead>
													<tbody>
														<?php
														$no = 1;
														$qy = mysqli_query($connect, "SELECT * FROM proposal_pengajuan WHERE status = '5' ORDER BY tanggal_proposal ASC");
														while($q = mysqli_fetch_array($qy)) { ?>
															<tr>
																<td><?= $no; ?></td>
																<td><?= $q['tanggal_proposal']; ?></td>
																<td><?= $q['nomor_proposal']; ?></td>
																<td><?= $q['jenis_kegiatan']; ?></td>
																<td><?= $q['judul_kegiatan']; ?></td>
																<td><?= $q['deskripsi_kegiatan']; ?></td>
																<td>																	
																	<div class="btn-group" role="group" aria-label="Basic example">
																		<a href="tampil.php?id=<?php echo $q['lampiran1'] ?>" class="btn btn-pink" title="Download Lampiran 1"><i class="fa fa-cloud-download"></i> Lampiran RAB</a>
																	</div>
																</td>
																<td>
																	<button type="button" data-toggle="modal" title="Detail" data-target="#detail<?php echo $q['id_proposal']; ?>" class="btn btn-info"><i class="icon-info"></i> Detail</button>
																</td>
																<td class="text-center">
																	<form class="" action="rincian-biaya3" method="get">
																		<input type="hidden" name="id" value="<?= $q['id_proposal'] ?>">
																			<button type="submit" class="btn bg-gradient-directional-purple white btn-purple btn-glow" data-toggle="tooltip" title="Rincian Biaya">
																			<i class="fa fa-calculator"></i>
																			 Rincian Biaya
																			</button>
																	</form>
																</td>
															</tr>
														<?php $no++; } ?>
														</tbody>
												</table>

														<?php
														$no = 1;
														$qy = mysqli_query($connect, "SELECT * FROM proposal_pengajuan WHERE status = '5'");
														while($q = mysqli_fetch_array($qy)) { ?>
														<!-- Modal -->
														<div class="modal fade text-left" id="detail<?php echo $q['id_proposal']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title" id="myModalLabel1">Detail proposal</h4>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<table class="table">
																		<tr>
																		<th width="50%" style=border:0;>Tanggal Proposal</th>
																		<td width="50%" style=border:0;><?= $q['tanggal_proposal']; ?></td>
																		</tr>
																		<tr>
																		<th width="50%" style=border:0;>Nomor Proposal</th>
																		<td width="50%" style=border:0;><?= $q['nomor_proposal']; ?></td>
																		</tr>
																		<tr>
																		<th width="50%" style=border:0;>Jenis Kegiatan</th>
																		<td width="50%" style=border:0;><?= $q['jenis_kegiatan']; ?></td>
																		</tr>
																		<tr>
																		<th width="50%" style=border:0;>Judul</th>
																		<td width="50%" style=border:0;><?= $q['judul_kegiatan']; ?></td>
																		</tr>
																		<th width="50%" style=border:0;>Deskripsi</th>
																		<td width="50%" style=border:0;><?= $q['deskripsi_kegiatan']; ?></td>
																		</tr>
																		<tr>
																		<th width="50%" style=border:0;>Lampiran RAB</th>
																		<td width="50%" style=border:0;><?= $q['lampiran1']; ?></td>
																		</tr>
																		</table>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-action-undo"></i> Kembali</button>
																	</div>
																</div>
															</div>
														</div>

														<?php $no++; } ?>

											</div>
											</div>
											</div>
											</div>
										</div>
									</div>
						  		</div>
					  		</div>
						</div>
					</section>
				</div>
			</div>
	  	</div>
	</div>

		<script src="config.js"></script>
    	<script src="jquery.min.js"></script>

<?php include('footer.php'); ?>
