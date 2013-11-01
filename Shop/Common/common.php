<?php
 
 /**
 * 获取用户头像 
 * @param type $uid 用户ID
 * @param int $format 头像规格，默认参数90，支持 180,90,45,30
 * @param type $dbs 该参数为true时，表示使用查询数据库的方式，取得完整的头像地址。默认false
 * @return type 返回头像地址
 */
function getavatar($uid, $format = 90, $dbs = false) {
    return service("Passport")->user_getavatar($uid, $format, $dbs);
}


 /**
 * 分页输出
 * @staticvar array $_pageCache
 * @param type $Total_Size 信息总数
 * @param type $Page_Size 每页显示信息数量
 * @param type $Current_Page 当前分页号
 * @param type $List_Page 每次显示几个分页导航链接
 * @param type $PageParam 接收分页号参数的标识符
 * @param type $PageLink 分页规则                     
 * @param type $static 是否开启静态
 * @param string $TP 模板
 * @param array $Tp_Config 模板配置
 * @return array|\Page
 */
function page($Total_Size = 1, $Page_Size = 0, $Current_Page = 0, $List_Page = 6, $PageParam = '', $PageLink = '', $static = FALSE, $TP = "", $Tp_Config = "") {
    static $_pageCache = array();
    $cacheIterateId = to_guid_string(func_get_args());
    if (isset($_pageCache[$cacheIterateId])) {
        return $_pageCache[$cacheIterateId];
    }
    import('Page');
    //分页数
    if ($Page_Size == 0) {
        $Page_Size = C("PAGE_LISTROWS");
    }
    //接收分页号参数的标识符
    if (!$PageParam) {
        $PageParam = C("VAR_PAGE");
    }
    //生成静态，需要传递一个常量URLRULE，来生成对应规则
    //不建议使用常量定义分页规则，推荐直接传统参数方式
    if (empty($PageLink) && $static) {
        $URLRULE = $GLOBALS['URLRULE'] ? $GLOBALS['URLRULE'] : URLRULE;
        $PageLink = array();
        if (!is_array($URLRULE)) {
            $URLRULE = explode("~", $URLRULE);
        }
        $PageLink['index'] = $URLRULE['index'] ? $URLRULE['index'] : $URLRULE[0];
        $PageLink['list'] = $URLRULE['list'] ? $URLRULE['list'] : $URLRULE[1];
    }
    if (!$Tp_Config) {
        $Tp_Config = array("listlong" => "6", "first" => "首页", "last" => "尾页", "prev" => "上一页", "next" => "下一页", "list" => "*", "disabledclass" => "");
    }
    $Page = new Page($Total_Size, $Page_Size, $Current_Page, $List_Page, $PageParam, $PageLink, $static);
    $Page->SetPager('default', $TP, $Tp_Config);
    $_pageCache[$cacheIterateId] = $Page;

    return $_pageCache[$cacheIterateId];
}

?>