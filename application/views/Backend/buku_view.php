        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-book"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Buku</span>
                  <span class="info-box-number">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-log-out"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Dipinjam</span>
                  <span class="info-box-number">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-pin"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Belum Dipinjam</span>
                  <span class="info-box-number">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-bookmarks"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Jenis</span>
                  <span class="info-box-number">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Buku</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-sm btn-info" id="btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <button class="btn btn-sm btn-success" id="btn-tambah-buku"><i class="fa fa-plus"></i> Tambah Buku Baru</button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tblbuku" class="table table-bordered table-striped display nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Jenis</th>
                        <th>Tahun</th>
                        <th>Jumlah</th>
                        <th>Pinjam</th>
                        <th>Status</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Jenis</th>
                        <th>Tahun</th>
                        <th>Jumlah</th>
                        <th>Pinjam</th>
                        <th>Status</th>
                        <th>Opsi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
                <!-- Loading (remove the following to stop the loading)-->
                <div class="overlay" style="display:none">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
                <!-- end loading -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-xs-6">
              <div class="box box-info box-solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Jenis Buku</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Toogle"><i class="fa fa-arrow-circle-down"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tbljenis" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Jenis</th>
                        <th>Jumlah Buku</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
                <!-- Loading (remove the following to stop the loading)-->
                <div class="overlay" style="display:none">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
                <!-- end loading -->
              </div>
            </div>
            <div class="col-xs-6">
              <div class="box box-success box-solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Koleksi Buku</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Toogle"><i class="fa fa-arrow-circle-down"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tblkoleksi" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Koleksi</th>
                        <th>Jumlah Buku</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- Loading (remove the following to stop the loading)-->
                <div class="overlay" style="display:none">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
                <!-- end loading -->
              </div>
            </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versi</b> Beta 0.2
        </div>
        <strong><?=$web->web_footer;?>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- Modal Hapus -->
    <div class="modal modal-danger fade" id="modal-hapus" data-backdrop="static">
      <div class="modal-dialog" style="width: 350px;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Hapus Data </h4>
          </div>
          <div class="modal-body">
            <div class="box-body table-responsive">
              <span id="form-pesan-hapus"></span>
              <?php echo form_open('buku/hapus', 'id="form-hapus"') ?>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <input type="hidden" id="hapus-id" name="hapus-id" />
                    <input type="hidden" id="hapus-judul" name="hapus-judul" />
                    <p>Apakah Anda yakin ingin menghapus Data Buku berikut ?</p>
                    <div class="callout callout-danger">
                      <p>Judul : <span class="hapus-judul"> </span></p>
                      <p>Penulis : <span class="hapus-penulis"> </span></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapus" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Iya, Hapus</button>
          </div>
        </div>
        <!-- Loading (remove the following to stop the loading)-->
        <div class="overlay" style="display:none">
          <i class="fa fa-refresh fa-spin"></i>
        </div>
        <!-- end loading -->
      </div>
    </div>

    <!-- Perpus App -->
    <script src="<?=base_url('public/dist/js/app.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/dist/js/jQuery.dtplugin.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/dist/js/zjs.utils.js');?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON('<?=site_url(buku/get_databox)?>', function(obj) {
            $("#boxtotal").html(obj.boxtotal);
            $("#boxpinjam").html(obj.boxpinjam);
            $("#boxbpinjam").html(obj.boxbpinjam);
            $("#boxjenis").html(obj.boxjenis);
        });
      }
      $(document).ready(function() {
        $('#btn-hapus').click(function(){
            $('#modal-hapus').modal('show');
        });

        $('#modal-hapus').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).attr('data-id');
            var title = $(e.relatedTarget).attr('data-title');
            $(this).find('#hapus-id').text(id);
            $(this).find('#hapus-judul').text(title);
            $(this).find('.hapus-judul').text(title);
            $(this).find('.hapus-penulis').text(title);
        });

        $('#btn-hapus').click(function(){
            //$('#form-hapus').submit();
            $('#btn-hapus').addClass('disabled');
            
        });

        $('#btn-refresh').click(function(){
            $('#tblbuku').dataTable().fnReloadAjax();
            $('#tbljenis').dataTable().fnReloadAjax();
            $('#tblkoleksi').dataTable().fnReloadAjax();
        });

        $("#tblbuku").dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?=site_url('buku/getbuku');?>",
                "type": "POST"
            },
            "columns": [
              { "data": "buku_id" },
              { "data": "buku_judul" },
              { "data": "buku_penulis" },
              { "data": "jenis_teks" },
              { "data": "buku_tahun" },
              { "data": "buku_jumlah" },
              { "data": "buku_pinjam" },
              { "data": "Bstatus" },
              { "data": "Bopsi", "searchable": false, "sortable": false },
            ],
        });
        $('#tbljenis').dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?=site_url('jenis/getjenis');?>",
                "type": "POST"
            },
            "columns": [
              { "data": "jenis_id" },
              { "data": "jenis_teks" },
              { "data": "Jumlah", "searchable": false },
              { "data": "Jopsi", "searchable": false, "sortable": false },
            ],
        });
        $('#tblkoleksi').dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?=site_url('koleksi/getkoleksi');?>",
                "type": "POST"
            },
            "columns": [
              { "data": "koleksi_id" },
              { "data": "koleksi_nama" },
              { "data": "Jumlah", "searchable": false },
              { "data": "Jopsi", "searchable": false, "sortable": false },
            ],
        });
      });
    </script>
    
  </body>
</html>