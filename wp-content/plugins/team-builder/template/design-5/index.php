<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
	<!-- wpshopmart team builder wrapper -->
	<style>
			#wpsm_team_2_b_row_<?php echo $PostId; ?> .wpsm_team_2_member_wrapper_inner h3{
				color:<?php echo $team_mb_name_clr; ?> !important;
				font-size:<?php echo $team_mb_name_ft_size; ?>px !important;
				font-family:<?php echo $font_family; ?> !important;
			}
			
			#wpsm_team_2_b_row_<?php echo $PostId; ?> .wpsm_team_2_member_wrapper
			{
				margin:10px;
			}
			
			#wpsm_team_2_b_row_<?php echo $PostId; ?> .owl-dots .owl-dot span {			
			background:<?php echo $team_car_dots_bg_clr; ?>;			
			}
			#wpsm_team_2_b_row_<?php echo $PostId; ?> .owl-dots .owl-dot.active span {
				background: <?php echo $team_car_dots__hvr_bg_clr; ?>;
			}
			#wpsm_team_2_b_row_<?php echo $PostId; ?> .owl-dots .owl-dot:hover span {
				background: <?php echo $team_car_dots__hvr_bg_clr; ?>;
			}
			#wpsm_team_2_b_row_<?php echo $PostId; ?> .owl-dots
			{
				<?php
				if($team_car_dots_show_hide == 'no' )
					echo "display:none;";
				else if($team_car_dots_show_hide == 'yes')
					echo "display:block";
				?>
			}
			
			#wpsm_team_2_b_row_<?php echo $PostId; ?> .wpsm_team_2_b_desig{
				color:<?php echo $team_mb_pos_clr; ?> !important;
				font-size:<?php echo $team_mb_pos_ft_size; ?>px !important;
				font-family:<?php echo $font_family; ?> !important;
			}
			#wpsm_team_2_b_row_<?php echo $PostId; ?> .wpsm_team_2_b_desc{
				color:<?php echo $team_mb_desc_clr; ?> !important;
				font-size:<?php echo $team_mb_desc_ft_size; ?>px !important;
				font-family:<?php echo $font_family; ?> !important;
			}
			#wpsm_team_2_b_row_<?php echo $PostId; ?> .wpsm_team_2_social_div a i{
				color:<?php echo $team_mb_social_icon_clr; ?> !important;
				border-color:<?php echo $team_mb_social_icon_clr; ?> !important;
			}
			#wpsm_team_2_b_row_<?php echo $PostId; ?> .wpsm_team_2_member_wrapper{
				background:<?php echo $team_mb_wrap_bg_clr; ?> !important;
			}
			<?php echo $custom_css; ?>
	</style>
	<div class="wpsm_team_2_b_row" id="wpsm_team_2_b_row_<?php echo $PostId; ?>">
		<div class="wpsm_row">  
			<div class="wpsm-team-owl-carousel">
			<?php 
			if($TotalCount!=-1)
			{	
				
				switch($team_layout){
					case(6):
						$row=2;
					break;
					case(4):
						$row=3;
					break;
					case(3):
						$row=4;
					break;
				}
				foreach($All_data as $single_data)
				{
					$mb_photo = $single_data['mb_photo'];
					$mb_name = $single_data['mb_name'];
					$mb_pos = $single_data['mb_pos'];
					$mb_desc = $single_data['mb_desc'];
					$mb_fb_url = $single_data['mb_fb_url'];
					$mb_twit_url = $single_data['mb_twit_url'];
					$mb_lnkd_url = $single_data['mb_lnkd_url'];
					$mb_gp_url = $single_data['mb_gp_url'];
					
					?>		
					
						<div class="wpsm_team_2_member_wrapper">
							<img class="img-responsive wpsm_team_2_mem_img" src="<?php echo $mb_photo; ?>" alt="<?php echo $mb_name; ?>">
							<div class="wpsm_team_2_member_wrapper_inner">
								<h3>
									<?php echo $mb_name; ?>
								</h3>
								<?php if($mb_pos!="") { ?><span class="wpsm_team_2_b_desig"> <?php echo $mb_pos; ?> </span> <?php } ?>
								<div class="wpsm_team_2_social_div">
									<?php if($mb_fb_url!="") { ?><a href="<?php echo $mb_fb_url; ?>" target="_blank" title="facebook profile"><i class="fa fa-facebook"></i></a> <?php } ?>
									<?php if($mb_twit_url!="") { ?><a href="<?php echo $mb_twit_url; ?>" target="_blank" title="twitter profile"><i class="fa fa-twitter"></i></a><?php } ?>
									<?php if($mb_lnkd_url!="") { ?><a href="<?php echo $mb_lnkd_url; ?>" target="_blank" title="linkedin profile"><i class="fa fa-linkedin"></i></a><?php } ?>
									<?php if($mb_gp_url!="") { ?><a href="<?php echo $mb_gp_url; ?>" target="_blank" title="instagram profile"><i class="fa fa-instagram"></i></a><?php } ?>
								</div>
								<?php if($mb_desc!="") { ?><p class="wpsm_team_2_b_desc"> <?php echo $mb_desc; ?> </p> <?php } ?>
								
							</div>
						</div>										
					<?php 
					
				}
				
			}
			else
			{
				echo "No Team Group Found";
			}
		
			?>
			</div>			
		</div>
	</div>
	<script>
	jQuery(document).ready(function() {
	  var owl = jQuery('.wpsm-team-owl-carousel');
	  owl.owlCarousel({
		responsiveClass:true,
		navigation:true,
		loop: true,
		margin: 20,				
		autoplay: true,
		rewindNav : false,
		autoplayTimeout: 5000,
        autoplaySpeed: 500,				
		autoplayHoverPause: true,
		responsive: {
		  0: {
			items: 1
		  },
		  500: {
			items: 2
		  },
		  767: {
			items: 2
		  },
		  992: {
			items: 3
		  },
		  1000: {
			items:<?php echo $row;?>
		  }
		}
	  });
	  
	})
	</script>

	