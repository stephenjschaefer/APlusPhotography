<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2015 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.26
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/lang/catalan.php $
  $Revision: 8829 $
  **********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Catalan';
$lang_translation_info['lang_name_native'] = 'catalá';
$lang_translation_info['lang_country_code'] = 'catalonia';
$lang_translation_info['trans_name'] = array('Toni Ginard', 'Mireia Salazar', 'RafelGF', 'Antoni Nerín Toboso');
$lang_translation_info['trans_email'] = array('toni.ginard@gmail.com', '', '', 'toni@nerin.cat');
$lang_translation_info['trans_website'] = array('http://phobos.xtec.cat/intraweb', '', '', 'http://nerin.cat');
$lang_translation_info['trans_date'] = '2014-01-31';
$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'Kb', 'Mb', 'Gb');
$lang_decimal_separator = array('.', ','); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Diumenge', 'Dilluns', 'Dimarts', 'Dimecres', 'Dijous', 'Divendres', 'Dissabte');
$lang_month = array('Gener', 'Febrer', 'Març', 'Abril', 'Maig', 'Juny', 'Juliol', 'Agost', 'Setembre', 'Octubre', 'Novembre', 'Desembre');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d de %B de %Y';
$lang_date['lastcom'] = '%d/%m/%Y a les %H:%M';
$lang_date['lastup'] = '%d de %B de %Y';
$lang_date['register'] = '%d de %B de %Y';
$lang_date['lasthit'] = '%d de %B de %Y a les %I:%M %p';
$lang_date['comment'] = '%d de %B de %Y a les %I:%M %p';
$lang_date['log'] = '%B %d, %Y at %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('merda', 'cony', '*puta', 'malparit');
$lang_meta_album_names['random'] = 'Fitxers aleatoris';
$lang_meta_album_names['lastup'] = 'Darreres càrregues';
$lang_meta_album_names['lastalb'] = 'Darrers àlbums actualitzats';
$lang_meta_album_names['lastcom'] = 'Darrers comentaris';
$lang_meta_album_names['topn'] = 'Més visualitzats';
$lang_meta_album_names['toprated'] = 'Millor valorats';
$lang_meta_album_names['lasthits'] = 'Darrers visualitzats';
$lang_meta_album_names['search'] = 'Resultats de la cerca de fitxers';
$lang_meta_album_names['album_search'] = 'Resultats de la cerca d\'àlbums';
$lang_meta_album_names['category_search'] = 'Resultats de la cerca de categories';
$lang_meta_album_names['favpics'] = 'Preferits';
$lang_meta_album_names['datebrowse'] = 'Cerca per data'; //cpg1.5
$lang_errors['access_denied'] = 'No teniu permís per accedir a aquesta pàgina.';
$lang_errors['invalid_form_token'] = 'No s\'ha trobat cap testimoni de formulari.'; //cpg1.5
$lang_errors['perm_denied'] = 'No teniu permís per realitzar aquesta tasca.';
$lang_errors['param_missing'] = 'Crida a l\'script sense els paràmetres requerits.';
$lang_errors['non_exist_ap'] = 'L\'àlbum o el fitxer seleccionat no existeix.';
$lang_errors['quota_exceeded'] = 'S\'ha excedit la quota de disc.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Teniu una quota de [quota]Kb. Els vostres fitxers actualment ocupen [space]Kb, i afegint aquest fitxer excediríeu la quota.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Quan es fa servir la llibreria d\'imatges GD només es permeten extensions JPEG i PNG.';
$lang_errors['invalid_image'] = 'La imatge que heu afegit és corrupta o no pot ser tractada per la llibreria GD';
$lang_errors['resize_failed'] = 'No es pot crear la miniatura o la imatge de mida reduïda.';
$lang_errors['no_img_to_display'] = 'No hi ha cap arxiu per mostrar.';
$lang_errors['non_exist_cat'] = 'La categoria seleccionada no existeix.';
$lang_errors['directory_ro'] = 'El directori \'%s\' no té permisos d\'escriptura, els fitxers no es poden esborrar.';
$lang_errors['pic_in_invalid_album'] = 'El fitxer està a un àlbum que no existeix (%s).';
$lang_errors['banned'] = 'Actualment esteu expulsat i no podeu fer ús d\'aquesta web.';
$lang_errors['offline_title'] = 'Desactivada';
$lang_errors['offline_text'] = 'La galeria està temporalment desactivada, torneu-ho a comprovar aviat';
$lang_errors['ecards_empty'] = 'Actualment no hi ha postals per mostrar.';
$lang_errors['database_query'] = 'S\'ha produït un error en executar la consulta a la base de dades';
$lang_errors['non_exist_comment'] = 'El comentari seleccionat no existeix';
$lang_errors['captcha_error'] = 'El codi de confirmació no coincideix'; // cpg1.5
$lang_errors['login_needed'] = 'Cal que us %sregistreu%s i %sinicieu sessió%s per accedir a aquesta pàgina'; // cpg1.5
$lang_errors['error'] = 'Error'; // cpg1.5
$lang_errors['critical_error'] = 'Error crític'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Només esteu autoritzat per veure miniatures.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'No esteu autoritzat per veure les imatges de mida màxima.'; // cpg1.5
$lang_errors['access_none'] = 'No esteu autoritzat per veure cap fitxer.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals actiu.';// cpg1.5
$lang_errors['register_globals_warning'] = 'El paràmetre de PHP register_globals està habilitat en el seu servidor, la qual cosa és una mala idea pel que fa a la seguretat. Es molt recomanable la seva deshabilitació.'; //cpg1.5
$lang_bbcode_help_title = 'Ajuda de BBCode';
$lang_bbcode_help = 'Podeu afegir enllaços i format al camp mitjançant aquestes etiquetes BBCode:<li>[b]Negreta[/b] =&gt; <strong>Negreta</strong></li><li>[i]Cursiva[/i] =&gt; <i>Cursiva</i></li><li>[url=http://elteuweb.cat/]Text web[/url] =&gt; <a href="http://elteuweb.cat">Text web</a></li><li>[email]usuari@domini.cat[/email] =&gt; <a href="mailto:usuari@domini.cat">usuari@domini.cat</a></li><li>[color=red]text[/color] =&gt; <span style="color:red">text</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';
$lang_common['yes'] = 'Sí'; // cpg1.5
$lang_common['no'] = 'No'; // cpg1.5
$lang_common['back'] = 'Enrere'; // cpg1.5
$lang_common['continue'] = 'Continúa'; // cpg1.5
$lang_common['information'] = 'Informació'; // cpg1.5
$lang_common['error'] = 'Error'; // cpg1.5
$lang_common['check_uncheck_all'] = 'Marca\'ls/Desmarca\'ls tots'; // cpg1.5
$lang_common['confirm'] = 'Confirmació'; // cpg1.5
$lang_common['captcha_help_title'] = 'Confirmació visual (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Per evitar l\'spam, heu de confirmar que sou humà i no pas un robot introduïnt el text que es mostra.<br />No fa distinció entre majúscules i minúscules.'; // cpg1.5
$lang_common['title'] = 'Títol'; // cpg1.5
$lang_common['caption'] = 'Llegenda'; // cpg1.5
$lang_common['keywords'] = 'Paraules clau'; // cpg1.5
$lang_common['keywords_insert1'] = 'Paraules clau (separades per %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Trieu de la llista'; // cpg1.5
$lang_common['keyword_separator'] = 'Separador de paraules clau'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'espai', ','=>'coma',';'=>'punt i coma'); // cpg1.5
$lang_common['owner_name'] = 'Nom del propietari/ària'; // cpg1.5
$lang_common['filename'] = 'Nom del fitxer'; // cpg1.5
$lang_common['filesize'] = 'Mida del fitxer'; // cpg1.5
$lang_common['album'] = 'Àlbum'; // cpg1.5
$lang_common['file'] = 'Fitxer'; // cpg1.5
$lang_common['date'] = 'Data'; // cpg1.5
$lang_common['help'] = 'Ajuda'; // cpg1.5
$lang_common['close'] = 'Tanca'; // cpg1.5
$lang_common['go'] = 'Vés-hi'; // cpg1.5
$lang_common['javascript_needed'] = 'Aquesta pàgina necessita JavaScript. Per favor, habiliteu JavaScript al vostre navegador.'; // cpg1.5
$lang_common['move_up'] = 'Mou amunt'; // cpg1.5
$lang_common['move_down'] = 'Mou avall'; // cpg1.5
$lang_common['move_top'] = 'Mou al principi'; // cpg1.5
$lang_common['move_bottom'] = 'Mou al final'; // cpg1.5
$lang_common['delete'] = 'Suprimeix'; // cpg1.5
$lang_common['edit'] = 'Edita'; // cpg1.5
$lang_common['username_if_blank'] = 'Desconegut'; // cpg1.5
$lang_common['albums_no_category'] = 'Àlbum sense categoria'; // cpg1.5
$lang_common['personal_albums'] = '* Àlbums personals'; // cpg1.5
$lang_common['select_album'] = 'Àlbum seleccionat'; // cpg1.5
$lang_common['ok'] = 'D\'acord'; // cpg1.5
$lang_common['status'] = 'Estat'; // cpg1.5
$lang_common['apply_changes'] = 'Aplica els canvis'; // cpg1.5
$lang_common['done'] = 'Fet'; // cpg1.5
$lang_common['album_properties'] = 'Propietats de l\'àlbum'; // cpg1.5
$lang_common['parent_category'] = 'Categoria superior'; // cpg1.5
$lang_common['edit_files'] = 'Edita fitxers'; // cpg1.5
$lang_common['thumbnail_view'] = 'Vista en miniatura'; // cpg1.5
$lang_common['album_manager'] = 'Administrador d\'àlbums'; // cpg1.5
$lang_common['more'] = 'Més'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu['home_title'] = 'Aneu a la pàgina principal';
$lang_main_menu['home_lnk'] = 'Pàgina Principal';
$lang_main_menu['alb_list_title'] = 'Aneu a la llista d\'àlbums';
$lang_main_menu['alb_list_lnk'] = 'Llista d\'àlbums';
$lang_main_menu['my_gal_title'] = 'Aneu a la galeria personal';
$lang_main_menu['my_gal_lnk'] = 'La meva galeria';
$lang_main_menu['my_prof_title'] = 'Aneu al vostre perfil';
$lang_main_menu['my_prof_lnk'] = 'El meu perfil';
$lang_main_menu['adm_mode_title'] = 'Habilita la visualització dels controls d\'administració.'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Mostra els controls d\'administració.'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Deshabilita la visualització dels controls d\'administració.'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Amaga els controls d\'administració.'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Envia fitxers a un àlbum';
$lang_main_menu['upload_pic_lnk'] = 'Enviament de fitxers';
$lang_main_menu['register_title'] = 'Crea un compte d\'usuari';
$lang_main_menu['register_lnk'] = 'Registrar-se';
$lang_main_menu['login_title'] = 'Entra';
$lang_main_menu['login_lnk'] = 'Entrada';
$lang_main_menu['logout_title'] = 'Surt';
$lang_main_menu['logout_lnk'] = 'Sortida';
$lang_main_menu['lastup_title'] = 'Mostra els darrers fitxers carregats';
$lang_main_menu['lastup_lnk'] = 'Darrers fitxers carregats';
$lang_main_menu['lastcom_title'] = 'Mostra els darrers comentaris';
$lang_main_menu['lastcom_lnk'] = 'Darrers comentaris';
$lang_main_menu['topn_title'] = 'Mostra els més vistos';
$lang_main_menu['topn_lnk'] = 'Més vistos';
$lang_main_menu['toprated_title'] = 'Mostra els millor valorats';
$lang_main_menu['toprated_lnk'] = 'Millor valorats';
$lang_main_menu['search_title'] = 'Cerca a la galeria';
$lang_main_menu['search_lnk'] = 'Cerques';
$lang_main_menu['fav_title'] = 'Vés als meus preferits';
$lang_main_menu['fav_lnk'] = 'Els meus preferits';
$lang_main_menu['memberlist_title'] = 'Mostra la llista d\'usuaris';
$lang_main_menu['memberlist_lnk'] = 'Llista d\'usuaris';
$lang_main_menu['browse_by_date_lnk'] = 'Per data'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Cerca per data de càrrega'; // cpg1.5
$lang_main_menu['contact_title'] = 'Poseu-vos en contacte amb %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Contacte'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Afegiu una barra lateral al vostre navegador'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Barra lateral'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Aprova nous fitxers';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Aprovació de fitxers';
$lang_gallery_admin_menu['admin_title'] = 'Vés a la configuració';
$lang_gallery_admin_menu['admin_lnk'] = 'Configuració';
$lang_gallery_admin_menu['albums_title'] = 'Vés a la configuració d\'àlbums';
$lang_gallery_admin_menu['albums_lnk'] = 'Àlbums';
$lang_gallery_admin_menu['categories_title'] = 'Vés a la configuració de categories';
$lang_gallery_admin_menu['categories_lnk'] = 'Categories';
$lang_gallery_admin_menu['users_title'] = 'Vés a la configuració d\'usuaris';
$lang_gallery_admin_menu['users_lnk'] = 'Usuaris';
$lang_gallery_admin_menu['groups_title'] = 'Vés a la configuració de grups';
$lang_gallery_admin_menu['groups_lnk'] = 'Grups';
$lang_gallery_admin_menu['comments_title'] = 'Revisa els últims comentaris';
$lang_gallery_admin_menu['comments_lnk'] = 'Revisió de comentaris';
$lang_gallery_admin_menu['searchnew_title'] = 'Afegeix fitxers de forma massiva (Batch)';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Afegeix fitxers massivament (Batch)';
$lang_gallery_admin_menu['util_title'] = 'Vés a les eines d\'administració';
$lang_gallery_admin_menu['util_lnk'] = 'Eines d\'administració';
$lang_gallery_admin_menu['key_lnk'] = 'Diccionari de paraules clau';
$lang_gallery_admin_menu['ban_title'] = 'Mostra els usuaris exclosos';
$lang_gallery_admin_menu['ban_lnk'] = 'Exclou usuaris';
$lang_gallery_admin_menu['db_ecard_title'] = 'Revisa les postals';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Mostra les postals';
$lang_gallery_admin_menu['pictures_title'] = 'Ordena els meus fitxers';
$lang_gallery_admin_menu['pictures_lnk'] = 'Ordena els meus fitxers';
$lang_gallery_admin_menu['documentation_lnk'] = 'Documentació';
$lang_gallery_admin_menu['documentation_title'] = 'Manual del Coppermine';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Conté informació tècnica sobre el seu servidor. Se us pot demanar quan sol·liciteu ajuda en els fòrums de suport.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Actualitza la base de dades'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Si heu reemplaçat els fitxers de Coppermine, afegit una modificació o actualizat des d\'una versió anterior de Coppermine, assegureu-vos d\'executar l\'actualització de base de dades. Això crearà les taules necessàries i/o valors de configuració en la base de dades de Coppermine.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Veure fitxers de registre'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine pot fer un seguiment de diverses accions que realitzen els usuaris. Podeu explorar aquestos registres si els heu habilitat en la configuració de Coppermine.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Verifica versió'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Reviseu el fitxer de versió per verificar si heu reemplaçat tots els fitxers després d\'una actualització, o si els fitxers font de Coppermine han estat actualitzats després de l\'aparició d\'un paquet.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Administrador d\'enllaços'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Habiliteu/des-habiliteu la integració (enllaç) de Coppermine amb una altra aplicació (per exemple, la vostra BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Administrador de connectors'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Administrador de connectors'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Estadístiques generals'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Veieu estadístiques generals per navegador i sistema operatiu (si les opcions corresponents estan activades en la configuració).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Administrador de paraules clau'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Administreu les paraules clau (si l\'opció corresponent està activada en la configuració).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Administrador de dades EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Administreu les dades EXIF (si l\'opció corresponent està activada en la configuració).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Mostra novetats'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Mostreu les novetats de coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Crea i ordena els meus àlbums';
$lang_user_admin_menu['albmgr_lnk'] = 'Crea i ordena els meus àlbums';
$lang_user_admin_menu['modifyalb_title'] = 'Modifica els meus àlbums';
$lang_user_admin_menu['modifyalb_lnk'] = 'Modifica els meus àlbums';
$lang_user_admin_menu['my_prof_title'] = 'Vés al meu perfil';
$lang_user_admin_menu['my_prof_lnk'] = 'El meu perfil';

$lang_cat_list['category'] = 'Categoria';
$lang_cat_list['albums'] = 'Àlbums';
$lang_cat_list['pictures'] = 'Fitxers';

$lang_album_list['album_on_page'] = '%d àlbums en %d pàgina/es';

$lang_thumb_view['date'] = 'Data';

//Sort by filename and title
$lang_thumb_view['name'] = 'Nom del fitxer';
$lang_thumb_view['sort_da'] = 'Ordenat per data ascendent';
$lang_thumb_view['sort_dd'] = 'Ordenat per data descendent';
$lang_thumb_view['sort_na'] = 'Ordenat per nom ascendent';
$lang_thumb_view['sort_nd'] = 'Ordenat per nom descendent';
$lang_thumb_view['sort_ta'] = 'Ordenat per títol ascendent';
$lang_thumb_view['sort_td'] = 'Ordenat per títol descendent';
$lang_thumb_view['position'] = 'Posició';
$lang_thumb_view['sort_pa'] = 'Ordenat per posició ascendent';
$lang_thumb_view['sort_pd'] = 'Ordenat per posició descendent';
$lang_thumb_view['download_zip'] = 'Descarrega com a fitxer ZIP';
$lang_thumb_view['pic_on_page'] = '%d fitxers %d pàgina/es';
$lang_thumb_view['user_on_page'] = '%d usuaris en %d pàgina/es';
$lang_thumb_view['enter_alb_pass'] = 'Introduïu la contrasenya de l\'àlbum';
$lang_thumb_view['invalid_pass'] = 'La contrasenya no és vàlida';
$lang_thumb_view['pass'] = 'Contrasenya';
$lang_thumb_view['submit'] = 'Envia';
$lang_thumb_view['zipdownload_copyright'] = 'Si us plau, respecteu els drets d\'autor - utilitzeu únicament els arxius que hagueu descarregat de la manera prevista pel propietari de la galeria'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'L\'arxiu conté els fitxers comprimits dels favorits de %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Torna a la pàgina de miniatures';
$lang_img_nav_bar['pic_info_title'] = 'Visualitza/amaga la informació del fitxer';
$lang_img_nav_bar['slideshow_title'] = 'Presentació amb diapositives';
$lang_img_nav_bar['ecard_title'] = 'Envia una postal amb aquesta imatge';
$lang_img_nav_bar['ecard_disabled'] = 'Enviament de postals desactivat';
$lang_img_nav_bar['ecard_disabled_msg'] = 'No teniu autorització per enviar postals'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Mostra el fitxer anterior';
$lang_img_nav_bar['next_title'] = 'Mostra el fitxer següent';
$lang_img_nav_bar['pic_pos'] = 'Fitxer %s/%s';
$lang_img_nav_bar['report_title'] = 'Informa d\'aquest fitxer a l\'administrador/a';
$lang_img_nav_bar['go_album_end'] = 'Vés al final';
$lang_img_nav_bar['go_album_start'] = 'Torna a l\'inici';

$lang_rate_pic['rate_this_pic'] = 'Valora aquest fitxer';
$lang_rate_pic['no_votes'] = '(No hi ha valoració)';
$lang_rate_pic['rating'] = '(Valoració actual: %s / %s amb %s vots)';
$lang_rate_pic['rubbish'] = 'Molt dolent';
$lang_rate_pic['poor'] = 'Dolent';
$lang_rate_pic['fair'] = 'Correcte';
$lang_rate_pic['good'] = 'Bo';
$lang_rate_pic['excellent'] = 'Molt bo';
$lang_rate_pic['great'] = 'Excel·lent';
$lang_rate_pic['js_warning'] = 'Javascript ha d\'estar habilitat per poder votar'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Ja heu votat aquest fitxer.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'No podeu votar els vostres fitxers.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Moveu el cursor sobre les estrelles per votar'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //
$lang_cpg_die['file'] = 'Fitxer:';
$lang_cpg_die['line'] = 'Línia:';
$lang_display_thumbnails['dimensions'] = 'Dimensions=';
$lang_display_thumbnails['date_added'] = 'Data de publicació=';
$lang_get_pic_data['n_comments'] = '%s comentaris';
$lang_get_pic_data['n_views'] = '%s visualitzacions';
$lang_get_pic_data['n_votes'] = '(%s vots)';
$lang_cpg_debug_output['debug_info'] = 'Informació de depuració';
$lang_cpg_debug_output['debug_output'] = 'Sortida de depuració'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Selecciona-ho tot';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Si aneu a demanar ajuda en el fòrum de Coppermine, copieu i enganxeu aquesta sortida de depuració en la vostra entrada quan se us sol·liciti, junt amb el missatge d\'error que rebeu (si n\'hi ha). Afegiu la sortida de depuració en el fòrum només si us ho demanen. Assegureu-vos d\'haver reemplaçat les contrasenyes de la consulta amb *** abans de publicar.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Nota: això són dades informatives i no significa que hi hagi un error en la galeria.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'Visualitza phpinfo';
$lang_cpg_debug_output['notices'] = 'Alertes';
$lang_cpg_debug_output['notices_help_admin'] = 'Les alertes mostrades en aquesta pàgina apareixen perquè (com administrador de la galeria) heu habilitat deliberadament aquesta funció en la configuració de Coppermine. No signifiquen necessàriament que hi hagi un problema amb la vostra galeria. De fet, és una funció per a desenvolupadors que només els programadors qualificats haurien d\'habilitar per fer un seguiment d\'errors. Si la visualització d\'alertes us molesta i no sabeu el que aquestes alertes volen dir, desactiveu aquesta funció en la configuració.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Les alertes han estat habilitades expressament per l\'administrador. Això no significa necessàriament que hagueu fet res malament per la vostra part. Podeu ignorar aquestes alertes.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'mostrar/amagar'; // cpg1.5
$lang_language_selection['reset_language'] = 'Llengua per defecte';
$lang_language_selection['choose_language'] = 'Trieu la vostra llengua';
$lang_theme_selection['reset_theme'] = 'Tema per defecte';
$lang_theme_selection['choose_theme'] = 'Trieu un tema';
$lang_version_alert['version_alert'] = 'Versió no implementada!';
$lang_version_alert['no_stable_version'] = 'Esteu utilitzant el Coppermine %s (%s) que està orientat a usuaris experimentats. Aquesta versió no té cap tipus de suport ni garantia. Pel fet d\'utilitzar-la esteu corrent un risc. Feu servir la versió estable si voleu tenir garanties de bon funcionament!';
$lang_version_alert['gallery_offline'] = 'La galeria està fora de línia i només està accessible pels administradors. No us descuideu de tornar-la a posar en línia després d\'acabar les tasques de manteniment';
$lang_version_alert['coppermine_news'] = 'Notícies de coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'El vostre navegador no suporta marcs en línia (iframes)'; // cpg1.5
$lang_version_alert['hide'] = 'Amaga'; // cpg1.5
$lang_create_tabs['previous'] = 'Anteriors'; // cpg1.5
$lang_create_tabs['next'] = 'Següent'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Salta a la pàgina'; // cpg1.5
$lang_get_remote_file_by_url['no_data_returned'] = 'No s\'han retornat dades utilitzant %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Connexió sòcol (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl no està disponible al seu servidor'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Número d\'error: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Missatge d\'error:%s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Heu d\'escriure almenys una';
$lang_mailer['mailer_not_supported'] = 'administrador de correu no compatible.';
$lang_mailer['execute'] = 'No s\'ha pogut executar:';
$lang_mailer['instantiate'] = 'No s\'ha pogut iniciar la funció de correu.';
$lang_mailer['authenticate'] = 'Error SMTP: no s\'ha pogut autenticar.';
$lang_mailer['from_failed'] = 'Les següents adreces de remitent han fallat:';
$lang_mailer['recipients_failed'] = 'Error SMTP: les següents';
$lang_mailer['data_not_accepted'] = 'Error SMTP: dades no acceptades.';
$lang_mailer['connect_host'] = 'Error SMTP: no s\'ha pogut connectar amb el servidor.';
$lang_mailer['file_access'] = 'No s\'ha pogut accedir al fitxer:';
$lang_mailer['file_open'] = 'Error de fitxer:no s\'ha pogut obrir el fitxer:';
$lang_mailer['encoding'] = 'Codificació desconeguda:';
$lang_mailer['signing'] = 'Error de signatura:';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'No s\'ha pogut instal·lar el connector \'%s\'';
$lang_plugin_api['error_uninstall'] = 'No s\'ha pogut desinstal·lar el connector \'%s\'';
$lang_plugin_api['error_sleep'] = 'No s\'ha pogut aturar el connector \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Exclamació';
$lang_smilies_inc_php['Question'] = 'Pregunta';
$lang_smilies_inc_php['Very Happy'] = 'Molt feliç';
$lang_smilies_inc_php['Smile'] = 'Somriure';
$lang_smilies_inc_php['Sad'] = 'Trist';
$lang_smilies_inc_php['Surprised'] = 'Sorprès';
$lang_smilies_inc_php['Shocked'] = 'Commocionat';
$lang_smilies_inc_php['Confused'] = 'Confús';
$lang_smilies_inc_php['Cool'] = 'Genial';
$lang_smilies_inc_php['Laughing'] = 'Rient';
$lang_smilies_inc_php['Mad'] = 'Molest';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarrassed'] = 'Avergonyit'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Plorant o molt trist';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Dolent o molt molest';
$lang_smilies_inc_php['Twisted Evil'] = 'Malvat';
$lang_smilies_inc_php['Rolling Eyes'] = 'Ulls girant';
$lang_smilies_inc_php['Wink'] = 'Picada d\'ull';
$lang_smilies_inc_php['Idea'] = 'Idea';
$lang_smilies_inc_php['Arrow'] = 'Fletxa';
$lang_smilies_inc_php['Neutral'] = 'Neutral';
$lang_smilies_inc_php['Mr. Green'] = 'Sr. Verd';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Gestor d\'àlbums'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Els àlbums han de tindre un nom'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Esteu segur/a de que voleu aplicar aquestes modificacions?'; // js-alert
$lang_albmgr_php['no_change'] = 'No s\'ha realitzat cap canvi'; // js-alert
$lang_albmgr_php['new_album'] = 'Nou àlbum';
$lang_albmgr_php['delete_album'] = 'Suprimeix àlbum'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Esteu segur/a de voler esborrar aquest àlbum?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Tots els fitxers i comentaris es perdran!'; // js-alert
$lang_albmgr_php['select_first'] = 'Seleccioneu primer un àlbum'; // js-alert
$lang_albmgr_php['my_gallery'] = '* La meva galeria *';
$lang_albmgr_php['no_category'] = '* Sense categoria *';
$lang_albmgr_php['select_category'] = 'Selecciona la categoria';
$lang_albmgr_php['category_change'] = 'Si canvieu la categoria, els vostres canvis es perdran!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Si seguiu aquest enllaç, els vostres canvis es perdran!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Cancel·lar'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Els canvis no es desaran fins que premis &quot;Aplica els canvis&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //
if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Usuaris exclosos';
$lang_banning_php['user_name'] = 'Nom d\'usuari';
$lang_banning_php['user_account'] = 'Compte d\'usuari';
$lang_banning_php['email_address'] = 'Adreça de correu'; // cpg1.5
$lang_banning_php['ip_address'] = 'Adreça IP';
$lang_banning_php['expires'] = 'Venç'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Data de venciment'; // cpg1.5
$lang_banning_php['expired'] = 'Vençuda'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Desa els canvis';
$lang_banning_php['add_new'] = 'Afegeix un nou exclòs/osa';
$lang_banning_php['add_ban'] = 'Afegeix';
$lang_banning_php['error_user'] = 'No s\'ha pogut trobar l\'usuari/ària';
$lang_banning_php['error_specify'] = 'Heu d\'especificar un nom d\'usuari o una adreça IP';
$lang_banning_php['error_ban_id'] = 'L\'Identificador no és vàlid!';
$lang_banning_php['error_admin_ban'] = 'No podeu expulsar-vos a vós mateix!';
$lang_banning_php['error_server_ban'] = 'Voleu expulsar el vostre propi servidor? No podeu fer això...';
$lang_banning_php['skipping'] = 'Ometent aquesta ordre'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Cerca una adreça IP';
$lang_banning_php['select_date'] = 'Selecciona una data';
$lang_banning_php['delete_comments'] = 'Suprimir comentaris'; // cpg1.5
$lang_banning_php['current'] = 'actual'; // cpg1.5
$lang_banning_php['all'] = 'tots'; // cpg1.5
$lang_banning_php['none'] = 'cap'; // cpg1.5
$lang_banning_php['view'] = 'visualitza'; // cpg1.5
$lang_banning_php['ban_id'] = 'Identificador d\'expulsió'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Expulsions existents'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Esteu usant la vostra galeria enllaçada amb una altra aplicació. Utilitzeu els mecanismes d\'expulsió de la aplicació en compte dels de Coppermine. Els mecanismes de banneig integrats en Coppermine rarament funcionen quan està enllaçat.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d registres en %d pàgina/es'; // cpg1.5
$lang_banning_php['ascending'] = 'ascendent'; // cpg1.5
$lang_banning_php['descending'] = 'descendent'; // cpg1.5
$lang_banning_php['sort_by'] = 'Ordenat per'; // cpg1.5
$lang_banning_php['sorted_by'] = 'ordenat per'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'El registre d\'expulsió %s s\'ha actualitzat'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'El registre d\'expulsió %s s\'ha eliminat'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'S\'ha creat un nou registre d\'expulsió'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'El registre d\'expulsió %s ja existeix'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s comentari fet per %s ha estat suprimit'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s comentaris fets per %s han estat suprimits'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Introduïu una adreça de correu electrònic vàlida'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Introduïu una adreça IP vàlida (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Introduïu una data de venciment vàlida (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'No s\'ha enviat el formulari: Hi ha errors que heu de corregir abans'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Auxiliar de l\'enllaç';
$lang_bridgemgr_php['back'] = 'enrere';
$lang_bridgemgr_php['next'] = 'següent';
$lang_bridgemgr_php['start_wizard'] = 'Inicia l\'auxiliar';
$lang_bridgemgr_php['finish'] = 'Finalitza';
$lang_bridgemgr_php['no_action_needed'] = 'No es requereix cap acció en aquest pas. Feu clic a \'següent\' per continuar.';
$lang_bridgemgr_php['reset_to_default'] = 'Reinicia amb els valors predeterminats';
$lang_bridgemgr_php['choose_bbs_app'] = 'Trieu l\'aplicació per enllaçar amb el Coppermine';
$lang_bridgemgr_php['support_url'] = 'Suport sobre l\'aplicació';
$lang_bridgemgr_php['settings_path'] = 'Camí emprat per l\'aplicació enllaçada';
$lang_bridgemgr_php['full_forum_url'] = 'URL de l\'aplicació enllaçada';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Camí absolut de l\'aplicació enllaçada';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Camí relatiu al fitxer de configuració de la vostra aplicació enllaçada';
$lang_bridgemgr_php['cookie_prefix'] = 'Prefix de la galeta';
$lang_bridgemgr_php['special_settings'] = 'configuracions específiques de l\'aplicació enllaçada';
$lang_bridgemgr_php['use_post_based_groups'] = 'Utilitzeu grups personalitzats de l\'aplicació enllaçada?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'sí';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'no';
$lang_bridgemgr_php['error_title'] = 'Heu de corregir aquests error abans de continuar. Torneu a la pantalla anterior.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Heu de definir quina aplicació voleu enllaçar amb la instal·lació del Coppermine.';
$lang_bridgemgr_php['finalize'] = 'habilita/deshabilita la integració amb %s';
$lang_bridgemgr_php['finalize_explanation'] = 'Fins ara, la configuració especificada s\'ha incorporat a la base de dades, però la integraciò amb l\'aplicació enllaçada no està habilitada. Podeu iniciar/aturar la integraciò en qualsevol moment. Esteu segur/a de recordar la contrasenya d\'administrador/a del Coppermine independent, podeu necessitar-la després per fer modificacions. Si alguna cosa no funciona correctament, aneu a %s i deshabiliteu la integració amb l\'enllaç, empreu el compte d\'administrador/a no integrat (normalment, la que es va introduir durant la instal·lació del Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Els vostres paràmetres d\'enllaç';
$lang_bridgemgr_php['title_enable'] = 'Habilita l\'enllaç/integració amb %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'habilitat';
$lang_bridgemgr_php['bridge_enable_no'] = 'deshabilitat';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'no ha d\'estar buit';
$lang_bridgemgr_php['error_either_be'] = 'ha de ser %s o %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s no existeix. Corregiu el valor introduït per %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'El Coppermine no pot llegir la galeta anomenada %s. Corregiu el valor introduït per %s, o aneu al tauler d\'administració de la vostra aplicació enllaçada i assegureu-vos de que el camí de la galeta és accessible pel Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'No podeu deixar el camp %s buit. Empleneu-lo amb el valor adequat.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'No hi ha d\'haver una barra inversa al camp %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Hi ha d\'haver una barra inversa al camp %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s i';
$lang_bridgemgr_php['recovery_title'] = 'Gestor d\'enllaços: restabliment d\'emergència';
$lang_bridgemgr_php['recovery_explanation'] = 'Si heu entrat aquí per gestionar la integració de la vostra aplicació enllaçada amb la vostra galeria Coppermine, primer, heu d\'iniciar la sessió com a administrador/a. Si no podeu iniciar sessió perquè l\'enllaç no funciona correctament, podeu deshabilitar la integració d\'aquesta pàgina. Introduir un nom d\'usuari i una contrasenya no iniciarà la sessió, només deshabilitarà la integració amb la vostra aplicació enllaçada. Trobareu els detalls a la documentació.';
$lang_bridgemgr_php['username'] = 'Usuari';
$lang_bridgemgr_php['password'] = 'Contrasenya';
$lang_bridgemgr_php['disable_submit'] = 'tramet';
$lang_bridgemgr_php['recovery_success_title'] = 'L\'autorització ha tingut èxit';
$lang_bridgemgr_php['recovery_success_content'] = 'Heu deshabilitat amb èxit la integració amb l\'aplicació enllaçada. La instal·lació del Coppermine s\'està executant en mode independent.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Identifiqueu-vos com a administrador/a per editar la vostra configuració d\'enllaç i/o activar la integració amb l\'aplicació enllaçada de nou.';
$lang_bridgemgr_php['goto_login'] = 'Vés a la pàgina d\'entrada';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Vés al gestor d\'enllaços';
$lang_bridgemgr_php['recovery_failure_title'] = 'L\'autorització ha fallat';
$lang_bridgemgr_php['recovery_failure_content'] = 'Les dades d\'accés introduïdes són errònies. Heu d\'introduir la informació del compte d\'administrador/a de la versió independent (normalment, el compte que es va crear durant la instal·lació del Coppermine).';
$lang_bridgemgr_php['try_again'] = 'Torneu-ho a provar';
$lang_bridgemgr_php['recovery_wait_title'] = 'El temps d\'espera no s\'ha exhaurit';
$lang_bridgemgr_php['recovery_wait_content'] = 'Per motius de seguretat no es permeten intents erronis consecutius durant l\'autentificació, per aquest motiu, haureu d\'esperar un breu període de temps abans de tornar-ho a provar.';
$lang_bridgemgr_php['wait'] = 'espereu';
$lang_bridgemgr_php['browse'] = 'navega';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Calendari';
$lang_calendar_php['clear_date'] = 'esborra la data';
$lang_calendar_php['files'] = 'fitxers'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Els paràmetres requerits per a la operació \'%s\' no s\'han introduït!';
$lang_catmgr_php['unknown_cat'] = 'La categoria seleccionada no existeix a la base de dades';
$lang_catmgr_php['usergal_cat_ro'] = 'Les galeries d\'usuari no poder suprimir-se!';
$lang_catmgr_php['manage_cat'] = 'Gestor de categories';
$lang_catmgr_php['confirm_delete'] = 'Esteu segur/a de voler ESBORRAR la categoria?'; // js-alert
$lang_catmgr_php['category'] = 'Categories'; // cpg1.5
$lang_catmgr_php['operations'] = 'Operacions';
$lang_catmgr_php['move_into'] = 'Mou a';
$lang_catmgr_php['update_create'] = 'Actualitza/Crea categoria';
$lang_catmgr_php['parent_cat'] = 'Categoria pare';
$lang_catmgr_php['cat_title'] = 'Títol de la categoria';
$lang_catmgr_php['cat_thumb'] = 'Imatge en miniatura de la categoria';
$lang_catmgr_php['cat_desc'] = 'Descripció de la categoria';
$lang_catmgr_php['categories_alpha_sort'] = 'Ordeneu les categories alfabèticament (en lloc de l\'ordre predeterminat)';
$lang_catmgr_php['save_cfg'] = 'Desa la configuració';
$lang_catmgr_php['no_category'] = '* Sense categoria *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'En aquesta categoria es permet crear àlbums als grups'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Contacte'; // cpg1.5
$lang_contact_php['your_name'] = 'El vostre nom'; // cpg1.5
$lang_contact_php['your_email'] = 'El vostre correu'; // cpg1.5
$lang_contact_php['subject'] = 'Assumpte'; // cpg1.5
$lang_contact_php['your_message'] = 'El vostre missatge'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Introduïu el vostre nom'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Introduïu un nom vàlid'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Introduïu el vostre correu'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Introduïu un correu vàlid'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Introduïu un assumpte més detallat'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Introduïu el vostre missatge'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Confirmació'; // cpg1.5
$lang_contact_php['email_headline'] = 'Aquest correu ha estat enviat a %s utilitzant el formulari de contacte en %s des de l\'adreça IP %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'usuari registrat'; // cpg1.5
$lang_contact_php['guest'] = 'Anònim'; // cpg1.5
$lang_contact_php['unknown'] = 'Desconegut'; // cpg1.5
$lang_contact_php['user_info'] = 'El %s anomenat %s amb l\'adreça de correu %s diu:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Error a l\'enviar el vostre correu. Intenteu-ho de nou.'; // cpg1.5
$lang_contact_php['email_sent'] = 'S\'ha enviat el vostre correu.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Configuració de la galeria';
$lang_admin_php['general_settings'] = 'Paràmetres generals'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Llengua i joc de caràcters'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Temes (aspecte)'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Llista d\'àlbums'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Visualització de miniatures'; // cpg1.5
$lang_admin_php['image_view'] = 'Visualitzció d\'imatges'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Comentaris'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Miniatures'; // cpg1.5
$lang_admin_php['file_settings'] = 'Fitxers'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Marques d\'aigua'; // cpg1.5
$lang_admin_php['registration'] = 'Registre d\'usuaris'; // cpg1.5
$lang_admin_php['user_settings'] = 'Usuaris'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Camps personalitzats per als perfils d\'usuari (deixeu-los en blanc si no els utilitzeu). Utilitzeu Perfil 6 per a entrades llargues, com les biografies'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Camps personalitzats per a la descripció d\'imatges (deixeu-los en blanc si no els utilitzeu)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Galetes'; // cpg1.5
$lang_admin_php['email_settings'] = 'Correu (normalment no calen canvis, deixeu els camps en blanc si no esteu segur)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Registre i estadístiques'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Manteniment'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Gestor de dades EXIF';
$lang_admin_php['manage_plugins'] = 'Gestor dels connectors';
$lang_admin_php['manage_keyword'] = 'Gestor de les paraules clau';
$lang_admin_php['restore_cfg'] = 'Restaura els paràmetres predeterminats';
$lang_admin_php['restore_cfg_confirm'] = 'Realment voleu restaurar tota la configuració amb els paràmetres predeterminats? No es pot desfer!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Desa la nova configuració';
$lang_admin_php['notes'] = 'Notes';
$lang_admin_php['info'] = 'Informació';
$lang_admin_php['upd_success'] = 'S\'ha actualitzat la configuració del Coppermine';
$lang_admin_php['restore_success'] = 'S\'han restaurat els paràmetres per defecte del Coppermine';
$lang_admin_php['name_a'] = 'Ordena per nom en sentit ascendent';
$lang_admin_php['name_d'] = 'Ordena per nom en sentit descendent';
$lang_admin_php['title_a'] = 'Ordena per títol en sentit ascendent';
$lang_admin_php['title_d'] = 'Ordena per títol en sentit descendent';
$lang_admin_php['date_a'] = 'Ordena per data en sentit ascendent';
$lang_admin_php['date_d'] = 'Ordena per data en sentit descendent';
$lang_admin_php['pos_a'] = 'Ordena per posició en sentit ascendent';
$lang_admin_php['pos_d'] = 'Ordena per posició en sentit descendent';
$lang_admin_php['th_any'] = 'Maximitza l\'aspecte';
$lang_admin_php['th_ht'] = 'Alçada';
$lang_admin_php['th_wd'] = 'Amplada';
$lang_admin_php['th_ex'] = 'Exacte'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Per a tothom';
$lang_admin_php['debug_admin'] = 'Només pels administradors/es';
$lang_admin_php['no_logs'] = 'Inactiu';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'Tot';
$lang_admin_php['view_logs'] = 'Visualitza els registres';
$lang_admin_php['click_expand'] = 'feu clic al nom de la secció per expandir-la';
$lang_admin_php['click_collapse'] = 'Feu clic al nom de la secció per reduir-la'; // cpg1.5
$lang_admin_php['expand_all'] = 'Expandeix-ho tot';
$lang_admin_php['toggle_all'] = 'Commuta-ho tot'; // cpg1.5
$lang_admin_php['notice1'] = '(*) No modifiqueu aquests paràmetres si ja teniu fitxers a la base de dades';
$lang_admin_php['notice2'] = '(**) Si canvieu aquest paràmetre només es veuran afectats els fitxers afegits a partir d\'ara. Per tant, és recomanable que no el canvieu si ja teniu fitxers a la galeria. De tota manera, podeu aplicar els canvis als fitxer existents mitjançant les &quot;<a href="util.php">eines d\'administració</a> (canvi de mida de les imatges)&quot; del menú d\'administració';
$lang_admin_php['notice3'] = '(***) Tots els fitxers de registre estan escrits en anglès.';
$lang_admin_php['bbs_disabled'] = 'Funció desactivada quan empreu la integració amb l\'aplicació enllaçada';
$lang_admin_php['auto_resize_everyone'] = 'Tothom';
$lang_admin_php['auto_resize_user'] = 'Només l\'usuari/ària';
$lang_admin_php['ascending'] = 'ascendent';
$lang_admin_php['descending'] = 'descendent';
$lang_admin_php['collapse_all'] = 'Redueix-ho tot'; // cpg1.5
$lang_admin_php['separate_page'] = 'en una nova pàgina'; // cpg1.5
$lang_admin_php['inline'] = 'en la mateixa pàgina'; // cpg1.5
$lang_admin_php['guests_only'] = 'Només convidats'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Part inferior dreta'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Part inferior esquerra'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Part superior esquerra'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Part superior dreta'; // cpg1.5
$lang_admin_php['wm_center'] = 'Centrat'; // cpg1.5
$lang_admin_php['wm_both'] = 'Ambdós'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Redimensionat'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Nom de la galeria'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Descripció de la galeria'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Correu de l\'administrador de la galeria'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL de la vostra carpeta de la galeria Coppermine'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(amb una barra al final, no amb \'index.php\' o similar)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL de la pàgina principal'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Permetre la descàrrega dels favorits comprimits'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'només els favorits'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'favorits i fitxer readme'; // cpg1.5
$lang_admin_php['time_offset'] = 'Diferència horària relativa a GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(hora actual:%s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Habilita icones d\'ajuda'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'ajuda disponible parcialment en anglès'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Habilita el núvol de paraules clau en la cerca'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Separador de paraules clau'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Convertir el separador de paraules clau'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Activa els connectors'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Purga les expulsions caducades automàticament'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Interfície navegable per afegir imatges per lots'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Concurrència de processos per afegir imatges per lots'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Mostra miniatures de previsualització quan s\'afegeixin imatges per lots'; // cpg1.5
$lang_admin_php['lang'] = 'Llengua per defecte'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Detecta llengua automàticament'; // cpg1.5
$lang_admin_php['charset'] = 'Joc de caràcters'; // cpg1.5
//$lang_admin_php['previous_next_tab'] = 'Mostra els enllaços següent/anterior en pàgines tabulades'; // cpg1.5
$lang_admin_php['theme'] = 'Tema (aspecte)'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Nom de l\'enllaç del menú personalitzat'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL de l\'enllaç del menú personalitzat'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Mostra icones en el menú'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Mostra l\'ajuda del BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Mostra el Vanity block en temes que han estat definits com compilats per XHTML i CSS'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Per marcar diverses línies premeu la tecla [Ctrl]'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Ruta d\'inserció de la capçalera personalitzada'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Ruta d\'inserció del peu de pàgina personalitzat'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Permet la navegació per data'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Mostra les pàgines redirigides'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Promocionar l\'ús del XP Publisher mostrant un enllaç a la pàgina de càrrega'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Amplada de la taula principal'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'píxels o %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Número de nivells de categories a mostrar'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Número d\'àlbums a mostrar'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Número de columnes en la llista d\'àlbums'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Mides de les imatges miniatura en píxels'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Contingut de la pàgina principal'; // cpg1.5
$lang_admin_php['first_level'] = 'Mostra imatges dels àlbums de primer nivell en categories'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Organitzar categoria alfabèticament'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(en lloc de l\'ordre predefinit)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Mostra número de fitxers enllaçats'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Número de columnes a la pàgina de miniatures'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Número de files a la pàgina de miniatures'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Màxim número de pestanyes (tabs) a mostrar'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Mostra llista desplegable de pàgines al costat de les pestanyes (tabs)'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Mostra la descripció (a més a més del títol) sota de la miniatura'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Mostra número de vegades vista sota de la miniatura'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Mostra número de comentaris sota de la miniatura'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Mostrar el usuari que va afegir l\'arxiu'; // cpg1.5
//$lang_admin_php['display_admin_uploader'] = 'Mostrar l\'usuari/ària que va afegir l\'arxiu'; // cpg1.5
$lang_admin_php['display_filename'] = 'Mostra nom de la miniatura'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Mostra valoració sota de la miniatura'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Mostra la descripció de l\'àlbum'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Mostra la imatge a mida completa en prémer la miniatura'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Ordre per defecte dels fitxers'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Mínim número de vots perquè un arxiu aparegui a a llista de \'Més valorats\''; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Amplada de la taula de fitxers'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Informació del fitxer visible per defecte'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Mostra l\'enllaç de descàrrega a l\'àrea d\'informació'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Llongitud màxima de la descripció de l\'arxiu'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Llongitud màxima d\'una paraula'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Mostra tira de pel·lícula'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Nombre d\'objectes en tira de pel·lícula'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Interval de temps entre imatges en la presentació en'; // cpg1.5
$lang_admin_php['milliseconds'] = 'milisegons'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 segon = 1000 milisegons'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Comptar les vistes en les presentacions'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Permet Flash a les postals'; // cpg1.5
$lang_admin_php['not_recommended'] = 'no recomanat'; // cpg1.5
$lang_admin_php['recommended'] = 'recomanat'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Afegeix una capa transparent per minimitzar el robatori d\'imatges'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Utilitza l\'antic sistema de votacions'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Això deshabilitarà l\'opció \'Número d\'estrelles que es faran servir\''; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Nombre d\'estrelles que es faran servir en la votació'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Els usuaris poden votar els seus propis fitxers'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtra paraules malsonants en els comentaris'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Permet emoticones en els comentaris'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Permet diversos comentaris consecutius del mateix usuari en un arxiu'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(desactivar protecció contra l\'excés de comentaris.)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Màxim número de línies en un comentari'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Màxim de caràcters d\'un comentari'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Notificar a l\'administrador per correu sobre els comentaris afegits'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Ordenar els comentaris'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Comentaris per pàgina'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefix per autors anònims'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Aprovació necessària per als comentaris'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Mostra només els comentaris pendents d\'aprovació a la pàgina &quot;Revisar comentaris&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Mostra un marcador als usuaris quan hi ha comentaris pendents d\'aprovació'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Permetre als usuaris editar els seus propis comentaris'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Mostra confirmació visual (Captcha) per afegir comentaris'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Opcions Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Què fer si Akismet rebutja un comentari com a correu brossa?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Les opcions només s\'apliquen si s\'habilita l\'API de Akismet amb una clau vàlida'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Permet comentaris que no passen el filtre Akismet, però marcar-los com no aprovats'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Esborrar el comentari que no es valida i informar a l\'autor/a que va ser rebutjat'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Esborrar el comentario que no es valida i informar a l\'autor/a que va ser afegit'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Clau API de Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Deixeu en blanc per desactivar Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Applicar Akismet als comentaris de'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Demanar als usuaris que es registrin i accedeixin per deixar comentaris'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Màxim de mida més gran d\'una miniatura (amplada, si uses "Exacta" en "Utilitza dimensió")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Utilitza dimensió'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(amplada, alçada o la màxima de la miniatura)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Alçada de la miniatura'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(només s\'aplica si s\'usa &quot;Exacta&quot; en &quot;Utilitza dimensió&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'Pel·lícula, so, document'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Prefix per a les miniatures'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Nitidesa de les miniatures:activar \'Unsharp Mask\''; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Nitidesa de les miniatures: quantitat'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Nitidesa de les miniatures: ràdio'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Nitidesa de les miniatures: llindar'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Qualitat dels fitxers JPEG'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Crea imatges intermèdies'; // cpg1.5
$lang_admin_php['picture_use'] = 'Utilitza dimensió'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(ample, alt o màxim per a una imatge intermèdia)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Com la miniatura'; // cpg1.5
$lang_admin_php['picture_width'] = 'Màxim d\'ample o alçada d\'una imatge intermèdia'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Mida màxima dels fitxers carregats'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'píxels'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Màxim d\'amplada o alçada de les imatges carregades'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Escalar automàticament les imatges més grans que l\'amplada o alçada màxima'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Farciment horitzontal per a la finestra emergent d\'imatge completa'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Farciment vertical per la finestra emergent d\'imatge completa'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Permet àlbums privats'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Nota: Si canvies de \'Si\' a \'No\' tots els àlbums privats que estiguin ja definits seràn visibles)'; // cpg1.5
$lang_admin_php['show_private'] = 'Mostra icona d\'àlbum privat als usuaris no validats'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Caràcters prohibits en els noms de fitxer'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Permet &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Tipus d\'imatges permesos'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Tipus d\'arxius de vídeo admesos'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Autoengega pel·lícules'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Tipus d\'arxius de so admesos'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Tipus de documents admesos'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Mètode per al re-escalat d\'imatges'; // cpg1.5
$lang_admin_php['impath'] = 'Camí de la utilitat \'convert\' d\'ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] = '(per exemple / usr/bin/X11 /)'; // cpg1.5
$lang_admin_php['im_options'] = 'Comandes de línia per ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Llegir dades EXIF en els fitxers JPEG'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Llegir dades IPTC als arxius JPEG'; // cpg1.5
$lang_admin_php['fullpath'] = 'Directori base dels àlbums'; // cpg1.5
$lang_admin_php['userpics'] = 'Directori per als arxius dels usuaris'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Prefix per a les imatges intermèdies'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Mode per defecte per als directoris'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Mode per defecte per als fitxers'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Imatges per marca d\'aigua'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Miniatures definides per l\'usuari per marca d\'aigua'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Lloc en que es posarà la marca d\'aigua'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'A quins fitxers aplicar la marca d\'aigua'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Quin fitxer s\'usarà per marca d\'aigua'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Transparència de la imatge completa'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Re-escalar la marca d\'aigua si l\'amplada de la imatge és menor que el valor introduït. Aquesta es farà servir com a referència del 100%. El re-escalat de la marca d\'aigua és lineal (0 per deshabilitar-lo)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Establir x per al color transparent'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Establir i per al color transparent'; // cpg1.5
$lang_admin_php['gd2_only'] = 'Només per GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Permet registrar-se nous usuaris'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Contrasenya general en registrar-se'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Mostra \'disclaimer\' al registre d\'usuari'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Mostra confirmació visual (Captcha) a la pàgina de registre'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'El registre d\'usuaris requereix verificació de correu'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Notificar per Email a l\'administrador del registre de nous usuaris'; // cpg1.5
$lang_admin_php['admin_activation'] = 'L\'administrador activa els registres d\'usuari'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Crea un àlbum d\'usuari a la galeria personal en registrar'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Permetre accessos d\'usuaris no validats (convidats o anònims)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'imatges miniatura, intermèdies i a mida completa'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'imatges miniatura i a mida completa'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'només miniatura'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Mètode de càrrega d\'imatges per defecte'; // cpg1.5
$lang_admin_php['upload_swf'] = 'avançat - múltiples fitxers, utilitza Flash (recomanat)'; // cpg1.5
$lang_admin_php['upload_single'] = 'simple - un fitxer cada vegada'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Permetre als usuaris escollir el mètode de pujada'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Permetre a dos usuaris tenir el mateix correu'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Notificar a l\'administrador que hi ha arxius afegits esperant autorització'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Permetre als usuaris validats veure la llista completa d\'usuaris'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Permetre als usuaris canviar el seu correu en el seu perfil'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Permetre als usuaris esborrar el seu compte'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Permetre als usuaris tenir control sobre els seus arxius en galeries públiques'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Permetre als usuaris moure els seus àlbums des de/fins a les categories permeses'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Permetre als usuaris assignar paraules clau a àlbum'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Permetre als usuaris editar els teus àlbums en categories bloquejades'; // cpg1.5
$lang_admin_php['login_method_username'] = 'per nom d\'usuari'; // cpg1.5
$lang_admin_php['login_method_email'] = 'pel correu'; // cpg1.5
$lang_admin_php['login_method_both'] = 'per ambdós'; // cpg1.5
$lang_admin_php['login_method'] = 'Com es permetrà accedir als usuaris?'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Nombre d\'intents fallits d\'autenticació abans de procedir a l\'expulsió'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(per evitar atacs de força bruta)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Durada de l\'expulsió després dels intents fallits'; // cpg1.5
$lang_admin_php['minutes'] = 'minuts'; // cpg1.5
$lang_admin_php['report_post'] = 'Habilitar informe a l\'Administrador'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Camp 1 del perfil'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Camp 2 del perfil'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Camp 3 del perfil'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Camp 4 del perfil'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Camp 5 del perfil'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Camp 6 del perfil'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Camp 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Camp 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Camp 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Camp 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Nom de la galeta usada pel script'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Ruta de la galeta usada pel script'; // cpg1.5
$lang_admin_php['smtp_host'] = 'Servidor SMTP (si es deixa en blanc s\'utilitzarà sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'Usuari SMTP'; // cpg1.5
$lang_admin_php['smtp_password'] = 'Contrasenya SMTP'; // cpg1.5
$lang_admin_php['log_mode'] = 'Mode de registre de successos'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Tots els registres s\'escriuen en anglès.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Registrar els successos de postals'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Nota: Desar aquesta informació pot tenir conseqüències legals en alguns països (a Espanya s\'aplica la LOPD). Has d\'informar l\'usuari quan es registri que s\'està guardant la informació de les postals. També es recomana crear una pàgina separada amb la política de privacitat.'; // Cpg1.5
$lang_admin_php['vote_details'] = 'Mantenir estadístiques detallades dels vots'; // cpg1.5
$lang_admin_php['hit_details'] = 'Mantenir estadístiques detallades dels hits'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Mostrar estadístiques a la pàgina índex'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Comptar visites a fitxers'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Comptar visites als àlbums'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Comptar les visites de l\'administrador'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Habilitar depuració'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Mostra les notes en la manera de depuració'; // cpg1.5
$lang_admin_php['offline'] = 'Desactiva la galeria (no oblidis activar després d\'acabar)'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Mostra notícies de Coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'Només es mostraran a l\'administrador'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'El valor establert en &laquo;%s&raquo; no és vèlid, revisa-ho si us plau.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'S\'ha guardat el valor &laquo;%s&raquo;.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Formulari de contacte'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Mostra el formulari de contacte per a usuaris anònims (convidats)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Mostra el formulari de contacte per a usuaris registrats'; // cpg1.5
$lang_admin_php['with_captcha'] = 'amb confirmació visual (captcha)'; // cpg1.5
$lang_admin_php['without_captcha'] = 'sense confirmació visual (captcha)'; // cpg1.5
$lang_admin_php['optional'] = 'opcional'; // cpg1.5
$lang_admin_php['mandatory'] = 'obligatori'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Mostrar el nom del remitent als convidats'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Mostra el correu del remitent als convidats'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Mostra assumpte'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Assumpte dels correus generats en el formulari de contacte'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Utilitza el correu del remitent al camp &quot;De&quot;'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'permetre, però no mostrar enllaç'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'permetre, i promocionar l\'ús mostrant un enllaç'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Barra lateral per a usuaris registrats'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Barra lateral com a visitant'; // cpg1.5
$lang_admin_php['do_not_change'] = 'No ho canviïs si REALMENT no sap el que fas!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Posar valors per defecte'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'No hi ha hagut canvis, l\'opció està en el valor per defecte'; // cpg1.5
$lang_admin_php['enabled'] = 'activat'; // cpg1.5
$lang_admin_php['disabled'] = 'desactivat'; // cpg1.5
$lang_admin_php['none'] = 'cap'; // cpg1.5
$lang_admin_php['warning_change'] = 'Aquest canvi només afectarà els fitxers afegits des d\'ara en endavant, pel que és preferible no canviar-ho si ja tens fitxers a la galeria. Pots també aplicar els canvis als fitxers ja existents amb l\'opció "re-escalar imatges" del Menú d\'utilitats.'; // Cpg1.5
$lang_admin_php['warning_exist'] = 'No hauries de canviar aquesta configuració si ja en tens fitxers a la base de dades.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Si no estàs segur de l\'impacte que tindrà canviar aquest valor no enviïs el formulari i revisa la documentació abans.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'només al menú'; // cpg1.5
$lang_admin_php['everywhere'] = 'a tot arreu'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Gestionar idiomes'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Caducitat del testimoni de formulari (\'form token\')'; // cpg1.5
$lang_admin_php['seconds'] = 'Segons'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Mostra caixes de \'Reinicia\' a la configuració'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'No es necessita actualitzar.'; // CPG 1.5
}

// -------------------------------------------------------------------------- //
// File db_ecard.php
// -------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP'))
{
$lang_db_ecard_php['title'] = 'Envia postals';
$lang_db_ecard_php['ecard_sender'] = 'Remitent';
$lang_db_ecard_php['ecard_recipient'] = 'Destinatari';
$lang_db_ecard_php['ecard_date'] = 'Data';
$lang_db_ecard_php['ecard_display'] = 'Mostra postals';
$lang_db_ecard_php['ecard_name'] = 'Nom';
$lang_db_ecard_php['ecard_email'] = 'Correu';
$lang_db_ecard_php['ecard_ip'] = 'Adreça IP';
$lang_db_ecard_php['ecard_ascending'] = 'Ascendent';
$lang_db_ecard_php['ecard_descending'] = 'Descendent';
$lang_db_ecard_php['ecard_sorted'] = 'Ordenades';
$lang_db_ecard_php['ecard_by_date'] = 'per data';
$lang_db_ecard_php['ecard_by_sender_name'] = 'per nom del remitent';
$lang_db_ecard_php['ecard_by_sender_email'] = 'per correu(s) del remitent';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'per la direcció IP del remitent';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'per nom del destinatari';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'per correu(s) del destinatari';
$lang_db_ecard_php['ecard_number'] = 'Mostrant els registres %s a %s de %s';
$lang_db_ecard_php['ecard_goto_page'] = 'anar a la pàgina';
$lang_db_ecard_php['ecard_records_per_page'] = 'Registres per pàgina';
$lang_db_ecard_php['check_all'] = 'Marca totes';
$lang_db_ecard_php['uncheck_all'] = 'Desmarca totes';
$lang_db_ecard_php['ecards_delete_selected'] = 'Esborrar postals seleccionades';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Esteu segur de voler esborrar els registres? Marca la casella de verificació';
$lang_db_ecard_php['ecards_delete_sure'] = 'Estic segur';
$lang_db_ecard_php['invalid_data'] = 'Les dades de la postal a la qual està intentant accedir s\'han corromput pel seu client de correu. Comproveu que la connexió s\'ha completat.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Cal que escriguis el teu nom i un comentari';
$lang_db_input_php['com_added'] = 'Comentari afegit'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Has de proporcionar un títol per a l\' àlbum';
$lang_db_input_php['no_udp_needed'] = 'No necessita actualització.';
$lang_db_input_php['alb_updated'] = 'L\'àlbum serà actualitzat';
$lang_db_input_php['unknown_album'] = 'L\'àlbum seleccionat no existeix o no tens permís per veure\'l';
$lang_db_input_php['no_pic_uploaded'] = 'Cap fitxer carregat!<br />Si realment has seleccionat un arxiu per pujar, revisa si el servidor accepta la pujada de fitxers...';
$lang_db_input_php['err_mkdir'] = 'Fallada en la creació del directori %s!';
$lang_db_input_php['dest_dir_ro'] = 'El directori destí %s no és modificable pel script!';
$lang_db_input_php['err_move'] = 'Impossible moure %s a %s';
$lang_db_input_php['err_fsize_too_large'] = 'El fitxer que has pujat és molt gran (màxim permès és %s x %s)';
$lang_db_input_php['err_imgsize_too_large'] = 'El fitxer que has pujat ocupa molt (màxim permès és %s KB)';
$lang_db_input_php['err_invalid_img'] = 'El fitxer que vols pujar no és una imatge vàlida';
$lang_db_input_php['allowed_img_types'] = 'Es pot pujar %s arxius.';
$lang_db_input_php['err_insert_pic'] = 'No es pot inserir el fitxer \'%s\' a l\'àlbum';
$lang_db_input_php['upload_success'] = 'El fitxer s\'ha carregat satisfactòriament.<br />Serà visible després que l\'administrador l\'aprovi.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Notificació de pujada';
$lang_db_input_php['notify_admin_email_body'] = '%s ha carregat un arxiu i necessita aprovació. Visita %s';
$lang_db_input_php['info'] = 'Informació';
$lang_db_input_php['com_updated'] = 'Comentari actualitzat'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'àlbum actualitzat';
$lang_db_input_php['err_comment_empty'] = 'La vostra revisió està buida!';
$lang_db_input_php['err_invalid_fext'] = 'Només s\'accepten arxius amb les següents extensions:'; // js-alert
$lang_db_input_php['no_flood'] = 'Ho sento, però ets l\'autor de l\'últim comentari publicat per aquest fitxer<br />Edita el comentari que has escrit si vols modificar-lo';
$lang_db_input_php['redirect_msg'] = 'Estàs sent redireccionat.<br /><br />Prem \'Continúa\' si la pàgina no s\'actualitza automàticament';
$lang_db_input_php['upl_success'] = 'Arxiu carregat satisfactòriament';
$lang_db_input_php['email_comment_subject'] = 'Comentari escrit a la galeria Coppermine';
$lang_db_input_php['email_comment_body'] = 'Han deixat un comentari a la galeria. Mira\'l a';
$lang_db_input_php['album_not_selected'] = 'àlbum no seleccionat';
$lang_db_input_php['com_author_error'] = 'Un usuari registrat està utilitzant aquest nick. Tria\'n un altre o valida\'t si ets tu mateix';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'Imatge original'; // cpg1.5
$lang_delete_php['fs_pic'] = 'Imatge a mida completa';
$lang_delete_php['del_success'] = 'Esborrat satisfactòriament';
$lang_delete_php['ns_pic'] = 'Imatge de mida normal';
$lang_delete_php['err_del'] = 'No es pot suprimir';
$lang_delete_php['thumb_pic'] = 'Miniatura';
$lang_delete_php['comment'] = 'Comentari';
$lang_delete_php['im_in_alb'] = 'Imatge àlbum';
$lang_delete_php['alb_del_success'] = 'àlbum &laquo;%s&raquo; esborrat';
$lang_delete_php['alb_mgr'] = 'Administrador d\'àlbums';
$lang_delete_php['err_invalid_data'] = 'Dades no vàlides rebudes en \'%s\'';
$lang_delete_php['create_alb'] = 'Creant àlbum \'%s\'';
$lang_delete_php['update_alb'] = 'Actualitzant àlbum \'%s\' amb el títol \'%s\' i índex \'%s\'';
$lang_delete_php['del_pic'] = 'Esborrar arxiu';
$lang_delete_php['del_alb'] = 'Esborrar àlbum';
$lang_delete_php['del_user'] = 'Eliminar un usuari';
$lang_delete_php['err_unknown_user'] = 'L\'usuari indicat no existeix';
$lang_delete_php['err_empty_groups'] = 'No hi ha la taula de grups, o la taula està buida';
$lang_delete_php['comment_deleted'] = 'Comentari esborrat';
$lang_delete_php['npic'] = 'Imatge';
$lang_delete_php['pic_mgr'] = 'Gestor d\'imatges';
$lang_delete_php['update_pic'] = 'Actualitzant la imatge \'%s\' amb nom de fitxers \'%s\' i índex \'%s\'';
$lang_delete_php['username'] = 'Usuari';
$lang_delete_php['anonymized_comments'] = '%s comentaris(s) passats a anònims';
$lang_delete_php['anonymized_uploads'] = '%s pujada pública passada a anònima';
$lang_delete_php['deleted_comments'] = '%s comentari(s) esborrat(s)';
$lang_delete_php['deleted_uploads'] = '%s pujada pública esborrada';
$lang_delete_php['user_deleted'] = '%s esborrat';
$lang_delete_php['activate_user'] = 'Activa usuari';
$lang_delete_php['user_already_active'] = 'El compte ja està activat';
$lang_delete_php['activated'] = 'Activat';
$lang_delete_php['deactivate_user'] = 'Desactiva usuari';
$lang_delete_php['user_already_inactive'] = 'El compte ja està desactivat';
$lang_delete_php['deactivated'] = 'Desactivat';
$lang_delete_php['reset_password'] = 'Reinicia la contrasenya';
$lang_delete_php['password_reset'] = 'Contrasenya restablerta a %s';
$lang_delete_php['change_group'] = 'Canviar grup principal';
$lang_delete_php['change_group_to_group'] = 'Canviant de %s a %s';
$lang_delete_php['add_group'] = 'Afegir un altre grup';
$lang_delete_php['add_group_to_group'] = 'Afegint l\'usuari %s al grup %s. Ara és membre de %s com a principal i de %s com a secundari.';
$lang_delete_php['status'] = 'Estat';
$lang_delete_php['updating_album'] = 'Actualitzant àlbum'; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Arxiu %s mogut a la posició %s'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File displayimage.php
// -------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')) {
$lang_display_image_php['confirm_del'] = 'Estàs segur de voler ESBORRAR aquest fitxer?\\nComentaris també s\'esborraran.'; // js-alert
$lang_display_image_php['del_pic'] = 'Eliminar aquest arxiu';
$lang_display_image_php['size'] = '%sx %s píxels';
$lang_display_image_php['views'] = '%s visites';
$lang_display_image_php['slideshow'] = 'Presentació de diapositives';
$lang_display_image_php['stop_slideshow'] = 'Aturar presentació de diapositives';
$lang_display_image_php['view_fs'] = 'Clica per veure la imatge a mida completa';
$lang_display_image_php['edit_pic'] = 'Edita la informació del fitxer';
$lang_display_image_php['crop_pic'] = 'Tallar i girar';
$lang_display_image_php['set_player'] = 'Canviar el reproductor';
$lang_picinfo['title'] = 'Informació del fitxer';
$lang_picinfo['Album name'] = 'Nom de l\'àlbum';
$lang_picinfo['Rating'] = 'Valoració (%s vots)';
$lang_picinfo['Date Added'] = 'Data de creació';
$lang_picinfo['Dimensions'] = 'Dimensions';
$lang_picinfo['Displayed'] = 'Visualitzat';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Fet';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Data i hora';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Màxima obertura';
$lang_picinfo['FocalLength'] = 'Longitud focal';
$lang_picinfo['Comment'] = 'Comentari';
$lang_picinfo['addFav'] = 'Afegir a favorits';
$lang_picinfo['addFavPhrase'] = 'Favorits';
$lang_picinfo['remFav'] = 'Treure de favorits';
$lang_picinfo['iptcTitle'] = 'Títol IPTC';
$lang_picinfo['iptcCopyright'] = 'Copyright IPTC';
$lang_picinfo['iptcKeywords'] = 'Paraules clau IPTC';
$lang_picinfo['iptcCategory'] = 'Categoria IPTC';
$lang_picinfo['iptcSubCategories'] = 'subcategories IPTC';
$lang_picinfo['ColorSpace'] = 'Espai de color';
$lang_picinfo['ExposureProgram'] = 'Programa d\'exposició';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Mode de mesura';
$lang_picinfo['ExposureTime'] = 'Temps d\'exposició';
$lang_picinfo['ExposureBiasValue'] = 'Compensació de l\'exposició';
$lang_picinfo['ImageDescription'] = 'Descripció';
$lang_picinfo['Orientation'] = 'Orientació';
$lang_picinfo['xResolution'] = 'Resolució X';
$lang_picinfo['yResolution'] = 'Resolució Y';
$lang_picinfo['ResolutionUnit'] = 'Unitats de resolució';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'Posició YCbCr';
$lang_picinfo['ExifOffset'] = 'Offset EXIF';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'Nombre F';
$lang_picinfo['ExifVersion'] = 'Versió EXIF';
$lang_picinfo['DateTimeOriginal'] = 'Data i hora originals';
$lang_picinfo['DateTimedigitized'] = 'Data i hora de modificació';
$lang_picinfo['ComponentsConfiguration'] = 'Configuració per components';
$lang_picinfo['CompressedBitsPerPixel'] = 'Bits per píxel (compressió)';
$lang_picinfo['LightSource'] = 'Font de llum';
$lang_picinfo['ISOSetting'] = 'Ajust ISO';
$lang_picinfo['ColorMode'] = 'Mode de color';
$lang_picinfo['Quality'] = 'Qualitat';
$lang_picinfo['ImageSharpening'] = 'Enfocament de la imatge (sharpening)';
$lang_picinfo['FocusMode'] = 'Mode d\'enfocament';
$lang_picinfo['FlashSetting'] = 'Paràmetres de flash';
$lang_picinfo['ISOSelection'] = 'Selecció ISO';
$lang_picinfo['ImageAdjustment'] = 'Configuració de la imatge';
$lang_picinfo['Adapter'] = 'Adaptador';
$lang_picinfo['ManualFocusDistance'] = 'Distància d\'enfocament manual';
$lang_picinfo['DigitalZoom'] = 'Zoom digital';
$lang_picinfo['AFFocusPosition'] = 'Posició de autofocus';
$lang_picinfo['Saturation'] = 'Saturació';
$lang_picinfo['NoiseReduction'] = 'Reducció de soroll';
$lang_picinfo['FlashPixVersion'] = 'Versió de FlashPix';
$lang_picinfo['ExifimageWidth'] = 'Amplada d\'imatge EXIF';
$lang_picinfo['ExifimageHeight'] = 'Alt de imatge EXIF';
$lang_picinfo['ExifinteroperabilityOffset'] = 'EXIF Interoperability Offset';
$lang_picinfo['FileSource'] = 'Origen del fitxer';
$lang_picinfo['SceneType'] = 'Tipus d\'escena';
$lang_picinfo['CustomerRender'] = 'Customer Render'; // jmatute:pendent
$lang_picinfo['ExposureMode'] = 'Mode d\'exposició';
$lang_picinfo['WhiteBalance'] = 'Balanç de blancs';
$lang_picinfo['DigitalZoomRatio'] = 'Zoom digital';
$lang_picinfo['SceneCaptureMode'] = 'Mode de captura d\'escenes';
$lang_picinfo['GainControl'] = 'Control de guany';
$lang_picinfo['Contrast'] = 'Contrast';
$lang_picinfo['Sharpness'] = 'Nitidesa';
$lang_picinfo['ManageExifDisplay'] = 'Gestionar la visualització de dades EXIF';
$lang_picinfo['success'] = 'Informació actualitzada.';
$lang_picinfo['show_details'] = 'Mostra els detalls'; // cpg1.5
$lang_picinfo['hide_details'] = 'Amaga detalls'; // cpg1.5
$lang_picinfo['download_URL'] = 'Enllaç directe';
$lang_picinfo['movie_player'] = 'Reproduir el fitxer a la teva aplicació estàndard';
$lang_display_comments['comment_x_to_y_of_z'] = '%d a %d de %d'; // cpg1.5
$lang_display_comments['page'] = 'Pàgina'; // cpg1.5
$lang_display_comments['edit_title'] = 'Edita aquest comentari';
$lang_display_comments['delete_title'] = 'Esborrar aquest comentari'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Estàs segur de voler esborrar aquest comentari?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Afegeix el teu comentari';
$lang_display_comments['name'] = 'Nom';
$lang_display_comments['comment'] = 'Comentari';
$lang_display_comments['your_name'] = 'Anònim';
$lang_display_comments['report_comment_title'] = 'Informar a l\'administrador sobre aquest comentari';
$lang_display_comments['pending_approval'] = 'El comentari serà visible després de l\'aprovació de l\'administrador'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Comentari rebutjat'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Algú ha escrit un comentari. Serà visible després de l\'aprovació de l\'administrador.'; // Cpg1.5
$lang_display_comments['approve'] = 'Aprovar comentari'; // cpg1.5
$lang_display_comments['disapprove'] = 'Marca com rebutjat'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'No es permeten comentaris anònims. %sLog a%s per fer comentaris'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Si us plau, posa el teu nom per el comentari'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'S\'ha rebutjat el teu comentari'; // cpg1.5
$lang_fullsize_popup['click_to_close'] = 'Clica a la imatge per tancar la finestra';
$lang_fullsize_popup['close_window'] = 'Tanca finestra'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File ecard.php
// -------------------------------------------------------------------------- //
if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Envia una postal';
$lang_ecard_php['invalid_email'] = 'Avís: adreça de correu no vàlida:'; // cpg1.5
$lang_ecard_php['ecard_title'] = '%s t\'ha enviat una postal';
$lang_ecard_php['error_not_image'] = 'Només es poden enviar imatges en les postals.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Només es poden enviar imatges i arxius Flash a les postals.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Si la imatge no es veu correctament, fes clic en aquest enllaç';
$lang_ecard_php['view_ecard_plaintext'] = 'Per veure la postal copia l\'enllaç i enganxa\'l al navegador:';
$lang_ecard_php['view_more_pics'] = 'Veure més imatges';
$lang_ecard_php['send_success'] = 'postal enviada';
$lang_ecard_php['send_failed'] = 'Ho sento, però el servidor no pot enviar la teva postal...';
$lang_ecard_php['from'] = 'De';
$lang_ecard_php['your_name'] = 'El teu nom';
$lang_ecard_php['your_email'] = 'La teva adreça de correu';
$lang_ecard_php['to'] = 'Per';
$lang_ecard_php['rcpt_name'] = 'Destinatari';
$lang_ecard_php['rcpt_email'] = 'Adreça de correu';
$lang_ecard_php['greetings'] = 'Títol';
$lang_ecard_php['message'] = 'Missatge';
$lang_ecard_php['ecards_footer'] = 'Enviada per %s des de la IP %s a les %s (hora de la galeria)';
$lang_ecard_php['preview'] = 'Vista prèvia de la postal';
$lang_ecard_php['preview_button'] = 'Vista prèvia';
$lang_ecard_php['submit_button'] = 'Envia postal';
$lang_ecard_php['preview_view_ecard'] = 'Aquest serà l\'enllaç alternatiu a la postal un cop es generi. No funciona a la vista prèvia.';
}

// -------------------------------------------------------------------------- //
// File report_file.php
// -------------------------------------------------------------------------- //
if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Informar a l\'administrador';
$lang_report_php['invalid_email'] = '<strong> Avís</strong>: adreça de correu no vàlida';
$lang_report_php['report_subject'] = 'Informe de %s sobre %s en una galeria';
$lang_report_php['view_report'] = 'Si l\'informe no es veu correctament fes clic en aquest enllaç';
$lang_report_php['view_report_plaintext'] = 'Per veure l\'informe copia l\'enllaç i enganxa\'l al navegador:';
$lang_report_php['view_more_pics'] = 'Galeria';
$lang_report_php['send_success'] = 'S\'ha enviat informe';
$lang_report_php['send_failed'] = 'Ho sento, però el servidor no pot enviar el teu informe...';
$lang_report_php['from'] = 'De';
$lang_report_php['your_name'] = 'El teu nom';
$lang_report_php['your_email'] = 'La teva adreça de correu';
$lang_report_php['to'] = 'Per';
$lang_report_php['administrator'] = 'Administrador/Moderador';
$lang_report_php['subject'] = 'Assumpte';
$lang_report_php['comment_field_name'] = 'Informe d\'un comentari per "%s"';
$lang_report_php['reason'] = 'Motiu';
$lang_report_php['message'] = 'Missatge';
$lang_report_php['report_footer'] = 'Enviat per %s des de la IP %s a les %s (hora de la galeria)';
$lang_report_php['Obscene'] = 'obscè';
$lang_report_php['offensive'] = 'ofensiu';
$lang_report_php['Misplaced'] = 'Fora de lloc/tòpic';
$lang_report_php['missing'] = 'perdut';
$lang_report_php['issue'] = 'error/no es pot veure';
$lang_report_php['other'] = 'altre';
$lang_report_php['refers_to'] = 'L\'informe de fitxer es refereix a';
$lang_report_php['reasons_list_heading'] = 'raó/raons per informar:';
$lang_report_php['no_reason_given'] = 'no es dóna cap raó';
$lang_report_php['go_comment'] = 'Anar al comentari';
$lang_report_php['view_comment'] = 'Veure l\'informe complet amb el comentari';
$lang_report_php['type_file'] = 'fitxer';
$lang_report_php['type_comment'] = 'comentari';
$lang_report_php['invalid_data'] = 'Les dades de l\'informe a que intentes accedir s\'han corromput per la teva aplicació de correu. Comprova si l\'enllaç està bé.';
}

// -------------------------------------------------------------------------- //
// File editpics.php
// -------------------------------------------------------------------------- //
if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Informació del fitxer';
$lang_editpics_php['desc'] = 'Descripció';
$lang_editpics_php['approval'] = 'Aprovació'; // CPG 1.5 // jmatute:pendent de comprovar
$lang_editpics_php['approved'] = 'Aprovada'; // CPG 1.5
$lang_editpics_php['unapproved'] = 'No aprovada'; // CPG 1.5
$lang_editpics_php['new_keyword'] = 'Nova paraula clau';
$lang_editpics_php['new_keywords'] = 'No s\'han trobat paraules clau';
$lang_editpics_php['existing_keyword'] = 'Paraula clau ja existent';
$lang_editpics_php['pic_info_str'] = '%s x %s - %s KB - %s visites - %s vots';
$lang_editpics_php['approve'] = 'Aprovar fitxer';
$lang_editpics_php['postpone_app'] = 'Posposar aprovació';
$lang_editpics_php['del_pic'] = 'Esborrar fitxer';
$lang_editpics_php['del_all'] = 'Esborrar tots els fitxers';
$lang_editpics_php['read_exif'] = 'Rellegir dades EXIF';
$lang_editpics_php['reset_view_count'] = 'Posar a zero el comptador de visites';
$lang_editpics_php['reset_all_view_count'] = 'Posar a zero TOTS els comptadors de visites';
$lang_editpics_php['reset_votes'] = 'Posar a zero els vots';
$lang_editpics_php['reset_all_votes'] = 'Posar a zero TOTS els vots';
$lang_editpics_php['del_comm'] = 'Esborrar comentaris';
$lang_editpics_php['del_all_comm'] = 'Esborrar TOTS els comentaris';
$lang_editpics_php['upl_approval'] = 'Aprovació de la pujada';
$lang_editpics_php['edit_pics'] = 'Edita imatges';
$lang_editpics_php['edit_pic'] = 'Edita imatge'; // CPG 1.5
$lang_editpics_php['see_next'] = 'Veure els fitxers següents';
$lang_editpics_php['see_prev'] = 'Veure els fitxers anteriors';
$lang_editpics_php['n_pic'] = '%s imatges';
$lang_editpics_php['n_of_pic_to_disp'] = 'Número d\'imatges que es mostraran';
$lang_editpics_php['crop_title'] = 'Coppermine Picture Editor';
$lang_editpics_php['preview'] = 'Vista prèvia';
$lang_editpics_php['save'] = 'Guardar imatge';
$lang_editpics_php['save_thumb'] = 'Guardar com miniatura';
$lang_editpics_php['gallery_icon'] = 'Posar aquesta imatge com el meu icona';
$lang_editpics_php['sel_on_img'] = 'La selecció ha d\'estar completament dins de la imatge'; // js-alert
$lang_editpics_php['album_properties'] = 'Propietats de l\'àlbum';
$lang_editpics_php['parent_category'] = 'Categoria pare';
$lang_editpics_php['thumbnail_view'] = 'Vista de miniatures';
$lang_editpics_php['select_unselect'] = 'Seleccionar/treure selecció a totes';
$lang_editpics_php['file_exists'] = 'Ja existeix el fitxer destí \'%s\'.';
$lang_editpics_php['rename_failed'] = 'Error canviar el nom \'%s\' a \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'El fitxer origen \'%s\' no existeix.';
$lang_editpics_php['mime_conv'] = 'No es pot convertir \'%s\' a \'%s\'';
$lang_editpics_php['forb_ext'] = 'Extensió del fitxer no permesa.';
$lang_editpics_php['error_editor_class'] = 'La classe per al teu mètode de reescalat no està implementada'; // CPG 1.5 // Pendent
$lang_editpics_php['error_document_size'] = 'El document no té ample o alt'; // CPG 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Imatge guardada - ara pots %sclose%s aquesta finestra'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Miniatura guardada - ara pots %sclose%s aquesta finestra'; // cpg1.5 // do not translate "%s " here
$lang_editpics_php['rotate'] = 'Girar'; // CPG 1.5
$lang_editpics_php['mirror'] = 'Voltejar'; // CPG 1.5
$lang_editpics_php['scale'] = 'Escalar'; // CPG 1.5
$lang_editpics_php['new_width'] = 'Nou ample'; // CPG 1.5
$lang_editpics_php['new_height'] = 'Nou alt'; // CPG 1.5
$lang_editpics_php['enable_clipping'] = 'Habilitar tallar, aplicar per retallar'; // CPG 1.5 // Pendent
$lang_editpics_php['jpeg_quality'] = 'Qualitat de sortida JPEG'; // CPG 1.5
$lang_editpics_php['or'] = 'O'; // CPG 1.5
$lang_editpics_php['approve_pic'] = 'Aprovar fitxer'; // CPG 1.5
$lang_editpics_php['approve_all'] = 'Aprovar TOTS els fitxers'; // CPG 1.5
$lang_editpics_php['error_empty'] = 'L\'àlbum està buit'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'No hi ha imatges per aprovar'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'L\'àlbum només té enllaços a fitxers, que no es poden editar des d\'aquí'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Els fitxers que s\'han mogut a un àlbum públic han de ser aprovats per un administrador.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Els fitxers que s\'han mogut a un àlbum en una galeria privada han de ser aprovats per un administrador.'; // Cpg1.5
$lang_editpics_php['note_edit_control'] = 'No es pot editar els fitxers que s\'han mogut a un àlbum públic.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Estàs segur de voler moure aquest fitxer'; // cpg1.5 // js-alert
$lang_editpics_php['success_changes'] = 'Canvis guardats'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File forgot_passwd.php
// -------------------------------------------------------------------------- //
if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Recuperació de contrasenya';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Ja estàs validat com a usuari';
$lang_forgot_passwd_php['enter_email'] = 'Introduïu una adreça de correu';
$lang_forgot_passwd_php['submit'] = 'anar';
$lang_forgot_passwd_php['illegal_session'] = 'La sessió destinada a la recuperació de la contrasenya ha expirat o no és vàlida';
$lang_forgot_passwd_php['failed_sending_email'] = 'L\'email amb la contrasenya no ha pogut ser enviat';
$lang_forgot_passwd_php['email_sent'] = 'Un email amb el seu usuari i la seva nova contrasenya ha estat enviat a %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'S\'ha enviat un email a %s. Si us plau verifiqui el seu email per completar el procés.';
$lang_forgot_passwd_php['err_unk_user'] = 'L\'usuari/a indicat no existeix';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Recuperació de contrasenya';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - La seva nova contrasenya';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Heu sol·licitat la recuperació de la contrasenya. Si voleu continuar el procés per obtenir una contrasenya nova, cliqueu al següent enllaç:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>
Salutacions,

Els administradors de {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Aquí teniu les dades que heu sol·licitat:

Usuari:{USER_NAME}
Contrasenya:{PASSWORD}

Aneu a <a href="{SITE_LINK}">{SITE_LINK}</a> per validar-vos.
Salutacions,

Els administradors de {SITE_NAME}

EOT;
}
// -------------------------------------------------------------------------- //
// File groupmgr.php
// -------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Configuració de grups'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Grups';
$lang_groupmgr_php['permissions'] = 'Permisos';
$lang_groupmgr_php['public_albums'] = 'Afegeix fitxers a àlbums públics';
$lang_groupmgr_php['personal_gallery'] = 'Galeria personal';
$lang_groupmgr_php['disk_quota'] = 'Quota de disc';
$lang_groupmgr_php['rating'] = 'Valoració';
$lang_groupmgr_php['ecards'] = 'Postals';
$lang_groupmgr_php['comments'] = 'Comentaris';
$lang_groupmgr_php['allowed'] = 'Permès';
$lang_groupmgr_php['approval'] = 'Aprovació';
$lang_groupmgr_php['create_new_group'] = 'Crea nou grup';
$lang_groupmgr_php['del_groups'] = 'Esborrar el(s) grup(s) seleccionat(s)';
$lang_groupmgr_php['confirm_del'] = 'Atenció, quan esborres un grup, els usuaris que pertanyen a aquest grup seran transferits al grup \'Registered \' !\n\n Voleu continuar?'; // js-alert
$lang_groupmgr_php['title'] = 'Configura grups d\'usuaris';
$lang_groupmgr_php['reset_to_default'] = 'Tornar al nom predeterminat (%s) - recomanat!';
$lang_groupmgr_php['error_group_empty'] = 'Taula del grup buida!<br /><br />Grups predeterminats creats, siusplau recarregui aquesta pàgina';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Per què aquesta fila està desactivada?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'No pots canviar les propietats d\'aquest grup perquè el seu nivell d\'accés és CAP. Tots els usuaris que no validin (membres del grup %s) no poden fer altra cosa que entrar, de manera que els ajustos de grups no apliquen el cas. Canvia el nivell d\'accés aquí a la pàgina de configuració de la galeria en l\'apartat "Configuració d\'usuaris" -> "Permetre accessos d\'usuaris no validats".';
$lang_groupmgr_php['group_assigned_album'] = 'àlbum(s) assignat(s)';
$lang_groupmgr_php['access_level'] = 'Nivell d\'accés'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'miniatures, intermitjas i mida completa'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'miniatures i intermèdies'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'només miniatures'; // cpg1.5
$lang_groupmgr_php['none'] = 'cap arxiu'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File index.php
// -------------------------------------------------------------------------- //
if (defined('INDEX_PHP')) {
$lang_index_php['welcome'] = 'Benvingut';
$lang_album_admin_menu['confirm_delete'] = 'Estàs segur de voler ESBORRAR aquest àlbum? \\nS\'esborraraà també tots els arxius i comentaris.'; // js-alert
$lang_album_admin_menu['delete'] = 'Esborrar';
$lang_album_admin_menu['modify'] = 'Propietats';
$lang_album_admin_menu['edit_pics'] = 'Edita arxius';
$lang_album_admin_menu['cat_locked'] = 'àlbum bloquejat per modificar'; // cpg1.5.x
$lang_list_categories['home'] = 'Inici';
$lang_list_categories['stat1'] = '[pictures] fitxers a [albums] àlbums i [cat] categories amb [comments] comentaris vistos [views] vegades'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] fitxers a [albums] àlbums vistos [views] vegades'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = 'Galeria de %s';
$lang_list_categories['stat3'] = '[pictures] fitxers a [albums] àlbums com [comments] comentaris vistos [views] vegades'; // do not translate the stuff in square brackets
$lang_list_users['user_list'] = 'Llista d\'usuaris';
$lang_list_users['no_user_gal'] = 'No hi ha galeries d\'usuaris';
$lang_list_users['n_albums'] = '%s àlbum(s)';
$lang_list_users['n_pics'] = '%s fitxer(s)';
$lang_list_albums['n_pictures'] = '%s fitxer(s)';
$lang_list_albums['last_added'] = ', el darrer afegit el %s';
$lang_list_albums['n_link_pictures'] = '%s fitxer(s) enllaçat(s)';
$lang_list_albums['total_pictures'] = '%s fitxer(s) en total';
$lang_list_albums['alb_hits'] = 'àlbum vist %s vegades'; // cpg1.5
$lang_list_albums['from_category'] = ' - des de la categoria:'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File install.php
// -------------------------------------------------------------------------- //
if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'La instal·lació s\'ha executat amb èxit i ara està bloquejada.';
$lang_install['already_succ_explain'] = 'Si vols executar de nou, primer has esborrar el fitxer \'include/config.inc.php\' que s\'ha creat en el directori del Coppermine. Pots fer-ho amb qualsevol programa d\'FTP';
$lang_install['cant_read_tmp_conf'] = 'L\'instal·lador no pot llegir el fitxer temporal de configuració %s.';
$lang_install['cant_write_tmp_conf'] = 'L\'instal·lador no pot escriure el fitxer temporal de configuració %s.';
$lang_install['review_permissions'] = 'Si us plau revisa els permisos del directori.';
$lang_install['change_lang'] = 'Canvia idioma';
$lang_install['check_path'] = 'Comprova la ruta';
$lang_install['continue'] = 'Segent pas';
$lang_install['conv_said'] = 'El programa de conversió va dir:';
$lang_install['license_info'] = 'Coppermine ¨´es un paquet de galeria d\'imatges i multimèdia desenvolupat sota la llicència GNU GPL v3. En instal·lar -ho assumeixes els termes de llicència de Coppermine:';
$lang_install['cpg_info_frames'] = 'El teu navegador no pot mostrar frames (marcs). Pots revisar els termes de la llicència al directori de documentació dins del paquet de Coppermine.';
$lang_install['license'] = 'Acord de llicència de Coppermine';
$lang_install['create_table'] = 'Creant la taula \'%s\'';
$lang_install['db_populating'] = 'Intentant inserir a la base de dades.';
$lang_install['db_alr_populated'] = 'Les dades necessàries ja estan carregades a la base de dades.';
$lang_install['dir_ok'] = 'Directori trobat';
$lang_install['directory'] = 'Directori';
$lang_install['email'] = 'Adreça de correu';
$lang_install['email_no_match'] = 'La adreces de correu no son iguals o no son vàlides.';
$lang_install['email_verif'] = 'Comprova l\'adreça de correu';
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>Sembla que estàs intentant instal·lar en el teu portal Nuke aquesta galeria Coppermine que ha d\'anar aïllada (standalone).<br />Aquesta versió ha de córrer aïllada (standalone)!<br />Algunes configuracions de servidors mostren aquest avís encara no hi hagi un portal Nuke instal·lat - si aquest és el teu cas, <a href="%s?continue_anyway=1">continúa</a> amb la instal·lació. Si utilitzeu un portal Nuke, potser vulguis fer una ullada a <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> o utilitzar una dels paquets no suportats a <a href =\"http://sourceforge.net/project/showfiles.php?group_id=89658&package_id=95984\">Coppermine ports</a> - No continuïs amb aquesta instal·lació si és el cas!';
$lang_install['error'] = 'ERROR';
$lang_install['error_need_corr'] = 'Has de corregir abans els errors:';
$lang_install['finish'] = 'Acabar instal·lació';
$lang_install['gd_note'] = '<strong>Important:</strong> les versions antigues de la llibreria gràfica GD suporten només imatges JPEG i PNG. Si aquest és el teu cas aquesta galeria no podrà crear miniatures pels fitxers GIF.';
$lang_install['go_to_main'] = 'Anar a la pàgina principal';
$lang_install['im_no_convert_ex'] = 'La instal·lació ha trobat la utilitat \'convert\' de ImageMagick a \'%s\', però no es pot executar.<br />Hauries de fer servir GD en lloc de ImageMagick.';
$lang_install['im_not_found'] = 'La instal·lació ha intentat trobar ImageMagick, però no s\'ha trobat o hi ha hagut un error.<br />Coppermine pot utilitzar la utilitat \'convert\' de <a href="http://www.imagemagick.org/">ImageMagick</a> per crear les miniatures. La qualitat de les imatges generades per ImageMagick és superior a les de GD1 encara equivelentes a les produïdes per GD2.<br />Si ImageMagick està instal·lat en el teu sistema i vols usar-lo<br />necessites donar el camí complet a la utilitat \'convert\'.<br />Amb Windows la ruta tindrà una forma semblant a \'c:/ImageMagick/\' i no ha de tenir espais, amb Unix serà semblant a \'/usr/bin/\'.<br />Si no saps si ImageMagick està instal·lat o no en el sistema deixa aquest valor en blanc - la instal·lació intentarà utilitzar GD2 per defecte (que és el que tenen la major part dels usuaris).<br />També es pot canviar més endavant (a la pantalla de configuració del Coppermine), així que no et preocupis si no saps què escriure en aquest camp - deixa-ho en blanc.';
$lang_install['im_packages'] = 'El teu sistema suporta el(s) següent(s) paquet(s) gràfics';
$lang_install['im_path'] = 'Ruta ImageMagick:';
$lang_install['im_path_space'] = 'La ruta ImageMagick (\'%s\') té almenys un espai. Això causarà problemes en l\'script.<br />Has de moure ImageMagick a un altre directori.';
$lang_install['installation'] = 'Instal·lació';
$lang_install['installer_locked'] = 'L\'instal·lador està bloquejat';
$lang_install['installer_selected'] = 'L\'instal·lació ha seleccionat';
$lang_install['inv_im_path'] = 'L\'instal·lador no troba el directori \'%s\' que has posat per ImageMagick o no té permisos d\'accés. Comprova que la ruta és correcta i/o que hi ha permisos d\'accés al directori.';
$lang_install['lets_go'] = 'Endavant';
$lang_install['mysql_create_btn'] = 'Crea';
$lang_install['mysql_create_db'] = 'Crea una base de dades MySQL nova';
$lang_install['mysql_db_name'] = 'Nom de la base de dades MySQL';
$lang_install['mysql_error'] = 'Error MySQL:';
$lang_install['mysql_host'] = 'Servidor MySQL<br />(normalment localhost)';
$lang_install['mysql_username'] = 'Usuari MySQL'; // cpg1.5
$lang_install['mysql_password'] = 'Contrasenya MySQL'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'No s\'ha pogut crear la base de dades MySQL.';
$lang_install['mysql_no_sel_dbs'] = 'No s\'ha pogut treure la llista de bases de dades MySQL disponibles';
$lang_install['mysql_succ'] = 'Connexió correcta amb la base de dades';
$lang_install['mysql_tbl_pref'] = 'Prefix de les taules MySQL';
$lang_install['mysql_test_connection'] = 'Comprovar connexió';
$lang_install['mysql_wrong_db'] = 'MySQL no ha pogut trobar una base de dades anomenada \'%s\'. Si us plau, comprova el nom';
$lang_install['N_A'] = 'N/A';
$lang_install['no_admin_email'] = 'Heu d\'introduir el correu d\'un administrador';
$lang_install['no_admin_password'] = 'Heu d\'introduir la contrasenya d\'un administrador';
$lang_install['no_admin_username'] = 'Has d\'introduir el nom d\'un administrador';
$lang_install['no_dir'] = 'El directori no està disponible';
$lang_install['no_gd'] = 'La teva instal·lació de PHP no sembla tenir la llibreria gràfica \'GD\' i no has indicat que vulguis utilitzar ImageMagick. S\'ha configurat Coppermine perquè usi GD2 perquè de vegades falla la detecció automàtica de GD. Si la llibreria GD està instal·lada tot hauria de funcionar, i en cas contrari necessitaràs instal·lar ImageMagick.';
$lang_install['no_mysql_conn'] = 'No s\'ha pogut crear una connexió a MySQL. Si us plau, revisa els paràmetres que has indicat';
$lang_install['no_mysql_support'] = 'El PHP no està habilitat per fer servir MySQL.';
$lang_install['no_thumb_method'] = 'Has de triar una aplicació de gestió d\'imatges (GD/IM)';
$lang_install['nok'] = 'No és correcte';
$lang_install['not_here_yet'] = 'No hi ha res aquí encara, si us plau fes clic %saquí%s per tornar.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'on query'; // jmatute:preguntar
$lang_install['or'] = 'o';
$lang_install['pass_err'] = 'Les contrasenyes no son iguals, has usat caràcters no permesos o està en blanc.';
$lang_install['password'] = 'Contrasenya';
$lang_install['password_verif'] = 'Verifica contrasenya';
$lang_install['perm_error'] = 'Els permisos de \'%s\' estan establerts per a %s, si us plau canvia\'ls a';
$lang_install['perm_ok'] = 'Els permisos dels directoris semblen estar correctes.<br />Continúa amb el següent pas.';
$lang_install['perm_not_ok'] = 'Els permisos dels directoris no estan bé.<br />Si us plau canvia els permisos dels directoris amb l\'etiqueta "No correcte".'; // cpg1.5
$lang_install['please_go_back'] = 'Si us plau %sprém aquí%s per tornar i arreglar el problema abans de continuar.';
$lang_install['populate_db'] = 'Carregar la base de dades';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> està configurat i preparat per al seu ús.<br /><a href="login.php">Accedeix</a> amb les credencials que has proporcionat com a administrador.';
$lang_install['sect_create_adm'] = 'Aquesta secció necessita informació per crear el compte d\'administrador de Coppermine. Fes servir caràcters alfanumèrics únicament. Escriu amb compte!';
$lang_install['sect_mysql_info'] = 'Aquesta secció necessita informació sobre com accedir a la base de dades MySQL.<br />Si no coneixes els detalls consulta amb el suport del teu servidor web.';
$lang_install['sect_mysql_sel_db'] = 'Has de triar quina base de dades usar per Coppermine.<br />Pots crear una base de dades nova durant l\'instal·lació si el teu compte MySQL té els privilegis necessaris, o pots utilitzar una que ja existeixi. Si no t\'agrada cap de les opcions, hauràs de crear una base de dades des de fora de l\'instal·lador Coppermine, i després tornar aquí per seleccionar aquesta nova base de dades de la llista més avall. També pots cambiar el prefix de les taules (no usis punts), però es recomana mantenir el de per defecte.';
$lang_install['select_lang'] = 'Selecciona l\'idioma per defecte:';
$lang_install['sql_file_not_found'] = 'No s\'ha trobat el fitxer \'%s\'. Comprova que has pujat tots els fitxers de Coppermine al servidor.';
$lang_install['status'] = 'Estat';
$lang_install['subdir_called'] = 'El subdirectori \'%s\' hauria d\'estar dins del directori en el que has pujat Coppermine.<br />L\'instal·lador no pot trobar-lo. Comprova que has pujat tots els fitxers de Coppermine al servidor.';
$lang_install['title_admin'] = 'Crea el compte d\'administració de Coppermine';
$lang_install['title_dir_check'] = 'Comprovant els permisos dels directoris';
$lang_install['title_file_check'] = 'Comprovant els fitxers de l\'instal·lació';
$lang_install['title_finished'] = 'Instal·lació acabada';
$lang_install['title_imp'] = 'Selecció del paquet d\'imatges';
$lang_install['title_imp_test'] = 'Comprovant la llibreria d\'imatges';
$lang_install['title_mysql_db_sel'] = 'Selecció de la base de dades MySQL';
$lang_install['title_mysql_pop'] = 'Creant l\'estructura de la base de dades';
$lang_install['title_mysql_user'] = 'Verificació d\'usuari MySQL';
$lang_install['title_welcome'] = 'Benvingut a la instal·lació del Coppermine';
$lang_install['tmp_conf_error'] = 'No s\'ha pogut escriure el fitxer temporal de configuració. Comprova que el directori \'include\' té els permisos d\'escriptura adequats.';
$lang_install['tmp_conf_ser_err'] = 'Hi ha hagut un error greu durant l\'instal·lació. Intenta recarregar la pàgina o tornar al principi de l\'instal·lació esborrant el fitxer \'include/config.tmp\'.';
$lang_install['try_again'] = 'Intenta-ho una altra vegada';
$lang_install['unable_write_config'] = 'No s\'ha pogut escriure el fitxer de configuració';
$lang_install['user_err'] = 'El nom de l\'usuari/a administrador no pot estar buit i només pot tenir caràcters alfanumèrics.';
$lang_install['username'] = 'Usuari';
$lang_install['your_admin_account'] = 'El teu compte d\'administrador';
$lang_install['no_cookie'] = 'El vostre navegador no accepta cookies. És recomanable acceptar-les.';
$lang_install['no_javascript'] = 'El vostre navegador té el JavaScript desactivat - és molt recomanable activar-lo.';
$lang_install['register_globals_detected'] = 'Sembla que la configuració de PHP té l\'opció \'register_globals\' activada - hauries desactivar-la per raons de seguretat.';
$lang_install['more'] = 'més';
$lang_install['version_undetected'] = 'No s\'ha pogut determinar quina versió de %s hi ha al teu servidor. Assegura\'t que almenys és la versió %s.';
$lang_install['version_incompatible'] = 'El script ha trobat la versió (%s) %s en el teu servidor, que és incompatible.<br />Assegura\'t d\'utilitzar una versió compatible (%s o millor) abans de seguir';
$lang_install['read_gif'] = 'Llegir/escriure fitxers .gif';
$lang_install['read_png'] = 'Llegir/escriure fitxers .png';
$lang_install['read_jpg'] = 'Llegir/escriure fitxers  .jpg';
$lang_install['write_error'] = 'No s\'ha pogut desar l\'imatge generada en el disc.';
$lang_install['read_error'] = 'No s\'ha pogut llegir l\'imatge d\'origen.';
$lang_install['combine_error'] = 'No s\'han pogut combinar les imatges d\'origen';
$lang_install['text_error'] = 'No s\'ha pogut afegir text a l\'imatge d\'origen';
$lang_install['scale_error'] = 'No s\'ha pogut re-escalar l\'imatge d\'origen';
$lang_install['pixels'] = 'píxels';
$lang_install['combine'] = 'Fusiona dues imatges';
$lang_install['text'] = 'Escriure text en una imatge';
$lang_install['scale'] = 're-escalar una imatge';
$lang_install['generated_image'] = 'Imatge generada';
$lang_install['reference_image'] = 'Imatge de referència';
$lang_install['imp_test_error'] = 'Hi ha errors en una o més comprovacions. Assegura\'t que has triat la llibreria de procés d\'imatges apropiada i que està configurada correctament';
$lang_install['writable'] = 'Es pot escriure';
$lang_install['not_writable'] = 'No es pot escriure';
$lang_install['not_exist'] = 'No hi ha';
$lang_install['old_install'] = 'Aquest és el nou assistent d\'instal·lació. %sPrem aquí%s si prefereixes la pantalla d\'instal·lació clàssica.'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File keywordmgr.php
// -------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Gestionar paraules clau';
$lang_keywordmgr_php['search'] = 'Cerca';
$lang_keywordmgr_php['keyword_test_search'] = 'Cerca %s en una finestra nova';
$lang_keywordmgr_php['keyword_del'] = 'Esborrar la paraula clau %s';
$lang_keywordmgr_php['confirm_delete'] = 'Estàs segur de voler esborrar la paraula clau %s de TOTA la galeria?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Canviar paraula clau';
}

// -------------------------------------------------------------------------- //
// File langmgr.php
// -------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Gestor d\'idiomes';
$lang_langmgr_php['english_language_name'] = 'Anglès';
$lang_langmgr_php['native_language_name'] = 'Nadiu';
$lang_langmgr_php['custom_language_name'] = 'Modificat';
$lang_langmgr_php['language_name'] = 'Nom de l\'idioma';
$lang_langmgr_php['language_file'] = 'Fitxer de l\'idioma';
$lang_langmgr_php['flag'] = 'Bandera';
$lang_langmgr_php['file_available'] = 'Disponible';
$lang_langmgr_php['enabled'] = 'Actiu';
$lang_langmgr_php['complete'] = 'Complet';
$lang_langmgr_php['default'] = 'Per defecte';
$lang_langmgr_php['missing'] = 'no trobat';
$lang_langmgr_php['broken'] = 'sembla estar trencat o inaccessible';
$lang_langmgr_php['exists_in_db_and_file'] = 'existeix a la base de dades i en fitxer';
$lang_langmgr_php['exists_as_file_only'] = 'només existeix com a fitxer';
$lang_langmgr_php['pick_a_flag'] = 'Escull un';
$lang_langmgr_php['replace_x_with_y'] = 'Substituir %s per %s';
$lang_langmgr_php['tanslator_information'] = 'Informació del traductor';
$lang_langmgr_php['cpg_version'] = 'Versió Coppermine';
$lang_langmgr_php['hide_details'] = 'Amaga detalls';
$lang_langmgr_php['show_details'] = 'Mostra els detalls';
$lang_langmgr_php['loading'] = 'Carregant';
$lang_langmgr_php['english_missing'] = 'El fitxer d\'idioma anglès no està accessible encara que no s\'ha d\'esborrar mai. Cal reposar immediatament.';
$lang_langmgr_php['enable_at_least_one'] = 'Necessites habilitar almenys un idioma perquè funcioni la galeria';
$lang_langmgr_php['enable_default'] = 'Heu escollit una llengua que no està habilitada. Tria un altre idioma per defecte o habilita l\'idioma que has triat per defecte';
$lang_langmgr_php['available_default'] = 'Heu escollit un idioma que ni tan sols està disponible. Tria un altre idioma per defecte';
$lang_langmgr_php['version_does_not_match'] = 'La versió d\'aquest fitxer no correspon amb la de Coppermine. Fes-lo servir amb cura i prova-ho exhaustivament';
$lang_langmgr_php['no_version'] = 'No s\'ha pogut recuperar infomació de la versió. És molt possible que aquest fitxer de llenguatge no funcioni o que no sigui un fitxer de llenguatge.';
$lang_langmgr_php['filesize'] = 'La mida del fitxer (%s) és inversemblant';
$lang_langmgr_php['content_missing'] = 'No sembla que el fitxer contingui la informació necessària, així que probablement no sigui vàlid.';
$lang_langmgr_php['status'] = 'Estat';
$lang_langmgr_php['default_language'] = '%s escollit com a idioma per defecte';
}

