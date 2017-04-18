<!- continued from header centered-wrapper div ->
<?php include 'includes/headb.php'; ?>

<?php include 'includes/factsfunc.php'; ?>

<!- Company describtion section ->
<div class="CompanyDescription">
	<p><strong>Learning About Life Never Stops</strong></p>
	<p>Hate trying to understand things about your body or sexuality that everyone else seems to know already? Well we did too, and that's why we developed this app and website to provide you with the knowledge that others forgot to tell you.<p>
	<p>Here you will be able to explore both your own sexes anatomy and chemistry or even the opposites; From childhood development, to puberty, to sexual matters we try to cover all subjects that are hard to talk about.</p>
	<div class="smallertext">
		<p>Started in 2017 by 2 students doing their senior capstone project at DSU, BirdandB.com is a non-profit organization that only wishes to better the world.</p>
	</div>
</div>
<!- end CompanyDescription div ->

<!- disclaimer section->
<div class="disclaimer">
<h3>Viewer Discretion is Advised</h3>
<p><strong>BirdandB.com</strong> is tutorial website and may contain content that is not appropriate for some viewers. Only those who are over 18 years of age or have their legal guardians consent should proceed to the sex education chapters section. By proceeding you the user are hereby agreeing that you are of the appropriate age or with guardian consent and have read this notice. </p>
</div>
<!- end disclaimer section->

<!- first set of calls to action ->
<div class="CallsToAction">

	<div class="CTA1"><a href="<?= "index.php" ?>">
	<img src='includes/images/lightOFF.png' onmouseover="this.src='includes/images/lightON.png';" onmouseout="this.src='includes/images/lightOFF.png';" />
	
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

		<div class="single2chap">
		<a href="chapter2.php">
		<p><strong>Chapter 2</strong></p>
		</a>

		</div>
		<div class="single3chap">
		<a href="chapter3.php">
		<p><strong>Chapter 3</strong></p>
		</a>
		</div>

		<div class="single4chap">
		<a href="chapter4.php">
		<p><strong>Chapter 4</strong></p>
		</a>
		</div>

	</div>
	<div class = "row2chap">

		<div class="single5chap">
		<a href="chapter5.php">
		<p><strong>Chapter 5</strong></p>
		</a>		
		</div>
		
		<div class="single6chap">
		<a href="chapter6.php">
		<p><strong>Chapter 6</strong></p>
		</a>
		</div>

		<div class="single7chap">
		<a href="chapter7.php">
		<p><strong>Chapter 7</strong></p>
		</a>		
		</div>

		<div class="single8chap">
		<a href="chapter8.php">
		<p><strong>Chapter 8</strong></p>
		</a>
		</div>

	</div>
	<div class = "row3chap">

		<div class="single9chap">
		<a href="chapter9.php">
		<p><strong>Chapter 9</strong></p>
		</a>
		</div>

		<div class="single10chap">
		<a href="chapter10.php">
		<p><strong>Chapter 10</strong></p>
		</a>
		</div>

		<div class="single11chap">
		<a href="chapter11.php">
		<p><strong>Chapter 11</strong></p>
		</a>
		</div>

		<div class="single12chap">
		<a href="chapter12.php">
		<p><strong>Chapter 12</strong></p>
		</a>
		</div>
	</div>
	<div class = "row4chap">

		<div class="single13chap">
		<a href="chapter13.php">
		<p><strong>Chapter 13</strong></p>
		</a>
		</div>

		<div class="single14chap">
		<a href="chapter14.php">
		<p><strong>Chapter 14</strong><br><span class="shrinkText">References</span></p>
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
