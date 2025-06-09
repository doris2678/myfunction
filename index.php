<?php //include 'library.php'; ?>
<?php include 'db.php'; ?>

<h2>正三角形</h2>
<style>
    *{
        font-family:'Courier New', Courier, monospace;
    }
</style>
<?php
// stars('正三角形', 15);
// stars('菱形', 15);
// stars('矩形', 15);
// stars('倒三角形', 15);

/* $rows= all('sales');
dd($rows);

$sales=all('sales'," where quantity >=2");
dd($sales);

$all=q("select name ,price from items order by price");
dd($all); */

//dd(find('items',3));
//dd(find('items',['name'=>'蛋餅','stock'=>'50']));

// $row=find('items',5);
// dd($row);
// $row['cost']=15;
// $row['price']=55;
// dd($row);
// update("items", $row);


// $data=['name'=>'豬排鐵板麵',
//        'cost'=>50,
//        'stock'=>100,
//        'price'=>75];

//insert('items',$data);        

$data=['id'=>12,
       'name'=>'豬排鐵板麵',
       'cost'=>50,
       'stock'=>100,
       'price'=>90];

save('items',$data);        