// -------------------------------------------------------------------------- //
// File login.php
// -------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Entra';
$lang_login_php['enter_login_pswd'] = 'Introdueix el teu usuari i contrasenya per accedir';
$lang_login_php['username'] = 'Usuari';
$lang_login_php['email'] = 'Correu'; // cpg1.5
$lang_login_php['both'] = 'Usuari / Correu'; // cpg1.5
$lang_login_php['password'] = 'Contrasenya';
$lang_login_php['remember_me'] = 'Recordar-me';
$lang_login_php['welcome'] = 'Benvingut %s...';
$lang_login_php['err_login'] = 'Accés fallit. Intenta-ho de nou.';
$lang_login_php['err_already_logged_in'] = 'Ja estava validat al sistema!';
$lang_login_php['forgot_password_link'] = 'He oblidat la contrasenya';
$lang_login_php['cookie_warning'] = 'Avís: el vostre navegador no accepta galetes';
$lang_login_php['send_activation_link'] = 'perdut l\'enllaç de l\'activació?';
$lang_login_php['force_login'] = 'Has d\'accedir per veure aquesta pàgina'; // cpg1.5
$lang_login_php['force_login_title'] = 'Accedeix per continuar'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File logout.php
// -------------------------------------------------------------------------- //
if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Sortir';
$lang_logout_php['bye'] = 'Fins ara, %s...';
$lang_logout_php['err_not_logged_in'] = 'No està validat al sistema!'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File minibrowser.php
// -------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'Pujar un nivell';
$lang_minibrowser_php['current_path'] = 'ruta actual';
$lang_minibrowser_php['select_directory'] = 'Tria un directori, si us plau';
$lang_minibrowser_php['click_to_close'] = 'Feu clic en una imatge per tancar aquesta finestra';
$lang_minibrowser_php['folder'] = 'Carpeta'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File mode.php
// -------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Amagant els controls d\'administració...'; // cpg1.5
$lang_mode_php[1] = 'Mostrant els controls d\'administració...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Amagant novetats...'; // cpg1.5
$lang_mode_php['news_show'] = 'Mostrant novetats...'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File modifyalb.php
// -------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Actualització del àlbum %s';
$lang_modifyalb_php['related_tasks'] = 'Altres accions relacionades'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Tria l\'àlbum'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Configuració general';
$lang_modifyalb_php['alb_title'] = 'Títol de l\'àlbum';
$lang_modifyalb_php['alb_cat'] = 'Categoria de l\'àlbum';
$lang_modifyalb_php['alb_desc'] = 'Descripció de l\'àlbum';
$lang_modifyalb_php['alb_keyword'] = 'Paraules clau de l\'àlbum';
$lang_modifyalb_php['alb_thumb'] = 'Miniatura de l\'àlbum';
$lang_modifyalb_php['alb_perm'] = 'Permisos per a aquest àlbum';
$lang_modifyalb_php['can_view'] = 'Aquest àlbum pot ser vist per';
$lang_modifyalb_php['can_upload'] = 'Els visitants poden afegir fitxers';
$lang_modifyalb_php['can_post_comments'] = 'Els visitants poden afegir comentaris';
$lang_modifyalb_php['can_rate'] = 'Els visitants poden valorar els arxius';
$lang_modifyalb_php['user_gal'] = 'Galeria de l\'usuari';
$lang_modifyalb_php['my_gal'] = '* La meva galeria *'; // CPG 1.5
$lang_modifyalb_php['no_cat'] = '* Sense categoria *';
$lang_modifyalb_php['alb_empty'] = 'L\'àlbum està buit';
$lang_modifyalb_php['last_uploaded'] = 'Darrers enviats';
$lang_modifyalb_php['public_alb'] = 'Tothom (Àlbum púbilc)';
$lang_modifyalb_php['me_only'] = 'Només jo';
$lang_modifyalb_php['owner_only'] = 'Només l\'amo de l\'àlbum (%s)';
$lang_modifyalb_php['group_only'] = 'Membres del grup \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'No pots modificar àlbums.';
$lang_modifyalb_php['update'] = 'Actualització del àlbum';
$lang_modifyalb_php['reset_album'] = 'Reinicia l\'àlbum';
$lang_modifyalb_php['reset_views'] = 'Posa els comptadors a "0" a %s';
$lang_modifyalb_php['reset_rating'] = 'Posar a zero les votacions de tots els fitxers a %s';
$lang_modifyalb_php['delete_comments'] = 'Esborrar tots els comentaios a %s';
$lang_modifyalb_php['delete_files'] = '%sIrreversible%s Esborrar tots els fitxers de %s';
$lang_modifyalb_php['views'] = 'vistes';
$lang_modifyalb_php['votes'] = 'vots';
$lang_modifyalb_php['comments'] = 'comentaris';
$lang_modifyalb_php['files'] = 'arxius';
$lang_modifyalb_php['submit_reset'] = 'Capturar canvis';
$lang_modifyalb_php['reset_views_confirm'] = 'Estic segur';
$lang_modifyalb_php['notice1'] = '(*) depenent de la configuració de %sgroups%s'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'L\'àlbum es pot moderar per'; // CPG 1.5
$lang_modifyalb_php['admins_only'] = 'només els administradors'; // CPG 1.5
$lang_modifyalb_php['alb_password'] = 'Contrasenya de l\'àlbum (Nova)';
$lang_modifyalb_php['alb_password_hint'] = 'Recordatori de contrasenya de l\'àlbum';
$lang_modifyalb_php['edit_files'] = 'Edita fitxers';
$lang_modifyalb_php['parent_category'] = 'Categoria pare';
$lang_modifyalb_php['thumbnail_view'] = 'Vista de miniatures';
$lang_modifyalb_php['random_image'] = 'Imatge a l\'atzar'; // CPG 1.5
$lang_modifyalb_php['password_protect'] = 'Protegir aquest àlbum amb contrasenya (marcar per \'si\')'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File phpinfo.php
// -------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'El PHP info';
$lang_phpinfo_php['explanation'] = 'Això és el que la funció <a href="http://www.php.net/phpinfo">phpinfo()</a> mostra, utilitzant Coppermine.';
$lang_phpinfo_php['no_link'] = 'Que altres puguin veure la teva informació de PHP és un risc de seguretat, per això aquesta pàgina només és visible si esteu com a administrador. No pots publicar un enllaç a aquesta pàgina per als altres, ells tindran un accés denegat.';
}

