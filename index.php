<!- continued from header centered-wrapper div ->
<?php include 'includes/headb.php'; ?>

<?php include 'includes/factsfunc.php'; ?>

<!- Company describtion section ->
<div class="CompanyDescription">
	<p><strong>Learning About Life Never Stops</strong></p>
	<p>Hate trying to understand things about your body or sexuality that everyone else seems to know already? Well we did too, and that's why we developed this app and website to provide you with the knowledge that others forgot to tell you.<p>
	</br><p>We are currently under construction, please come again soon.<p>	
</div>
<!- end CompanyDescription div ->



<!- first set of calls to action ->
<div class="CallsToAction">

	<div class="CTA1"><a href="<?= "index.php" ?>">
	<img src='includes/images/lightOFF.png' width='125px' onmouseover="this.src='includes/images/lightON.png';" onmouseout="this.src='includes/images/lightOFF.png';" />
	
	<p><strong><?php pickRandom(); ?></strong><p>
	</a></div>
	<!- end CTA1 div ->

	<div class="CTA2"><p>
	<img src="includes/images/comingSoon.png" alt="coming soon phone app">
	</p></div>
	<!- end CTA2 div ->
</div>
<!- end CallsToAction div ->

<!- HomePageChapterDiv ->
<div class="HPchap">
	<div class = "row1chap">
		
		<div class="single1chap">
		<a href="chapter1.php">
		<p><strong>Chapter 1</strong></p>
		</a>
		</div>

		<div class="single5chap">
		<a href="chapter5.php">
		<p><strong>Chapter 5</strong></p>
		</a>

		</div>
		<div class="single9chap">
		<a href="chapter9.php">
		<p><strong>Chapter 9</strong></p>
		</a>
		</div>

		<div class="single13chap">
		<a href="chapter13.php">
		<p><strong>Chapter 13</strong></p>
		</a>
		</div>

	</div>
	<div class = "row2chap">

		<div class="single2chap">
		<a href="chapter2.php">
		<p><strong>Chapter 2</strong></p>
		</a>		
		</div>
		
		<div class="single6chap">
		<a href="chapter6.php">
		<p><strong>Chapter 6</strong></p>
		</a>
		</div>

		<div class="single10chap">
		<a href="chapter10.php">
		<p><strong>Chapter 10</strong></p>
		</a>		
		</div>

		<div class="single14chap">
		<a href="chapter14.php">
		<p><strong>Chapter 14</strong></p>
		</a>
		</div>

	</div>
	<div class = "row3chap">

		<div class="single3chap">
		<a href="chapter3.php">
		<p><strong>Chapter 3</strong></p>
		</a>
		</div>

		<div class="single7chap">
		<a href="chapter7.php">
		<p><strong>Chapter 7</strong></p>
		</a>
		</div>

		<div class="single11chap">
		<a href="chapter11.php">
		<p><strong>Chapter 11</strong></p>
		</a>
		</div>

		<div class="single15chap">
		<a href="chapter15.php">
		<p><strong>Chapter 15</strong></p>
		</a>
		</div>

	</div>
	<div class = "row4chap">

		<div class="single4chap">
		<a href="chapter4.php">
		<p><strong>Chapter 4</strong></p>
		</a>
		</div>

		<div class="single8chap">
		<a href="chapter8.php">
		<p><strong>Chapter 8</strong></p>
		</a>
		</div>

		<div class="single12chap">
		<a href="chapter12.php">
		<p><strong>Chapter 12</strong></p>
		</a>
		</div>

	</div>
</div>
<!- Footer section ->
<?php include 'includes/footer.php'; ?>

</div>
<!- end centered-wrapper div ->
</body>
</html>
