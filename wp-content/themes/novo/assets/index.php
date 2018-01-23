		<h2 class="title-front-page">CONTATO</h2>
		<div class="risco">
			<img src="<?php bloginfo('template_url') ?>/images/risco.png">
		</div>
		<div class="row">
			<div class="col">
				<p class="descricao-contato">
					<?php if( get_field('texto_do_contato') ): ?>
	    				<?php the_field('texto_do_contato'); ?>
					<?php endif; ?>
				</p>
				<div class="col icons">
					<div class="row">
						<div class="col-1">
							<img class="icon" src="<?php bloginfo('template_url'); ?>/images/placeholder.svg">
						</div>
						<div class="col-11">
							<?php if( get_field('endereço') ): ?>
			    				<?php the_field('endereço'); ?>
							<?php endif; ?>
						</div>

						<div class="col-1">
							<img class="icon" src="<?php bloginfo('template_url'); ?>/images/smartphone.svg">
						</div>
						<div class="col-11">
							<?php if( get_field('telefone') ): ?>
			    				<?php the_field('telefone'); ?>
							<?php endif; ?>
						</div>

						<div class="col-1">
							<img class="icon" src="<?php bloginfo('template_url'); ?>/images/mail.svg">
						</div>
						<div class="col-11">
							<?php if( get_field('e-mail') ): ?>
			    				<?php the_field('e-mail'); ?>
							<?php endif; ?>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col">
				<?php echo do_shortcode( '[contact-form-7 id="4" title="Formulário de contato"]' ); ?>
			</div>
		</div>


<!-- Quebra de div -->
<div class="clear"></div>