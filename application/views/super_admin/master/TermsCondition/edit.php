
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
        <?php echo form_open('Super_admin/save_master_termscondition_update');?>
      <br>
      <input type="hidden"  name="id"  value="<?php echo $master_termscondition['id'];?>">

        <label>Isi</label>

            <input name="isi" value="<?php echo $master_termscondition['isi'];?>">





              <button type="submit" >Cancel</button>
              <button >Submit</button>

      </section>
    </div>
