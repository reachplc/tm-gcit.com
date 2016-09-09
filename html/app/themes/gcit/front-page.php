<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage GCIT
 * @since GCIT 1.0
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>GCIT - Trinity Mirror</title>
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.ico' ); ?>" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.ico' ); ?>" type="image/x-icon">
	<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/images/favicon.png' ); ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icons/152x152-precomposed.png' ); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icons/114x114-precomposed.png' ); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icons/72x72-precomposed.png' ); ?>">
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icons/60x60-precomposed.png' ); ?>">
	<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icons/speeddial-160x160.png' ); ?>">
	<?php // @codingStandardsIgnoreStart ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href="<?php echo esc_url( get_template_directory_uri() . '/gcitstyle.css' ); ?>" rel="stylesheet" type="text/css" />
	<?php // @codingStandardsIgnoreEnd ?>
</head>

<body>

<a href="#home-back" class="back-to-top">Back to Top</a>

<!-- HERO WHAT. WHY. WHO -->
	<section id="home-back">
		<div class="wrapper">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/gcit_logo.png' ); ?>" alt="GCIT" width="400" class="headerlogo">
				<p><a class="hero-text" href="#what">WHAT. </a><a class="hero-text" href="#why">WHY. </a><a class="hero-text" href="#who">WHO. </a>
				</p>
		</div>
</section>

<!-- WHAT WE DO -->
<section id="what-we-do" class="wrapper">
		<div class="row">
				<div class="large-5 left">
						<a name="what"></a>
						<div class="how-cell-dark-left">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/whatwedo.png' ); ?>" alt="What we do" class="icon_img">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/whatwedo_icon2.png' ); ?>" alt="What we do" class="whoicon_img_sml">
						</div>
				</div>
				<div class="large-7 right">
						<div class="how-cell-dark-right">
								<p class="whattexth1">GCIT was the driving force behind the roll-out of ContentWatch and CHP to all parts of Trinity Mirror. </p>
								<p class="whattextp">With that task behind them, the team are in a constant battle to upgrade and improve editorial systems. </p>
								<p class="whattextp">Not only that, but GCIT's eclectic knowledge means they have a behind-the-scenes role in many projects, such as - the general election coverage, Cheltenham Festival coverage, newspaper re-designs and much more.</p>
						</div>
				</div>
		</div>
</section>

<!-- GOT A PROBLEM-->
<section id="got-a-problem" class="wrapper">
		<div class="row">
				<div class="large-5 left">
						<a name="what"></a>
						<div class="how-cell-dark-left">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/gotaproblem.png' ); ?>" alt="Got a problem?" class="icon_img" />
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/probicon.png' ); ?>" alt="Got a problem" class="whoicon_img_sml">
						</div>
				</div>
				<div class="large-7 right">
						<div class="how-cell-dark-right">
								<p class="whattexth1">We've put together dedicated micro-sites that give you the ins and outs of ContentWatch and CHP. The sites are full of great stuff about the systems. </p>
								<a href="<?php echo esc_url( home_url( '/contentwatch/' ) ); ?>">
										<div class="contentWatch-link"></div>
								</a>
								<a href="https://sites.google.com/a/trinitymirror.com/chp-knowledgebase/">
										<div class="chp-link"></div>
								</a>
						</div>
				</div>
		</div>
</section>

<!-- WHY WE'RE HERE -->
<section id="why-were-here" class="cyan-light" >
	<div class="wrapper">
	<div class="row">
		<div class="large-5 left">
				<a name="why"></a>
				<div class="how-cell-cyan-left">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/whywerehere.png' ); ?>" alt="Why we're here" class="icon_img">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/whywerehere_icon2.png' ); ?>" alt="Why we're here" class="whoicon_img_sml">
				</div>
		</div>
		<div class="large-7 right">
				<div class="how-cell-cyan-right">
					<span class="whattexth1_cyan">GCIT was set up originally to develop, plan and implement the roll-out of ContentWatch throughout all Trinity Mirror titles.
					 </span>
					<br /><br />
					<span class="whattextp">Over time the group has grown to include the CHP team, who have installed a new picture system to all areas of the company.</span>
					<br /><br />
					<span class="whattextp">Everybody in GCIT has real-world experience, with journalists, photographers, editorial support staff, IT staff and picture deskers in the line-up. </span>
				</div>
			</div>
		</div>
		</div>
