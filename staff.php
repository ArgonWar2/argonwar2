<?php

/*
Quali sono i dati da visualizzare?
Eccoli:

AVATAR - Nome Player (es. [GA]BlackWolf96, [GA]Simo990, [GA]OMG )
     Descrizione


Da dove prendo i dati?
Il nome player sta in player.player.name
Avatar sta in player.player.avatar
Descrizione sta in player.player.shout
Fai un inner join per filtrare i risultati con la tabella common.gmlist - I GA, GM si trovano tutti lì.

SELECT p.name, p.avatar, p.shout
FROM player.player AS p
INNER JOIN player.player_index AS pindex ON p.account_id = pindex.id
WHERE p.name IN ( SELECT gm.mName
FROM common.gmlist AS gm )
AND p.name IN ( SELECT name
FROM backend.user
WHERE permission_id < 3 )


RIFAI LA QUERY.

Prima di tutto prova a selezionare SOLO i nomi dei player che stanno su pid1, dato il relativo accountName che sta su backend.user... ma probabilmente non ce ne sarà bisogno.

*/

$member = $db->query("SELECT p.name, p.avatar, p.shout
FROM player.player AS p
INNER JOIN player.player_index AS pindex ON p.account_id = pindex.id
WHERE p.name IN ( SELECT gm.mName
FROM common.gmlist AS gm )
AND p.name IN ( SELECT user.name
FROM backend.user 
INNER JOIN backend.permission ON user.permission_name = permission.name
WHERE permission.level < 3
)
GROUP BY p.id
");

while ($member = $db->fetchNextObject($result)) {
?>
<div class="staff-member">
	<div style="background-image: url('<?=ROOT.'avatars/'.$member->avatar?>')"></div>
	<h3><?=$member->name?></h3>
	<h4><?=$member->permission?></h4>
	<p><?=$member->shout?></p>
</div>
<?php
}