// -------------------------------------------------------------------------- //
// File picmgr.php
// -------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Administrador d\'imatges';
$lang_picmgr_php['confirm_modifs'] = 'Estàs segur que vols aplicar les modificacions a l\'imatge?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'No hi ha canvis!';
$lang_picmgr_php['no_album'] = '* No és un àlbum *';
$lang_picmgr_php['explanation_header'] = 'El Ordenament personalitzat que podeu especificar en aquesta pàgina només serà pres en compte si ';
$lang_picmgr_php['explanation1'] = 'l\' administrador ha marcat l\'opció "Ordre predeterminat de fitxers" a la configuració a "Descendent" o "Ascendent" (configuració global per a tots els usuaris que no han escollit una altra opció)';
$lang_picmgr_php['explanation2'] = 'l\'usuari ha escollit "Descendent" o "Ascendent" a la pàgina de vistes en miniatura (per configuració d\'usuari)';
$lang_picmgr_php['change_album'] = 'Si canvies l\'àlbum es perdran els canvis'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Els canvis en l\'ordenació no es guarden fins que no prems "Aplicar els canvis".'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File pluginmgr.php
// -------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')) {
$lang_pluginmgr_php['confirm_uninstall'] = 'Estàs segur de voler desinstal·lar aquest Plugin?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTA: l\'API de Plugins està desactivat. Vols TREURE MANUALMENT aquest Plugin, ignorant les possibles accions de neteja posteriors?'; // Cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Estàs segur de voler ESBORRAR aquest Plugin?';
$lang_pluginmgr_php['pmgr'] = 'Gestor de Plugins';
$lang_pluginmgr_php['explanation'] = 'Instal·lar/desinstal·lar/gestionar Plugins amb aquesta pàgina.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'API de Plugins activat'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Nom';
$lang_pluginmgr_php['Author'] = 'Autor';
$lang_pluginmgr_php['desc'] = 'Descripció';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Plugins instal·lats';
$lang_pluginmgr_php['n_plugins'] = 'Plugins no instal·lats';
$lang_pluginmgr_php['none_installed'] = 'Cap Plugin instal·lat';
$lang_pluginmgr_php['operation'] = 'Operació';
$lang_pluginmgr_php['not_plugin_package'] = 'El fitxer que has pujat no és un paquet de Plugins.';
$lang_pluginmgr_php['copy_error'] = 'S\'ha produït un error en copiar el paquet al directori de Plugins.';
$lang_pluginmgr_php['upload'] = 'Pujar';
$lang_pluginmgr_php['configure_plugin'] = 'Configuració del Plugin';
$lang_pluginmgr_php['cleanup_plugin'] = 'Netejar el Plugin';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Informació de fitxers'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'L\'API de Plugins està desactivat, així que no es permet aquesta operació.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'instal·lar'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'desinstal·lar'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'No es compleixen els requisits mínims'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'No s\'han pogut determinar els requisits de versió per aquest Plugin. Normalment això indica que el Plugin no es va dissenyar per a aquesta versió del Coppermine i per tant podria espatllar la vostra galeria. Continuar de totes maneres (no recomanable)?'; // Cpg1.5 // js-alert
}

