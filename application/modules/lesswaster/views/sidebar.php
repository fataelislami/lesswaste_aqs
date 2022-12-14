    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="sidebar" data-menu="menu-navigation">
            <li class="nav-item"><a href="<?= base_url()?>lesswaster">
                    <center><span class="menu-title" data-i18n="">Leaderboard</span></center>
                </a>
            </li>

            <div class="card-body">
                <?php if($leaderboards->num_rows()>0){?>
                <?php $i=1;?>
                <?php foreach($leaderboards->result() as $key){?>
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <div class="avatar mr-50">
                        <img src="<?= base_url()?>assets/avatar.png" alt="avtar img holder"
                            height="35" width="35">
                    </div>
                    <div class="user-page-info">
                        <h6 class="mb-0"><?= $key->name?></h6>
                        <span class="font-small-2"><?= $key->total_weight?> Gram</span>
                    </div>
                    <?php if($i==1){?>
                    <button type="button" class="btn btn-primary btn-icon ml-auto waves-effect waves-light">
                        <i class="fa fa-star"></i>
                    </button>
                    <?php }else if($i==2){?>
                    <button type="button" class="btn btn-link btn-icon ml-auto waves-effect waves-light"><i
                            class="fa fa-star-half-o"></i></button>
                    <?php }else if($i==3){?>
                    <button type="button" class="btn btn-link btn-icon ml-auto waves-effect waves-light"><i
                            class="fa fa-star-o"></i></button>
                    <?php }?>

                </div>
                <?php $i++ ?>
                <?php }?>
                <?php }?>

                


            </div>

            <!-- Jika ingin menggunakan sidebar sub menu -->
            <!-- <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="">Starter kit</span></a>
                <ul class="menu-content">
                    <li class="active"><a href="sk-layout-floating-navbar.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="nav.sk_starter_kit.fixed_navigation">Floating navbar</span></a>
                    </li>
                    <li><a href="sk-layout-floating-navbar.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="nav.sk_starter_kit.fixed_navigation">Menu 2</span></a>
                    </li>
                </ul>
            </li> -->
        </ul>
    </div>