<?php
session_start();
unset($_SESSION["c_id"]);
session_destroy();

?>
<script type="text/javascript">
	location.href="login.php";
</script>
<?php
exit;
?>