// -------------------------------------------------------------------------- //
// File ratepic.php
// -------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Ho sentim, però ja has votat aquest fitxer';
$lang_rate_pic_php['rate_ok'] = 'vot acceptat';
$lang_rate_pic_php['forbidden'] = 'No pots votar els teus propis fitxers.';
}

// -------------------------------------------------------------------------- //
// File register.php & profile.php
// -------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined ('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Si bé els administradors de {SITENAME} intentaran treure o editar el material susceptible de no ser apropiat tan ràpid com sigui possible, és gairebé impossible revisar cada entrada. Per tant reconeixes que les entrades en aquest lloc expressen el punt de vista de l´autor i no de l´administrador o webmaster (excepte les entrades que facin en el seu propi nom) i per tant no son responsables del seu contingut.<br />
<br />
Us comprometeu a no afegir cap material abusiu, obscè, vulgar, escandalós, odiós, amenaçador, d´orientació sexual, o cap altre que pugui violar qualsevol llei aplicable. Vostè està d´acord que el webmaster, l´administrador, els moderadors i els assessors de {SITENAME} tenen el dret de suprimir o corregir qualsevol contingut en qualsevol moment si ho consideren necessari. Com usuari, accediu a que qualsevol informació enviada sigui emmagatzemada a una base de dades. Això mateix, aquesta informació no serà divulgada a tercers sense el seu consentiment. El webmaster i l´administrador no es poden fer responsables de cap intent de destrucció de la base de dades que pugui conduir a la pèrdua de la mateixa.<br />
<br />
Aquest lloc utilitza galetes per emmagatzemar informació al seu ordinador. Aquestes galetes serveixen per a millorar la navegació en aquest lloc. La direcció de correu electrònic s´usa només per a confirmar els seus detalls i contrasenya de registre.<br />
<br />
Clicant a 'Estic d´acord' expresseu la vostra conformitat amb aquestes condicions.
EOT;
$lang_register_php['PAGE_TITLE'] = 'un compte d\'usuari';
$lang_register_php['term_cond'] = 'Condicions';
$lang_register_php['i_agree'] = 'Estic d\'acord';
$lang_register_php['submit'] = 'Enviar una petició de registre';
$lang_register_php['err_user_exists'] = 'El nom d\'usuari triat ja existeix. Si us plau tria un altre diferent';
$lang_register_php['err_global_pw'] = 'Contrasenya global no vàlida'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'La contrasenya ha de ser diferent de la global'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Un altre usuari s\'ha registrat anteriorment amb aquesta adreça de correu';
$lang_register_php['err_disclaimer'] = 'Has d\'acceptar les condicions de renúncia de responsabilitat'; // cpg1.5
$lang_register_php['enter_info'] = 'Entrada d\'informació de registre';
$lang_register_php['required_info'] = 'Informació necessària';
$lang_register_php['optional_info'] = 'Informació opcional';
$lang_register_php['username'] = 'Usuari';
$lang_register_php['password'] = 'Contrasenya';
$lang_register_php['password_again'] = 'Repeteix la contrasenya';
$lang_register_php['global_registration_pw'] = 'Contrasenya global'; // cpg1.5
$lang_register_php['email'] = 'Correu';
$lang_register_php['location'] = 'Ubicació';
$lang_register_php['interests'] = 'Interessos';
$lang_register_php['website'] = 'Pàgina web';
$lang_register_php['occupation'] = 'Ocupació';
$lang_register_php['error'] = 'ERROR';
$lang_register_php['confirm_email_subject'] = '%s -';
$lang_register_php['information'] = 'Informació';
$lang_register_php['failed_sending_email'] = 'No s\'ha pogut enviar el correu de confirmació de registre';
$lang_register_php['thank_you'] = 'Gràcies per registrar-se.<br />T\'hem enviat un correu amb la informació per activar el teu compte a l\'adreça que has proporcionat.';
$lang_register_php['acct_created'] = 'Hem creat un compte i ara pots validar amb el teu usuari i contrasenya';
$lang_register_php['acct_active'] = 'Hem activat el vostre compte i ja pots validar amb el teu usuari i contrasenya';
$lang_register_php['acct_already_act'] = 'El compte ja està activat!';
$lang_register_php['acct_act_failed'] = 'No es pot activar aquest compte';
$lang_register_php['err_unk_user'] = 'No existeix l\'usuari seleccionat';
$lang_register_php['x_s_profile'] = 'El perfil de %s';
$lang_register_php['group'] = 'Grup';
$lang_register_php['reg_date'] = 'Registrat a';
$lang_register_php['disk_usage'] = 'Ús de disc';
$lang_register_php['change_pass'] = 'Canvia la contrasenya';
$lang_register_php['current_pass'] = 'Contrasenya actual';
$lang_register_php['new_pass'] = 'Contrasenya nova';
$lang_register_php['new_pass_again'] = 'Reescriure la contrasenya nova';
$lang_register_php['err_curr_pass'] = 'La contrasenya actual és incorrecta';
$lang_register_php['change_pass'] = 'Canvia la contrasenya';
$lang_register_php['update_success'] = 'El perfil s\'ha actualitzat';
$lang_register_php['pass_chg_success'] = 'S\'ha canviat la contrasenya';
$lang_register_php['pass_chg_error'] = 'No s\'ha canviat la contrasenya';
$lang_register_php['notify_admin_email_subject'] = '%s - Notificació de registre';
$lang_register_php['last_uploads'] = 'Últim fitxer pujat'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Prem per veure tots els fitxers enviats per %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Últim comentari'; // cpg1.5
$lang_register_php['you'] = 'tu'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Prem per veure tots els comentaris fets per %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'S\'ha registrat un nou usuari amb el nom "%s" a la teva galeria';
$lang_register_php['pic_count'] = 'fitxers penjats';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Sol·licitud de registre';
$lang_register_php['thank_you_admin_activation'] = 'Gràcies.<br />La teva sol·licitud d\'activació del compte s\'ha enviat a l\'administrador. Rebràs un correu cuand s\'aprovi.';
$lang_register_php['acct_active_admin_activation'] = 'El compte s\'ha activat i s\'ha enviat un correu a l\'usuari.';
$lang_register_php['notify_user_email_subject'] = '%s - Notificació d\'activació';
$lang_register_php['delete_my_account'] = 'Esborra el meu compte d\'usuari'; // cpg1.5
$lang_register_php['warning_delete'] = 'Avís: No es pot desfer l\'esborrat del compte. Els %sfitxers pujats%s en els àlbums públics i %sels teus comentaris%s no s\'eliminen en esborrar el compte. No obstant això, sí s\'esborraran els fitxers que vas carregar a la teva galeria personal.'; // Cpg1.5 // The %s- placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Estic segur que vols esborrar el meu compte d\'usuari'; // cpg1.5
$lang_register_php['really_delete'] = 'Realment vols esborrar el teu compte?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Editrar el perfil de %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Edita el meu perfil'; // cpg1.5
$lang_register_php['none'] = 'cap'; // cpg1.5
$lang_register_php['user_name_banned'] = 'L\'usuari/a seleccionat no té permisos o està expulsat. Escull un altre nom d\'usuari'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Estàs expulsat de la galeria, i no se\'t permet tornar a registrar-te. Fora!'; // cpg1.5
$lang_register_php['email_warning1'] = 'El camp del correu no pot quedar buit!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Adreça de correu no vàlida. Revisa'; // cpg1.5
$lang_register_php['username_warning1'] = 'El nom d\'usuari no pot quedar buit!'; // cpg1.5
$lang_register_php['username_warning2'] = 'El nom d\'usuari ha de tenir almenys dos caràcters'; // cpg1.5
$lang_register_php['password_warning1'] = 'La contrasenya ha de tenir almenys dos caràcters'; // cpg1.5
$lang_register_php['password_warning2'] = 'El nom d\'usuari i la contrasenya han de ser diferents!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Les dues contrasenyes no son iguals. Introdueix-les de nou'; // cpg1.5
$lang_register_php['form_not_submit'] = 'No s\'ha enviat la sol·licitud - hi ha errors per corregir'; // cpg1.5
$lang_register_php['banned'] = 'Expulsat'; // cpg1.5
$lang_register_php['confirm_email'] = <<< EOT
Gràcies per registrar-te a {SITENAME}

