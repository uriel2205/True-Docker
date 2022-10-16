<?php
    $db_connection = pg_connect("host=kinstondb port=5432 dbname=kinstonm user=uriel password=2180129");
    $SQLQuery = 'SELECT * FROM "personas"';
    $RecordSet = pg_query($db_connection, $SQLQuery);

?>
<h1> People </h1> 
<table class="table table-bordered">
        <th>Name</th>
        <th>Last Name</th>
        <th>Profession</th>
        <th>Cellphone Number</th>
    </thead>
    <tbody>
<?php
   while ($row = pg_fetch_row($RecordSet)) {
?>
         <tr>
             <td><?php echo $row[1]; ?></td>
             <td><?php echo $row[2]; ?></td>
             <td><?php echo $row[7]; ?></td>
             <td><?php echo $row[6]; ?></td>
        </tr>
<?php
    }
    pg_close($dbconn);
?>