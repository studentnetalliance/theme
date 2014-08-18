<p>
	We work tirelessly to defend the digital rights of students across the nation.
</p>

<?= random_lipsum() ?>

<h3 class="text-center">Our most popular campaigns</h3>

<ul class="pager">
	<li class="previous">
		<a href="#campaigns_carousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			Back
		</a>
	</li>
	<li class="next">
		<a href="#campaigns_carousel" data-slide="next">
			Forward
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</li>
</ul>
<div id="campaigns_carousel"
	class="carousel slide"
	data-ride="carousel"
	data-interval="false"
	data-wrap="false">
	<div class="carousel-inner">
		<?php for($index = 1; $index < 4; $index++){ ?>
			<div class="item
				<?php if($index == 1) echo "active"; ?>
				">
				<img src="img/<?= $index ?>.jpg" class="img-responsive">
				<h3>Campaign <?= $index ?></h3>
				<?= random_lipsum() ?>
				<br>
				Read More Link
			</div>
		<?php } ?>
	</div>



</div>

<div class="spacer"></div>

<div class="text-center">
	<a class="btn btn-primary btn-lg"
		data-toggle="tooltip"
		data-placement="bottom"
		title="link pops to new page"
		>
		View all of our campaigns
	</a>
</div>