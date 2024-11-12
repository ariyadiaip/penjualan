<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h4 class="header2">Profil</h4>
                <div class="row ">
                    <form class="col s12" method="post" enctype="multipart/form-data"
                        action="<?php echo base_url(); ?>admin/profil">
                        <div class="row">
                            <div class="input-field col s12 ">
                                <input type="text" value="<?= $admin->nama ?>" name="nama" readonly>
                                <label class="active">Nama</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="email" value="<?= $admin->email ?>" name="email" readonly>
                                <label class="active">Email</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>