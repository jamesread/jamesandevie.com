<?php

require_once 'includes/widgets/header.php';

function idea($title, $cost) {
	echo "<div><strong>$title</strong><br />";
	echo "<a style = \"text-transform: none \" href = \"http://paypal.me/jamesandevie/$cost\">Gift &pound;$cost</a><br /><br />";
	echo "</div>";
}

?>

<p>The biggest gift that you can give is the celebration of our marriage, 
however, should you wish to give a wedding gift a contribution towards our 
dream honeymoon would be greatly appreciated. </p>

<p>We're a modern couple, who have been living together for quite some time! We're already sorted for plates, sandwich toasters and all those traditional wedding gifts! 
That is why we suggested money if you're looking for an easy option or you're just not sure what to get!</p>

<p>
If you'd like to make a contribution online, we have a groovy PayPal link... <br /><br />
<a href = "http://paypal.me/jamesandevie">paypal.me/jamesandevie</a><br /><br />
...but cards on the day are also more than welcome too, whatever works for you!
</p>

<h2>Ideas</h2>


<?php

idea('Ramen! Nom nom nom!', 5);
idea('A Singapore sling...?!', 10);
idea('Drinks by the pool in Bali', 15);
idea('Succulent street food in Singapore', 20);
idea('Superb sushi in Japan', 30);
idea('Dreamy day in Disney Japan (oh no!)', 40);
idea('Adventurous jungle excursion in Bali', 50);
idea('A fancy candlelit dinner for two in Bali', 75);
idea('Something silly...', 100);

?>
<h2>Other</h2>
<p>If you'd like to donate a custom amount, <a style = "text-transform: none;" href = "http://paypal.me/jamesandevie">click here</a>. Thank you!
<p>
<?php

require_once 'includes/widgets/footer.php';

?>
