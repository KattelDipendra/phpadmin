<html>
    <title>List User</title>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Passwords</th>
                </tr>
            </thead>
            <tbody>
                <?php
            if($result->num_rows>0){
while($row = $result->fetch_assoc()){
    echo "<tr>";
echo "<td>"  . $row["fullname"] . "</td>";
echo "<td>"  . $row["email"] . "</td>";
echo "<td>"  . $row["passwords"] . "</td>";
    echo"</tr>";
}}
            ?>
            </tbody>
        </table>
    </body>
</html>