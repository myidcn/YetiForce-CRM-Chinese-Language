<?php
/* ********************************************************************************
 *  Language     : 简体中文
 *  Version      : 3.4.87
 *  Author       : idercn.com | http://www.idercn.com
 *  Update Date  : 2016-10-17
  ********************************************************************************  
 * 此语言包版权如下所示：
 * 此文件内容受 vtigerCRM 的公共许可证1.0版保护，
 * 使用此文件表示您已默认遵守相关许可规定。
 * 您可以在遵守此许可证 "AS IS" 的基础上对软件进行分发。
 * 此语言包遵循 知识共享署名-非商业性使用-相同方式共享 2.5 中国大陆许可协议(Creative Commons) 2.5，
 * 大家可以免费下载使用，但请注明来源，并署名 · 非商业性使用 · 相同方式共享。
 * idercn无任何形式的担保，明示或暗示的保证。
 *+***********************************************************************************/
/* +***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 * Contributor(s): 
 * *********************************************************************************************************************************** */
$languageStrings = [
	'DataAccess' => '验证的访问',
	'LBL_NONE' => '- 无 -',
	'Message' => '信息',
	'Action_unique_value' => '字段值是唯一的.',
	'Action_Desc_unique_value' => '检查是否输入字段值是唯一的.',
	'Select the fields to be verified' => '选择要验证的字段',
	'Select a field from which the value is to be checked' => '选择一个字段的值是要检查',
	'Field value is not unique' => '字段值不是唯一',
	'Please enter a unique value in the' => '请输入一个唯一的值中:',
	'LBL_LOCKS_SAVE' => '保存锁',
	'LBL_LOCKS_SAVE_LABEL1' => '否',
	'LBL_LOCKS_SAVE_LABEL2' => '是的--满足一个条件',
	'LBL_LOCKS_SAVE_LABEL3' => '是的--满足两个条件',
	'LBL_LOCKS_SAVE_LABEL4' => '是的-模态窗口',
	'LBL_VALIDATION_TWO_FIELDS' => '两个字段的验证',
	'LBL_MESSAGE_LOCK0' => '时不锁定写消息',
	'LBL_MESSAGE_LOCK1' => '一个满足条件的消息',
	'LBL_MESSAGE_LOCK2' => '两个满足条件的消息',
	//
	'Action_check_task' => '检查任务',
	'Action_Desc_check_task' => '此操作检查任务是否关联到合适的主题和状态。如果不是，将被阻止输入.',
	'Select status' => '选择状态',
	'Subject tasks' => '任务主题',
	'Message if the task does not exist' => '如果任务不存在的消息 （消息被译）',
	//
	'Action_check_alltask' => '检查所有任务',
	'Action_Desc_check_alltask' => '此操作检查是否所有的任务都被关联，如果关联将被组织输入.',
	'Message if the task exist' => '如果该任务存在的消息 （消息被译）',
	//
	'Action_show_quick_create' => '快速创建',
	'Action_Desc_show_quick_create' => '此操作显示了快速创建.',
	'LBL_SELECT_OPTION' => '选择一个选项',
	//
	'Action_blockEditView' => '块编辑视图',
	'Action_Desc_blockEditView' => '此操作阻止编辑视图 （快速和完全编辑）.',
	//
	'Action_check_taskdate' => '检查完成项目任务的计划的日期',
	'Action_Desc_check_taskdate' => '批准完成项目任务的计划日期.',
	'Date can not be greater' => '计划的日期不能大于阶段日期',
	//
	'Action_unique_modules_value' => '字段的值是唯一的模块',
	'Action_Desc_unique_modules_value' => '检查字段的输入的值是独特的模块',
	'Check the value in the module' => '检查模块中的值',
	//
	'Action_check_taskstatus' => '检查所有的附属任务',
	'Action_Desc_check_taskstatus' => '检查是否所有从属任务已完成.',
	'Subordinate tasks have not been completed yet' => '下属任务尚未完成.',
	//
	'Action_validate_mandatory' => '检查必填字段',
	'Action_Desc_validate_mandatory' => '检查是否在快速编辑的所有必填字段都填写.',
	//
	'Action_check_assigneduser' => '限制更改的所有权记录',
	'Action_Desc_check_assigneduser' => '所有者更改为特定列表的操作限制.',
	'LBL_SELECT_USER_OR_GROUP' => '选择用户或组允许',
	'LBL_CURRENT_USER' => '当前用户',
	//
	'Action_colorList' => '着色的记录列表中的行',
	'Action_Desc_colorList' => '此工具允许对符合相应条件记录的加上彩色线条。得益于此，可以区分出具有较高优先级的记录.',
	'LBL_BACKGROUND_COLOR' => '背景色',
	'LBL_TEXT_COLOR' => '文本颜色',
	'This name already exists' => '此名称已存在',
	'LBL_RECORD_DELETED' => '删除记录',
	'Action_test' => '操作测试',
	'Action_Desc_test' => '操作测试描述.',
	//
	'Action_check_day_tasks' => '检查事件的保存天数',
	'Action_Desc_check_day_tasks' => '此操作检查事件的开始日期的事件数量，如果超出了限制，系统将阻止/通知用户.',
	'LBL_MAXIMUM_NUMBER_EVENTS_PER_DAY' => '每一天的事件的最大数量',
	'LBL_SELECT_OPTION_TO_SEARCH' => '选择事件的搜索选项',
	'LBL_SET_CUSTOM_CONDITIONS' => '设置自定义条件',
	'LBL_CURRENT_EVENTS' => '当前事件',
	'LBL_PAST_EVENTS' => '过期事件',
	//
	'Action_unique_account' => '检查重复客户',
	'Action_Desc_unique_account' => '检查客户在模块中是否是唯一的.',
	'LBL_DUPLICATED_FOUND' => '找到重复项',
	'LBL_DUPLICTAE_CREATION_CONFIRMATION' => '发现有重复项，您确定要保存吗？',
	'LBL_DUPLICTAE_QUICK_EDIT_CONFIRMATION' => '在快速创建模式下，一个记录值尝试变更<br>在这个试图中，请选择下面的复选框，以便应用变更<br>请注意!<br>在这个记录中重新输入变更。',
	'LBL_DONT_ASK_AGAIN' => '不在询问此条记录。',
	'LBL_SEARCH_TRASH' => '搜索回收站',
];
$jsLanguageStrings = [
	'DataAccess' => '数据访问',
];