El teu nom d´usuari és: "{USER_NAME}"

Per acabar d´activar el teu compte, has de prémer sobre l´enllaç que apareix a sota, o copia´l i enganxa´l al navegador d´Internet.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Salutacions.

Els administradors de {SITENAME}

EOT;

$lang_register_approve_email = <<< EOT
S´ha registrat un nou usuari de nom "{USER_NAME}" a la teva galeria.
Per acabar d´activar el compte, has de prémer sobre l´enllaç que apareix a sota, o copia´l i enganxa´l al navegador d´Internet.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
S´ha aprovat i activat el vostre compte.
Ja et pots validar a <a href="{SITE_LINK}">{site_link}</a> com l´usuari "{USER_NAME}"
Salutacions.

Els administradors de {SITENAME}

EOT;
}

// -------------------------------------------------------------------------- //
// File reviewcom.php
// -------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Revisar comentaris';
$lang_reviewcom_php['no_comment'] = 'Cap comentari de revisar';
$lang_reviewcom_php['n_comm_del'] = '%s comentari(s) esborrat(s)';
$lang_reviewcom_php['n_comm_disp'] = 'Número de comentaris a mostrar';
$lang_reviewcom_php['see_prev'] = 'Veure l\'anterior';
$lang_reviewcom_php['see_next'] = 'Veure el següent';
$lang_reviewcom_php['del_comm'] = 'Esborrar els comentaris seleccionats';
$lang_reviewcom_php['user_name'] = 'Nom';
$lang_reviewcom_php['date'] = 'Data';
$lang_reviewcom_php['comment'] = 'Comentari';
$lang_reviewcom_php['file'] = 'Arxiu';
$lang_reviewcom_php['name_a'] = 'Nom d\'usuari ascendent';
$lang_reviewcom_php['name_d'] = 'Nom d\'usuari descendent';
$lang_reviewcom_php['date_a'] = 'Data ascendent';
$lang_reviewcom_php['date_d'] = 'Data descendent';
$lang_reviewcom_php['comment_a'] = 'Comentari ascendent';
$lang_reviewcom_php['comment_d'] = 'Comentari descendent';
$lang_reviewcom_php['file_a'] = 'Arxiu ascendent';
$lang_reviewcom_php['file_d'] = 'Arxiu descendent';
$lang_reviewcom_php['approval_a'] = 'Aprovació ascendent'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Aprovació descendent'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'Adreça IP ascendent'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'Adreça IP descendent'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Valoració Akismet (comentaris vàlids al final)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Valoració Akismet (comentaris vàlids al principi)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s comentari(s) aprovat(s)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s comentari(s) no aprovat(s)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Canviada la configuració d\'aprovacions'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'mostrant només els comentaris pendents d\'aprovació'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Aprovat'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Desa els canvis'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Segur que vols eliminar els comentaris(s) seleccionat(s)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Acció en els seleccionats:'; // cpg1.5
$lang_reviewcom_php['delete'] = 'esborrar'; // cpg1.5
$lang_reviewcom_php['approve'] = 'aprovar'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'desaprovar'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'no fer res'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Comentari aprovat'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Comentari no aprovat'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Expulsar l\'usuari i esborrar comentari'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet va dir'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'És spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'no és spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet ha trobat %s missatges d\'spam per ara'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Resultat de la clau Akismet API %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'invàlid'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Heu de proporcionar la URL d\'una Galleria en la configuració del Coppermine'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Incapaç de connectar amb Akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'No es troba la URL de destí. Potser s\'ha canviat l\'estructura del lloc de Akismet.com.'; // Cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Error desconegut'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'El missatge d\'error retornat és'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'Adreça IP'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File sidebar.php
// -------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Barra lateral'; // cpg1.5
$lang_sidebar_php['install'] = 'instal·lar'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Entre els diversos mètodes intel·ligents d\'accedir ràpidament al contingut del lloc hi ha barres laterals per als navegadors més populars sobre diversos sistemes operatius per arribar a les pàgines més ràpidament. Aquesta és la informació necessària per instal·lar (i desinstal·lar) per als navegadors suportats.'; // Cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Detectant el sistema operatiu i el navegador'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Estem intentant detectar automàticament el sistema operatiu i el navegador que utilitzes - un moment, si us plau. Si falla la detecció automàtica potser vols %smostrar%s totes les opcions manuals.'; // Cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6 +, Konqueror 3.2 +'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Si utilitzes Mozilla 0.9.4 o superior pots %safegir la barra lateral%s a les que ja tens. Podràs desinstal·lar amb l\'opció "Personalitzar barra lateral"'; // Cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 o superior amb Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Si fas servir Internet Explorer 5 o superior amb MacOS, %sobre la barra lateral%s en una finestra separada. En aquesta finestra obre la pestanya "Page Holder" de l\'esquerra. Prem "Afegeix". Si la vols mantenir per a ús futur, prem a "Favorits" i selecciona "Afegir a Page Holder Favorites"/" Afegir a favorits".'; // Cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 o superior amb Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Si fas servir Internet Explorer 5 o superior amb Windows, pots afegir la barra lateral a la barra d\'eines "Vincles", o la pots afegir a Favorits, i en prémer sobre ella apareixerà en lloc de la finestra de cerca - prem %saquí%s i seleccioneu "Afegir a favorits" al menú desplegable. Aquest enllaç no instal·la nostra barra com la barra per defecte, així que no es fan modificacions al sistema.'; // Cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 o superior sobre XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Si fas servir Internet Explorer 7 amb Windows, pots afegir una finestra emergent de navegació a la barra d\'eines de "Vincles", o la pots afegir a Favorits, i en prémer sobre ella apareixerà de nou com una finestra emergent en prémer %saquí%s i seleccioneu "Afegir a favorits" al menú desplegable. En versions anteriors d\'Internet Explorer era possible afegir una barra lateral real, però en IE7 no es pot fer sense aplicar pedaços al registre una mica complicats. Si vols una barra lateral de veritat et recomanem que facis servir un altre navegador.'; // Cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 i superior'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Si fas servir Opera, pots %spulsar aquest enllaç %s per afegir la nostra barra lateral als teus conjunts. Després marca "Mostra en el panell". Pots desinstal·lar prement el botó dret sobre la seva pestanya i triant "Esborrar" del menú desplegable.'; // Cpg1.5
$lang_sidebar_php['additional_options'] = 'Opcions addicionals'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Si tens un altre navegador diferent dels esmentats, prem %saquí%s per mostrar les opcions possibles.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'No es pot afegir la barra lateral! El teu navegador no la suporta'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Cerca'; // cpg1.5
$lang_sidebar_php['reload'] = 'Recarregar'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File search.php
// -------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')) {
$lang_search_php['title'] = 'Cerca';
$lang_search_php['submit_search'] = 'buscar';
$lang_search_php['keyword_list_title'] = 'Llista de paraules clau';
$lang_search_php['keyword_msg'] = 'La llista superior no inclou els títols. No inclou les paraules dels títols o descripcions. Prova la recerca completa.';
$lang_search_php['edit_keywords'] = 'Edita paraules clau';
$lang_search_php['search in'] = 'Cerca a:';
$lang_search_php['ip_address'] = 'Adreces IP';
$lang_search_php['imgfields'] = 'Cerca fitxers';
$lang_search_php['albcatfields'] = 'Cerca àlbums i categories';
$lang_search_php['age'] = 'Període';
$lang_search_php['newer_than'] = 'Menys de';
$lang_search_php['older_than'] = 'Més de';
$lang_search_php['days'] = 'dies';
$lang_search_php['all_words'] = 'Trobar totes les paraules (I)';
$lang_search_php['any_words'] = 'Coincideix qualsevol paraula (O)';
$lang_search_php['regex'] = 'Expressions regulars';
$lang_search_php['album_title'] = 'Tìtols d\'àlbum';
$lang_search_php['category_title'] = 'Títols de categories';
}

