<?php
/* ********************************************************************************
 *  Language     : 简体中文
 *  Version      : 4..2.514
 *  Author       : idercn.com | http://www.idercn.com
 *  Update Date  : 2017-12-22
  ********************************************************************************  
 * 此语言包版权如下所示：
 * 此文件内容受 vtigerCRM 的公共许可证1.0版保护，
 * 使用此文件表示您已默认遵守相关许可规定。
 * 您可以在遵守此许可证 "AS IS" 的基础上对软件进行分发。
 * 此语言包遵循 知识共享署名-非商业性使用-相同方式共享 2.5 中国大陆许可协议(Creative Commons) 2.5，
 * 大家可以免费下载使用，但请注明来源，并署名 · 非商业性使用 · 相同方式共享。
 * idercn无任何形式的担保，明示或暗示的保证。
 *+***********************************************************************************/
/**
 * AdvancedPermission english translation
 * @package YetiForce.Language
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 */
$languageStrings = [
	'LBL_ADVANCED_PERMISSION' => '高级权限',
	'AdvancedPermission' => '高级权限',
	'LBL_ADVANCED_PERMISSION_DESCRIPTION' => '自定义权限设置，授予或撤消对记录的权限。',
	// Fields
	'LBL_NAME' => '规则名称',
	'LBL_MODULE' => '模块',
	'LBL_ACTION' => '操作',
	'LBL_STATUS' => '状态',
	'LBL_ROLE' => '职位角色',
	'LBL_MEMBERS' => '成员',
	'LBL_PRIORITY' => '优先级',
	// Picklist
	'FL_ACTIVE' => '启用',
	'FL_INACTIVE' => '禁用',
	'FL_UNLOCK_RECORD' => '授予访问权限',
	'FL_LOCK_RECORD' => '撤消访问',
	// Others
	'LBL_SAVE_AND_CONDITIONS' => '下一步',
	'ERR_INACTIVE_ALERT_TITLE' => '高级权限被禁用',
	'ERR_INACTIVE_ALERT_DESC' => '把config/security.php文件中的 PERMITTED_BY_ADVANCED_PERMISSION参数变更为启用。',
	'LBL_RECALCULATE_PERMISSION_TITLE' => '允许重新计算',
	'LBL_RECALCULATE_PERMISSION_BTN' => '重新计算权限',
	'LBL_RECALCULATE_CRON_INFO' => '重新计算权限需要启用定时任务，请检查该任务是否处于启用状态。',
	'LBL_MODULES_LIST' => '模块列表',
	'ERR_INACTIVE_CACHING_PERM_ALERT_DESC' => '特殊权限已被禁用，如要开启请启用记录权限缓存。您应该启用定时任务，并将 CACHING_PERMISSION_TO_RECORD [config/security.php] 变量设置为true。',
];
