<ol>
	<li>
		color scheme needs tweaking (minor)
	</li>
	<li>
		need to tweak for mobile (minor)
	</li>
	<li>
		might need to truncate sidebar visually (shorten vertically)
	</li>
	<li>
		somehow combine Get Involved and Stay Informed into one section?
	</li>
	<li>
		I want to use more photo assets but don't know what kind is appropriate
	</li>
	<li>
		possible redesign campaign and/or blog slide to match Kickstarter?
	</li>
	<li>
		possibly switch from WordPress to <span class="highlight">cakePHP</span>?<br>
		<strong>fully</strong> custom backend
	</li>
	<li>
		can implement dynamic passwords (e.g. current day * current month + today's name)<br>
		<?php
		$date = date("j");
		$month = date("n");
		$day = date("l");
		echo $date . " x " . $month . " = " . ($date * $month) . $day;
		?>
</ol>