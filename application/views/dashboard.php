<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>

        <?php if ($level->level == 'admin'): ?>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total User</h4>
                  </div>
                  <div class="card-body"><?= $users; ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Data Barang</h4>
                  </div>
                  <div class="card-body"><?= $barangs; ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-truck"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Suplier</h4>
                  </div>
                  <div class="card-body"><?= $supliers; ?></div>
                </div>
              </div>
            </div>
          </div>
        <?php elseif ($level->level == 'manajemen'): ?>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Data Barang</h4>
                  </div>
                  <div class="card-body"><?= $barangs; ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-truck"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Suplier</h4>
                  </div>
                  <div class="card-body"><?= $supliers; ?></div>
                </div>
              </div>
            </div>
          </div>
        <?php elseif ($level->level == 'peminjam'): ?>
          <!-- <div class="row">
            <div class="card card-statistic-1"> -->
                  <a href="<?php echo site_url('pinjam_barang/tambahPinjam_barang/'); ?>"><button class="col-12 btn btn-lg btn-info mb-2" type="submit"><i class="fas fa-plus"></i> Pinjam Barang Baru</button></a>
              <!-- </div>
            </div>
          </div> -->
        <?php endif ?>

          <div class="section-body">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Stok Barang</h4>
                      <!-- <div class="card-header-action"><a href="<?php echo site_url('barang_masuk/tambahBarang_masuk/'); ?>"><button class="btn btn-lg btn-info" type="submit"><i class="fas fa-plus"></i> Tambah Barang Masuk</button></a></div> -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">No</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Masuk</th>
                            <th>Jumlah Keluar</th>
                            <th>Pinjam</th>
                            <th>Sisa Stok</th>
                          </tr>
                        </thead>
                        <tbody>
                     <?php 
                      if (!empty($stoks)) {
                        $no = 1;
                        foreach ($stoks as $data) {
                     ?>
                          <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td>
                                <span class="text-capitalize"><?= $data->nama_barang; ?></span>
                            </td>
                            <td><?= $data->jml_masuk; ?></td>
                            <td><?= $data->jml_keluar; ?></td>
                            <td><?= $data->jml_pinjam; ?></td>
                            <td><div class="badge badge-primary"><?= $data->sisa_stok; ?></div></td>
                          </tr>
                        <?php
                            }
                      }
                      ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
      </div>