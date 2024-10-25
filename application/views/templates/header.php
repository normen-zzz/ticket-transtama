

<div class="header-top">
    <div class="container">
        <div class="">
            <img width="150px" src="<?= base_url() . '/' ?>assets/compiled/logo/logoRaw.png" alt="Logo">
        </div>
        <div class="header-top-right">

            

            <div class="dropdown">
                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar avatar-md2">
                        <img src="<?= base_url() . '/' ?>assets/compiled/jpg/1.jpg" alt="Avatar">
                    </div>
                    <div class="text">
                        <h6 class="user-dropdown-name"> <?= $this->session->userdata('nama') ?>  </h6>
                        <p class="user-dropdown-status text-sm text-muted"><?php if ($this->session->userdata('role_id') == 1) {
                            echo 'Admin';
                        } elseif ($this->session->userdata('role_id') == 2) {
                            echo 'Teknisi';
                        }else{
                            echo 'Karyawan';
                        } ?></p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                    <?php if ($this->session->userdata('role_id') == 1) { ?>
                        <li><a class="dropdown-item" href="<?= base_url('admin/Profile') ?>">My Account</a></li>
                   <?php } elseif ($this->session->userdata('role_id') == 2) { ?>
                        <li><a class="dropdown-item" href="<?= base_url('teknisi/Profile') ?>">My Account</a></li>
                     <?php }else{ ?>
                        <li><a class="dropdown-item" href="<?= base_url('user/Profile') ?>">My Account</a></li>
                   <?php } ?>
                    
                 
                    
                    
                    <li><a class="dropdown-item" href="<?= base_url('Auth/logout') ?>">Logout</a></li>
                </ul>
            </div>

            <!-- Burger button responsive -->
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </div>
    </div>
</div>

<style>
    input[type="number"] {
  -moz-appearance: textfield;
  -webkit-appearance: none;
  appearance: none;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
