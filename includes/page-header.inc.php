<div class="position-relative">
    <?php if(isset($image) && $image=="children-dentistry") { ?>
    <img 
        srcset="<?php echo $base_url;?>assets/images/global/children-dentistry-sm.webp 575w, <?php echo $base_url;?>assets/images/global/children-dentistry-md.webp 992w, <?php echo $base_url;?>assets/images/global/children-dentistry.webp 1200w" 
        src="<?php echo $base_url;?>assets/images/global/children-dentistry.webp" 
        sizes="(max-width:575px) 400px, (max-width: 991px) 900px"
        class="img-fluid w-100" width="1903" height="396"
        alt="Kalra Dental Care"
    >
    <?php } else { ?>
    <img 
        srcset="<?php echo $base_url;?>assets/images/global/page-header-bg-sm.webp 575w, <?php echo $base_url;?>assets/images/global/page-header-bg-md.webp 992w, <?php echo $base_url;?>assets/images/global/page-header-bg.webp 1200w" 
        src="<?php echo $base_url;?>assets/images/global/page-header-bg.webp" 
        sizes="(max-width:575px) 400px, (max-width: 991px) 900px"
        class="img-fluid w-100" width="1903" height="396"
        alt="Kalra Dental Care"
    >
    <?php } ?>
    <div class="position-absolute top-0 start-0 w-100 h-100 z-1 bg-primary opacity-75"></div>
    <div class="position-absolute top-0 start-0 w-100 h-100 z-2 d-flex align-items-center"> 
        <div class="container">
            <?php if(isset($title)) { ?>
            <p class="mb-0 display-4 text-white fw-semibold text-center text-uppercase">
                <?php echo $title; ?>
            </p>
            <?php } ?>
        </div>
    </div>
</div>