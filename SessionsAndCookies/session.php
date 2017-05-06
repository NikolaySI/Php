<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

<?php if(array_key_exists('color',$_SESSION)):?>
<input type="text" placeholder="favourite color" name="color" value="<?php echo $_SESSION['color']; ?> " >
<?php else: ?>
<input type="text" placeholder="favourite color" name="color" value="" >
<?php endif; ?>

<?php if(array_key_exists('music',$_SESSION)):?>
<input type="text" placeholder="favourite music" name="music" value = "<?php echo $_SESSION['music']; ?>">
<?php else: ?>
<input type="text" placeholder="favourite music" name="music" value = "">
<?php endif; ?>

<input type="submit" value="save for this session">
</form>