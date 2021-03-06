<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DThinkPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://DThinkPHP.com
// +----------------------------------------------------------------------

namespace app\cms\model;

use think\Model as ThinkModel;

/**
 * 客服模型
 * @package app\cms\model
 */
class Support extends ThinkModel
{
    // 设置当前模型对应的完整数据表名称
    protected $name = 'cms_support';

    // 自动写入时间戳
    protected $autoWriteTimestamp = true;
}
