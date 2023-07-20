<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone>/th>
            <th>dest name</th>
</tr>
<?php
$connect = mysqli_connect("localhost", "root", "", "book_db") or die("connection failed");
$query = "select b.*,d.dest_name from book_form b,destination d where d.dest_id=b.cust_id";
$result = mysqli_query($connect, $query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
        <td><?php echo $row['$cust_id']?></td>
        <td><?php echo $row['$name']?></td>
        <td><?php echo $row['$phone']?></td>
        <td><?php echo $row['$dest_name']?></td>
</tr>
<?php
}
?>