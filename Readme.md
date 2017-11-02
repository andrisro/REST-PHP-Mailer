#   PHP Mailer Script by Andris Roling
#   (C)opyright 2017 by Andris Roling
#   GIT https://github.com/andrisro/REST-PHP-Mailer

#   Version: 1.2


#   -- German --

    Beispielaufruf: 
    mail.php?from=firstname%40lastname.de&subject=test&message=message

    oder PER POST-Methode.

    Parameter für Mail im Link

    from -> E-Mail Adresse, die als Absender angezeigt wird
    subject -> Betreff der Mail 
    message -> Inhalt der Mail


    Alle Parameter müssen URL-Encoded sein!

#   -- English --

    Example Call: 
    mail.php?from=firstname%40lastname.de&subject=test&message=message

    or with a POST-Call.

    params for the mail: 

    from -> e-mail adress, which will be shown as the sender
    subject -> subject of the mail 
    message -> text / message of the mail

    all params has to be url encoded!