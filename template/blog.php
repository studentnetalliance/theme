<?= random_lipsum() ?>

<h3 class="text-center">
	Our Latest Posts
</h3>

<ul class="pager">
	<li class="previous">
		<a href="#blog_carousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			More Recent
		</a>
	</li>
	<li class="next">
		<a href="#blog_carousel" data-slide="next">
			Older
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</li>
</ul>

<div id="blog_carousel"
	class="carousel slide"
	data-ride="carousel"
	data-interval="false"
	data-wrap="false">
	<div class="carousel-inner">
		<?php for($index = 1; $index < 4; $index++){ ?>
			<div class="item
				<?php if($index == 1) echo "active"; ?>
				">
				<h3>entry <?= $index ?></h3>
				<small>By <span class="highlight">Anonymous</span> on 1/2/34</small>
				<img src="img/<?= $index + 4 ?>.jpg" class="img-responsive">
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
		Read our full blog
	</a>
</div>