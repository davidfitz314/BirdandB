<?php 

function pickRandom() {
	$input = array(
	/* chapter 2 interesting facts here */
	"Interesting fact :Inside of the vagina, sperm can live for up to 48 to 72 hours and out of the millions of sperm only a few hundred even come close to the egg.",
	"Interesting Fact: If an egg is not already in the Fallopian tube, the sperm will stop moving and wait until the egg moves in before continuing its journey. Unlike other parts of the female reproductive tract the Fallopian Tubes provide the sperm with an environment where they can live up to 5 days.",
	"Interesting fact: If the the fertilized egg does not enter the uterus properly a tubal or ectopic pregnancy can occur, in the case of an ectopic pregnancy the mother’s health will be at serious risk.",
	"Interesting fact: The hormones used to test for pregnancy in women are called Human Chorionic Gonadotrophin (HCG), these hormones were produced by the cells that later changed into the baby’s placenta.",
	"Interesting fact: at week 13, if the baby is female, her ovaries will contain more than 2 million eggs at this developmental stage.",
	"Interesting Fact: At week 14 some babies have been seen sucking their thumb through the ultrasound. At week 15 if a flashlight is shined on the mother’s belly, the baby inside will move away from the beam.",
	"Interesting fact: Starting around week 21 when the babies movement becomes stronger some mothers start to recognize patterns of movement from their baby.",
	"Interesting Fact: At 23 weeks the baby’s ear have now become adjusted to hearing sounds and some sounds after birth will be recognized from the time spent in the womb.",
	"Interesting fact: at week 27 the baby’s lungs aren’t fully formed, but if an early birth occurs the lungs can still function with medical help.",
	"Interesting Fact: The average baby’s mother gains about 1lb a week at this time but ½ of that goes to the baby.",
	"Interesting Fact: The baby’s skull won’t be fully fused until adulthood this allows the baby’s head to squeeze through the birth canal.",
	/* chapter 3 here */
	"Interesting Fact: Many children will have growing pains during their life until they reach adulthood. To ease these symptoms many people treat them like sports injuries, applying warm heat to the painful area, stretching and gently massaging it to make the pain go away.",
	"Interesting Fact: if a male begins puberty before the age of 9 or doesn’t show signs of puberty by the age of 14 it is recommend that they see a pediatrician and have a full examination.",
	"Interesting Fact: In most males one testicle, usually the left side, is slightly lower than the other testicle. Many scientist believe that this happens to protect the testicles from bouncing into one another while the male is moving around.",
	"Interesting Fact: About 1 in 3 males will develop pearly penile papules, these are skin colored pimple-like bumps around the crown, or corona of the penis. They are completely harmless and normal, but many young adolescents fear they have something wrong with them when these appear.",
	"Interesting Fact: The cause of Nocturnal Emissions or wet dreams is still under debate with many claiming it to be due to arousal in dreams, others claiming it to be a lack of ejaculation prior to the nocturnal emission, and finally some claiming that it is due to the body going through or just finishing puberty .",
	"Interesting Fact: Gynecomastia is usually harmless and resolves itself within 2 years, but in the event a male does has signs of gynecomastia it is recommended that he be evaluated by pediatrician, especially so when he is prior to puberty or in late adolescence.",
	"Interesting Fact: If a female has started puberty before 8 years of age or hasn’t started by the age 13, it is highly recommended by doctors that she be examined by a trained pediatrician.",
	"Interesting Fact: Most parents are not prepared for their female child to have breast buds and mistakenly believe they are tumors until they visit a doctor.",
	"Interesting Fact: Many young females have misconceptions about menstruation and the best time to ease their worries about it is when they have first begun developing breast buds as this signals menstruation and more is coming. Always remember that menstruation is different for every female, the amount of cramps, pain and other experiences vary for each individual.",
	"Interesting Fact: A doctor should be called if a sudden unexplainable change happens in the female's period such as: heavy bleeding that soaks through more that 6 - 8 pads a day, bleeding between periods, period lasting longer than 7 - 10 days, and sudden development of severe abdominal pain.",
	"Interesting Fact: Beginning with puberty many females start to become interested in love and acting it out with other people, this can be scary for their parents, but should be treated calmly and explained thoroughly by their parents or legal guardians. If needed outside resources are available online that can be used as tools for teaching young females."
	/* end chapter 3 */
);
	$output = $input[array_rand($input)];
	echo $output;
	echo "__________";
	echo array_search($output, $input);
}

?>
