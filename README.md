##READ ME

erbij vermelden dat ik allerei errors kreeg toen ik met de letterlijke code van die tutorials werkte (copy pasten en uittesten zoals meneer dat zei) Hierdoor heb ik veel moeten debuggen. Ook kreeg ik veel errors.

Errors create() method product.php:

Er moest een try-catch block staan in die create() methode van products.php
Errors bij uploading file functionality:

Bij dat laatste stukje van de eerste link, moest ik zelf uitvinden dat ik de absolute path moet gebruiken van de folder waarin ik images wou uploaden
Ook moest de web-server (in mijn geval Apache) permission krijgen alvorend het files van de temporary directory zou kunnen verplaatsen naar de local dir. PS: dit alles was niet vermeld in de tutorial, moest het zelf uitzoeken uren lang.

Added erbij:

- Custom Fonts (OpenSans): Hiervoor moest ik extra php code zetten in header.php (zie comment <!----FONT-CONTROL PHP CODE --> in header.php)