</section>

<!-- WHO WE ARE -->

<section class="home-what-blk-who">
	<div class="wrapper">
		<div class="row">
				<div class="large-5 left">
						<a name="who"></a>
						<div class="who-cell-dark-left">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/whoweare.png' ); ?>" alt="What we do" class="icon_img">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/jasondoyle.png' ); ?>" alt="Jason Doyle" class="whoicon_img_sml">
						</div>
				</div>
				<div class="large-7 right">
						<div class="who-cell-dark-right">
								<p class="whattexth1_blk">JASON DOYLE</p>
										<p class="whattextp_white">A techie by trade, Jason was previously with Editorial Support for 11 years with a remit to provide production support, training and development for the Daily Mirror, Sunday Mirror and The People.</p>
										<p class="whattextp_white">The last six years was as deputy manager. He joined GCIT in September 2012, specialising in production workflows, training and support.</p>
										<p class="whattextp_white">The GCIT team leader.</p>
										<p class="whattextp_white">
												<a href="mailto:jason.doyle@trinitymirror.com">jason.doyle@trinitymirror.com</a>
												<br />
												<b>020 7293 2185</b>
										</p>
						</div>
				</div>
		</div>
</div>

<!-- STEVE MURPHY -->
<div class="home-what-blk-who">
		<div class="wrapper">
				<div class="row">
						<div class="large-5 left">
								<div class="who-cell-dark-left">
										<img src="<?php echo esc_url( get_template_directory_uri() . '/images/stevemurphy.png' ); ?>" alt="Steve Murphy" class="whoicon_img_sml">
								</div>
						</div>
						<div class="large-7 right">
								<div class="who-cell-dark-right">
										<p class="whattexth1_blk">STEVE MURPHY</p>
										<p class="whattextp_white">An award winning press photographer with over 25 years experience in newspapers as both a photographer and picture editor, Steve was seconded onto the CHP team at the beginning of 2013 with a brief to help to train and support users across the country in CHP, metadata and photographic workflows.</p>
										<p class="whattextp_white">In early 2015 Steve joined GCIT full time as the Senior CHP Executive. He is passionate about photography and the influence of new technology on the creation of images.</p>
										<p class="whattextp_white">
												<a href="mailto:steve.murphy@trinitymirror.com">steve.murphy@trinitymirror.com</a>
												<br />
												<b>07778 20123</b>
										</p>
								</div>
						</div>
				</div>
		</div>
</div>

<!-- BRYAN McCOMB -->
<div class="home-what-blk-who">
		<div class="wrapper">
				<div class="row">
						<div class="large-5 left">
								<div class="who-cell-dark-left">
										<img src="<?php echo esc_url( get_template_directory_uri() . '/images/bryanmccomb.png' ); ?>" alt="BRYAN McCOMB" class="whoicon_img_sml">
								</div>
						</div>
						<div class="large-7 right">
								<div class="who-cell-dark-right">
										<p class="whattexth1_blk">BRYAN McCOMB</p>
										<p class="whattextp_white">From reporter on regional weeklies to senior production roles on the Daily Mirror, Bryan has 20 years’ experience in newspapers.</p>
										<p class="whattextp_white">An original editorial member of the ContentWatch development team, his key tasks now include workflows, configuration, digital/tablet integration and – most importantly – usability.He also draws on extensive previous experience in systems.</p>
										<p class="whattextp_white">
												<a href="mailto:bryan.mccomb@trinitymirror.com">bryan.mccomb@trinitymirror.com</a>
												<br /><b>020 7293 3288</b>
												<br/>
										</p>
								</div>
						</div>
				</div>
		</div>
</div>


