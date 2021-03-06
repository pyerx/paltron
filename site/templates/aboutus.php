<?php

/**
 * Job overview template
 *
 */

include("./includes/head.inc"); 
?>
<main class="about-us">
    <section class="about-us-header" id="about-us-header">
        <div class="container">
            <div class="header-title">
                <h1><?php echo $page->header_title; ?></h1>
            </div>
            <div class="header-description">
                <?php echo $page->header_description ?>
            </div>
        </div>
    </section>
    <section class="aboutus-note" id="aboutus-note">
        <div class="container">
            <div class="aboutus-notes-carousel owl-carousel">
                <?php foreach($page->about_notes as $note) : ?>
                    <div class="content-text">
                        <?php echo $note->content_text ?>
                    </div>
                <?php endforeach ?>
            </div> 
        </div> 
    </section>
    <section class="success-story">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 content-text">
                    <h2><?php echo __("Unsere Erfolgsgeschichte") ?></h2>
                    <?php echo $page->success_story ?>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-12 image-list">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-12 image-list-item">
                            <img src="<?php echo $td.'images/josef.jpg' ?>" alt="Josef">
                            <h6 class="name">Josef Günthner</h6>
                            <span>Co-founder & Managing Director</span>
                        </div>
                        <div class="col-lg-12 col-md-5 col-sm-12 image-list-item">
                            <img src="<?php echo $td.'images/daniel.jpg' ?>" alt="Daniel">
                            <h6 class="name">Daniel Wernicke</h6>
                            <span>Managing Director</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="status-quo">
        <div class="container">
            <h2><?php echo __("Status Quo"); ?></h2>
            <div class="row">
                <?php foreach($page->status_quo as $status) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 status-item">
                        <img src="<?php echo $status->image->url ?>" alt="status quo" >
                        <p><?php echo $status->title ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    
    <div class="recent-news">
        <div class="container">
            <h2><?php echo __("PALTRON News"); ?></h2>
            <?php include("./includes/recent_news.inc"); ?>
        </div>
        
    </div>
</main>
<?php
include("./includes/foot.inc");