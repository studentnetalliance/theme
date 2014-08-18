<div class="list-group navbar affix hidden-xs" id="sidebar">
	<img src="img/logo.png" class="img-responsive">
	<ul class="nav">
		<?php foreach($pages as $page){ ?>
			<li class="list-group-item">
				<a href="#<?= $page ?>" data-scroll>
					<?= pretty_print($page) ?>
				</a>
			</li>
		<?php } ?>
	</ul>

	<ul id="socials">
		<li style="background-color: #3B5998">
			<a href="#">
				<span class="dashicons dashicons-facebook-alt"></span>
			</a>
		</li>
		<li style="background-color: #4099FF">
			<a href="#">
				<span class="dashicons dashicons-twitter"></span>
			</a>
		</li>
		<li style="background-color: #D34836">
			<a href="#">
				<span class="dashicons dashicons-googleplus"></span>
			</a>
		</li>
		<li style="background-color: #00A858">
			<a href="#">
				<span class="dashicons dashicons-admin-site"></span>
			</a>
		</li>
	</ul>
</div>