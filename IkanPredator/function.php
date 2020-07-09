<?php
}
function berburu($keyword){
    $query="SELECT * FROM product_edit
            WHERE
            nama LIKE '%$keyword%' OR
            asal LIKE '%$keyword%' OR
            jenis LIKE '%$keyword%'
            ";
    return query($query);
}
?>