// -------------------------------------------------------------------------- //
// File searchnew.php
// -------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['PAGE_TITLE'] = 'Cerca nous fitxers';
$lang_search_new_php['select_dir'] = 'Seleccioneu directori';
$lang_search_new_php['select_dir_msg'] = 'Aquesta funció et permet afegir de forma automàtica els fitxers que hagis pujat al servidor mitjançant FTP.<br /><br /> Seleccioneu el directori on has pujat teus fitxers.';
$lang_search_new_php['no_pic_to_add'] = 'No hi ha cap fitxer d\'afegir';
$lang_search_new_php['need_one_album'] = 'Necessites almenys un àlbum per utilitzar aquesta funció';
$lang_search_new_php['warning'] = 'Atenció';
$lang_search_new_php['change_perm'] = 'L\'script no pot escriure en aquest directori. Necessites canviar els seus permisos a mode 755 o 777 abans de intentar-ho de nou';
$lang_search_new_php['target_album'] = '<strong> Col·locar els fitxers del directori"</ strong> %s <strong>"a l\'àlbum </ strong> %s';
$lang_search_new_php['folder'] = 'Carpeta';
$lang_search_new_php['image'] = 'imatge';
$lang_search_new_php['result'] = 'Resultat';
$lang_search_new_php['dir_ro'] = 'No es pot escriure.';
$lang_search_new_php['dir_cant_read'] = 'No es pot llegir.';
$lang_search_new_php['insert'] = 'Afegint nous fitxers a la galeria';
$lang_search_new_php['list_new_pic'] = 'Llista de nous fitxers';
$lang_search_new_php['insert_selected'] = 'Afegeix els fitxers seleccionats';
$lang_search_new_php['no_pic_found'] = 'No s\'ha trobat cap fitxer nou';
$lang_search_new_php['be_patient'] = 'Si us plau sigues pacient, l\'script necessita temps per afegir els fitxers';
$lang_search_new_php['no_album'] = 'cap àlbum seleccionat';
$lang_search_new_php['result_icon'] = 'Clica per als detalls o per recarregar';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li> %s:fitxer afegit sense problemes</li>
        <li> %s:un duplicat i ja existeix a la base de dades </li>
        <li> %s:no es pot afegir, si us plau comprova la configuració i els permisos dels directoris on hi ha els fitxers</li>
        <li> %s:no has seleccionat un àlbum al qual afegir els fitxers</li>
        <li> %s:Arxiu erroni, corrupte o inaccessible</li>
        <li> %s:fitxer de tipus desconegut</li>
        <li> %s:el fitxer �s una imatge GIF</li>
        <li> Si les icones no apareixen, prem sobre la icona de fitxer no carregat per veure l´error produït per PHP</li>
        <li> Si el navegador produeix un timeout, prem la icona de Actualitzar</li>
    </ul>
