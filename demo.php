<?php
/**
 * Created by yuxianjun001@icloud.com.
 * User: wuchen
 * Date: 2019/5/7
 * Time: 17:36
 */
require_once './vendor/autoload.php';

use Pay\AliPay\AliPay;
use Pay\WeChatPay\WeChatPay;
AliPay::alipay();
echo '--';
WeChatPay::weChatPay();
