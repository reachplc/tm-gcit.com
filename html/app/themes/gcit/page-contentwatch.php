<?php
/*
Template Name: ContentWatch Home
*/
?>
<?php get_header(); ?>

<div class="row z-fix" >
    <div class="large-12 columns">

    </div>
</div>
</div>
<!-- end of home-back -->
<div class="blackstrip">
    <div class="wrapper">
        <div class="row">
            <div class="large-9 blackstrip_left">
                <p class="blackstrip_text_cyan">Transforming Newsrooms <br><font color="#ffffff">Throughout Trinity Mirror</font>
                </p>
            </div>
            <div class="large-3 blackstrip_right">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/gcit_logo.png' ); ?>" width="200" alt="GCIT" margin="16px 10px 16px 20px" align="right" valign="center">
        </a>
            </div>
        </div>
    </div>
</div>
</div>

<!--WHAT IS CONTENT WATCH -->
<section class="home-whatis">
    <div class="wrapper">
        <div class="row">
            <div class="large-12 whatis">
                <h1>What is <font color="#2dc1e1">Content</font>Watch?</h1>
                <p>ContentWatch is simply a database which stores stories, pictures, graphics, pages and templates.</br>
                The content which is stored within ContentWatch is created through a number of Adobe applications some of which are listed below. </br>
                Using the Firefox browser you can access this database and through "plugins" use the Adobe applications to create stories and pages.</p>
                <br />
                <br />
                <div class="app-table">
                    <div class="app-table-cell-copy left">
                        <h3>InCopy</h3>
                        <p>Both a word-processor for writers and a copy editing tool for subs.</p>
                    </div>
                    <div class="app-table-cell-copy right">
                        <h3>InDesign</h3>
                        <p>Market-leading publishing application which works in close conjunction with ContentWatch.</p>
                    </div>
                    <div class="app-table">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/app_logos.png' ); ?>" alt="ContentWatch's apps" />
                    </div>
                    <div class="app-table-cell-copy left">
                        <h3>Photoshop</h3>
                        <p>Industry standard image editing software used by production staff to format and enhance images for both print and online.</p>
                    </div>
                    <div class="app-table-cell-copy right">
                        <h3>Illustrator</h3>
                        <p>World class graphics editor used to create illustrations, logos, mastheads and graphics across all media.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--HOW CAN THIS WEBSITE HELP ME -->
<section class="home-how">
    <div class="wrapper">
        <div class="row">
            <div class="large-12">
                <div class="how-cell-dark-center">
                    <h2 class="cyan-light-txt">How can this website help me?</h2>
                </div>
            </div>
            <div class="large-12">
                <div class="how-website-text">
                    <p>This site has been designed to be as specific as it can to the working practices of your publication and we have split the site into work areas and individual functions.</p>
                </div>
            </div>
            <div class="large-5 left">
                <div class="how-cell-dark-left">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/iconsx2.png' ); ?>" alt="How this site can help you - icons" />
                </div>
            </div>
            <div class="large-7 right">
                <div class="how-cell-dark-right1">
                    <h1>Writer:</h1>
                    <p>This section is relevant to all staff who are responsible for creating stories, hence the overarching term Writer.</p>
                </div>
                <div class="how-cell-dark-right3">
                    <h1>Production:</h1>
                    <p>This section is relevant to all staff who are responsible for making decisions on Filed stories and managing the print workflow.</p>
                </div>
            </div>
            <div class="large-5 left video-icon">
                <div class="how-cell-dark-left">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/videosiconpic.png' ); ?>" alt="Video - icon" />
                </div>
            </div>
            <div class="large-7 right video-icon">
                <div class="how-cell-dark-right1">
                    <h1>Video:</h1>
                    <p>What&rsquo;s new in Adobe Creative Suite 5.5</p>
                    <p><a href="<?php echo esc_url( home_url( '/contentwatch/video/' ) ); ?>">CLICK HERE</p>
                </div>
            </div>
          </div>
      </div>
</section>


<br clear="all">
<?php get_footer(); ?>
<?php wp_footer(); ?>
