<!-- Begin Page Content -->
<div class="container-fluid">




    <div class="row">
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-danger border-bottom-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs text-center font-weight-bold text-danger mb-2">
                        <h2><b><?php echo $title ?></b></h2>
                    </div>
                    <div>

                        <?php foreach ($topology as $l) : ?>
                            <a class="btn btn-sm btn-success mb-3 ml-2" href="<?php echo base_url('admin/topology/updateData2/' . $l['id']) ?>">
                                <i class="fas fa-plus"></i> Make Your Own Topology</a>
                            <a class="btn btn-sm btn-primary mb-3 ml-2" href="<?php echo base_url('admin/topology/updateData/' . $l['id']) ?>">
                                <i class="fas fa-edit"></i> Uploud Your Own Topology Image</a>
                            <center>

                                <iframe src="<?= base_url() . 'assets/team/' . $l['photo'] ?>" style="border: 0; width: 100%; height: 550px"></iframe>
                            <?php endforeach; ?>
                            </center>

                    </div>


                </div>
            </div>
        </div>
    </div>



    <br>
    <br>
    <br>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->