<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\fbcct\model;

use think\Model;
use think\helper\Hash;
use think\Db;

/**
 * 后台用户模型
 * @package app\admin\model
 */
class CoinModel extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'fb_coin';

    // 自动写入时间戳
    protected $autoWriteTimestamp = true;

    // 对密码进行加密
    public function setPasswordAttr($value)
    {
        return Hash::make((string)$value);
    }

    // 获取注册ip
    public function setSignupIpAttr()
    {
        return get_client_ip(1);
    }


}