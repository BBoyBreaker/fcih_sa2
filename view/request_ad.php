<table class="table table-hover table-bordered mytable" style="width: 900px">
    <tr class="danger">
        <th>Id</th>
        <th>title</th>
        <th>name</th>
        <th>mobile</th>
        <th>city</th>
        <th>type</th>
        <th>description</th>
        <th>price</th>
        <th>image</th>
        <th>add</th>
    </tr>

<?php

    for ($i = 0; $i < count($adminDataDisplay); $i++) {
        echo "            
                <tr>
                    <td>{$adminDataDisplay[$i]['id']}</td>
                        <td>{$adminDataDisplay[$i]['title']}</td>
                    <td>{$adminDataDisplay[$i]['name']}</td>
                    <td>{$adminDataDisplay[$i]['mobile']}</td>
                    <td>{$adminDataDisplay[$i]['city']}</td>
                        <td>{$adminDataDisplay[$i]['option']}</td>
                            <td>{$adminDataDisplay[$i]['textarea']}</td>
                                <td>{$adminDataDisplay[$i]['price']}</td>
                                    ";
                                echo '<td><img width="300px"  height="70px" src="data:iamge;base64,'.$adminDataDisplay[$i]['image'].'"></td>';
                    echo "
                    <td>
                        <a href='?page=showadmins&action=edit&id={$adminDataDisplay[$i]['id']}'><img src='../resources/imgs/edit.png'></a>
                    </td>
                </tr>
                
            ";
        }
        
    ?>       
</table>