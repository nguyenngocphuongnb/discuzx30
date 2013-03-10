<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_threadlist.php by Valery Votintsev at sources.ru
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'threadlist_fids'		=> 'Dans le Forum',
	'threadlist_fids_comment'	=> 'R&#233;glage permet &#224; l\'appel &#224; participer &#224; des postes nouveau forum, vous pouvez maintenir enfonc&#233;e la touche CTRL choix multiples, Choisir Tout ou Effacer Toutes les limitations qui ne sont pas',
	'threadlist_uids'		=> 'UID Proprio.',
	'threadlist_uids_comment'	=> 'R&#233;gler UID proprio. Nbres.initiaux de lignes de Donn&#233;es, Svp. utilisez plusieurs IP  "," virgules IP s&#233;par&#233;s .',
	'threadlist_startrow'		=> 'Nbres.initiaux de lignes de Donn&#233;es',
	'threadlist_startrow_comment'	=> 'Pour la premi&#232;re s&#233;rie de lignes de donn&#233;es, entrez la valeur 0 sp&#233;cifiques de la premi&#232;re ligne, et ainsi',
	'threadlist_items'		=> 'Afficher Donn&#233;es sur le Nbre.',
	'threadlist_items_comment'	=> 'Fixant un Th&#232;me sur le Nbre. des Entr&#233;es Affich&#233;es, d&#233;fini comme un entier sup&#233;rieur &#224; 0',
	'threadlist_titlelength'	=> 'Nbres.Max.du Titre en Octets',
	'threadlist_titlelength_comment'	=> 'D&#233;fini lorsque le titre est plus long que le r&#233;glage, si le titre r&#233;duit automatiquement le nombre en Octets dans le r&#233;glage, 0 n\'est pas automatiquement r&#233;duit',
	'threadlist_fnamelength'		=> 'Nom du Forum Titre qui contient le Nbre.Max.en Octets',
	'threadlist_fnamelength_comment'	=> 'D&#233;finit le titre de la longueur est la longueur du nom du forum o&#249; le compte avec',
	'threadlist_summarylength'		=> 'Th&#232;me contenus de ce texte plus courts',
	'threadlist_summarylength_comment'	=> 'D&#233;finissez le contenu texte d\'un peu de sujets courts, utilisez la valeur par d&#233;faut de 0 &#224; 255',
	'threadlist_tids'		=> 'Pr&#233;cisez le sujet',
	'threadlist_tids_comment'	=> 'Pour sp&#233;cifier l\'affichage th&#232;me impos&#233; tid, plus d\'un Identifiant Svp. utilisez une virgule "," s&#233;par&#233;es. Remarque: vierge est sans filtrage',
	'threadlist_keyword'		=> 'Mot-cl&#233; Titre',
	'threadlist_keyword_comment'	=> 'R&#233;glez le titre contient des mots-cl&#233;s Remarque: vierge est sans filtrage; mots-cl&#233;s peuvent utiliser le joker *; plusieurs mots cl&#233;s, des espaces disponibles, ou et de connexion, telles que Win32 et Unix; correspondre &#224; un certain nombre de cl&#233;s certains de ces mots peuvent &#234;tre utilis&#233;s | ou OR connexion, comme win32 ou unix',
	'threadlist_tagkeyword'		=> 'Marque TAG',
	'threadlist_tagkeyword_comment'	=> 'Tag mots-cl&#233;s Remarque: vierge est sans filtrage; mots-cl&#233;s peuvent utiliser le joker *; correspondre un ou plusieurs mots-cl&#233;s pour | connexion ou OR, comme win32 ou unix',
	'threadlist_typeids'		=> 'ID de cat&#233;gorie th&#232;me',
	'threadlist_typeids_comment'	=> 'Entrez un ID classification des sujets, utilisez la virgule entre plusieurs ID "," s&#233;par&#233;s.',
	'threadlist_typeids_all'	=> 'Tout les Sujets Class&#233;s ',
	'threadlist_sortids'		=> 'Les renseignements classifi&#233;s',
	'threadlist_sortids_comment'	=> 'R&#233;glez l\'objet d\'informations classifi&#233;es. NOTE: Choisir Tout ou Effacer Tout qui &#233;tait sans aucun filtrage',
	'threadlist_sortids_all'	=> 'Toutes les Infos.Class&#233;es',
	'threadlist_digest'		=> 'Posts Filtrage',
	'threadlist_digest_comment'	=> 'D&#233;finissez un domaine sp&#233;cifique. Remarque: Choisir ou Effacer Tous &#233;taient sans aucun filtrage',
	'threadlist_digest_0'		=> 'Sujet Hot',
	'threadlist_digest_1'		=> 'Sommaire I',
	'threadlist_digest_2'		=> 'Sommaire II',
	'threadlist_digest_3'		=> 'Sommaire III',
	'threadlist_stick'		=> 'Filtrage Sujet &#233;pingl&#233;',
	'threadlist_stick_comment'	=> 'D&#233;finissez un domaine sp&#233;cifique. Remarque: Choisir ou Effacer Tous qui &#233;taient sans aucun filtrage',
	'threadlist_stick_0'		=> 'Sujet Hot',
	'threadlist_stick_1'		=> 'Scotch I',
	'threadlist_stick_2'		=> 'Scotch II',
	'threadlist_stick_3'		=> 'Scotch III',
	'threadlist_special'		=> 'Filtrage Th&#232;me Sp&#233;cial',
	'threadlist_special_comment'	=> 'D&#233;finissez un domaine sp&#233;cifique. Remarque: Choisir ou Effacer Tous qui &#233;taient sans aucun filtrage',
	'threadlist_special_1'		=> 'Th&#232;me Sondage',
	'threadlist_special_2'		=> 'Biens envoy&#233;s',
	'threadlist_special_3'		=> 'Th&#232;me R&#233;compense',
	'threadlist_special_4'		=> 'Th&#232;me Activit&#233;s',
	'threadlist_special_5'		=> 'Th&#232;me D&#233;bats',
	'threadlist_special_0'		=> 'Sujet Hot',
	'threadlist_special_reward'	=> 'Filtre Px. R&#233;comp par Sujet',
	'threadlist_special_reward_comment'	=> 'D&#233;finissez le th&#232;me d\'un type particulier de r&#233;compense',
	'threadlist_special_reward_0'	=> 'Tout',
	'threadlist_special_reward_1'	=> 'R&#233;solus',
	'threadlist_special_reward_2'	=> 'En Suspens',
	'threadlist_recommend'		=> 'Filtrage recommand&#233; th&#232;me',
	'threadlist_viewmod'		=> 'Mode pour afficher l\'article',
	'threadlist_recommend_comment'	=> 'D&#233;finissez si pour Afficher seulement les Sujets Recommand&#233;s',
	'threadlist_picrequired'	=> 'Accessoires photo doit &#234;tre inclus',
	'threadlist_picrequired_comment'	=> 'D&#233;finissez si d\'afficher uniquement le sujet avec la Pièce Jointe de cette Image',
	'threadlist_orderby'		=> 'Trier par th&#232;me',
	'threadlist_orderby_comment'	=> 'Param&#232;tres pour lesquels le champ du Sujet ou la mani&#232;re de Trier',
	'threadlist_orderby_lastpost'	=> 'Trier selon le temps Dernier message D&#233;croissant',
	'threadlist_orderby_dateline'	=> 'L\'ordre inverse selon la fonction l\'heure',
	'threadlist_orderby_replies'	=> 'Trier par r&#233;ponses DESC',
	'threadlist_orderby_views'	=> 'Trier invers&#233;e par Vues',
	'threadlist_orderby_heats'	=> 'Ordre inverse en Redu',
	'threadlist_orderby_recommends'	=> 'Tri invers&#233; par Evaluation du Th&#232;me',
	'threadlist_orderby_hourviews'	=> 'Vues dans le d&#233;lai sp&#233;cifi&#233; dans un Ordre inverse',
	'threadlist_orderby_todayviews'	=> 'Parcourir par le num&#233;ro du jour dans un Ordre inverse',
	'threadlist_orderby_weekviews'	=> 'Vues cette semaine par ordre inverse selon la fonction',
	'threadlist_orderby_monthviews'	=> 'Inverser les vues Mensuel par Ordre',
	'threadlist_orderby_hours'	=> 'De temps sp&#233;cifi&#233;e (heures)',
	'threadlist_orderby_hours_comment'	=> 'Vues dans le d&#233;lai sp&#233;cifi&#233; dans un Ordre inverse de la valeur temps',
	'threadlist_orderby_todayhots'	=> 'Le nombre total vendu par le jour dans l\'ordre inverse',
	'threadlist_orderby_weekhots'	=> 'Vendu par Nbres. cumul&#233;s par Ordre inverse de la semaine',
	'threadlist_orderby_monthhots'	=> 'Nbres. Totaux vendus Mensuel. dans un Ordre inverse',
	'threadlist_lastpost'		=> 'Derni&#232;re M-&#224;-j.',
	'threadlist_postdateline'	=> 'Th&#232;me Affich&#233;',
	'threadlist_postdateline_nolimit'	=> 'Aucune Restriction',
	'threadlist_postdateline_hour'	=> '1 heure',
	'threadlist_postdateline_day'	=> 'En 24 heures',
	'threadlist_postdateline_week'	=> '7 jours',
	'threadlist_postdateline_month'	=> '1 mois',
	'threadlist_lastpost_nolimit'	=> 'Aucune Restriction',
	'threadlist_lastpost_hour'	=> '1 heure',
	'threadlist_lastpost_day'	=> 'En 24 heures',
	'threadlist_lastpost_week'	=> '7 jours',
	'threadlist_lastpost_month'	=> '1 mois',
	'threadlist_price_add'		=> ' Suppl&#233;mentaires ',
	'threadlist_place'		=> 'Lieu Ev&#233;nement',
	'threadlist_class'		=> 'Activit&#233;s Types',
	'threadlist_gender'		=> 'Genre',
	'threadlist_gender_0'		=> 'Neutre',
	'threadlist_gender_1'		=> 'Homme',
	'threadlist_gender_2'		=> 'Femme',
	'threadlist_orderby_weekstart'	=> 'Heure de d&#233;but des Activit&#233;s par Ordre en Semaine',
	'threadlist_orderby_monthstart'	=> 'Heure de d&#233;but des Activit&#233;s par Ordre du Mois',
	'threadlist_orderby_weekexp'	=> 'Tri.Date limite par inscription par Semaine',
	'threadlist_orderby_monthexp'	=> 'Tri.Date limite par inscription, en ordonnant dans un Mois',
	'threadlist_highlight'		=> 'Choisissez la Valeur Obtenue',
);

