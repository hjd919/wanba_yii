#安装yii2
1. php init(/path/to/php-bin/php /path/to/yii-application/init --env=Production --overwrite=All)

数据库连接配置
2. 编辑common/config/main-local.php

导入数据库
3. php yii migrate.

#composer
1. 在composer.json中的require增加扩展包
2. 执行命令 composer update --prefer-dist

#yii2扩展
##redis
##模版引擎smarty
##模版bootstrap
##http请求类

#查询构建器
批处理查询和all()