EOT;
// Translator note:Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Marcar tots';
$lang_search_new_php['uncheck_all'] = 'Desmarcar tots';
$lang_search_new_php['no_folders'] = 'Encara no hi ha carpetes dins el dicrectori "albums". Crea almenys una carpeta personalitzada en ella i càrrega amb ftp tots fitxers allà. No has de carregar a la carpetes "userpics" ni "edit", perquè estan reservades per a pujades per http i per a ús intern.';
$lang_search_new_php['browse_batch_add'] = 'Interfície navegable'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Mostra imatges a la vista prèvia'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Edita fitxers';
$lang_search_new_php['edit_properties'] = 'Propietats de l\'àlbum';
$lang_search_new_php['view_thumbs'] = 'Vista de miniatures';
$lang_search_new_php['add_more_folder'] = 'Afegeix per lots més fitxers de la carpeta %s'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File send_activation.php
// -------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Ja estàs validat al sistema!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Aquest lloc web no necessita activació per correu'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'L\'usuari indicat no existeix'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Reenviar l\'enllaç d\'activació de compte'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Introdueix la teva adreça de correu'; // cpg1.5
$lang_send_activation_php['submit'] = 'Envia'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Fallada a l\'enviar el correu amb l\'enllaç d\'activació de compte'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'S\'ha enviat un correu a %s amb l\'enllaç d\'activació. Revisa el teu correu per completar el procés'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File stat_details.php
// -------------------------------------------------------------------------- //
if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'mostrar/amagar aquesta columna';
$lang_stat_details_php['title'] = 'Estadístiques detallades'; // cpg1.5
$lang_stat_details_php['vote'] = 'Detalls de vots';
$lang_stat_details_php['hits'] = 'Detalls de vegades que es va veure la imatge';
$lang_stat_details_php['stats'] = 'Estadístiques de vots';
$lang_stat_details_php['users'] = 'Estadístiques d\'usuaris';
$lang_stat_details_php['sdate'] = 'Data';
$lang_stat_details_php['rating'] = 'Valoració';
$lang_stat_details_php['search_phrase'] = 'Cerca frase';
$lang_stat_details_php['referer'] = '(Referrer)'; // TNT	
$lang_stat_details_php['browser'] = 'Navegador';
$lang_stat_details_php['os'] = 'Sistema operatiu';
$lang_stat_details_php['ip'] = 'Adreça IP';
$lang_stat_details_php['uid'] = 'Usuari'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Ordena per %s';
$lang_stat_details_php['ascending'] = 'ascendent';
$lang_stat_details_php['descending'] = 'descendent';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'tancar';
$lang_stat_details_php['hide_internal_referers'] = 'ocultar les URL d\'origen intern'; // TNT
$lang_stat_details_php['date_display'] = 'Visualitzar data';
$lang_stat_details_php['records_per_page'] = 'registres per pàgina';
$lang_stat_details_php['submit'] = 'enviar/refrescar';
$lang_stat_details_php['overall_stats'] = 'Estadístiques generals'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Estadístiques per sistema operatiu'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Nombre de visualitzacions'; // cpg1.5
$lang_stat_details_php['total'] = 'Total'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Estadístiques per navegador'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Configuració d\'estadístiques generals'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Desa la informació detallada de l\'ús'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Desa la informació detallada per estadístiques de visualitzats pels usuaris'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Desa la informació detallada dels vots'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Desa la informació detallada per estadístiques de cada vot dels usuaris'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Esborrar les estadístiques d\'accions'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Estàs absolutament segur que vols esborrar TOTES les estadístiques d\'accés a les imatges de TOTA la galeria? No es podrà desfer!'; // Cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Esborrar les estadístiques de vots'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Estàs absolutament segur que vols esborrar TOTES les estadístiques de vots de TOTA la galeria? No es podrà desfer!'; // Cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Envia'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'S\'ha actualitzat la configuració del Coppermine'; // cpg1.5
$lang_stat_details_php['votes'] = 'vots'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Posar a zero el(s) vot(s) seleccionat(s)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Estàs segur de voler esborrar els vots seleccionats? No es podrà desfer!'; // Cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Torna a la pàgina de fitxer intermedi'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s registres a %s pàgina(es)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Convidat'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'Encara en construcció'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File upload.php
// -------------------------------------------------------------------------- //
if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Carregar fitxer';
$lang_upload_php['restrictions'] = 'Restriccions'; // cpg1.5
$lang_upload_php['choose_method'] = 'Tria mètode de càrrega'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Múltiples fitxers - utilitza Flash (recomanat)'; // cpg1.5
$lang_upload_php['upload_single'] = 'Simple - un fitxer cada vegada'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Seleccioneu un àlbum de la llista desplegable';
$lang_upload_php['up_instr_2'] = 'Clica el botó "Explorar" i busca el(s) fitxer(s) que vols pujar. Pots seleccionar diversos d\'una vegada prement Ctrl+Clic.';
$lang_upload_php['up_instr_3'] = 'Seleccioneu més fitxers per carregar usant el pas 2';
$lang_upload_php['up_instr_4'] = 'Clica el botó "Continuar" després que els fitxers s\'hagin carregat (el botó apareixerà quan s\'hagi carregat almenys un fitxer).';
$lang_upload_php['up_instr_5'] = 'Passaràs a una pantalla en la qual pots introduir detalls dels fitxers que hagis pujat. Després d\'omplir les dades, envia el formulari amb el botó "Aplicar canvis" al final del formulari.';
$lang_upload_php['restriction_zip'] = 'Els fitxers ZIP que hagis carregat romandran comprimits i no es descomprimiran al servidor.';
$lang_upload_php['restriction_filesize'] = 'Cada fitxer que carreguis ha de ser menor que %s.';
$lang_upload_php['reg_instr_1'] = 'Acció no vàlida en crear el formulari.';
$lang_upload_php['no_name'] = 'Nom de fitxer no està disponible'; // CPG 1.5
$lang_upload_php['no_tmp_name'] = 'Incapaç de carregar'; // CPG 1.5
$lang_upload_php['no_post'] = 'Fitxer no carregat per POST.';
$lang_upload_php['forb_ext'] = 'Extensió no vàlida.';
$lang_upload_php['exc_php_ini'] = 'Se supera la mida de fitxer indicat en el php.ini.';
$lang_upload_php['exc_file_size'] = 'Se supera la mida de fitxer permès per la galeria.';
$lang_upload_php['partial_upload'] = 'Només s\'ha fet una càrrega parcial.';
$lang_upload_php['no_upload'] = 'No hi ha hagut càrrega.';
$lang_upload_php['unknown_code'] = 'Error PHP desconegut.';
$lang_upload_php['impossible'] = 'Impossible moure.';
$lang_upload_php['not_image'] = 'No és una imatge o està corrupta';
$lang_upload_php['not_GD'] = 'No és una extensió GD.';
$lang_upload_php['pixel_allowance'] = 'L\'alçada i/o amplada de l\'imatge carregada és més gran que el permès a la configuració de la galeria.';
$lang_upload_php['failure'] = 'Fallada en la càrrega';
$lang_upload_php['no_place'] = 'No s\'ha pogut ubicar el fitxer anterior.';
$lang_upload_php['max_fsize'] = 'Mida màxima de fitxer permès %s';
$lang_upload_php['picture'] = 'Imatge';
$lang_upload_php['pic_title'] = 'Títol';
$lang_upload_php['description'] = 'Descripció';
$lang_upload_php['keywords_sel'] = 'Tria una paraula clau';
$lang_upload_php['err_no_alb_uploadables'] = 'Ho sento, però no et permet pujar imatges a cap àlbum';
$lang_upload_php['close'] = 'Tanca';
$lang_upload_php['no_keywords'] = 'Ho sento, no hi ha paraules clau disponibles';
$lang_upload_php['regenerate_dictionary'] = 'Regenerar diccionari';
$lang_upload_php['allowed_types'] = 'Se us permet pujar fitxers amb aquestes extensions:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Extensions d\'imatge: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Extensions de vídeo: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Extensions de documents: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Extensions d\'Àudio: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Espera, si us plau, mentre es pugen els fitxers - podria trigar una estona'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Mètode de pujada alternatiu'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Si estàs amb Windows XP/Vista, pots utilitzar l\'Auxiliar de càrrega de Windows XP també per pujar fitxers, que et proporciona una interfície més senzilla directament a la vostre màquina.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'La interfície Flash de pujada no ha pogut carregar-se. Has de tenir activat JavaScript per utilitzar Flash.'; // Cpg1.5
$lang_upload_php['err_flash_disabled'] = 'La interfície de càrrega està trigant molt o la càrrega ha fallat. Assegura\'t que tens actius els Plugins de Flash i que tens instal·lat un reproductor de Flash, si us plau.'; // Cpg1.5
$lang_upload_php['err_alternate_method'] = 'Com a alternativa pots <a href="upload.php?single=1">utilitzar el mètode simple</a> per carregar els fitxers d\'un en un.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'No s\'ha pogut carregar la interfície de càrrega. Potser hagis d\'instal·lar o actualitzar el reproductor de Flash. Visita el <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">lloc web d\'Adobe</a> per instal·lar el Reproductor de Flash.'; // Cpg1.5
$lang_upload_php['flash_loading'] = 'Carregant l\'interfície de càrrega. Espera un moment, si us plau...'; // cpg1.5
$lang_upload_swf_php['browse'] = 'Explorar...'; // cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Cancel·lar totes les pujades'; // cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Cua de pujada'; // cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'fitxers carregats'; // cpg1.5
$lang_upload_swf_php['all_files'] = 'Tots els fitxers'; // cpg1.5
$lang_upload_swf_php['status_pending'] = 'Pendent...'; // cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Carregant...'; // cpg1.5
$lang_upload_swf_php['status_complete'] = 'Complet.'; // cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Cancel·lat.'; // cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Detingut.'; // cpg1.5
$lang_upload_swf_php['status_failed'] = 'Fallada en la càrrega.'; // cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Fitxer massa gran.'; // cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'No es poden pujar fitxers de longitud zero.'; // cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Tipus de fitxer no vàlid.'; // cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Error no tractable'; // cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Error en la càrrega:'; // cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Error del servidor (IO)'; // cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Error de d\'actualitzacions de seguretat'; // cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'excedit el límit de càrrega.'; // cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Fallada en la validació. Càrrega omesa.'; // Cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Heu posat massa fitxers en cua.'; // cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Heu arribat al límit de càrrega.'; // cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Pots seleccionar fins %s fitxer(s)'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File usermgr.php
// -------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Membres';
$lang_usermgr_php['user_manager'] = 'Gestor d\'usuaris';
$lang_usermgr_php['title'] = 'Gestiona usuaris';
$lang_usermgr_php['name_a'] = 'Nom ascendent';
$lang_usermgr_php['name_d'] = 'Nom descendent';
$lang_usermgr_php['group_a'] = 'Grups ascendent';
$lang_usermgr_php['group_d'] = 'Grups descendent';
$lang_usermgr_php['reg_a'] = 'Data de registre ascendent';
$lang_usermgr_php['reg_d'] = 'Data de registre descendent';
$lang_usermgr_php['pic_a'] = 'Nombre de fitxers ascendent';
$lang_usermgr_php['pic_d'] = 'Nombre de fitxers descendent';
$lang_usermgr_php['disku_a'] = 'Ús de disc ascendent';
$lang_usermgr_php['disku_d'] = 'Ús de disc descendent';
$lang_usermgr_php['lv_a'] = 'Última visita ascendent';
$lang_usermgr_php['lv_d'] = 'Última visita descendent';
$lang_usermgr_php['sort_by'] = 'Ordena usuaris per';
$lang_usermgr_php['err_no_users'] = 'La taula d\'usuaris és buida!';
$lang_usermgr_php['err_edit_self'] = 'No pots editar aquí el teu propi perfil. Utilitza l\'enllaç \'el meu perfil\'';
$lang_usermgr_php['with_selected'] = 'Actuar en els usuaris marcats:';
$lang_usermgr_php['delete_files_no'] = 'Mantenir els fitxers públics (però anònims)';
$lang_usermgr_php['delete_files_yes'] = 'esborrar també els fitxers públics';
$lang_usermgr_php['delete_comments_no'] = 'Mantenir els comentaris (però posar-los anònims)';
$lang_usermgr_php['delete_comments_yes'] = 'esborrar també els comentaris';
$lang_usermgr_php['activate'] = 'Activa';
$lang_usermgr_php['deactivate'] = 'Desactiva';
$lang_usermgr_php['reset_password'] = 'Canvia la contrasenya';
$lang_usermgr_php['change_primary_membergroup'] = 'Canviar el grup primari';
$lang_usermgr_php['add_secondary_membergroup'] = 'Afegeix grup secundari';
$lang_usermgr_php['name'] = 'Nom';
$lang_usermgr_php['group'] = 'Grup';
$lang_usermgr_php['inactive'] = 'Inactiu';
$lang_usermgr_php['operations'] = 'Operacions';
$lang_usermgr_php['pictures'] = 'Arxius';
$lang_usermgr_php['disk_space_used'] = 'Espai usat';
$lang_usermgr_php['disk_space_quota'] = 'Quota'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registre';
$lang_usermgr_php['last_visit'] = 'Última visita';
$lang_usermgr_php['u_user_on_p_pages'] = '%d usuaris en %d pàgina(es)';
$lang_usermgr_php['confirm_del'] = 'Estàs segur d\'ESBORRAR a aquest ususari? \\nTots els seus àlbums i fitxers també s\'esborraran.'; // js-alert
$lang_usermgr_php['mail'] = 'CORREU';
$lang_usermgr_php['err_unknown_user'] = 'L\'usuari indicat no existeix';
$lang_usermgr_php['modify_user'] = 'Modificar usuari';
$lang_usermgr_php['notes'] = 'Notes';
$lang_usermgr_php['note_list'] = 'Si no vols canviar la contrasenya deixa en blanc el camp "contrasenya"';
$lang_usermgr_php['password'] = 'Contrasenya';
$lang_usermgr_php['user_active'] = 'Actiu';
$lang_usermgr_php['user_group'] = 'Grup';
$lang_usermgr_php['user_email'] = 'Correu';
$lang_usermgr_php['user_web_site'] = 'lloc web';
$lang_usermgr_php['create_new_user'] = 'Crea un usuari';
$lang_usermgr_php['user_location'] = 'Localització';
$lang_usermgr_php['user_interests'] = 'Interessos';
$lang_usermgr_php['user_occupation'] = 'Ocupació';
$lang_usermgr_php['user_profile1'] = '$ user_profile1';
$lang_usermgr_php['user_profile2'] = '$ user_profile2';
$lang_usermgr_php['user_profile3'] = '$ user_profile3';
$lang_usermgr_php['user_profile4'] = '$ user_profile4';
$lang_usermgr_php['user_profile5'] = '$ user_profile5';
$lang_usermgr_php['user_profile6'] = '$ user_profile6';
$lang_usermgr_php['latest_upload'] = 'Pujades recents';
$lang_usermgr_php['no_latest_upload'] = 'No ha pujat fitxers'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Darrers comentaris'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'No has fet comentaris'; // cpg1.5
$lang_usermgr_php['comments'] = 'Comentaris'; // cpg1.5
$lang_usermgr_php['never'] = 'mai';
$lang_usermgr_php['search'] = 'Cerca d\'usuaris';
$lang_usermgr_php['submit'] = 'Envia';
$lang_usermgr_php['search_submit'] = 'Cerca';
$lang_usermgr_php['search_result'] = 'Resultats de la recerca de:';
$lang_usermgr_php['alert_no_selection'] = 'Has de seleccionar almenys un usuari abans!'; // js-alert
$lang_usermgr_php['select_group'] = 'Selecciona grup';
$lang_usermgr_php['groups_alb_access'] = 'Permisos a l\'àlbum per grup';
$lang_usermgr_php['category'] = 'Categoria';
$lang_usermgr_php['modify'] = 'Modificar';
$lang_usermgr_php['group_no_access'] = 'Aquest grup no té accés especial';
$lang_usermgr_php['notice'] = 'Tingues en compte';
$lang_usermgr_php['group_can_access'] = 'àlbum(s) als quals pot accedir "%s"';
$lang_usermgr_php['send_login_data'] = 'Envia informació d\'accés a l\'usuari (la contrasenya anirà per correu)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'La informació del teu compte nou'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'No s\'ha pogut enviar el correu amb les dades d\'accés'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Veure perfil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Editar perfil'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Expulsar usuari'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Usuari expulsat'; // cpg1.5
$lang_usermgr_php['status'] = 'Estat'; // cpg1.5
$lang_usermgr_php['status_active'] = 'actiu'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'inactiu'; // cpg1.5
$lang_usermgr_php['total'] = 'Total'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
S´ha creat un compte a {SITENAME} per a tu.
Pots accedir a <a href="{SITE_LINK}">{site_link}</a> amb l´usuari "{USER_NAME}" i contrasenya "{USER_PASS}"
Salutacions,

Els gestors de {SITENAME }

EOT;
}

