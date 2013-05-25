<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_activitylist.php by Valery Votintsev at sources.ru
 *      $Id: lang_activitylist.php Translated to Spanish by jhoxi, discuzhispano.com
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'activitylist_fids'			=> 'Foros',//'所在版块',
	'activitylist_fids_comment'		=> 'Establecer los foros para mostrar. Puede utilizar CTRL para seleccionar los foros',//'设置允许参与新帖调用的版块，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'activitylist_uids'			=> 'Autor UIDs',//'发起者UID',
	'activitylist_uids_comment'		=> 'Establecer que el usuario desea mostrar. Use "," para separar UIDs',//'设置活动发起者UID，多个UID请用半角逗号“,”隔开。',
	'activitylist_startrow'			=> 'Primera fila',//'起始数据行数',
	'activitylist_startrow_comment'		=> 'Si usted necesita para establecer la fila de inicio, por favor, introduzca un número, 0 es la primera fila',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'activitylist_items'			=> 'Filas',//'显示数据条数',
	'activitylist_items_comment'		=> 'Establecer el número de filas que desea mostrar, debe entero y mayor que 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'activitylist_titlelength'		=> 'Longitud del título',//'标题最大字节数',
	'activitylist_titlelength_comment'	=> 'Establecer la longitud máxima del título, cuando el título es más largo que este valor, será cortado de forma automática, 0 es desactivar',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'activitylist_fnamelength'		=> 'Foro longitud del título',//'标题最大字节数包含版块名称',
	'activitylist_fnamelength_comment'	=> 'Establecer la longitud máxima del título como el nombre del foro',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'activitylist_summarylength'		=> 'Resumen de longitud',//'主题简短内容文字数',
	'activitylist_summarylength_comment'	=> 'Establecer la longitud del resumen, 0 igual al valor por defecto (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'activitylist_tids'			=> 'Temas',//'指定主题',
	'activitylist_tids_comment'		=> 'Establecer el ID de los temas se especifica que desea mostrar, use "," para separar tids',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'activitylist_keyword'			=> 'Palabras clave',//'标题关键字',
	'activitylist_keyword_comment'		=> 'Establecer las palabras clave usadas.<br />Puede utilizar comodines "*" en las palabras clave.<br />Si usted desea utilizar algunas palabras clave al mismo tiempo, se puede utilizar "AND". Ejemplo: win32 AND unix.<br />Si desea utilizar sólo una de las palabras clave, puede utilizar "|" o "OR". Ejemplo: win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤<br />关键字中可使用通配符 "*"<br />匹配多个关键字全部，可用空格或 "AND" 连接。如 win32 AND unix<br />匹配多个关键字其中部分，可用 "|" 或 "OR" 连接。如 win32 OR unix',
	'activitylist_typeids'			=> 'Tipos de temas',//'主题分类',
	'activitylist_typeids_comment'		=> 'Seleccione el tipo de tema específico. Nota: Seleccionar todo o Borrar todo para desactivar ningún tipo de filtrado.',//'设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_typeids_all'		=> 'Todos los tipos de tema',//'全部的主题分类',
	'activitylist_sortids'			=> 'Categorías',//'分类信息',
	'activitylist_sortids_comment'		=> 'Establecer las categorías temas. Nota: Todos o Ninguno para desactivar el filtrado.',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_sortids_all'		=> 'Todas las categorías',//'全部的分类信息',
	'activitylist_digest'			=> 'Digerir filtro',//'精华主题过滤',
	'activitylist_digest_comment'		=> 'Seleccione el tema del resumen de estado. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_digest_0'			=> 'Tema general',//'普通主题',
	'activitylist_digest_1'			=> 'Digerir I',//'精华 I',
	'activitylist_digest_2'			=> 'Digerir II',//'精华 II',
	'activitylist_digest_3'			=> 'Digerir III',//'精华 III',
	'activitylist_stick'			=> 'Pegar filtro',//'置顶主题过滤',
	'activitylist_stick_comment'		=> 'Seleccione el estado pegar tema. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_stick_0'			=> 'Tema general',//'普通主题',
	'activitylist_stick_1'			=> 'Pegar I',//'置顶 I',
	'activitylist_stick_2'			=> 'Pegar II',//'置顶 II',
	'activitylist_stick_3'			=> 'Pegar III',//'置顶 III',
	'activitylist_special'			=> 'Filtro de tema especial',//'特殊主题过滤',
	'activitylist_special_comment'		=> 'Seleccione el tipo de tema especial. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_special_1'		=> 'Encuestas',//'投票主题',
	'activitylist_special_2'		=> 'Productos/Ventas',//'商品主题',
	'activitylist_special_3'		=> 'Premios',//'悬赏主题',
	'activitylist_special_4'		=> 'Eventos',//'活动主题',
	'activitylist_special_5'		=> 'Debates',//'辩论主题',
	'activitylist_special_0'		=> 'Tema general',//'普通主题',
	'activitylist_special_reward'		=> 'Filtro de recompensa',//'悬赏主题过滤',
	'activitylist_special_reward_comment'	=> 'Seleccione el tipo de recompensa',//'设置特定类型的悬赏主题',
	'activitylist_special_reward_0'		=> 'Todos',//'全部',
	'activitylist_special_reward_1'		=> 'Terminado',//'已解决',
	'activitylist_special_reward_2'		=> 'Activo',//'未解决',
	'activitylist_recommend'		=> 'Tema de filtro recomendado',//'推荐主题过滤',
	'activitylist_recommend_comment'	=> 'Mostrar sólo los temas recomendados',//'设置是否只显示推荐的主题',
	'activitylist_orderby'			=> 'Ordenado por',//'主题排序方式',
	'activitylist_orderby_comment'		=> 'Ajuste el tema pedido',//'设置以哪一字段或方式对主题进行排序',
	'activitylist_orderby_lastpost'		=> 'Último post',//'按最后回复时间倒序排序',
	'activitylist_orderby_dateline'		=> 'Hora de inicio',//'按发布时间倒序排序',
	'activitylist_orderby_replies'		=> 'Respuestas',//'按回复数倒序排序',
	'activitylist_orderby_views'		=> 'Vistas',//'按浏览次数倒序排序',
	'activitylist_orderby_heats'		=> 'Nuevo',//'按热度倒序排序',
	'activitylist_orderby_recommends'	=> 'Recomendar',//'按主题评价倒序排序',
	'activitylist_orderby_hourviews'	=> 'Vistas dentro del tiempo especificado',//'按指定时间内浏览次数倒序排序',
	'activitylist_orderby_todayviews'	=> 'Visitas de hoy',//'按当天浏览次数倒序排序',
	'activitylist_orderby_weekviews'	=> 'Vistas la semana pasada',//'按本周浏览次数倒序排序',
	'activitylist_orderby_monthviews'	=> 'Visitas el mes pasado',//'按当月浏览次数倒序排序',
	'activitylist_orderby_hours'		=> 'Seleccionar tiempo (horas)',//'指定时间(小时)',
	'activitylist_orderby_hours_comment'	=> 'Establecer el tiempo específico de vistas en',//'指定时间内浏览次数倒序排序的时间值',
	'activitylist_orderby_todayhots'	=> 'Nuevos hoy',//'按当天累计售出数倒序排序',
	'activitylist_orderby_weekhots'		=> 'Nuevos la semana pasada',//'按本周累计售出数倒序排序',
	'activitylist_orderby_monthhots'	=> 'Nuevos el mes pasado',//'按当月累计售出数倒序排序',
	'activitylist_price_add'		=> ' Adicional ',//' 附加 ',
	'activitylist_place'			=> 'Lugares',//'活动地点',
	'activitylist_class'			=> 'Tipo',//'活动类型',
	'activitylist_class_all'		=> 'Todos los tipos',//'所有类型',
	'activitylist_gender'			=> 'Género',//'性别要求',
	'activitylist_gender_0'			=> 'Cualquier',//'不限',
	'activitylist_gender_1'			=> 'Masculino',//'男',
	'activitylist_gender_2'			=> 'Femenino',//'女',
	'activitylist_orderby_weekstart'	=> 'Comenzó la semana pasada',//'按一周内活动开始时间排序',
	'activitylist_orderby_monthstart'	=> 'Comenzó el mes pasado',//'按一月内活动开始时间排序',
	'activitylist_orderby_weekexp'		=> 'Expiró la semana pasada',//'按一周内报名截止时间排序',
	'activitylist_orderby_monthexp'		=> 'Expiró el mes pasado',//'按一月内报名截止时间排序',
	'activitylist_orderby_weekhot'		=> 'Nuevos la semana pasada',//'按一周内热度排序',
	'activitylist_orderby_monthhot'		=> 'Nuevos el mes pasado',//'按一月内热度排序',
	'activitylist_orderby_alltimehot'	=> 'Al final de la actividad no ha participado en cualquier orden de la serie',//'按所有未结束活动已参加人数排序',
	'activitylist_highlight'		=> 'Resalta las palabras encontradas',
);

