<?php
/**
 *
 * @author wanggang
 * @since  2015-09-04
 */
use NoahBuscher\Macaw\Macaw;

Macaw::get('noash',function(){
    echo "hello noahs";
});

Macaw::get('(:all)', function($fu) {
    echo "未匹配到路由<br>".$fu;
});

Macaw::dispatch();