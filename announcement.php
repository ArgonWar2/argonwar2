<?php
$announce = trim(file_get_contents(ROOT.'backoffice/'.ANNOUNCEMENT_FILENAME));
if (!empty($announce)) {
?>
<h3 class="announcement"><?=htmlentities($announce)?> <span class="announcement-signature">- lo Staff</span></h3>
<?php
}
