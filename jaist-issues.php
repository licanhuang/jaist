<?php
require_once 'upperpart.php';
?>

<div class="issuecontainer">
<?php
require_once 'colume1.php';
?>
<div class ="column23">
<h3>Journal of advances in information science and technology</h3>
</br>
<?php echo $issueno; ?> 
</br>
</br>
<?php
for ($i = 0; $i < count($issuearry); ++$i) {
    $eachitems = $issuearry[$i];
    ?>
<?php echo $i + 1; ?>. 
<a href="<?php echo $eachitems['link']; ?>">
<?php echo $eachitems['title']; ?></a>
</br>
<?php echo $eachitems['authors']; ?>
</br>
Pages: <?php echo $eachitems['pages']; ?>
</br>
</br>
<?php echo $eachitems['abstract']; ?>
</br>
</br>
<?php }
?>
</div>
</div>
<?php
require_once 'bottompart.php';
?>

