<!-- DIAGNOSTIC IMAGRY HOMEPAGE TEMPLATE -->
<?php  defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header.php'); ?>
	<div id="headerShell">	    
	    <?php  
            $a = new Area('Header'); 
            $a->enableGridContainer();
            $a->display($c);    
        ?>	    
	</div>	
	<section id="mainShell">				
		<section id="home-tagline">
			<div class="animate-border-vert animate-border-start">&nbsp;</div>
			<div class="home-callout-wrapper">
				<div class="home-border-wrapper">
					<div class="animate-border-right-lr">&nbsp;</div>					
					<div class="animate-border-left-rl">&nbsp;</div>
					<div class="animate-border-right-tb">&nbsp;</div>
					<div class="animate-border-left-tb">&nbsp;</div>
						<div class="home-border">
							<?php  
								$a = new Area('Tagline'); 
				                $a->enableGridContainer();
								$a->display($c); 	
							?>
						</div>
					<div class="animate-border-right-rl">&nbsp;</div>
					<div class="animate-border-left-lr">&nbsp;</div>
				</div>		
			</div>
		</section>
		<section id="home-convenience">
			<div class="animate-border-vert animate-border-finish">&nbsp;</div>
			<div class="home-headline">
				<div class="home-subhead-wrapper">
					<?php  
						$a = new Area('Convenience Title'); 
		                $a->enableGridContainer();
						$a->display($c); 	
					?>
				</div>
			<div class="animate-border-vert animate-convenience-start">&nbsp;</div>
			</div>
			<div class="home-content-wrapper">
				<div class="col-xs-12 col-sm-4 convenience-item">
					<div class="animate-convenience-right-lr">&nbsp;</div>					
					<div class="animate-convenience-left-rl">&nbsp;</div>
					<div class="animate-convenience-right-tb">&nbsp;</div>
					<div class="animate-convenience-left-tb">&nbsp;</div>
					<div class="home-convenience-content">
						<?php  
							$a = new Area('Convenience Content Left'); 
			                $a->enableGridContainer();
							$a->display($c); 	
						?>
						<div class="animate-convenience-right-rl">&nbsp;</div>
						<div class="animate-convenience-left-lr">&nbsp;</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 convenience-item">
					<div class="animate-convenience-right-lr">&nbsp;</div>					
					<div class="animate-convenience-left-rl">&nbsp;</div>
					<div class="animate-convenience-right-tb">&nbsp;</div>
					<div class="animate-convenience-left-tb">&nbsp;</div>
					<div class="home-convenience-content">
						<?php  
							$a = new Area('Convenience Content Center'); 
			                $a->enableGridContainer();
							$a->display($c); 	
						?>
						<div class="animate-convenience-right-rl">&nbsp;</div>
						<div class="animate-convenience-left-lr">&nbsp;</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 convenience-item">
					<div class="animate-convenience-right-lr">&nbsp;</div>					
					<div class="animate-convenience-left-rl">&nbsp;</div>
					<div class="animate-convenience-right-tb">&nbsp;</div>
					<div class="animate-convenience-left-tb">&nbsp;</div>
					<div class="home-convenience-content">
						<?php  
							$a = new Area('Convenience Content Right'); 
			                $a->enableGridContainer();
							$a->display($c); 	
						?>
						<div class="animate-convenience-right-rl">&nbsp;</div>
						<div class="animate-convenience-left-lr">&nbsp;</div>
					</div>
				</div>
			</div>
			<div class="animate-border-vert animate-info-start">&nbsp;</div>
		</section>	
		<section id="home-info">
			<div class="home-row">
				<div class="col-xs-12 col-sm-6 home-background-block">
					<div class="v-center">
						<?php  
							$a = new Area('Info Left'); 
			                $a->enableGridContainer();
							$a->display($c); 	
						?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 home-info-block">
					<div class="v-center">
						<?php  
							$a = new Area('Info Right'); 
			                $a->enableGridContainer();
							$a->display($c); 	
						?>
					</div>
				</div>
			</div>
		</section>
		<section id="home-patient">
			<div class="animate-border-vert animate-patient-start">&nbsp;</div>
			<div class="home-headline">
				<div class="home-subhead-wrapper">
					<?php  
						$a = new Area('Patient Title'); 
		                $a->enableGridContainer();
						$a->display($c); 	
					?>
				</div>
			<div class="animate-border-vert animate-patient-vert">&nbsp;</div>
			</div>
			<div class="home-content-wrapper">
				<div class="col-xs-12 col-sm-4 patient-itempatient-item">
					<div class="animate-patient-right-lr">&nbsp;</div>					
					<div class="animate-patient-left-rl">&nbsp;</div>
					<div class="animate-patient-right-tb">&nbsp;</div>
					<div class="animate-patient-left-tb">&nbsp;</div>
					<div class="home-patient-content">
						<?php  
							$a = new Area('Patient Content Left'); 
			                $a->enableGridContainer();
							$a->display($c); 	
						?>
					<div class="animate-patient-right-rl">&nbsp;</div>
					<div class="animate-patient-left-lr">&nbsp;</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 patient-itempatient-item">
					<div class="animate-patient-right-lr">&nbsp;</div>					
					<div class="animate-patient-left-rl">&nbsp;</div>
					<div class="animate-patient-right-tb">&nbsp;</div>
					<div class="animate-patient-left-tb">&nbsp;</div>
					<div class="home-patient-content">
						<?php  
							$a = new Area('Patient Content Center'); 
			                $a->enableGridContainer();
							$a->display($c); 	
						?>
					<div class="animate-patient-right-rl">&nbsp;</div>
					<div class="animate-patient-left-lr">&nbsp;</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 patient-item">
					<div class="animate-patient-right-lr">&nbsp;</div>					
					<div class="animate-patient-left-rl">&nbsp;</div>
					<div class="animate-patient-right-tb">&nbsp;</div>
					<div class="animate-patient-left-tb">&nbsp;</div>
					<div class="home-patient-content">
						<?php  
							$a = new Area('Patient Content Right'); 
			                $a->enableGridContainer();
							$a->display($c); 	
						?>
					<div class="animate-patient-right-rl">&nbsp;</div>
					<div class="animate-patient-left-lr">&nbsp;</div>
					</div>
				</div>
			</div>
		</section>
		<section id="home-quote">
			<div class="animate-border-vert animate-quote-start-1">&nbsp;</div>			
			<div class="animate-border-vert animate-quote-start-2">&nbsp;</div>
			<div class="home-tagline">
				<div class="home-border">
					<?php  
						$a = new Area('Quotes Title'); 
		                $a->enableGridContainer();
						$a->display($c); 	
					?>
				</div>
			</div>
			<div class="animate-border-vert animate-quote-finish-1">&nbsp;</div>			
			<div class="animate-border-vert animate-quote-finish-2">&nbsp;</div>
		</section>
		<section id="home-testimonials">
			<div class="home-headline">
				<div class="home-subhead-wrapper">
					<?php  
						$a = new Area('Testimonial Title'); 
		                $a->enableGridContainer();
						$a->display($c); 	
					?>
				</div>
			</div>
			<div class="animate-border-vert animate-testimonial-start">&nbsp;</div>
		</section>
		<section id="home-testimonial-content">	
			<div class="home-wrapper">
				<div class="home-border-wrapper">
				<div class="animate-testimonial-right-lr">&nbsp;</div>					
				<div class="animate-testimonial-left-rl">&nbsp;</div>
				<div class="animate-testimonial-right-tb">&nbsp;</div>
				<div class="animate-testimonial-left-tb">&nbsp;</div>
					<div class="home-border home-border-testimonial">
						<?php  
							$a = new Area('Testimonial Content'); 
			                $a->enableGridContainer();
							$a->display($c); 	
						?>
					</div>
				<div class="animate-testimonial-right-rl">&nbsp;</div>
				<div class="animate-testimonial-left-lr">&nbsp;</div>
				</div>
			</div>			
			<div class="animate-border-vert animate-testimonial-finish">&nbsp;</div>
		</section>	
	</section><!-- #mainShell -->	
<?php  $this->inc('inc/footer.php'); ?>	