<!-- GAETAN COTTON -->
<div class="home-what-blk-who" >
	<div class="wrapper">
		 <div class="row">
	<div class="large-5 left">
				<div class="who-cell-dark-left">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/gaetancotton.png' ); ?>" alt="Gaeten Cotton" class="whoicon_img_sml">
				</div>
		</div>
		<div class="large-7 right">
					<div class="who-cell-dark-right">
									<p class="whattexth1_blk">GAETAN COTTON</p>
									<p class="whattextp_white">Former Sunday Mail staff photographer, Gaetan has worked in the UK, USA and Central America as a freelance photographer for all national newspapers.</p>
									<p class="whattextp_white">Passionate about new technology, he specialised in digital asset management and joined the CHP project in November 2011.</p>
									<p class="whattextp_white">
									<a href="mailto:gaeten.cotton@trinitymirror.com">gaeten.cotton@trinitymirror.com</a><br />
								 <b>020 7293 2856</b>
							</p>
					 </div>
				 </div>
			</div>
		</div>
</div>

<!-- NICK MAUDE -->
<div class="home-what-blk-who">
		<div class="wrapper">
				<div class="row">
						<div class="large-5 left">
								<div class="who-cell-dark-left">
										<img src="<?php echo esc_url( get_template_directory_uri() . '/images/nickmaude.png' ); ?>" alt="Nick Maude" class="whoicon_img_sml">
								</div>
						</div>
						<div class="large-7 right">
								<div class="who-cell-dark-right">
										<span class="whattexth1_blk">NICK MAUDE</span>
										<br />
										<br />
										<p class="whattextp_white">Nick spent 12 years as part of the Editorial Support team in Canary Wharf.
										</p>
										<p class="whattextp_white">During that time he built up a wealth of knowledge about all Trinity Mirror systems and is one of the most experienced publishing specialists within the group. Joined GCIT in October 2013 with a brief encompassing training, support and documentation.</span>
												<p class="whattextp_white">
														<a href="mailto:nick.maude@trinitymirror.com">nick.maude@trinitymirror.com</a>
														<br />
														<b>020 7293 2750</b>
												</p>
								</div>
						</div>
				</div>
		</div>
</div>

<!-- MARC FLETCHER -->
<div class="home-what-blk-who">
		<div class="wrapper">
				<div class="row">
						<div class="large-5 left">
								<div class="who-cell-dark-left">
										<img src="<?php echo esc_url( get_template_directory_uri() . '/images/marcfletcher.png' ); ?>" alt="Marc Fletcher" class="whoicon_img_sml">
								</div>
						</div>
						<div class="large-7 right">
								<div class="who-cell-dark-right">
										<p class="whattexth1_blk">MARC FLETCHER</p>
										<p class="whattextp_white">Marc worked as a production artist on the Daily Mirror for eight years before taking up his role in GCIT.
										</p>
										<p class="whattextp_white">He specialises in imaging - including formatting ( manual &amp; automated ), editing, retouching and colour management techniques and best practice.</p>
										<p class="whattextp_white">
												<a href="mailto:marc.fletcher@trinitymirror.com">marc.fletcher@trinitymirror.com</a>
												<br /><b>020 7293 3004</b>
										</p>
								</div>
						</div>
				</div>
		</div>
</div>

<!-- BEN HUGHES -->
<div class="home-what-blk-who">
		<div class="wrapper">
				<div class="row">
						<div class="large-5 left">
								<div class="who-cell-dark-left">
										<img src="<?php echo esc_url( get_template_directory_uri() . '/images/benhughes.png' ); ?>" alt="Ben Hughes" class="whoicon_img_sml">
								</div>
						</div>
						<div class="large-7 right">
								<div class="who-cell-dark-right">
										<p class="whattexth1_blk">BEN HUGHES</p>
										<p class="whattextp_white">Ben started work at the Manchester Evening News in 1993. He worked on the picture desk for several years before moving to I.T. where he helped implement and maintain the picture desk live image and archive solution, as well as providing general editorial system support.</p>
										<p class="whattextp_white">Ben was co-opted to the GCIT team in August 2013. Since then he has travelled the country training hundreds of users in CHP and metadata. In January 2015 Ben became a full time member of the GCIT team.</p>
										<p class="whattextp_white">
												<a href="mailto:ben.hughes@trinitymirror.com">ben.hughes@trinitymirror.com</a>
												<br/>
												<b>07881 851939</b>
										</p>
								</div>
						</div>
				</div>
		</div>
</div>
</section>

<?php get_footer( 'front-page' ); ?>
