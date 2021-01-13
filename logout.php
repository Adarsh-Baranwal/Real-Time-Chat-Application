<?php
session_start();
session_unset();
//session_distroy();
unset($_SESSION["isauthenticate"]);
unset($_SESSION["userid"]);

?>

<script type="text/javascript">
	window.location = "login.php";
</script>