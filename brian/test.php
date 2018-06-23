<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
if(dd<10) 
{
    dd='0'+dd;
} 
if(mm<10) 
{
    mm='0'+mm;
} 

today = yyyy+'-'+mm+'-'+dd;
console.log(today);
</script>


<script>document.write(today);</script>

<?php echo date('H:i:a'); ?>
<br /><br /><br />


<?php

echo "SELECT * FROM games WHERE date = <script>document.write(today);</script>  ORDER BY date desc,time desc limit 30 ";

?>

