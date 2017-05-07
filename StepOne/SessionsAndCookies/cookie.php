<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

<?php if(array_key_exists('firstName',$_COOKIE)):?>
<input type="text" placeholder="First name" name="firstName" value="<?php echo $_COOKIE['firstName']; ?> " >
<?php else: ?>
<input type="text" placeholder="First name" name="firstName" value="" > 
<?php endif; ?>

<?php if(array_key_exists('lastName',$_COOKIE)):?>
<input type="text" placeholder="Last name" name="lastName" value= "<?php echo $_COOKIE['lastName']; ?>">
<?php else: ?>
<input type="text" placeholder="Last name" name="lastName" value= "">
<?php endif; ?>

<input type="submit" value="save for all sessions">
</form>