<?php
if ($this->session->has_userdata('msg')) { ?>
  <div class="alert alert-info alert-dismissible toastrDefaultSuccess">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fas fa-info-circle"></i>
      <!-- <script>
        toastr.success('Berhasil');
      </script> -->
        <?php echo $this->session->flashdata('msg');?>
</div>
<?php } ?>
<?php if($this->session->has_userdata('success')){ ?>
  <div class="alert alert-info alert-dismissible toastrDefaultSuccess">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5>
      <i class="icon fas fa-check"></i>
      Berhasil..
    </h5>
      <!-- <script>
        toastr.success('Berhasil');
      </script> -->
        <?php echo $this->session->flashdata('success');?>
</div>
<?php } ?>
<?php if($this->session->has_userdata('fail')){ ?>
  <div class="alert alert-danger alert-dismissible toastrDefaultSuccess">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5>
      <i class="icon fas fa-ban"></i>
      Access Denied !
    </h5>
      <!-- <script>
        toastr.success('Berhasil');
      </script> -->
        <?php echo $this->session->flashdata('fail');?>
</div>
<?php } ?>

<?php if($this->session->has_userdata('denied')){ ?>
  <div class="alert alert-warning alert-dismissible toastrDefaultSuccess">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5>
      <i class="icon fas fa-exclamation-triangle"></i>
      Access Denied !
    </h5>
      <!-- <script>
        toastr.success('Berhasil');
      </script> -->
        <?php echo $this->session->flashdata('denied');?>
</div>
<?php } ?>

