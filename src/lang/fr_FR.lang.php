<?php
/**
 * PHP Server Monitor
 * Monitor your servers and websites.
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     phpservermon
 * @author      David Ribeiro
 * @author      Jérôme Cabanis <jerome@lauraly.com>
 * @copyright   Copyright (c) 2008-2014 Pepijn Over <pep@neanderthal-technology.com>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: v3.1.1
 * @link        http://www.phpservermonitor.org/
 **/

$sm_lang = array(
	'name' => 'Français - French',
	'locale' => array('fr_FR.UTF-8', 'fr_FR', 'french'),
	'system' => array(
		'title' => 'Server Monitor',
		'install' => 'Installer',
		'action' => 'Action',
		'save' => 'Enregistrer',
		'edit' => 'Editer',
		'delete' => 'Supprimer',
		'date' => 'Date',
		'message' => 'Message',
		'yes' => 'Oui',
		'no' => 'Non',
		'insert' => 'Nouveau',
		'add_new' => 'Nouveau',
		'update_available' => 'Une nouvelle version ({version}) est disponible à l\'adresse <a href="http://www.phpservermonitor.org" target="_blank">http://www.phpservermonitor.org</a>.',
		'back_to_top' => 'Haut de page',
		'go_back' => 'Retour',
		'ok' => 'OK',
		'cancel' => 'Annuler',
		// date/time format according the strftime php function format parameter http://php.net/manual/function.strftime.php
		'short_day_format' => 'Le %e %B',
		'long_day_format' => 'Le %e %B %Y',
		'yesterday_format' => 'Hier à %kh%M',
		'other_day_format' => '%A à %kh%M',
		'never' => 'Jamais',
		'hours_ago' => 'Il y a %d heures',
		'an_hour_ago' => 'Il y a une heure',
		'minutes_ago' => 'Il y a %d minutes',
		'a_minute_ago' => 'Il y a une minute',
		'seconds_ago' => 'Il y a %d secondes',
		'a_second_ago' => 'Il y a une seconde',
	),
	'menu' => array(
		'config' => 'Configuration',
		'server' => 'Serveurs',
		'server_log' => 'Événements',
		'server_status' => 'États',
		'server_update' => 'Mise à jour',
		'user' => 'Utilisateurs',
		'help' => 'Aide',
	),
	'users' => array(
		'user' => 'Utilisateur',
		'name' => 'Nom',
		'user_name' => 'Nom d\'utilisateur',
		'password' => 'Mot de passe',
		'password_repeat' => 'Répéter le mot de passe',
		'password_leave_blank' => 'Laisser vide pour ne pas le modifier',
		'level' => 'Niveau',
		'level_10' => 'Administrateur',
		'level_20' => 'Utilisateur',
		'level_description' => 'Les <b>Administrateurs</b> ont un accès total. Ils peuvent gérer les serveurs, les utilisateurs et éditer la configuration globale.<br/>Les <b>Utilisateurs</b> ne peuvent que voir et mettre à jour les serveurs qui leur ont été assignés.',
		'mobile' => 'Téléphone',
		'email' => 'Email',
		'pushover' => 'Pushover',
		'pushover_description' => 'Pushover est un service qui simplifie les notifications en temps réel. Voir <a href="https://pushover.net/">leur site web</a> pour plus d\'informations.',
		'pushover_key' => 'Clé Pushover',
		'pushover_device' => 'Appareil Pushover',
		'pushover_device_description' => 'Nom de l\'appareil auquel le message doit être envoyé. Laissez vide pour l\'envoyer à tout les appareils.',
		'pushsafer' => 'Pushsafer',
		'pushsafer_description' => 'Pushsafer is a service to get real-time notifications with <strong>chart image</strong> in iOS, Android and Windows 10. See <a href="https://www.pushsafer.com/">their website</a> for more info.',
		'pushsafer_key' => 'Pushsafer Private or Alias Key',
		'pushsafer_device' => 'Pushsafer Device (Group)',
		'pushsafer_device_description' => 'Device ID or Device Group ID to send the message to. Leave empty to send it to all devices.',
		'delete_title' => 'Supprimer un utilisateur',
		'delete_message' => 'Êtes-vous sûr de vouloir supprimer l\'utilisateur \'%1\' ?',
		'deleted' => 'Utilisateur supprimé.',
		'updated' => 'Utilisateur mis à jour.',
		'inserted' => 'Utilisateur ajouté.',
		'profile' => 'Profil',
		'profile_updated' => 'Votre profil a été mis à jour.',
		'error_user_name_bad_length' => 'Le nom d\'utilisateur doit avoir entre 2 et 64 caractères.',
		'error_user_name_invalid' => 'Le nom d\'utilisateur ne peut contenir que des caractères alphabetiques (a-z, A-Z), des chiffres (0-9) ou underscore (_).',
		'error_user_name_exists' => 'Ce nom d\'utilisateur existe déjà.',
		'error_user_email_bad_length' => 'L\'adresse email doit avoir entre 5 et 255 caractères.',
		'error_user_email_invalid' => 'L\'adresse email n\'est pas valide.',
		'error_user_level_invalid' => 'Le niveau d\'utilisateur n\'est pas valide.',
		'error_user_no_match' => 'L\'utilisateur n\'a pas été trouvé dans la base de donnée.',
		'error_user_password_invalid' => 'Le mot de passe n\'est pas valide.',
		'error_user_password_no_match' => 'Le mot de passe est incorrect.',
	),
	'log' => array(
		'title' => 'Événements',
		'type' => 'Type',
		'status' => 'État',
		'email' => 'email',
		'sms' => 'SMS',
		'pushover' => 'Pushover',
		'pushsafer' => 'Pushsafer',
		'no_logs' => 'Aucun événement',
	),
	'servers' => array(
		'server' => 'Serveur',
		'status' => 'État',
		'label' => 'Nom',
		'domain' => 'Domaine/IP',
		'timeout' => 'Délai d\'attente',
		'timeout_description' => 'Nombre de secondes à attendre une réponse du serveur.',
		'port' => 'Port',
		'type' => 'Type',
		'type_website' => 'Site Web',
		'type_service' => 'Service',
		'pattern' => 'Rechercher un texte/motif',
		'pattern_description' => 'Si ce texte n\'est par retrouvé sur le site web, le serveur est marqué hors-service. Les expressions réguliaires sont autorisées.',
		'last_check' => 'Dernière vérification',
		'last_online' => 'Dernière fois OK',
		'monitoring' => 'Serveillé',
		'no_monitoring' => 'Non serveillé',
		'email' => 'Email',
		'send_email' => 'Envoyer un email',
		'sms' => 'SMS',
		'send_sms' => 'Envoyer un SMS',
		'pushover' => 'Pushover',
		'pushsafer' => 'Pushsafer',
		'users' => 'Users',
		'delete_title' => 'Supprimer un serveur',
		'delete_message' => 'Êtes-vous sûr de vouloir supprimer le serveur \'%1\' ?',
		'deleted' => 'Serveur supprimé.',
		'updated' => 'Serveur mis à jour.',
		'inserted' => 'Serveur ajouté.',
		'latency' => 'Temps de réponse',
		'latency_max' => 'Temps de réponse maximum',
		'latency_min' => 'Temps de réponse minimum',
		'latency_avg' => 'Temps de réponse moyen',
		'uptime' => 'Disponibilité',
		'year' => 'Année',
		'month' => 'Mois',
		'week' => 'Semaine',
		'day' => 'Jour',
		'hour' => 'Heure',
		'warning_threshold' => 'Seuil d\'alerte',
		'warning_threshold_description' => 'Nombre d\'échecs de connexion avant que le serveur soit marqué hors-service.',
		'chart_last_week' => 'La dernière semaine',
		'chart_history' => 'Historique',
		// Charts date format according jqPlot date format  http://www.jqplot.com/docs/files/plugins/jqplot-dateAxisRenderer-js.html
		'chart_day_format' => '%d/%m/%Y',
		'chart_long_date_format' => '%d/%m/%Y %H:%M:%S',
		'chart_short_date_format' => '%d/%m %H:%M',
		'chart_short_time_format' => '%H:%M',
		'warning_notifications_disabled_sms' => 'Les notifications SMS sont désactivées.',
		'warning_notifications_disabled_email' => 'Les notifications par email sont désactivées.',
		'warning_notifications_disabled_pushover' => 'Les notifications Pushover sont désactivées.',
		'warning_notifications_disabled_pushsafer' => 'Les notifications Pushsafer sont désactivées.',
		'error_server_no_match' => 'Serveur non trouvé.',
		'error_server_label_bad_length' => 'Le nom doit avoir entre 1 et 255 caractères.',
		'error_server_ip_bad_length' => 'Domaine/IP doit avoir entre 1 et 255 caractères.',
		'error_server_ip_bad_service' => 'L\'adresse IP n\'est pas valide.',
		'error_server_ip_bad_website' => 'L\'URL du site web n\'est pas valide.',
		'error_server_type_invalid' => 'Le type de service sélectionné n\'est pas valide.',
		'error_server_warning_threshold_invalid' => 'Le seuil d\'alerte doit être un nombre entier supérieur à 0.',
	),
	'config' => array(
		'general' => 'Général',
		'language' => 'Langue',
		'show_update' => 'Vérifier les nouvelles mise à jour chaque semaine',
		'email_status' => 'Autoriser l\'envoi de mail',
		'email_from_email' => 'Adresse de l\'expéditeur',
		'email_from_name' => 'Nom de l\'expéditeur',
		'email_smtp' => 'Utiliser un serveur SMTP',
		'email_smtp_host' => 'Adresse serveur SMTP',
		'email_smtp_port' => 'Port SMTP',
		'email_smtp_security' => 'SMTP security',
		'email_smtp_security_none' => 'None',
		'email_smtp_username' => 'Nom utilisateur SMTP',
		'email_smtp_password' => 'Mot de passe SMTP',
		'email_smtp_noauth' => 'Laisser vide si pas d\'authentication',
		'sms_status' => 'Autoriser l\'envoi de SMS',
		'sms_gateway' => 'Passerelle à utiliser pour l\'envoi de SMS',
		'sms_gateway_mosms' => 'Mosms',
		'sms_gateway_mollie' => 'Mollie',
		'sms_gateway_spryng' => 'Spryng',
		'sms_gateway_inetworx' => 'Inetworx',
		'sms_gateway_clickatell' => 'Clickatell',
        'sms_gateway_textmarketer' => 'Textmarketer',
		'sms_gateway_smsglobal' => 'SMSGlobal',
		'sms_gateway_smsit' => 'Smsit',
		'sms_gateway_username' => 'Nom utilisateur de la passerelle',
		'sms_gateway_password' => 'Mot de passe de la passerelle',
		'sms_from' => 'SMS de l\'expéditeur',
		'pushover_status' => 'Autoriser l\'envoi des messages Pushover',
		'pushover_description' => 'Pushover est un service qui simplifie les notifications en temps réel. Voir <a href="https://pushover.net/">leur site web</a> pour plus d\'informations.',
		'pushover_clone_app' => 'Cliquez ici pour créer votre application Pushover',
		'pushover_api_token' => 'Jeton application Pushover',
		'pushover_api_token_description' => 'Avant de pouvoir utiliser Pushover, vous devez <a href="%1$s" target="_blank">créer une application</a> sur leur site web et entrer ici le jeton (Token) de l\'application.',
		'pushsafer_status' => 'Autoriser l\'envoi des messages Pushsafer',
		'pushsafer_description' => '<p>Pushsafer is a service that makes it easy to get real-time notifications with <strong>chart image</strong> to iOS, Android and Windows 10 devices. See <a target="_blank" href="https://www.pushsafer.com/">their website</a> for more info.</p><p>For the replacement of the parameters below, please read the <a target="_blank" href="https://www.pushsafer.com/en/pushapi">Pushsafer API description!.</a></p>',
		'pushsafer_device' => 'Device or Device Group ID',
		'pushsafer_icon' => 'Icon',
		'pushsafer_sound' => 'Sound',
		'pushsafer_vibration' => 'Vibration',
		'pushsafer_time2live' => 'Time to live',
		'alert_type' => 'Choisissez quand vous souhaitez être notifié',
		'alert_type_description' => '<b>Changement d\'état : </b>'.
			'Vous recevez une notification chaque fois que le serveur change d\'état. C\'est-à-dire passe de l\'état OK à HORS SERVICE ou de HORS SERVICE à OK.<br/>'.
			 '<br/><b>Hors service : </b>'.
			'Vous ne recevez une notification que quand le serveur passe de l\'état OK à HORS SERVICE. Par exemple, '.
			'Votre tache planifiée s\'exécute toute les 15 minutes et votre serveur passe à l\'état HORS SERVICE à 1 heure du matin et le reste jusqu\'à 6 heures du matin.'.
			'Vous ne recevez qu\'une seule notification à 1 heure du matin.<br/>'.
			'<br/><b>Toujours : </b>'.
			'Vous recevez une notification à chaque exécution de la tache planifiée si le serveur est à l\'état HORS SERVICE ',
		'alert_type_status' => 'Changement d\'état',
		'alert_type_offline' => 'Hors service',
		'alert_type_always' => 'Toujours',
		'log_status' => 'Etat des événements',
		'log_status_description' => 'Si l\'option est activée, un événement est enregistré chaque fois qu\'une notification a lieu.',
		'log_email' => 'Enregistrer tout les emails envoyés',
		'log_sms' => 'Enregistrer tout les SMS envoyés',
		'log_pushover' => 'Enregistrer tout les messages Pushover envoyés',
		'log_pushsafer' => 'Enregistrer tout les messages Pushsafer envoyés',
		'updated' => 'La configuration a été mise à jour.',
		'tab_email' => 'Email',
		'tab_sms' => 'SMS',
		'tab_pushover' => 'Pushover',
		'tab_pushsafer' => 'Pushsafer',
		'settings_email' => 'Configuration email',
		'settings_sms' => 'Configuration SMS',
		'settings_pushover' => 'Configuration Pushover',
		'settings_pushsafer' => 'Configuration Pushsafer',
		'settings_notification' => 'Configuration des notifications',
		'settings_log' => 'Configuration des événements',
		'auto_refresh' => 'Auto-rachaîchissement',
		'auto_refresh_servers' =>
			'Auto-rachaîchissement de la page serveurs.<br/>'.
			'<span class="small">'.
			'Temps en secondes. Si 0, la page n\'est pas rafraîchie.'.
			'</span>',
		'seconds' => 'secondes',
		'test' => 'Tester',
		'test_email' => 'Un email va vous être envoyé à l\'adresse définie dans votre profil utilisateur.',
		'test_sms' => 'Un SMS va vous être envoyé au numéro défini dans votre profil utilisateur.',
		'test_pushover' => 'Une notification Pushover va être envoyée en utilisant la clé spécifiée dans votre profil utilisateur.',
		'test_pushsafer' => 'Une notification Pushsafer va être envoyée en utilisant la clé spécifiée dans votre profil utilisateur.',
		'send' => 'Envoyer',
		'test_subject' => 'Test',
		'test_message' => 'Message de test',
		'email_sent' => 'Email envoyé',
		'email_error' => 'Erreur lors de l\'envoi de l\'email',
		'sms_sent' => 'Sms envoyé',
		'sms_error' => 'Erreur lors de l\'envoi du sms',
		'sms_error_nomobile' => 'Impossible d\'envoyer un SMS de test: aucun numéro de téléphone défini dans votre profil.',
		'pushover_sent' => 'Notification Pushover envoyée',
		'pushover_error' => 'Une erreur s\'est produite lors de l\'envoi de la notification Pushover : %s',
		'pushover_error_noapp' => 'Impossible d\'envoyer une notification de test: Aucun jeton application Pushover n\'a été défini dans la configuration Pushover.',
		'pushover_error_nokey' => 'Impossible d\'envoyer une notification de test: Aucune clé Pushover n\'a été définie dans votre profil.',
		'pushsafer_sent' => 'Notification Pushover envoyée',
		'pushsafer_error' => 'Une erreur s\'est produite lors de l\'envoi de la notification Pushsafer : %s',
		'pushsafer_error_noapp' => 'Impossible d\'envoyer une notification de test: Aucune clé Pushsafer n\'a été définie dans votre profil.',
		'pushsafer_error_nokey' => 'Impossible d\'envoyer une notification de test: Aucune clé Pushsafer n\'a été définie dans votre profil.',
		'log_retention_period' => 'Durée de conservation',
		'log_retention_period_description' => 'Nombre de jours de conservation des événements envoyés et des temps de réponse des serveurs. Entrez 0 pour les conserver indéfiniment.',
		'log_retention_days' => 'jours',
	),
	// for newlines in the email messages use <br/>
	'notifications' => array(
		'off_sms' => 'Le Serveur \'%LABEL%\' est HORS SERVICE: IP=%IP%, Port=%PORT%. Erreur=%ERROR%',
		'off_email_subject' => 'IMPORTANT: Le Serveur \'%LABEL%\' est HORS SERVICE',
		'off_email_body' => "Impossible de se connecter au serveur suivant:<br/><br/>Serveur: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Erreur: %ERROR%<br/>Date: %DATE%",
		'off_pushover_title' => 'Le Serveur \'%LABEL%\' est HORS SERVICE',
		'off_pushover_message' => "Impossible de se connecter au serveur suivant:<br/><br/>Serveur: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Erreur: %ERROR%<br/>Date: %DATE%",
		'off_pushsafer_title' => 'Le Serveur %LABEL% est HORS SERVICE',
		'off_pushsafer_message' => "Impossible de se connecter au serveur suivant:<br/><br/>Serveur: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Erreur: %ERROR%<br/>Date: %DATE%",
		'on_sms' => 'Le Serveur \'%LABEL%\' est OK: IP=%IP%, Port=%PORT%',
		'on_email_subject' => 'IMPORTANT: Le Serveur \'%LABEL%\' est OK',
		'on_email_body' => "Le Serveur '%LABEL%' est de nouveau OK:<br/><br/>Serveur: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Date: %DATE%",
		'on_pushover_title' => 'Le Serveur \'%LABEL%\' est OK',
		'on_pushover_message' => "Le Serveur '%LABEL%' est de nouveau OK:<br/><br/>Serveur: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Date: %DATE%",
		'on_pushsafer_title' => 'Le Serveur %LABEL% est OK',
		'on_pushsafer_message' => "Le Serveur %LABEL% est de nouveau OK:<br/><br/>Serveur: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Date: %DATE%",
	),
	'login' => array(
		'welcome_usermenu' => 'Bonjour %user_name%',
		'title_sign_in' => 'Connectez vous SVP',
		'title_forgot' => 'Mot de passe oublié ?',
		'title_reset' => 'Réinitialisation du mot de passe',
		'submit' => 'Envoyer',
		'remember_me' => 'Se vouvenir de moi',
		'login' => 'Connexion',
		'logout' => 'Déconnexion',
		'username' => 'Nom',
		'password' => 'Mot de passe',
		'password_repeat' => 'Répéter le mot de passe',
		'password_forgot' => 'Mot de passe oublié ?',
		'password_reset' => 'Réinitialiser le mot de passe',
		'password_reset_email_subject' => 'Réinitialisation du mot de passe pour PHP Server Monitor',
		'password_reset_email_body' => 'Cliquez sur le lien ci-dessous pour réinitialiser votre mot de passe. Veuillez noter qu\'il expire dans une heure.<br/><br/>%link%',
		'error_user_incorrect' => 'Nom d\'utilisateur invalide.',
		'error_login_incorrect' => 'Informations incorrectes.',
		'error_login_passwords_nomatch' => 'Mot de passe invalide.',
		'error_reset_invalid_link' => 'Le lien d\initialisation du mot de passe n\'est pas valide.',
		'success_password_forgot' => 'Un email vous a été envoyé pour réinitialiser votre mot de passe.',
		'success_password_reset' => 'Votre mot de passe a été réinitialisé.',
	),
	'error' => array(
		'401_unauthorized' => 'Non autorisée',
		'401_unauthorized_description' => 'Vous n\'avez pas les privilèges nécessaires pour voir cette page.',
	),
);
