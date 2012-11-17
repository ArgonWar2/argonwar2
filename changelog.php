<?php

$changelog = $db->query("SELECT version, description, date_format(changeDate, '%d/%m/%Y alle ore %H:%i') as changeDate from backend.changelog ORDER BY changeDate DESC");

while ($client = $db->fetchNextObject($changelog)) {
?>
<hr>
<span>Versione <b><?=$client->version?></b></span> - <span class="gray-link">rilasciata il <?=$client->changeDate?></span>
<?=$client->description?>

<?php
}
