<?php
    // Đây là file mình tự tạo ngoài laravel, nếu muốn cho nó chạy được mình phải khai báo thêm trong composer.json rồi chạy terminal: composer dump-autoload
    // Sử dụng đệ qui cho parent_id
    function recursiveCategory ($categories, $selected, $parent = 0,$str = ''){
        foreach ($categories as $key => $value) {
            if ($value->parent_id == $parent) {
                if ($selected == $value->id){
                    echo '<option value="' . $value->id . '" selected> '. $str . $value->name . '</option>';
                }else {
                    echo '<option value="' . $value->id . '"> '. $str . $value->name . '</option>';
                }
                unset($categories[$key]);

                recursiveCategory ($categories, $selected, $value->id, $str . "--|");
            }
        }
    }
?>