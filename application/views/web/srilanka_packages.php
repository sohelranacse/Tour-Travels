
		<section class="about-section">
			<div class="container">
				<div class="col-md-offset-1 col-md-10 top-header-page">
					<h1 class="text-center wow fadeIn" data-wow-delay="300ms">Packages</h1>
					<span class="top-divider wow fadeIn" data-wow-delay="300ms">
			            <img src="<?php echo base_url(); ?>web_assets/img/divider-2.png" class="img-responsive" alt="Image">
			        </span>
			        <p class="wow fadeIn" data-wow-delay="500ms">
			        	Indulge in a perfect holiday with the best available offers and highly personalized services.
			        </p>
			    </div>
			</div>
		</section>
		<section class="hotel-section">
			<div class="container">

				<?php 
		        $query = $this->User_model->get_packages();
		        if ($query->num_rows()>0) {
		          //$i = 1;
		          foreach ($query->result_array() as $data) {
		        ?>
				<div class="col-md-3 col-sm-4">
					<div class="hotel-srilanks pack2">

						<div class="img-p"><img src="<?php echo base_url(); ?>web_assets/img/packages/<?php echo $data['userfile']; ?>" class="img-responsive" alt="hotel"></div>
						<div class="bgs"></div>
						<h4 class="h4_ti"><?php echo $data['title']; ?></h4>
						<div class="part-2 for-pack">
							<h4 class="h4_ti2"><?php echo $data['title']; ?></h4>

							<a href="<?php echo base_url(); ?>web_assets/img/packages/<?php echo $data['file_name']; ?>" class="btn" target="_blank">VIEW PACKAGES</a>
						</div>
					</div>
				</div>
				<?php }} ?>
				




			</div>
		</section>