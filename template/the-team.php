<?php
$teams = array(
	"general",
	"policy",
	"outreach",
	"tech"
	);
$words = get_random_words(100);
$word_counter = 0;
?>

<div class="row">
	<div class="col-sm-2">
		<ul id="team_pills" class="nav nav-pills nav-stacked">
			<?php $index = 0; foreach($teams as $team){ ?>
				<li>
					<a data-slide-to="<?= $index++ ?>"
						data-target="#team_carousel"
						>
						<?= pretty_print($team) ?>
					</a>
				</li>
			<?php } ?>
		</ul>
	</div>
	<div class="col-sm-10 carousel slide"
		id="team_carousel"
		data-interval="false"
		data-ride="carousel"
		>
		<div class="carousel-inner">
			<?php foreach($teams as $team){ ?>
				<div class="item <?php if($team == $teams[0]) echo "active";?>">
					<?php for($index = 0; $index < 5; $index++){ ?>
						<div class="row">
							<div class="col-sm-5 text-right"
								style="text-transform: uppercase">
									<?= $words[$word_counter++] ?>
									<?= $words[$word_counter++] ?>
							</div>
							<div class="col-sm-7">
								<strong>
									<?= $words[$word_counter++] ?>
									<?= $words[$word_counter++] ?>
								</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
									<img src="img/<?= ($person_count++ % 9) + 1 ?>.jpg" class="img-responsive">
							</div>
							<div class="col-sm-7">
								<?= random_lipsum() ?>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>