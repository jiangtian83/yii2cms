<?php
use rbac\components\MenuHelper;
use backend\widgets\Menu;
?>
<?php
        // [
        //     'label' => '',
        //     'url' => '',
        //     'icon' => '',
        //     'items' => []
        // ]
		$callback = function($menu){
            $items = $menu['children']; 
            $return = [ 
                'label' => $menu['name'], 
                'url' => [$menu['route']], 
            ];
			if(isset($menu['icon'])){
				$return['icon'] = $menu['icon']; 
			}else{
				$return['icon'] = 'fa fa-circle-o'; 
			}
            $items && $return['items'] = $items;
            return $return; 
        };

		// Menu::widget，Yii::createObject(); 将options及items赋值到对象上了。
        $menu = Menu::widget([
            'options' => ['class' => 'layui-nav layui-nav-tree'],
            'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback),
        ]);
?>
		<div class="layui-side layui-bg-black top-50 nav-top">
			<div class="navBar layui-side-scroll"><?=$menu?></div>
		</div>
