<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Zure erantzuna ^site_title -(e)n ^c_handle -(r)en iruzkin berria du:\n\n^open^c_content^close\n\nZure erantzuna hau izan zen:\n\n^open^c_context^close\n\nIruzkin bat idazten erantzun dezakezu:\n\n^url\n\nEskerrik asko,\n\n^site_title",
		'a_commented_subject' => 'Zure erantzuna ^site_title -(e)n erantzun berria du',

		'a_followed_body' => "Zure erantzuna ^site_title -(e)n ^q_handle -(r)en erlazionatutako galdera berria du:\n\n^open^q_title^close\n\nZure erantzua hau izan zen:\n\n^open^a_content^close\n\nSakatu hurrengo estekan galdera berria erantzuteko:\n\n^url\n\nEskerrik asko,\n\n^site_title",
		'a_followed_subject' => 'Zure erantzuna ^site_title -(e)n erlazionatutako galdera berria du.',

		'a_selected_body' => "Zorionak! ^s_handle -(e)k zure erantzuna onena bezala hautatu du ^site_title -(e)n:\n\n^open^a_content^close\n\nGaldera hau zen:\n\n^open^q_title^close\n\nHurrengo estekan sakatu zure erantzuna ikusteko:\n\n^url\n\nEskerrik asko,\n\n^site_title",
		'a_selected_subject' => 'Zure erantzuna ^site_title -(e)n onena bezala hautatu da!',

		'c_commented_body' => "^c_handle -(r)en iruzkin berria zure iruzkinaren atzean gehitu da ^site_title -(e)n:\n\n^open^c_content^close\n\nHemen ikusi dezakezu:\n\n^open^c_context^close\n\nBeste iruzkina gehitzen erantzun dezakezu:\n\n^url\n\nEskerrik asko,\n\n^site_title",
		'c_commented_subject' => 'Iruzkin berria gehitu da zure iruzkinaren atzean ^site_title -(e)n.', 

		'confirm_body' => "Mesedez, sakatu hurrengo estekan ^site_title -(e)n erregitroa baieztatzeko.\n\n^url\n\nEskerrik asko,\n^site_title",
		'confirm_subject' => '^site_title - Erregistro baieztapena',

		'feedback_body' => "Iruzkinak:\n^message\n\nIzena:\n^name\n\nPosta elektronikoa:\n^email\n\nAurreko orrialdea:\n^previous\n\nErabiltzailea:\n^url\n\nIP helbidea:\n^ip\n\nNabigatzailea:\n^browser",
		'feedback_subject' => '^ feedback',

		'flagged_body' => "^p_handle -(r)en argitalpen bat ^flags jaso ditu:\n\n^open^p_context^close\n\nEsteka sakatu argitalpena ikusteko:\n\n^url\n\n\nEstekan sakatu markatutako argitalpen guztiak ikusteko:\n\n^a_url\n\n\nEskerrik asko,\n\n^site_title",
		'flagged_subject' => '^site_title makatutako argitalpena du',

		'moderate_body' => "^p_handle -(r)en sarrera bat zure onespena behar du:\n\n^open^p_context^close\n\nEsteka sakatu sarrera onesteko edo ezeztatzeko:\n\n^url\n\nEstekan sakatu zerrendatutako argitalpen guztiak ikusteko:\n\n^a_url\n\n\nEskerrik asko,\n\n^site_title",
		'moderate_subject' => '^site_title -(e)ko moderaketa',

		'new_password_body' => "Zure ^site_title -(e)ko pasahitz berria hurrengoa da.\n\nPasahitza: ^password\n\nWebgunean sartu eta gero pasahitza aldatzea gomendatzen dugu.\n\nEskerrik asko,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Zure pasahitz berria',

		'private_message_body' => "^f_handle mezu pribatua bidali dizu ^site_title -(e)n:\n\n^open^message^close\n\n^moreEskerrik asko,\n\n^site_title\n\n\nMezu pribatuak blokeatzeko zure erabiltzaile orrialdea ikusi:\n^a_url",
		'private_message_info' => '^f_handle buruzko informazio gehiago:\n\n^url\n\n',
		'private_message_reply' => "Esteka sakatu ^f_handle -(r)i mezu pribatuz erantzuteko:\n\n^url\n\n",
		'private_message_subject' => '^f_handle -(r)en mezua ^site_title -(e)n',

		'q_answered_body' => "^a_handle -(e)k zure galdera erantzun du ^site_title -(e)n:\n\n^open^a_content^close\n\nZure galdera hau izan zen:\n\n^open^q_title^close\n\nErantzuna gustokoa baduzu, onena bezala marka beharko zenuke:\n\n^url\n\nEskerrik asko,\n\n^site_title",
		'q_answered_subject' => 'Zure galdera erantzuna jaso du ^site_title -(e)n',

		'q_commented_body' => "^c_handle -(e)k zure galdera iruzkindu du ^site_title -(e)n:\n\n^open^c_content^close\n\nZure galdera hau izan zen:\n\n^open^c_context^close\n\nIruzkin berria idazten erantzun beharko zenuke:\n\n^url\n\nEskerrik asko,\n\n^site_title",
		'q_commented_subject' => 'Zure galdera ^site_title -(e)n iruzkin berria du',

		'q_posted_body' => "^q_handle -(e)k galdera berria egin du:\n\n^open^q_title\n\n^q_content^close\n\nHurrengo estekan sakatu galdera ikusteko:\n\n^url\n\nEskerrik asko,\n\n^site_title",
		'q_posted_subject' => '^site_title galdera berriak ditu',
		
		'remoderate_body' => "^p_handle -(r)en sarrera bat zure onespena behar du:\n\n^open^p_context^close\n\nEsteka sakatu sarrera onesteko edo ezkutatzeko:\n\n^url\n\n\nEsteka sakatu zerrendatutako argitalpen guztiak ikusteko:\n\n^a_url\n\n\nThank you,\n\n^site_title",
		'remoderate_subject' => '^site_title moderazioa',

		'reset_body' => "Mesedez, hurrengo estekan sakatu zure ^site_title -(e)ko pasahitza aldatzeko.\n\n^url\n\Alternatiba moduan, hurrengo kodea emandako eremuan idatzi.\n\nCode: ^code\n\nPasahitz aldaketa eskatu ez baduzu, mesedez, mezu hau alde batera utzi.\n\nEskerrik asko,\n^site_title",
		'reset_subject' => '^site_title - Pasahitza berriz aktibatu',

		'to_handle_prefix' => "^,\n\n",
		
		'u_registered_body' => "Erabiltzaile berria ^u_handle izenarekin erregistratu da.\n\nEsteka sakatu erabiltzailearen profila ikusteko:\n\n^url\n\nEskerrik asko,\n\n^site_title",
		'u_to_approve_body' => "Erabiltzaile berria ^u_handle izenarekin erregistratu da.\n\nEsteka sakatu erabiltzailea baieztatzeko:\n\n^url\n\nEsteka sakatu baieztapena itxaroten dauden erabiltzaile guztiak ikusteko:\n\n^a_url\n\nEskerrik asko,\n\n^site_title",
		'u_registered_subject' => '^site_title erabiltzaile berria du',
		
		'u_approved_body' => "Zure erabiltzaile profil berria hemen ikus dezakezu:\n\n^url\n\nEskerrik asko,\n\n^site_title",
		'u_approved_subject' => 'Zure ^site_title erabiltzailea baieztatu da',
		
		'wall_post_subject' => 'Argitalpen berria zure ^site_title -(e)ko horman',
		'wall_post_body' => "^f_handle -(e)k zure ^site_title -(e)ko horman argitalpena egin du:\n\n^open^post^close\n\nHemen erantzun dezakezu:\n\n^url\n\nEskerrik asko,\n\n^site_title",

		'welcome_body' => "Eskerrik asko ^site_title -(e)n erregistratzeagatik.\n\n^custom^confirmZure datuak hurrengoak dira:\n\nErabiltzaile izena: ^handle\nPosta elektronikoa: ^email\nPasahitza: ^password\n\nMesedez, informazio hau eskuragarri izan eta leku seguru batean gorde.\n\nEskerrik asko,\n\n^site_title\n^url", 
		'welcome_confirm' => "Mesedez, hurrengo estekan sakatu erregistroa baieztatzeko.\n\n^url\n\n",
		'welcome_subject' => 'Ongi etorri ^site_title -(e)ra!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
