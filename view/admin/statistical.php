<?php include_once 'header.php' ?>
<?php
$html_catlist='';
foreach($catlist as $item){
    $id = $item['id'];
    $price_max = price_statistical($id,0)[0]['price_sale']; 
    $price_min = price_statistical(0,$id)[0]['price_sale']; 
    $products =product_SELECT(0,0,0,0,'',$id,0,0,0);
    $sum = 0;
    foreach ($products as $product) {
        $sum += $product['price_sale'];
    }
    $price_average = $sum/count($products);

    $html_catlist.='<div class="list-row statistical-grid ">
    <div class="list-item">'.$item['name'].'</div>
    <div class="list-item flex-center">'.count($products).'</div>
    <div class="list-item flex-center">'.number_format($price_max,0,',','.').' đ</div>
    <div class="list-item flex-center">'.number_format($price_min,0,',','.').' đ</div>
    <div class="list-item flex-center">'.number_format($price_average,0,',','.').' đ</div>
</div>';
}
?>
<link rel="stylesheet" href="view/admin/css/list.css">
<section>
    <div class="container">
        <div class="title">
            <div class="title-content">Thống kê hàng hóa từng loại</div>
        </div>
        <div class="list">
            <div class="list-row list-row_title statistical-grid">
                <div class="list-item">Loại hàng</div>
                <div class="list-item flex-center">Số lượng</div>
                <div class="list-item flex-center">Giá cao nhất</div>
                <div class="list-item flex-center">Giá thấp nhất</div>
                <div class="list-item flex-center">Giá trung bình</div>
            </div>
            <?=$html_catlist;?>

            </div>
            <div class="product-page">
                    <?= $html_number_page; ?>
                    </div> 
        </div>
</section>
</main>