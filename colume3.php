<div class ="column3">
<?php
if (empty($_REQUEST['mode'])) {
    $_REQUEST['mode'] = 0;
}
switch ($_REQUEST['mode']) {
    case 0:
        require_once 'volumes.php';
        break;
    case 1:
        require_once 'editors.php';
        break;
    case 2:
        require_once 'reviewers.php';
        break;

    case 3:
        require_once 'Authors.php';
        break;
    case 4:
        require_once 'About.php';
        break;
    case 5:
        require_once 'Contact.php';
        break;

    default:
        require_once 'volumes.php';
        break;
}

?>

</div>
