<?php
    function product_SELECT($page,$view,$hot,$search,$category_id,$author_id,$publisher_id,$limit) {
        $sql = "SELECT * FROM products WHERE 1";
        if ($category_id > 0) $sql .=" AND category_id = $category_id";
        if ($author_id > 0) $sql .=" AND author_id = $author_id";
        if ($publisher_id > 0) $sql .=" AND publisher_id = $publisher_id";
        if ($hot) $sql .=" AND noibat = $hot";
        if ($search != "") $sql .=" AND name LIKE '%$search%'";
        if ($view) {
            if (is_int($view) && $view > 0) $sql .=" AND view >= $view";
            $sql .=" ORDER BY view DESC";
        } else {
            $sql .=" ORDER BY id DESC";
        }
        if ($page > 1){
            $begin = (($page-1) * $limit);
            $sql .="  LIMIT  $begin,$limit";
        }else {
            if ($limit > 0) $sql .=" LIMIT  $limit";
        }
        return get_All($sql);   
    }

    function product_ONE($id) {
        $sql = "SELECT * FROM products WHERE id = $id";
        return get_ONE($sql);
    }

    function page_division($data,$search,$category_id,$author_id,$publisher_id,$limit) {
        $soTrang = ceil(count($data)/$limit);
        $html_page_division = '';
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        if ($soTrang > 1) {
            $link = ($category_id) ? '&category_id='.$category_id : '';
            $link .= ($author_id) ? '&author_id='.$author_id : '';
            $link .= ($publisher_id) ? '&publisher_id='.$publisher_id : '';
            $link .= ($search) ? '&search='.$search : '';
            $link .= ($limit!=SLSP) ? '&limit='.$limit : '';
            if ($page > 1) $html_page_division .= '<a class="product_page_division-item" href="?mod=page&act=product'.$link.'&page='.($page - 1).'"><img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/ma_vanesa2/images/left_orange.png" alt=""></a>';
            for ($i=1; $i <= $soTrang; $i++) {
                if ($soTrang > 5) {
                    if ($page <= 3) {
                        if ($i == 5) $html_page_division.= '<div class="product_page_division-item-dot" href="">...</div>';
                        if ($i >= 5  && $i < $soTrang) continue;
                    }
                    if ($page > 3 && $page <= $soTrang - 3) {
                        if ($i == 2 || $i > $soTrang - 1) $html_page_division.= '<div class="product_page_division-item-dot" href="">...</div>';
                        if (($i >= 2 && $i < $page - 1 ) || ($i > $page + 1  && $i < $soTrang)) continue;
                    }
                    if ($page > ($soTrang - 3) ) {
                        if ($i == 2) $html_page_division.= '<div class="product_page_division-item-dot" href="">...</div>';
                        if ($i >= 2 && $i < $soTrang - 3 ) continue;
                    }
                }
                $active = ($page == $i) ? 'product_page_division-item-checked': '';
                $html_page_division.= '<a class="product_page_division-item '.$active.' " href="?mod=page&act=product'.$link.'&page='.$i.'" >'.$i.'</a>';
            } 
            if ($page < $soTrang) $html_page_division .= '<a class="product_page_division-item" href="?mod=page&act=product'.$link.'&page='.($page + 1).'"><img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/ma_vanesa2/images/right_orange.png" alt=""></a>';
        }
        return $html_page_division;
    }

    
    function phan_trang($page,$data,$mod,$act){
        $soluong = count($data) / SLSP;
        $sotrang = ceil($soluong);
        $html_number_page="";
        for($i=1;$i<=$sotrang;$i++){
            $link='?mod='.$mod.'&act='.$act.'&trang='.$i;
            if($i==$page){
                $html_number_page.='<a style="background-color: red" href="'.$link.'" class="product-number-page">'.$i.'</a>';
            }else{
                $html_number_page.='<a href="'.$link.'" class="product-number-page">'.$i.'</a>';
            }
            }
            return $html_number_page;
        }
?>

