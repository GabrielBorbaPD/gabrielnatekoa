<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="rodape-widgets">
					<?php if ( dynamic_sidebar('rodape_widgets_1') ) : else : endif; ?>
				</div>
			</div>
			<div class="col">
				<div class="rodape-widgets">
					<?php if ( dynamic_sidebar('rodape_widgets_2') ) : else : endif; ?>
				</div>
			</div>
			<div class="col">
				<div class="rodape-widgets">
					<?php if ( dynamic_sidebar('rodape_widgets_3') ) : else : endif; ?>
			</div>
			<div class="col">
				</div>
				<div class="rodape-widgets">
					<?php if ( dynamic_sidebar('rodape_widgets_4') ) : else : endif; ?>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</div>
</div>
</body>
</html>