
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
        <?php echo form_open('Super_admin/save_master_termscondition');?>

        <label >Isi</label>

            <input name="isi" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">



              <button type="submit" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" class="btn btn-success">Submit</button>

      </section>
    </div>
