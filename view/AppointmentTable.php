<table class="table table-hover table-bordered mytable" style="width: 900px">
    <tr class="danger">
        <th>Id</th>
        <th>Time</th>
        <th>Date</th>
        <th>User ID</th>
        <th>Place ID</th>
    </tr>
    <?php
    for ($i = 0; $i < count($appDataDisplay); $i++) {
        echo "            
                <tr>
                    <td>{$appDataDisplay[$i]['id']}</td>
                    <td>{$appDataDisplay[$i]['start_time']}</td>
                    <td>{$appDataDisplay[$i]['date']}</td>
                    <td>{$appDataDisplay[$i]['user_id']}</td>
                    <td>{$appDataDisplay[$i]['place_id']}</td>
                </tr>
            ";
        }
    ?>
    
</table>