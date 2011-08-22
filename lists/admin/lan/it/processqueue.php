<?php

$lan = array(
'Running in testmode, no emails will be sent. Check your config file.' => 'Eseguito in modalit&agrave; di test, non verranno inviate email. Controlla il file di configurazione.',
'The following restrictions have been set by your ISP:' => 'Le seguenti restizioni sono state settate dal tuo ISP:',
'Script stage' => 'Script stage',
'Finished, Nothing to do' => 'Finito, Niente da fare',
'messages sent in' => 'messaggio inviato in',
'seconds' => 'secondi',
'invalid emails' => 'email non valide',
'emails failed (will retry later)' => 'email fallite (ritento pi&ugrave; tardi)',
'emails unconfirmed (not sent)' => 'email non confermate (non spedite)',
'Warning: script never reached stage 5' => 'Attenzione: lo script non ha mai raggiunto lo stage 5',
'This may be caused by a too slow or too busy server' => 'Questo pu&ograve; essere causato da un server troppo lento o sovraccarico',


'In safe mode, batches are set to a maximum of 100' => 'Nella modalit&agrave; di sicurezza i gruppi sono settati a un massimo di 100',
'Running in safe mode' => 'Esecuzione in modalit&agrave; di sicurezza',
'msgs/hr' => 'msgs/hr',
'Reload required' => 'Richiesta ricarica',
'Finished, All done' => 'Finito, tutto eseguito',
'Script finished, but not all messages have been sent yet.' => 'Script terminati, ma non tutti i messaggi sono stati ancora inviati.',
'Finished this run' => 'Terminata questa esecuzione',
'(test)' => '(test)',
'Would have sent' => 'Avrebbe inviato',
'(test)' => '(test)',
'Would have sent' => 'Avrebbe inviato',
'Started' => 'Iniziato',
'Processing has been suspended by your ISP, please try again later' => 'La processazione &egrave; stata sospesa dal tuo ISP, prego ritentare pi&ugrave; tardi',
'Sending in batches of' => 'Invio in gruppi di',
'emails' => 'emails',
'This batch will be' => 'Questo gruppo sar&agrave;',
'emails, because in the last' => 'emails, perch&eacuto; nell\'ultimo',
'emails were sent' => 'le email sono state inviate',
'Sending in batches of' => 'Invio in gruppi di',
'emails' => 'emails',
'In the last' => 'Nell\'ultimo',
'seconds more emails were sent' => 'ulteriori email saranno inviate',
'than is currently allowed per batch' => 'che &grave; attualmente consentito per gruppo',
'Sent in last run' => 'Spedito nell\'ultimo invio',
'Skipped in last run' => 'Saltato nell\'ultimo invio',
'Processing has started,' => 'La processazione &egrave; cominciata,',
'message(s) to process.' => 'messaggio(i) da processare.',
'It is safe to click your stop button now, report will be sent by email to' => '&Egrave; sicuro cliccare ora su "stop", il rapporto sar&agrave; spedito per email a',
'Your webserver is running in safe_mode. Please keep this window open. It may reload several times to make sure all messages are sent.' => 'Il tuo webserver è eseguito in "safe_mode" (modalit&agrave; di sicurezza). Per favore non chiudere questa finestra. Potrebbe essere ricaricata pi&ugrave; volte per assicurarsi che tutti i messaggi siano stati spediti.',
'Reports will be sent by email to' => 'I rapporti saranno inviati per email a',
'Processing message' => 'Processazione messaggio',
'Message' => 'Messaggio',
'is an RSS feed for' => '&Egrave; un feed RSS per',
'Looking for users' => 'Ricerca utenti',
'users apply for attributes, now checking lists' => 'gli utenti richiedono attributi, controllo le liste',
'No users apply for attributes' => 'Nessun utente richiede attributi',
'looking for users who can be excluded from this mailing' => 'ricerca utenti che possano essere esclusi dalla coda del processo corrente',
'Process Killed by other process' => 'Processo interrotto da altri processi',
'Found them' => 'Trovati',
'to process' => 'da processare',
'No users to process for this batch' => 'Nessun utente da processare per questo gruppo',
'batch limit reached' => 'raggiunto limite per gruppo',
'Process Killed by other process' => 'Processo interrotto da altri processi',
'Message I was working on has disappeared' => 'Il messaggio su cui stavo lavorando è scomparso',
'Sending' => 'Invio in corso',
'It took' => 'Ha impiegato',
'seconds to send' => 'invio fra secondi',
'Failed sending to' => 'Invio fallito a',
'Unconfirmed user' => 'Utente non confermato',
'Not sending to' => 'Non inviando a',
'already sent' => 'già spedito',
'Processed' => 'Processato',
'out of' => 'fuori da',
'Hmmm, No users found to send to' => 'Hmmm, non sono stati trovati utenti a cui spedire',
'It took' => 'Ha impiegato',
'to send this message' => 'a mandare questo messaggio',
'waiting for' => 'aspettando per',
'to make sure we don\'t exceed our limit of' => 'per assicurarsi di non superare il limite di',
'messages in' => 'messagi in',

### new in 2.9.5
'Message Sending has started' => 'L\'invio dei messaggi &grave; cominciato',
'phplist has started sending the message with subject %s' => 'phplist ha cominciato a mandare il messaggio con oggetto %s',
'to view the progress of this message, go to %s' => 'per vedere il progresso di questo messaggio vai a %s',
'There have been more than 10 attempts to send to %s that have been blocked for domain throttling.' => 'Ci sono stati pi&ugrave; di 10 tentativi di inviare a %s che sono stati bloccati dal dominio.',
'Introducing extra delay to decrease throttle failures' => 'Introduco un tempo supplementare per ridurre i fallimenti',
'%s is currently over throttle limit of %d per %d seconds' => '%s &egrave; attualmente oltre il limite di fallimento %d per %d secondi',
'not sending to ' => 'non inviando a ',
'Message Sending has finished' => 'L\'invio dei messaggi &egrave; terminato',
'phplist has finished sending the message with subject %s' => 'phplist ha terminato l\'invio di messaggi con oggetto %s',

'Sending of this message has been suspended' => 'L\'invio dei messaggi &egrave; stato interrotto',

# new in 2.10.1
'Less than batch size were sent, so reloading imminently' => 'L\'invio &egrave; stato effettuato a una dimensione inferiore di quella del gruppo, avverr&agrave; perci&ograve; un aggiornamento immediato',
'Waiting for %d seconds before reloading' => 'Attesa di %d secondi prima dell\'aggiornamento',
'Please leave this window open. You have batch processing enabled, so it will reload several times to send the messages. Reports will be sent by email to' => 'Per favore non chiudere questa finestra. Il gruppo &egrave; in fase di processazione, e sar&agrave; aggiornato pi&ugrave; volte per inviare i messaggi. I rapporti saranno inviati per email a' ,

);

?>
