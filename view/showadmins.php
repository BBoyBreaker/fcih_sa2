<table class="table table-hover table-bordered mytable" style="width: 900px">
    <tr class="danger">
        <th>Id</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>password</th>
        <th>type</th>
        <th>Actions</th>
        
    </tr>
    <?php
    for ($i = 0; $i < count($adminDataDisplay); $i++) {
        echo "            
                <tr>
                    <td>{$adminDataDisplay[$i]['id']}</td>
                    <td>{$adminDataDisplay[$i]['name']}</td>
                    <td>{$adminDataDisplay[$i]['email']}</td>
                    <td>{$adminDataDisplay[$i]['password']}</td>
                        
                     <td>{$adminDataDisplay[$i]['user_type']}</td>
                    <td>
                        <a href='?page=showadmins&action=delete&id={$adminDataDisplay[$i]['id']}'><img src='../resources/imgs/delete.png'></a>
                        <a href='?page=showadmins&action=edit&id={$adminDataDisplay[$i]['id']}'><img src='../resources/imgs/edit.png'></a>
                    </td>
                </tr>
            ";
        }
    ?>
    
</table>