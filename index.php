<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

$from = 'besson.mikael04@gmail.com';
$to = 'martymacfly04@gmail.com';
//$message = 'Hello World, sending a simple mail !';
// TODO Votre code ici.

//mail('besson.mikael04@gmail.com', 'Hello World', 'Hello World, sending a simple mail !' );


/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.

$message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus erat et massa blandit bibendum.
 Nullam quis ornare mi. Vivamus hendrerit rhoncus nisi, sit amet maximus erat porttitor ac. Praesent sed eros placerat,
  pharetra lorem ut, tempus ex. Donec quam lacus, viverra nec dolor quis, varius eleifend urna. In condimentum 
  massa dictum blandit malesuada. Curabitur pulvinar ultrices metus, at cursus ante euismod eu.  !';
$message = wordwrap($message, 70, "\r\n");
mail('besson.mikael04@gmail.com', 'Hello World2', $message );