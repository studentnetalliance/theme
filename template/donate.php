<style>
	#donations_form .form-group:hover label{
		color: red;
	}
	#donations_form input{
		font-family: monospace;
	}
</style>

<?php
$accepts = array(
	"Bitcoin" => "1SNAxixSmK8MXkfTnvJJqmdE2nXVzTTde",
	"Dogecoin" => "DSNAsUGwgp4Y2yqZ8D3SToamRfNYptHYxX",
	"Namecoin" => "N1SNAmj1NNpG2KwNzoHpq7T6GTv8mKq2iS",
	"Anoncoin" => "ASNAxkqQKqCkRnFnWr2uNZrDCSp6MU2Hkn",
	"Feathercoin" => "6snaYpYUxaS8px3d6xkoUmvpaomPWHfPjk",
	"Litecoin" => "LSNAz4puQuBdtm5Dq3hzfR86zPy7xrVzqQ",
	"Novacoin" => "4SNAd6GZzy1jLndzC1rVxJv6GdAAzSAVVg",
	"Peercoin" => "PSNAvURLCNUwmo1WbxMKAUuv6sUn5wL36Z",
	"Vertcoin" => "VaSNAc2brPwdWiZXMZh2u55TzmQg6hHcM8",
	"Auroracoin" => "ASNATcCrSPtSnaTvFgiSwstG7agLMNssrc"
	);

?>

<p>
	Your donations help us fund things like thing1 thing2 thing 3 thing4 thing5
</p>

<?= random_lipsum() ?>

<p>
	We accept donations from other cryptocurrencies:
</p>

<form class="form-horizontal" id="donations_form">
	<?php foreach($accepts as $type => $key){ ?>
		<div class="form-group">
			<label class="col-sm-3 control-label">
				<?= $type ?>
			</label>
			<div class="col-sm-9">
				<input
					type="text"
					class="form-control"
					value="<?= $key ?>"
					onClick="this.select();"
					>
			</div>
		</div>
	<?php } ?>
</form>