// -------------------------------------------------------------------------- //
// File update.php
// -------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Actualització'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Benvingut a l\'actualització de Coppermine'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'No s\'ha pogut verificar la identitat'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Proporciona les credencials del teu compte d\'administrador de Coppermine o les dades del teu compte MySQL'; // cpg1.5
$lang_update_php['try_again'] = 'Intenta-ho de nou'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'No s\'ha pogut crear una connexió a MySQL'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL no ha trobat una base de dades anomenada %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL ha dit'; // cpg1.5
$lang_update_php['check_config_file'] = 'Si us plau, comprova els detalls de MySQL a %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Fer les actualitzacions de base de dades'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Fer les actualitzacions de fitxers'; // cpg1.5
$lang_update_php['already_done'] = 'Ja estava fet'; // cpg1.5
$lang_update_php['password_encryption'] = 'Encriptació de contrasenyes'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Encriptació de contrasenyes d\'àlbum'; // cpg1.5
$lang_update_php['category_tree'] = 'Arbre de categories'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Es necessita identificació'; // cpg1.5
$lang_update_php['username'] = 'Usuari'; // cpg1.5
$lang_update_php['password'] = 'Contrasenya'; // cpg1.5
$lang_update_php['update_completed'] = 'S\'ha acabat l\'actualització'; // cpg1.5
$lang_update_php['check_versions'] = 'Es recomanable fer un xequeig %scheck your file versions%s si has actualitzat des d\'una versió anterior de Coppermine'; // cpg1.5 // Leave the %s Untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Si no és el cas (o no vols fer-ho), pots anar a la pàgina d\'inici de la vostra galeria %syour gallery\'s start page%s'; // cpg1.5 // Leave the %s Untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'S\'han trobat aquests errors, que cal corregir abans'; // cpg1.5
$lang_update_php['delete_file'] = 'Esborrar %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'No s\'ha pogut esborrar per falta de permisos. Esborra el fitxer a mà'; // cpg1.5
$lang_update_php['rename_file'] = 'Canvia el nom %sa %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'No s\'ha pogut canviar el nom per falta de permisos. Reanomena el fitxer a mà'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File util.php
// -------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Eines administratives'; // cpg1.5
$lang_util_php['file'] = 'Fitxer';
$lang_util_php['problem'] = 'Problema';
$lang_util_php['status'] = 'Estat';
$lang_util_php['title_set_to'] = 'títol cambiat a';
$lang_util_php['submit_form'] = 'enviar';
$lang_util_php['titles_updated'] = '%s títols canviats.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'canviat amb èxit'; // cpg1.5
$lang_util_php['error_create'] = 'ERROR creant';
$lang_util_php['continue'] = 'Processar més fitxers'; // cpg1.5
$lang_util_php['main_success'] = 'El fitxer %s es va usar amb èxit com a fitxer principal';
$lang_util_php['error_rename'] = 'Error al canviar el nom %s a %s';
$lang_util_php['ERROR_NOT_FOUND'] = 'No s\'ha pogut trobar el fitxer %s';
$lang_util_php['back'] = 'tornar a l\'inici d\'Eines administratives'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Actualitzant miniatures i/o reescalant imatges, espera...';
$lang_util_php['thumbs_continue_wait'] = 'Contina actualitzant miniatures i/o reescalant imatges, espera...';
$lang_util_php['titles_wait'] = 'Actualitzant títols, espera si us plau...';
$lang_util_php['delete_wait'] = 'Esborrant títols, espera si us plau...';
$lang_util_php['replace_wait'] = 'Esborrant originals i reemplaçant amb les imatges reescaladas, espera si us plau..';
$lang_util_php['update'] = 'Actualitzar miniatures i/o reescalar imatges';
$lang_util_php['update_what'] = 'Què haureu d\'actualitzar';
$lang_util_php['update_thumb'] = 'Només miniatures';
$lang_util_php['update_pic'] = 'Només imatges reescaladas';
$lang_util_php['update_both'] = 'Miniatures i imatges reescaladas';
$lang_util_php['update_number'] = 'Número d\'imatges processades en bloc';
$lang_util_php['update_option'] = '(Prova a posar un número menor si experimentes problemes de timeout)';
$lang_util_php['update_missing'] = 'Actualitzar només els fitxers perduts'; // cpg1.5
$lang_util_php['filename_title'] = 'Fitxer? Títol del fitxer';
$lang_util_php['filename_how'] = 'Com s\'ha de modificar el nom de fitxer';
$lang_util_php['filename_remove'] = 'Treure l\'extensió (.jpg o que tingui) i reemplaçar _ (guió baix) amb espais'; // cpg1.5
$lang_util_php['filename_euro'] = 'Canviar 2003_11_23_13_20_20.jpg a 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Canviar 2003_11_23_13_20_20.jpg a 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Canviar 2003_11_23_13_20_20.jpg a 13:20';
$lang_util_php['notitle'] = 'Aplicar només als fitxers amb el títol buit'; // cpg1.5
$lang_util_php['delete_title'] = 'Esborrar els títols';
$lang_util_php['delete_title_explanation'] = 'Això esborrarà tots els títols d\'arxiu de l\'àlbum que seleccions.';
$lang_util_php['delete_original'] = 'Esborrar les imatges de mida original';
$lang_util_php['delete_original_explanation'] = 'Esborrarà les imatges de mida completa i deixarà les de grandària intermèdia.';
$lang_util_php['delete_intermediate'] = 'Esborrar les imatges intermèdies';
$lang_util_php['delete_intermediate_explanation1'] = 'Esborrarà les imatges de grandària intermèdia (normal).'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Fes servir aquesta opció per alliberar espai en disc si has deshabilitat \'Crear imatges intermèdies\' a la configuració després que tinguessis ja imatges.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'La opció de configuració \'Crear imatges intermèdies\' està establida a %s.'; // cpg1.5
$lang_util_php['no_image'] = 'M\'he saltat %s perquè no és una imatge.'; // cpg1.5
$lang_util_php['enabled'] = 'activat'; // cpg1.5
$lang_util_php['disabled'] = 'desactivat'; // cpg1.5
$lang_util_php['delete_replace'] = 'Elimina totes les imatges reemplaçant amb els arxius reescalats';
$lang_util_php['titles_deleted'] = 'Esborrats tots els títols de l\'àlbum especificat';
$lang_util_php['deleting_intermediates'] = 'Esborrant imatges intermèdies. Espera, si us plau...';
$lang_util_php['searching_orphans'] = 'Buscant orfes. Espera, si us plau...';
$lang_util_php['delete_orphans'] = 'Esborrar comentaris orfes';
$lang_util_php['delete_orphans_explanation'] = 'Buscarà i prepararà per esborrar els comentaris associats a fitxers que ja no existeixen a la galeria.<br />Comprova tots els àlbums.';
$lang_util_php['update_full_normal_thumb'] = 'Tot: mida completa, reescaladas (intermèdies) i miniatures'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Tant les intermèdies com les de mida completa (si l\'original està disponible)'; // cpg1.5
$lang_util_php['update_full'] = 'Només les de mida completa (si l\'original està disponible)'; // cpg1.5
$lang_util_php['delete_back'] = 'Esborrar originals de les imatges amb marca d\'aigua'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Això esborrarà la còpia de seguretat. Allibera l\'espai però no podràs desfer la marca d\'aigua! Després d\'això la marca d\'aigua serà permanent.'; // Cpg1.5
$lang_util_php['finished'] = '<br />Acabada l\'actualització de miniatures/imatges!<br />'; // cpg1.5
$lang_util_php['Autorefresh'] = 'Refresc automàtic (no hi haurà necessitat de prémer botons en el procés)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Recarregar la informació de dimensions i mida';
$lang_util_php['refresh_db_explanation'] = 'Tornar a llegir les mides i dimensions dels fitxers. Fes-lo servir quan les quotes de disc no sigui correctes i/o canviïs a mà algun fitxer manualment.';
$lang_util_php['reset_views'] = 'Posar a zero els comptadors de visites';
$lang_util_php['reset_views_explanation'] = 'Posa a zero els comptadors de visites de totes les imatges de l\'àlbum seleccionat.';
$lang_util_php['reset_success'] = 'Posada a zero'; // cpg1.5
$lang_util_php['orphan_comment'] = 'comentaris orfes trobats';
$lang_util_php['delete_all'] = 'Esborrar tots';
$lang_util_php['delete_all_orphans'] = 'Esborrar tots els orfes?';
$lang_util_php['comment'] = 'Comentari:';
$lang_util_php['nonexist'] = 'associat a un fitxer inexistent #';
$lang_util_php['delete_old'] = 'Esborrar arxius més antics que un nombre donat de dies'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Esborrarà els fitxers anteriors al nombre de dies que especifiquis (mida completa, intermedis i miniatures). Es pot usar per alliberar espai traient els més antics.'; // Cpg1.5
$lang_util_php['delete_old_warning'] = 'Avís: Aquest és l\'últim avís! Els fitxers passaran a millor vida sense preguntar-t\'ho més!'; // Cpg1.5
$lang_util_php['deleting_old'] = 'Esborrant fitxers antics. Esperi, si us plau...'; // cpg1.5
$lang_util_php['older_than'] = 'Esborrar fitxers amb més de %s dies d\'antiguitat'; // cpg1.5
$lang_util_php['del_orig'] = 'Fitxer original %s esborrat amb èxit'; // cpg1.5
$lang_util_php['del_intermediate'] = 'Imatge intermèdia %s esborrada amb èxit'; // cpg1.5
$lang_util_php['del_thumb'] = 'Miniatura %s esborrada amb èxit'; // cpg1.5
$lang_util_php['del_error'] = 'Error en esborrar %s'; // cpg1.5
$lang_util_php['affected_records'] = '%s registres afectats.'; // cpg1.5
$lang_util_php['all_albums'] = 'Tots els àlbums'; // cpg1.5
$lang_util_php['update_result'] = 'Resultat de l\'actualització'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Mida total dels fitxers incorrecte'; // cpg1.5
$lang_util_php['database'] = 'Base de dades:'; // cpg1.5
$lang_util_php['bytes'] = 'bytes'; // cpg1.5
$lang_util_php['actual'] = 'Actual:'; // cpg1.5
$lang_util_php['updated'] = 'actualització'; // cpg1.5
$lang_util_php['filesize_error'] = 'No pot llegir la mida del fitxer (podria ser incorrecte); saltant....'; // cpg1.5
$lang_util_php['skipped'] = 'Saltat'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Dimensions incorrectes'; // cpg1.5
$lang_util_php['dimension_error'] = 'No s\'ha pogut llegir les dimensions de la imatge; saltant....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'No s\'ha pogut arreglar'; // cpg1.5
$lang_util_php['fullpic_error'] = 'No existeix el fitxer %s'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'No s\'han detectat problemes'; // cpg1.5
$lang_util_php['no_prob_found'] = 'No s\'han trobat problemes.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Converteix el separador de paraules clau'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Convertir el separdor de %s a %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Posar el separador de paraules clau al nou valor'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Abans de convertir canvia %s amb %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Després de convertir canvia %s amb %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array ('_'=>'guió baix', '-'=>'guió', '~'=>'tilde') ; // cpg1.5
$lang_util_php['keyword_explanation'] = 'Això canviarà el caràcter que fa de paraula clau d\'un valor a un altre en tots els teus fitxers. Llegeix la documentació per entrar en detall.'; // Cpg1.5
}

// -------------------------------------------------------------------------- //
// File versioncheck.php
// -------------------------------------------------------------------------- //
if (defined(' VERSIONCHECK_PHP ')) {
$lang_versioncheck_php['title'] = 'Comprovar versions';
$lang_versioncheck_php['versioncheck_output'] = 'Sortida de la comprovació';
$lang_versioncheck_php['file'] = 'arxiu' ;
$lang_versioncheck_php['folder'] = 'carpeta';
$lang_versioncheck_php['outdated'] = 'més antic que %s';
$lang_versioncheck_php['newer'] = 'més nou que %s';
$lang_versioncheck_php['modified'] = 'modificat';
$lang_versioncheck_php['not_modified'] = 'sense modificar'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'necessita canvi';
$lang_versioncheck_php['review_permissions'] = 'Comprova els permisos';
$lang_versioncheck_php['inaccessible'] = 'No es pot accedir al fitxer' ;
$lang_versioncheck_php['review_version'] = 'El teu fitxer està caducat';
$lang_versioncheck_php['review_dev_version'] = 'El teu fitxer és més nou del que s\'esperava';
$lang_versioncheck_php['review_modified'] = 'El fitxer està corrupte (o l\'has editat deliberadament)';
$lang_versioncheck_php['review_missing'] = '%s no existeix o està inaccessible';
$lang_versioncheck_php['existing'] = 'existeix';
$lang_versioncheck_php['review_removed_existing'] = 'S\'ha de suprimir el fitxer per raons de seguretat';
$lang_versioncheck_php['counter'] = 'Contador';
$lang_versioncheck_php['type'] = 'Tipus';
$lang_versioncheck_php['path'] = 'Ruta';
$lang_versioncheck_php['missing'] = 'no existeix';
$lang_versioncheck_php['permissions'] = 'Permisos';
$lang_versioncheck_php['version'] = 'Versió';
$lang_versioncheck_php['revision'] = 'Revisió';
$lang_versioncheck_php['modified'] = 'Modificat';
$lang_versioncheck_php['comment'] = 'Comentari';
$lang_versioncheck_php['help'] = 'Ajuda';
$lang_versioncheck_php['repository_link'] = 'Enllaç al repositori';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Obre al navegador la pàgina correponent a aquest fitxer al repositori de la sub versió';
$lang_versioncheck_php['mandatory'] = 'obligatori';
$lang_versioncheck_php['mandatory_missing'] = 'Fitxer obligatori no existeix'; // cpg1.5
$lang_versioncheck_php['optional'] = 'opcional';
$lang_versioncheck_php['removed'] = 'esborrar'; // cpg1.5
$lang_versioncheck_php['options'] = 'Opcions' ;
$lang_versioncheck_php['display_output'] = 'Sortida';
$lang_versioncheck_php['on_screen'] = 'Sortida completa';
$lang_versioncheck_php['text_only'] = 'Només text';
$lang_versioncheck_php['errors_only'] = 'Mostra només els possibles errors';
$lang_versioncheck_php['hide_images'] = 'No comprovar imatges'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'No comprovar els fitxers modificats'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'No connectar al repositori';
$lang_versioncheck_php['online_repository_explain'] = 'només recomanable si la connexió falla';
$lang_versioncheck_php['submit'] = 'enviar / refrescar';
$lang_versioncheck_php['select_all'] = 'Selecciona-ho tot'; // js - alert
$lang_versioncheck_php['files_folder_processed'] = 'Mostrant %s entrades de %s carpetes/fitxers processats amb %s possibles problemes';
$lang_versioncheck_php['read'] = 'Llegir'; // cpg1.5
$lang_versioncheck_php['write'] = 'Escriure'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Avís'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File view_log.php
// -------------------------------------------------------------------------- //
if (defined(' VIEWLOG_PHP ')) {
$lang_viewlog_php['delete_all'] = 'Esborrar tots els registres';
$lang_viewlog_php['delete_this'] = 'Esborrar aquest registre';
$lang_viewlog_php['view_logs'] = 'Veure registres' ;
$lang_viewlog_php['no_logs'] = 'No hi ha registres.';
$lang_viewlog_php['last_updated'] = 'modificat per última vegada'; // cpg1.5
}

// -------------------------------------------------------------------------- //
// File xp_publish.php
// -------------------------------------------------------------------------- //
if (defined(' XP_PUBLISH_PHP ')) {
$lang_xp_publish_php['title'] = 'Assistent de publicació en web per XP';
$lang_xp_publish_php['client_header'] = 'Client de l\'assistent de publicació en web per XP'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Requisits'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP/Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Sembla que estàs executant un altre sistema operatiu que no està suportat'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'No s\'ha pogut determinar el sistema operatiu que utilitzes'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Una configuració de Coppermine funcionant en què la funció de pujada d\'http funcioni correctament'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'El gestor de la galeria ha haver-te donat permisos de pujada de fitxers'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Necessiteu estar validat per pujar fitxers'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Sembla que utilitzeu un navegador no suportat'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'No s\'ha pogut identificar el teu navegador'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Necessites especificar el nom d\'una galeria en la configuració'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Necessites especificar la descripció d\'una galeria en la configuració'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Com instal·lar'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Apreta el botó dret sobre %sthis link%s i selecciona "Guardar com..."'; // cpg1.5 // translator note :your replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Desa el fitxer en la teva màquina. Assegura\'t que el nom de fitxer és de la forma <tt> cpg_###.reg</tt> (els caràcters ### representen un codi de temps). Si no es així canvia-ho perquè tingui aquesta forma (deixa els números)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Després de la descàrrega, executa el fitxer fent doble clic sobre ell per registrar el teu servidor en l\'assistent de publicació web de Windows'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Ús'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'En l\'explorador de Windows selecciona els fitxers que vols pujar'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Assegura\'t que la llista de carpetes no està a l\'esquerra de la finestra, prement "Carpetes" al menú de botons. Si no està el botó de carpetes fes clic amb el botó dret sobre el menú i tria que es mostraria el menú "Botons estàndard"'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'Feu clic sobre "Publicar aquest arxiu en web" o "Publica al web els elements seleccionats "al panell de l\'esquerra'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Confirma la selecció de fitxers que has fet'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'A la llista de serveis que apareixerà selecciona el corresponent a la teva galeria (és el nom de la galeria)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Introdueix la teva informació d\'accés si cal'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Seleccioneu l\'àlbum on vols guardar els arxius, o crea\'n un de nou'; // cpg1.5
$lang_xp_publish_php['next'] = 'Cliqueu a "següent"'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Hauria de començar la càrrega dels teus arxius'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Quan acabi, comproveu les vostres galeria per veure si s\'han carregat correctament'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Benvingut, <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Necessites validar-tw a la galeria mitjançant Internet Explorer abans d\'usar aquest assistent.<p/><p>En validar-te no oblidis seleccionar l\'opció "Recordar-me" si està present.';
$lang_xp_publish_php['no_alb'] = 'Ho sento, però no hi ha cap àlbum en el que tinguis permès per pujar imatges amb aquest assistent.';
$lang_xp_publish_php['upload'] = 'Carregar les teves imatges en un àlbum anterior';
$lang_xp_publish_php['create_new'] = 'Crea un nou àlbum per les teves imatges';
$lang_xp_publish_php['category'] = 'Categoria';
$lang_xp_publish_php['new_alb_created'] = 'S\'ha creat el àlbum "<strong>%s</strong>".';
$lang_xp_publish_php['continue'] = 'Prem "Següent" per carregar les imatges';
$lang_xp_publish_php['link'] = '';
}

// -------------------------------------------------------------------------- //
// Core plugins
// -------------------------------------------------------------------------- //
if (defined(' CORE_PLUGIN ')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Pestanyes alfabètiques de galeries d\'usuaris'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Què fa: mostra les fitxes de l\'A a la Z a la part superior de les galeries en que els visitants poden fer clic i anar directament a una pàgina que mostra totes les galeries dels usuaris en que el nom d\'usuari comença per aquesta lletra. Aquest Plugin només es recomana per ser utilitzat si vostè té un molt gran nombre de galeries d\'usuari.'; // Cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Saltar per nom d\'usuari'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Per exemple WordPress'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Per exemple WordPress. No fa res particularment útil-pensat per mostrar què poden fer els plugins i com programar-los. En activar-lo mostrarà un text d\'exemple en vermell.'; // Cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Documentació del Plugin'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Suport del Plugin'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Introdueix el nom d\'usuari (\'foo\') i contrasenya (\'bar\') per instal·lar'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Usuari'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Contrasenya'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Aquest és el text retornat pel connector d\'exemple'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'Una implementació de <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> per Coppermine.<br />Quan s\'activa, els usuaris poden afegir la seva galeria a la barra de cerques del navegador.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Cerca %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Potser vulguis afegir un text a u galeria o al teu lloc web que expliqui quà fa aquest plugin'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Error en obrir el fitxer %s - comprova els permisos'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Error en escriure al fitxer %s - comprova els permisos'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Introdueix els detalls que aniran en el fitxer de descripció'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'URL de la galeria (assegura\'t que és correcta)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Nom com es mostra en el navegador'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Descripció'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = 'límit de caràcters %s'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Mostra un bloc de text en cada pàgina mostrant quants usuaris i visitants hi ha connectats en aquest moment.';
$lang_plugin_php['onlinestats_name'] = 'Qui està connectat?';
$lang_plugin_php['onlinestats_config_extra'] = 'Per habilitar el connector (fer que mostri el bloc d\'estadístiques en línia), s\'ha afegit la cadena "onlinestats" (separada amb una barra invertida) al "contingut de la pàgina principal" a la <a href=" admin.php">configuració del Coppermine</a>, secció "Vista de la llista d\'àlbums". Aquest paràmetre serà una cosa semblant a "breadcrumb/catlist/alblist/onlinestats". Per canviar la posició del bloc de text, mou la cadena "onlinestats" al camp, i vés amb compte amb les barres invertides.';
$lang_plugin_php['onlinestats_config_install'] = 'El Plugin executa consultes addicionals a la base de dades per a cada pàgina, consumint recursos i cicles de CPU. Si la teva galeria Coppermine és lenta o té molts usuaris no hauries usar-lo.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Hi ha %s usuari registrat';
$lang_plugin_php['onlinestats_we_have_reg_members'] = 'Hi ha %s usuaris registrats';
$lang_plugin_php['onlinestats_most_recent'] = 'El darrer usuari registrat és %s';
$lang_plugin_php['onlinestats_is'] = 'En total hi ha %s visitant connectats';
$lang_plugin_php['onlinestats_are'] = 'En total hi ha %s visitants connectats';
$lang_plugin_php['onlinestats_and'] = 'i';
$lang_plugin_php['onlinestats_reg_member'] = '%s usuari registrat';
$lang_plugin_php['onlinestats_reg_members'] = '%s usuaris registrats';
$lang_plugin_php['onlinestats_guest'] = '%s convidat';
$lang_plugin_php['onlinestats_guests'] = '%s convidats';
$lang_plugin_php['onlinestats_record'] = 'Màxims usuaris connectats :%s a %s';
$lang_plugin_php['onlinestats_since'] = 'Usuaris registrats connectats en els últims %s minuts: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Quant de temps ha de passar abans de considerar que un usuari s\'ha desconectat?';
$lang_plugin_php['onlinestats_minute'] = 'minuts';
$lang_plugin_php['onlinestats_remove'] = 'Esborrar la taula usada per les estadístiques en línia?';
$lang_plugin_php['link_target_name'] = 'Destinació de l\'enllaç' ;
$lang_plugin_php['link_target_description'] = 'Canvia la manera d\'obrir dels enllaços: quan s\'habilita, els enllaços amb l\'atribut rel="external" s\'obriran en una altra finestra (en lloc de ser la mateixa finestra).';
$lang_plugin_php['link_target_extra'] = 'Sobretot tindrà impacte en els enllaços "Powered by Coppermine" a la part baixa de la pàgina de la galeria.';
$lang_plugin_php['link_target_recommendation'] = 'No és recomanable fer servir el plugin per evitar controlar als teus usuaris: obrir enllaços en noves finestres és una forma de manipular als visitants.';
}

?>