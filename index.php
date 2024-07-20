<?php
 include 'lop.php';

 $cus1 = new customer\customer();
 $cus2 = new customer\customer();

 $cus1->setinfo('cao lu','tuan kiet','kietclt@gmail.com');
 $cus1->getinfo();
 echo "<hr>";
 $cus2->setinfo('ngo','ba phong','phongnb@gmail.com');
 $cus2->getinfo();

?>