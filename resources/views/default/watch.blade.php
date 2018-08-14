<?php
$torrent = json_decode(json_encode($movie->torrents->en),true);
?>
@extends('app')
@section('content')
		<div id="content-sidebar-pro">
			
			<div id="content-sidebar-image">
				<img src="<?php echo $movie->images->fanart; ?>" alt="Movie Poster">
			</div>
			
			<div class="content-sidebar-section">
				<h2 class="content-sidebar-sub-header"><?php echo $movie->title; ?></h2>
				<ul class="progression-studios-slider-rating">
					<li>Rated  <?php echo $movie->certification; ?></li><li>HD</li>
				</ul>
			</div><!-- close .content-sidebar-section -->
			
			<div class="content-sidebar-section">
				<h4 class="content-sidebar-sub-header">Release Date</h4>
				<div class="content-sidebar-short-description"><?php echo gmdate('d-m-Y', $movie->released) ?></div>
			</div><!-- close .content-sidebar-section -->
			
			<div class="content-sidebar-section">
				<h4 class="content-sidebar-sub-header">Length</h4>
				<div class="content-sidebar-short-description"><?php echo App\Misc::movielength($movie->runtime) ?></div>
			</div><!-- close .content-sidebar-section -->
			

			
		</div><!-- close #content-sidebar-pro -->
		
		
		<main id="col-main-with-sidebar">
			
			<div id="movie-detail-header-pro" style="background-image:url('<?php echo $movie->images->banner; ?>')">
				
				
              <div id="VideoLightbox-1">
				
	             
	         </div>

				
				
				<div id="movie-detail-gradient-pro"></div>
			</div><!-- close #movie-detail-header-pro -->
			
			
			<div id="movie-detail-rating">
				<div class="dashboard-container">
					<div class="row">
						<div class="col-sm">
							<h5>Details</h5>
						</div>

					</div><!-- close .row -->
				</div><!-- close .dashboard-container -->
			</div><!-- close #movie-detail-rating -->
			
			<div class="dashboard-container">
				
				
				<div class="movie-details-section">
					<h2>Storyline</h2>
					<p><?php echo $movie->synopsis; ?></p>
				</div><!-- close .movie-details-section -->				
			</div><!-- close .dashboard-container -->
		</main>
		</div><!-- close #sidebar-bg-->
@endsection