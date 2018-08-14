<?php
$random = json_decode(App\Popcorn::random());

?>
@extends('app')
@section('content')
		<main id="col-main">
			
			
			
			<div class="flexslider progression-studios-dashboard-slider">
		      <ul class="slides">
					<li class="progression_studios_animate_left">
						<div class="progression-studios-slider-dashboard-image-background lazy" style="background-image:url(<?php echo $random->images->poster; ?>);">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">
								
									<div class="container">
										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<ul style="color:white" class="progression-studios-slider-rating">
													<b><li style="color:white">Rated <?php echo $random->certification; ?></li></b><b><li style="color:white">720p</li></b>
												</ul>
												<h2 style="color:white"><a style="color:white" href="dashboard-movie-profile.html"><?php echo $random->title; ?></a></h2>
												<ul class="progression-studios-slider-meta">
													<b><li style="color:white"><?php echo gmdate('d-m-Y', $random->released) ?></li></b>
													<b><li style="color:white"><?php echo App\Misc::movielength($random->runtime) ?></li></b>
												<b>	<li style="color:white"><?php echo $random->genres[0]; ?></li></b>
												</ul>
											<b>	<p style="color:white" class="progression-studios-slider-description"><?php echo $random->synopsis; ?></p></b>
												
												<a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow" href="<?php echo 'watch/' . $random->imdb_id; ?>"><i class="fas fa-play"></i>Stream</a>
												
												<div class="clearfix"></div>      
												
											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->
									
									</div><!-- close .container -->
								
								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table -->
						
							<div class="progression-studios-slider-mobile-background-cover"></div>
						</div><!-- close .progression-studios-slider-image-background -->
					</li>		
				</ul>
			</div><!-- close .progression-studios-slider - See /js/script.js file for options -->
			
			<div class="clearfix"></div>
			
			<div class="dashboard-container">
				
				<h4 class="heading-extra-margin-bottom"> </h4>
				<div class="row">
                
                <?php
                $length = count($movies);
                for ($i = 0; $i < $length; $i++)
                {
                ?>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="<?php echo 'watch/'.$movies[$i]->imdb_id; ?>"><img src="<?php echo $movies[$i]->images->banner; ?>" alt="Listing"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="<?php echo 'watch/movie/'.$movies[$i]->imdb_id; ?>"><?php echo $movies[$i]->title; ?></a></h6>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
                <?php
                }
                ?>
				</div><!-- close .row -->
				
				
				<ul class="page-numbers">
					<li><a class="previous page-numbers" href="#!"><i class="fas fa-chevron-left"></i></a></li>
<?php
                $count = count($page);
                for ($i = 0; $i < $count; $i++)
                {
    ?>
					<li><a class="page-numbers" href="<?php echo 'home/'. $page[$i]; ?>"><?php echo $page[$i]; ?></a></li>
                    <?php } ?>
				</ul>
				
						
			</div><!-- close .dashboard-container -->
		</main>
@endsection