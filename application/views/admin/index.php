  <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <section class="content">
        <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Selamat !</h4>
                    <h5>Hello <span><?php echo $first_name; ?></span>. Your username is <span><?php echo $email; ?></span></h5>
                  Anda adalah Admin. Silahkan kelola Rumah Kontrakan anda, yang sudah terintegrasi dengan kami.
              </div>
      </section>
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><center>Pilih Jenis Pembaruan Akun</center></h4>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <p><br><p>
                <div class="col-md-3">

                </div>

                <div class="col-md-6">
                  <a href="<?php echo base_url('Tipe/premium');?>" class="btn btn-block btn-social btn-bitbucket bg-maroon btn-lg">
                    <i class="fa fa-money"></i> Premium
                  </a>
                  <a class="btn btn-block btn-social btn-bitbucket btn-lg">
                    <i class="fa fa-diamond"></i> Gold
                  </a>
                </div>
                <div class="col-md-3">
                </div>
              </div>
            </div><p><br><p><br><p><br><p><br><p><br><p><br>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
    </div>
