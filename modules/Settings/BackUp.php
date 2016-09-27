<?php
/* ********************************************************************************
 *  Language     : 简体中文
 *  Version      : 3.2.0
 *  Author       : idercn.com | http://www.idercn.com
 *  Update Date  : 2016-09-01
  ********************************************************************************  
 * 此语言包版权如下所示：
 * 此文件内容受 vtigerCRM 的公共许可证1.0版保护，
 * 使用此文件表示您已默认遵守相关许可规定。
 * 您可以在遵守此许可证 "AS IS" 的基础上对软件进行分发。
 * 此语言包遵循 知识共享署名-非商业性使用-相同方式共享 2.5 中国大陆许可协议(Creative Commons) 2.5，
 * 大家可以免费下载使用，但请注明来源，并署名 · 非商业性使用 · 相同方式共享。
 * idercn无任何形式的担保，明示或暗示的保证。
 *+***********************************************************************************/
/* {[The file is published on the basis of YetiForce Public License that can be found in the following directory: licenses/License.html]} */
$languageStrings = [
	'LBL_BACKUP_DESCRIPTION' => '创建文件备份.',
	'LBL_SAVE_BACKUP' => '保存备份',
	'LBL_SCHEDULE_BACKUP' => '生成备份',
	'LBL_LOADING' => '正在生成备份，请等待...',
	'LBL_FTP_SETTINGS' => 'FTP 设置',
	'LBL_BACKUP_CREATING' => '备份创建中',
	'LBL_RESUME_BACKUP' => '恢复备份',
	'LBL_START_TIME' => '创建时间',
	'LBL_FILE_NAME' => '文件名',
	'LBL_ACTION' => '操作',
	'LBL_FTP_SAVE_CONFIG' => '保存配置',
	'LBL_HOST' => '主机',
	'LBL_PORT' => '端口',
	'LBL_LOGIN' => '登录',
	'LBL_PASSWORD' => '密码',
	'LBL_CONNECTION_STATUS' => '连接状态',
	'LBL_SEND_TO_FTP' => '发送到 FTP',
	'LBL_ACTIVE' => '激活',
	'LBL_PATH' => '保存路径',
	'LBL_PATH_INFO' => '如果路径字段是空的备份将保存在主文件夹中',
	'LBL_EMAIL_NOTIFICATIONS' => '电子邮件通知',
	'LBL_USERS_FOR_NOTIFICATIONS' => '要通知的用户',
	'LBL_SAVE_CHANGES' => '保存的更改',
	'LBL_GENERAL_SETTINGS' => '常规设置',
	'LBL_STORAGEFOLDER_INFO' => '你想要建立一个备份存储文件夹吗?',
	'LBL_BACKUPFOLDER_INFO' => '你想要建立一个备份存储文件夹吗?',
	'LBL_VALUES' => '列表项值',
	'LBL_DETAIL' => '详细信息',
	'LBL_BACKUP_COPY_TYPE' => '备份存储类型',
	'LBL_BACKUP_SINGLE' => '部分',
	'LBL_BACKUP_OVERALL' => '完全',
	'LBL_ALERT_NO_ZIP_EXTENSION_TITLE' => '没有找到活动的ZIP库',
	'LBL_ALERT_NO_ZIP_EXTENSION_DESC' => '是不可能的完整备份、 备份将仅创建数据库副本，它不会压缩 ',
	'LBL_ALERT_CRON_NOT_ACTIVE_TITLE' => '“定时任务：备份数据”未处于活动状态',
	'LBL_ALERT_CRON_NOT_ACTIVE_DESC' => '不能生成备份，请转到<a href="index.php?module=CronTasksparent=Settingsview=List" target="_blank">Harmonogram</a>进行激活(&V)',
	'LBL_ALERT_OUTGOING_MAIL_NOT_CONFIGURED_TITLE' => '发送邮件服务器没有配置',
	'LBL_ALERT_OUTGOING_MAIL_NOT_CONFIGUREDE_DESC' => '备份后将不发送任何邮件通知',
	'LBL_END_TIME' => '结束时间',
	'LBL_BACKUP_TIME' => '备份持续时间',
	'LBL_LOGS' => '日志',
	'Completed' => '纠正',
	'In progress' => '正在进行',
	'LBL_SET_SCHEDULE_BACKUP' => '安排备份',
	'LBL_ON' => '打开',
	'LBL_OFF' => '关闭',
	'LBL_STAGE_1' => '创建空的 SQL 文件',
	'LBL_STAGE_2' => '生成备份结构',
	'LBL_STAGE_3' => '创建数据库备份',
	'LBL_STAGE_4' => '生成的文件和文件夹结构',
	'LBL_STAGE_5' => '创建文件和文件夹备份',
	'LBL_STAGE_6' => '合并备份文件',
	'LBL_STAGE_7' => '清除临时数据',
	'LBL_STAGE_8' => '将数据发送到 FTP',
	'LBL_STAGE_9' => '完成备份',
	'BackUp' => '备份',
	'LBL_TOTAL_PROGRESS' => '总进度',
	'LBL_STOP_BACKUP' => '停止备份',
];
$jsLanguageStrings = [
	'JS_MANDATORY_FIELDS_EMPTY' => '必填字段不能为空',
	'JS_PORT_ONLY_NUMBERS' => '端口字段只接受数字',
	'JS_SAVE_CHANGES' => '保存的更改',
	'JS_HOST_NOT_CORRECT' => '不正确的主机地址',
	'JS_CONNECTION_FAIL' => '尝试登录失败',
];
