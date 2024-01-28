<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/sweetalertsweetalert.js"></script>

<?php
if(isset($_SESSION['status']) && $_SESSION['status']!='')
{
?>
<script>
    swal({
  title: " <?php echo $_SESSION['status'];?>]",
  //text: "You clicked the button!",
  icon: "<?php echo $_SESSION['status_process'];?>",
  button: "okk done",
});
</script>
<?php
unset($_SESSION['status']);
}
?>

</body>
</html>
