# TDD Lab Exercise 2

Oefeningen voor http://wgroeneveld.github.io/tdd-course

## Technologie

In PHP. Test Harnas met PHPUnit. [Zie ook PHPUnit documentatie](https://phpunit.de/manual/current/en/index.html).

## Opdracht beschrijving

### Calculator.php

Gegeven een stukje 'legacy code'. 
Onze klanten melden een bug: onderstaande code is niet correct. 

```php
function calculate() {
	$u = $_POST['i'];

	if (!preg_match('/^(?=[a-z]{2})(?=.{4,26})(?=[^.]*\.?[^.]*$)(?=[^_]*_?[^_]*$)[\w.]+$/iD',
	                $u))
	{
	 return false;
	}
	else
	{
	 return true;
	}
}
```

De functie retourneert `TRUE` wanneer Abigail inlogt, maar `FALSE` indien Jos probeert in te loggen.

Gelieve de code aan te passen zodat Jos ook kan verder werken. 

Vorige week belde dezelfde klant om te melden dat gebruikersnamen met underscores ook niet correct werken. 
Kan jij dit voor 16h in productie zetten, anders verliezen we 100.000 EUR!

Om het resultaat te zien, voer `php calculator.php` uit op je command line.

Geen output wil zeggen dat `false` terug gegeven werd.

### Url.php

Gegeven een tweede stukje 'legacy code'.
Onze klanten melden weer een bug: ze hebben de servers geupgrade omwille van een hack aanval. De applicaties zijn nu gehost met een certificaat onder HTTPS. De onderstaande code blijkt hier niet compatibel mee te zijn:

```php
function verifyUrl($URL) {
		$pattern = "_(^|[\s.:;?\-\]<\(])(http://[-\w;/?:@&=+$\|\_.!~*\|'()\[\]%#,☺]+[\w/#](\(\))?)(?=$|[\s',\|\(\).:;?\-\[\]>\)])_i";
      if(preg_match($pattern, $URL)) {
        return true;
      } else{
        return false;
      }
  }
```
Graag de code up-to-date brengen. 
Dit kan deze keer gelukkig genoeg met **unit testen** dus schrijf eerst een falende test bij! (urlTests.php)

``phpunit tests`` om de testen uit te voeren vanuit de root folder.
