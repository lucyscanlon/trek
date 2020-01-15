<?php


$fontArray = get_theme_mod('blog_title_font_control', 127 );
$blogTitleLetterSpacing = get_theme_mod('slider_blogtitlefont_letterspacing', 4 );




switch ($fontArray) {
  case 0:
    $mainFont = 'Open+Sans:400,400i,700,800i';
    $cssFont = "Open Sans";
    break;

  case 1:
    $mainFont = 'Oswald:400,700';
    $cssFont = "Oswald";
    break;

  case 2:
    $mainFont = 'Roboto:400,400i,500i,700';
    $cssFont = "Roboto";
    break;

  case 3:
    $mainFont = 'Lato:400,400i,700,700i';
    $cssFont = "Lato";
    break;

  case 4:
    $mainFont = 'Open+Sans+Condensed:300,300i,700';
    $cssFont = "Open Sans Condensed";
    break;

  case 5:
    $mainFont = 'PT+Sans:400,400i,700,700i';
    $cssFont = "PT Sans";
    break;

  case 6:
    $mainFont = 'Ubuntu:400,400i,500,500i';
    $cssFont = "Ubuntu";
    break;

  case 7:
    $mainFont = 'PT+Sans+Narrow:400,700';
    $cssFont = "PT Sans Narrow";
    break;

  case 8:
    $mainFont = 'Raleway:400,400i,700,700i';
    $cssFont = "Raleway";
    break;

  case 9:
    $mainFont = 'Yanone+Kaffeesatz:400,600';
    $cssFont = "Yanone Kaffeesatz";
    break;

  case 10:
    $mainFont = 'Lobster';
    $cssFont = "Lobster";
    break;

  case 11:
    $mainFont = 'Lora:400,400i,700,700i';
    $cssFont = "Lora";
    break;

  case 12:
    $mainFont = 'Oxygen:400,700';
    $cssFont = "Oxygen";
    break;

  case 13:
    $mainFont = 'Arimo:400,400i,700,700i';
    $cssFont = "Arimo";
    break;

  case 14:
    $mainFont = 'Arvo:400,400i,700,700i';
    $cssFont = "Arvo";
    break;

  case 15:
    $mainFont = 'Bitter:400,400i,700';
    $cssFont = "Bitter";
    break;

  case 16:
    $mainFont = 'Montserrat:400,400i,700,800i';
    $cssFont = "Montserrat";
    break;

  case 17:
    $mainFont = 'Play:400,700';
    $cssFont = "Play";
    break;

  case 18:
    $mainFont = 'Rokkitt:400,700';
    $cssFont = "Rokkitt";
    break;

  case 19:
    $mainFont = 'Francois+One';
    $cssFont = "Francois One";
    break;

  case 20:
    $mainFont = 'Noto+Sans:400,400i,700,700i';
    $cssFont = "Noto Sans";
    break;

  case 21:
    $mainFont = 'Nunito:400,400i,700,700i';
    $cssFont = "Nunito";
    break;

  case 22:
    $mainFont = 'Merriweather:400,400i,700,700i';
    $cssFont = "Merriweather";
    break;

  case 23:
    $mainFont = 'PT+Serif:400,400i,700,700i';
    $cssFont = "PT Serif";
    break;

  case 24:
    $mainFont = 'Shadows+Into+Light';
    $cssFont = "Shadows Into Light";
    break;

  case 25:
    $mainFont = 'Dosis:400,700';
    $cssFont = "Dosis";
    break;

  case 26:
    $mainFont = 'Cuprum:400,400i,700,700i';
    $cssFont = "Cuprum";
    break;

  case 27:
    $mainFont = 'Cabin:400,400i,700,700i';
    $cssFont = "Cabin";
    break;

  case 28:
    $mainFont = 'Libre+Baskerville:400,400i,700';
    $cssFont = "Libre Baskerville";
    break;

  case 29:
    $mainFont = 'Titillium+Web:400,400i,700,700i';
    $cssFont = "Titillium Web";
    break;

  case 30:
    $mainFont = 'Abel';
    $cssFont = "Abel";
    break;

  case 31:
    $mainFont = 'Crafty+Girls';
    $cssFont = "Crafty Girls";
    break;

  case 32:
    $mainFont = 'Ubuntu+Condensed';
    $cssFont = "Ubuntu Condensed";
    break;

  case 33:
    $mainFont = 'Anton';
    $cssFont = "Anton";
    break;

  case 34:
    $mainFont = 'Merriweather+Sans:400,400i,700,700i';
    $cssFont = "Merriweather Sans";
    break;

  case 35:
    $mainFont = 'Fjalla+One';
    $cssFont = "Fjalla One";
    break;

  case 36:
    $mainFont = 'Archivo+Narrow:400,400i,700,700i';
    $cssFont = "Archivo Narrow";
    break;

  case 37:
    $mainFont = 'Maven+Pro:400,700';
    $cssFont = "Maven Pro";
    break;

  case 38:
    $mainFont = 'Roboto+Slab:400,700';
    $cssFont = "Roboto Slab";
    break;

  case 39:
    $mainFont = 'Josefin+Sans:400,400i,700,700i';
    $cssFont = "Josefin Sans";
    break;

  case 40:
    $mainFont = 'Special+Elite';
    $cssFont = "Special Elite";
    break;

  case 41:
    $mainFont = 'Signika:400,700';
    $cssFont = "Signika";
    break;

  case 42:
    $mainFont = 'Pacifico';
    $cssFont = "Pacifico";
    break;

  case 43:
    $mainFont = 'Indie+Flower';
    $cssFont = "Indie Flower";
    break;

  case 44:
    $mainFont = 'Asap:400,400i,700,700i';
    $cssFont = "Asap";
    break;

  case 45:
    $mainFont = 'Dancing+Script:400,700';
    $cssFont = "Dancing Script";
    break;

  case 46:
    $mainFont = 'Coming+Soon';
    $cssFont = "Coming Soon";
    break;

  case 47:
    $mainFont = 'Questrial';
    $cssFont = "Questrial";
    break;

  case 48:
    $mainFont = 'Alegreya:400,400i,700,700i';
    $cssFont = "Alegreya";
    break;

  case 49:
    $mainFont = 'Volkhov:400,400i,700,700i';
    $cssFont = "Volkhov";
    break;

  case 50:
    $mainFont = 'Kreon:400,700';
    $cssFont = "Kreon";
    break;

  case 51:
    $mainFont = 'News+Cycle:400,700';
    $cssFont = "News Cycle";
    break;

  case 52:
    $mainFont = 'Armata';
    $cssFont = "Armata";
    break;

  case 53:
    $mainFont = 'Muli:400,400i,700,700i';
    $cssFont = "Muli";
    break;

  case 54:
    $mainFont = 'Playfair+Display:400,400i,700,700i';
    $cssFont = "Playfair Display";
    break;

  case 55:
    $mainFont = 'Economica:400,400i,700,700i';
    $cssFont = "Economica";
    break;

  case 56:
    $mainFont = 'Istok+Web:400,400i,700,700i';
    $cssFont = "Istok Web";
    break;

  case 57:
    $mainFont = 'Cabin+Condensed:400,700';
    $cssFont = "Cabin Condensed";
    break;

  case 58:
    $mainFont = 'Marvel:400,400i,700,700i';
    $cssFont = "Marvel";
    break;

  case 59:
    $mainFont = 'Exo:400,400i,700,700i';
    $cssFont = "Exo";
    break;

  case 60:
    $mainFont = 'Comfortaa:400,700';
    $cssFont = "Comfortaa";
    break;

  case 61:
    $mainFont = 'Inconsolata:400,700';
    $cssFont = "Inconsolata";
    break;

  case 62:
    $mainFont = 'PT+Sans+Caption:400,700';
    $cssFont = "PT Sans Caption";
    break;

  case 63:
    $mainFont = 'Quicksand:400,700';
    $cssFont = "Quicksand";
    break;

  case 64:
    $mainFont = 'Cantarell:400,400i,700,700i';
    $cssFont = "Cantarell";
    break;

  case 65:
    $mainFont = 'Changa+One:400,400i';
    $cssFont = "Changa One";
    break;

  case 66:
    $mainFont = 'Squada+One';
    $cssFont = "Squada One";
    break;

  case 67:
    $mainFont = 'Nobile:400,400i,700,700i';
    $cssFont = "Nobile";
    break;

  case 68:
    $mainFont = 'Philosopher:400,400i,700,700i';
    $cssFont = "Philosopher";
    break;

  case 69:
    $mainFont = 'Noticia+Text:400,400i,700,700i';
    $cssFont = "Noticia Text";
    break;

  case 70:
    $mainFont = 'Gudea:400,400i,700';
    $cssFont = "Gudea";
    break;

  case 71:
    $mainFont = 'Telex';
    $cssFont = "Telex";
    break;

  case 72:
    $mainFont = 'Bree+Serif';
    $cssFont = "Bree Serif";
    break;

  case 73:
    $mainFont = 'Monda:400,700';
    $cssFont = "Monda";
    break;

  case 74:
    $mainFont = 'Josefin+Slab:400,400i,700';
    $cssFont = "Josefin Slab";
    break;

  case 75:
    $mainFont = 'Pontano+Sans';
    $cssFont = "Pontano Sans";
    break;

  case 76:
    $mainFont = 'Ropa+Sans:400,400i';
    $cssFont = "Ropa Sans";
    break;

  case 77:
    $mainFont = 'Playball';
    $cssFont = "Playball";
    break;

  case 78:
    $mainFont = 'Chewy';
    $cssFont = "Chewy";
    break;

  case 79:
    $mainFont = 'Luckiest+Guy';
    $cssFont = "Luckiest Guy";
    break;

  case 80:
    $mainFont = 'Voltaire';
    $cssFont = "Voltaire";
    break;

  case 81:
    $mainFont = 'Fredoka+One';
    $cssFont = "Fredoka One";
    break;

  case 82:
    $mainFont = 'Patua+One';
    $cssFont = "Patua One";
    break;

  case 83:
    $mainFont = 'Jockey+One';
    $cssFont = "Jockey One";
    break;

  case 84:
    $mainFont = 'Rock+Salt';
    $cssFont = "Rock Salt";
    break;

  case 85:
    $mainFont = 'Calligraffitti';
    $cssFont = "Calligraffitti";
    break;

  case 86:
    $mainFont = 'Amatic+SC:400,700';
    $cssFont = "Amatic SC";
    break;

  case 87:
    $mainFont = 'Unkempt:400,700';
    $cssFont = "Unkempt";
    break;

  case 88:
    $mainFont = 'Handlee';
    $cssFont = "Handlee";
    break;

  case 89:
    $mainFont = 'Tangerine:400,700';
    $cssFont = "Tangerine";
    break;

  case 90:
    $mainFont = 'Quattrocento:400,700';
    $cssFont = "Quattrocento";
    break;

  case 91:
    $mainFont = 'Shadows+Into+Light';
    $cssFont = "Shadows Into Light";
    break;

  case 92:
    $mainFont = 'Crete+Round:400,400i';
    $cssFont = "Crete Round";
    break;

  case 93:
    $mainFont = 'Cherry+Cream+Soda';
    $cssFont = "Cherry Cream Soda";
    break;

  case 94:
    $mainFont = 'Quattrocento+Sans:400,400i,700,700i';
    $cssFont = "Quattrocento Sans";
    break;

  case 95:
    $mainFont = 'EB+Garamond:400,400i,700,700i';
    $cssFont = "EB Garamond";
    break;

  case 96:
    $mainFont = 'Molengo';
    $cssFont = "Molengo";
    break;

  case 97:
    $mainFont = 'Permanent+Marker';
    $cssFont = "Permanent Marker";
    break;

  case 98:
    $mainFont = 'Old+Standard+TT:400,400i,700';
    $cssFont = "Old Standard TT";
    break;

  case 99:
    $mainFont = 'Happy+Monkey';
    $cssFont = "Happy Monkey";
    break;

  case 100:
    $mainFont = 'Kotta+One';
    $cssFont = "Kotta One";
    break;

  case 101:
    $mainFont = 'Black+Ops+One';
    $cssFont = "Black Ops One";
    break;

  case 102:
    $mainFont = 'Crimson+Text:400,400i,700,700i';
    $cssFont = "Crimson Text";
    break;

  case 103:
    $mainFont = 'Lobster+Two:400,400i,700,700i';
    $cssFont = "Lobster Two";
    break;

  case 104:
    $mainFont = 'Gentium+Book+Basic:400,400i,700,700i';
    $cssFont = "Gentium Book Basic";
    break;

  case 105:
    $mainFont = 'Varela+Round';
    $cssFont = "Varela Round";
    break;

  case 106:
    $mainFont = 'BenchNine:400,700';
    $cssFont = "BenchNine";
    break;

  case 107:
    $mainFont = 'Cantora+One';
    $cssFont = "Cantora One";
    break;

  case 108:
    $mainFont = 'Poiret+One';
    $cssFont = "Poiret One";
    break;

  case 109:
    $mainFont = 'Righteous';
    $cssFont = "Righteous";
    break;

  case 110:
    $mainFont = 'Karla:400,400i,700,700i';
    $cssFont = "Karla";
    break;

  case 111:
    $mainFont = 'Satisfy';
    $cssFont = "Satisfy";
    break;

  case 112:
    $mainFont = 'Paytone+One';
    $cssFont = "Paytone One";
    break;

  case 113:
    $mainFont = 'Orbitron:400,700';
    $cssFont = "Orbitron";
    break;

  case 114:
    $mainFont = 'Passion+One:400,700';
    $cssFont = "Passion One";
    break;

  case 115:
    $mainFont = 'Oleo+Script:400,700';
    $cssFont = "Oleo Script";
    break;

  case 116:
    $mainFont = 'Just+Me+Again+Down+Here';
    $cssFont = "Just Me Again Down Here";
    break;

  case 117:
    $mainFont = 'Amaranth:400,400i,700,700i';
    $cssFont = "Amaranth";
    break;

  case 118:
    $mainFont = 'Leckerli+One';
    $cssFont = "Leckerli One";
    break;

  case 119:
    $mainFont = 'Carme';
    $cssFont = "Carme";
    break;

  case 120:
    $mainFont = 'Waiting+for+the+Sunrise';
    $cssFont = "Waiting for the Sunrise";
    break;

  case 121:
    $mainFont = 'Electrolize';
    $cssFont = "Electrolize";
    break;

  case 122:
    $mainFont = 'Varela';
    $cssFont = "Varela";
    break;

  case 123:
    $mainFont = 'Patrick+Hand';
    $cssFont = "Patrick Hand";
    break;

  case 124:
    $mainFont = 'Noto+Serif:400,400i,700,700i';
    $cssFont = "Noto Serif";
    break;

  case 125:
    $mainFont = 'Share:400,400i,700,700i';
    $cssFont = "Share";
    break;

  case 126:
    $mainFont = 'Doppio+One';
    $cssFont = "Doppio One";
    break;

  case 127:
    $mainFont = 'Reenie+Beanie';
    $cssFont = "Reenie Beanie";
    break;

  case 128:
    $mainFont = 'Walter+Turncoat';
    $cssFont = "Walter Turncoat";
    break;

  case 129:
    $mainFont = 'Marck+Script';
    $cssFont = "Marck Script";
    break;

  case 130:
    $mainFont = 'Allerta';
    $cssFont = "Allerta";
    break;

  case 131:
    $mainFont = 'Syncopate:400,700';
    $cssFont = "Syncopate";
    break;

  case 132:
    $mainFont = 'Sanchez:400,400i';
    $cssFont = "Sanchez";
    break;
}

// Adding the italic css for the Blog Title Font Italic switch.

if ( get_theme_mod('toggle_blogtitlefont_italic', 0 )  == 1 ) {
  $blogTitleFontItalic = 'font-style: italic;';
} else {
  $blogTitleFontItalic = '';
}


// Adding the bold css for Blog Title Bold switch.

if ( get_theme_mod('toggle_blogtitlefont_bold', 1 ) == 1 ) {
  $blogTitleFontBold = 'font-weight: 700!important;';
} else {
  $blogTitleFontBold = 'font-weight: 400!important;';
}


$blogTitleFontSize = get_theme_mod('slider_blogtitlefont_size', 1.5 );







/*  Posts and Pages Title Font   */

$postsAndPagesfontArray = get_theme_mod('postsandpagestitle_font_control', 127 );

switch ($postsAndPagesfontArray) {
  case 0:
    $postsAndPagesmainFont = 'Open+Sans:400,400i,700,800i';
    $postsAndPagescssFont = "Open Sans";
    break;

  case 1:
    $postsAndPagesmainFont = 'Oswald:400,700';
    $postsAndPagescssFont = "Oswald";
    break;

  case 2:
    $postsAndPagesmainFont = 'Roboto:400,400i,500i,700';
    $postsAndPagescssFont = "Roboto";
    break;

  case 3:
    $postsAndPagesmainFont = 'Lato:400,400i,700,700i';
    $postsAndPagescssFont = "Lato";
    break;

  case 4:
    $postsAndPagesmainFont = 'Open+Sans+Condensed:300,300i,700';
    $postsAndPagescssFont = "Open Sans Condensed";
    break;

  case 5:
    $postsAndPagesmainFont = 'PT+Sans:400,400i,700,700i';
    $postsAndPagescssFont = "PT Sans";
    break;

  case 6:
    $postsAndPagesmainFont = 'Ubuntu:400,400i,500,500i';
    $postsAndPagescssFont = "Ubuntu";
    break;

  case 7:
    $postsAndPagesmainFont = 'PT+Sans+Narrow:400,700';
    $postsAndPagescssFont = "PT Sans Narrow";
    break;

  case 8:
    $postsAndPagesmainFont = 'Raleway:400,400i,700,700i';
    $postsAndPagescssFont = "Raleway";
    break;

  case 9:
    $postsAndPagesmainFont = 'Yanone+Kaffeesatz:400,600';
    $postsAndPagescssFont = "Yanone Kaffeesatz";
    break;

  case 10:
    $postsAndPagesmainFont = 'Lobster';
    $postsAndPagescssFont = "Lobster";
    break;

  case 11:
    $postsAndPagesmainFont = 'Lora:400,400i,700,700i';
    $postsAndPagescssFont = "Lora";
    break;

  case 12:
    $postsAndPagesmainFont = 'Oxygen:400,700';
    $postsAndPagescssFont = "Oxygen";
    break;

  case 13:
    $postsAndPagesmainFont = 'Arimo:400,400i,700,700i';
    $postsAndPagescssFont = "Arimo";
    break;

  case 14:
    $postsAndPagesmainFont = 'Arvo:400,400i,700,700i';
    $postsAndPagescssFont = "Arvo";
    break;

  case 15:
    $postsAndPagesmainFont = 'Bitter:400,400i,700';
    $postsAndPagescssFont = "Bitter";
    break;

  case 16:
    $postsAndPagesmainFont = 'Montserrat:400,400i,700,800i';
    $postsAndPagescssFont = "Montserrat";
    break;

  case 17:
    $postsAndPagesmainFont = 'Play:400,700';
    $postsAndPagescssFont = "Play";
    break;

  case 18:
    $postsAndPagesmainFont = 'Rokkitt:400,700';
    $postsAndPagescssFont = "Rokkitt";
    break;

  case 19:
    $postsAndPagesmainFont = 'Francois+One';
    $postsAndPagescssFont = "Francois One";
    break;

  case 20:
    $postsAndPagesmainFont = 'Noto+Sans:400,400i,700,700i';
    $postsAndPagescssFont = "Noto Sans";
    break;

  case 21:
    $postsAndPagesmainFont = 'Nunito:400,400i,700,700i';
    $postsAndPagescssFont = "Nunito";
    break;

  case 22:
    $postsAndPagesmainFont = 'Merriweather:400,400i,700,700i';
    $postsAndPagescssFont = "Merriweather";
    break;

  case 23:
    $postsAndPagesmainFont = 'PT+Serif:400,400i,700,700i';
    $postsAndPagescssFont = "PT Serif";
    break;

  case 24:
    $postsAndPagesmainFont = 'Shadows+Into+Light';
    $postsAndPagescssFont = "Shadows Into Light";
    break;

  case 25:
    $postsAndPagesmainFont = 'Dosis:400,700';
    $postsAndPagescssFont = "Dosis";
    break;

  case 26:
    $postsAndPagesmainFont = 'Cuprum:400,400i,700,700i';
    $postsAndPagescssFont = "Cuprum";
    break;

  case 27:
    $postsAndPagesmainFont = 'Cabin:400,400i,700,700i';
    $postsAndPagescssFont = "Cabin";
    break;

  case 28:
    $postsAndPagesmainFont = 'Libre+Baskerville:400,400i,700';
    $postsAndPagescssFont = "Libre Baskerville";
    break;

  case 29:
    $postsAndPagesmainFont = 'Titillium+Web:400,400i,700,700i';
    $postsAndPagescssFont = "Titillium Web";
    break;

  case 30:
    $postsAndPagesmainFont = 'Abel';
    $postsAndPagescssFont = "Abel";
    break;

  case 31:
    $postsAndPagesmainFont = 'Crafty+Girls';
    $postsAndPagescssFont = "Crafty Girls";
    break;

  case 32:
    $postsAndPagesmainFont = 'Ubuntu+Condensed';
    $postsAndPagescssFont = "Ubuntu Condensed";
    break;

  case 33:
    $postsAndPagesmainFont = 'Anton';
    $postsAndPagescssFont = "Anton";
    break;

  case 34:
    $postsAndPagesmainFont = 'Merriweather+Sans:400,400i,700,700i';
    $postsAndPagescssFont = "Merriweather Sans";
    break;

  case 35:
    $postsAndPagesmainFont = 'Fjalla+One';
    $postsAndPagescssFont = "Fjalla One";
    break;

  case 36:
    $postsAndPagesmainFont = 'Archivo+Narrow:400,400i,700,700i';
    $postsAndPagescssFont = "Archivo Narrow";
    break;

  case 37:
    $postsAndPagesmainFont = 'Maven+Pro:400,700';
    $postsAndPagescssFont = "Maven Pro";
    break;

  case 38:
    $postsAndPagesmainFont = 'Roboto+Slab:400,700';
    $postsAndPagescssFont = "Roboto Slab";
    break;

  case 39:
    $postsAndPagesmainFont = 'Josefin+Sans:400,400i,700,700i';
    $postsAndPagescssFont = "Josefin Sans";
    break;

  case 40:
    $postsAndPagesmainFont = 'Special+Elite';
    $postsAndPagescssFont = "Special Elite";
    break;

  case 41:
    $postsAndPagesmainFont = 'Signika:400,700';
    $postsAndPagescssFont = "Signika";
    break;

  case 42:
    $postsAndPagesmainFont = 'Pacifico';
    $postsAndPagescssFont = "Pacifico";
    break;

  case 43:
    $postsAndPagesmainFont = 'Indie+Flower';
    $postsAndPagescssFont = "Indie Flower";
    break;

  case 44:
    $postsAndPagesmainFont = 'Asap:400,400i,700,700i';
    $postsAndPagescssFont = "Asap";
    break;

  case 45:
    $postsAndPagesmainFont = 'Dancing+Script:400,700';
    $postsAndPagescssFont = "Dancing Script";
    break;

  case 46:
    $postsAndPagesmainFont = 'Coming+Soon';
    $postsAndPagescssFont = "Coming Soon";
    break;

  case 47:
    $postsAndPagesmainFont = 'Questrial';
    $postsAndPagescssFont = "Questrial";
    break;

  case 48:
    $postsAndPagesmainFont = 'Alegreya:400,400i,700,700i';
    $postsAndPagescssFont = "Alegreya";
    break;

  case 49:
    $postsAndPagesmainFont = 'Volkhov:400,400i,700,700i';
    $postsAndPagescssFont = "Volkhov";
    break;

  case 50:
    $postsAndPagesmainFont = 'Kreon:400,700';
    $postsAndPagescssFont = "Kreon";
    break;

  case 51:
    $postsAndPagesmainFont = 'News+Cycle:400,700';
    $postsAndPagescssFont = "News Cycle";
    break;

  case 52:
    $postsAndPagesmainFont = 'Armata';
    $postsAndPagescssFont = "Armata";
    break;

  case 53:
    $postsAndPagesmainFont = 'Muli:400,400i,700,700i';
    $postsAndPagescssFont = "Muli";
    break;

  case 54:
    $postsAndPagesmainFont = 'Playfair+Display:400,400i,700,700i';
    $postsAndPagescssFont = "Playfair Display";
    break;

  case 55:
    $postsAndPagesmainFont = 'Economica:400,400i,700,700i';
    $postsAndPagescssFont = "Economica";
    break;

  case 56:
    $postsAndPagesmainFont = 'Istok+Web:400,400i,700,700i';
    $postsAndPagescssFont = "Istok Web";
    break;

  case 57:
    $postsAndPagesmainFont = 'Cabin+Condensed:400,700';
    $postsAndPagescssFont = "Cabin Condensed";
    break;

  case 58:
    $postsAndPagesmainFont = 'Marvel:400,400i,700,700i';
    $postsAndPagescssFont = "Marvel";
    break;

  case 59:
    $postsAndPagesmainFont = 'Exo:400,400i,700,700i';
    $postsAndPagescssFont = "Exo";
    break;

  case 60:
    $postsAndPagesmainFont = 'Comfortaa:400,700';
    $postsAndPagescssFont = "Comfortaa";
    break;

  case 61:
    $postsAndPagesmainFont = 'Inconsolata:400,700';
    $postsAndPagescssFont = "Inconsolata";
    break;

  case 62:
    $postsAndPagesmainFont = 'PT+Sans+Caption:400,700';
    $postsAndPagescssFont = "PT Sans Caption";
    break;

  case 63:
    $postsAndPagesmainFont = 'Quicksand:400,700';
    $postsAndPagescssFont = "Quicksand";
    break;

  case 64:
    $postsAndPagesmainFont = 'Cantarell:400,400i,700,700i';
    $postsAndPagescssFont = "Cantarell";
    break;

  case 65:
    $postsAndPagesmainFont = 'Changa+One:400,400i';
    $postsAndPagescssFont = "Changa One";
    break;

  case 66:
    $postsAndPagesmainFont = 'Squada+One';
    $postsAndPagescssFont = "Squada One";
    break;

  case 67:
    $postsAndPagesmainFont = 'Nobile:400,400i,700,700i';
    $postsAndPagescssFont = "Nobile";
    break;

  case 68:
    $postsAndPagesmainFont = 'Philosopher:400,400i,700,700i';
    $postsAndPagescssFont = "Philosopher";
    break;

  case 69:
    $postsAndPagesmainFont = 'Noticia+Text:400,400i,700,700i';
    $postsAndPagescssFont = "Noticia Text";
    break;

  case 70:
    $postsAndPagesmainFont = 'Gudea:400,400i,700';
    $postsAndPagescssFont = "Gudea";
    break;

  case 71:
    $postsAndPagesmainFont = 'Telex';
    $postsAndPagescssFont = "Telex";
    break;

  case 72:
    $postsAndPagesmainFont = 'Bree+Serif';
    $postsAndPagescssFont = "Bree Serif";
    break;

  case 73:
    $postsAndPagesmainFont = 'Monda:400,700';
    $postsAndPagescssFont = "Monda";
    break;

  case 74:
    $postsAndPagesmainFont = 'Josefin+Slab:400,400i,700';
    $postsAndPagescssFont = "Josefin Slab";
    break;

  case 75:
    $postsAndPagesmainFont = 'Pontano+Sans';
    $postsAndPagescssFont = "Pontano Sans";
    break;

  case 76:
    $postsAndPagesmainFont = 'Ropa+Sans:400,400i';
    $postsAndPagescssFont = "Ropa Sans";
    break;

  case 77:
    $postsAndPagesmainFont = 'Playball';
    $postsAndPagescssFont = "Playball";
    break;

  case 78:
    $postsAndPagesmainFont = 'Chewy';
    $postsAndPagescssFont = "Chewy";
    break;

  case 79:
    $postsAndPagesmainFont = 'Luckiest+Guy';
    $postsAndPagescssFont = "Luckiest Guy";
    break;

  case 80:
    $postsAndPagesmainFont = 'Voltaire';
    $postsAndPagescssFont = "Voltaire";
    break;

  case 81:
    $postsAndPagesmainFont = 'Fredoka+One';
    $postsAndPagescssFont = "Fredoka One";
    break;

  case 82:
    $postsAndPagesmainFont = 'Patua+One';
    $postsAndPagescssFont = "Patua One";
    break;

  case 83:
    $postsAndPagesmainFont = 'Jockey+One';
    $postsAndPagescssFont = "Jockey One";
    break;

  case 84:
    $postsAndPagesmainFont = 'Rock+Salt';
    $postsAndPagescssFont = "Rock Salt";
    break;

  case 85:
    $postsAndPagesmainFont = 'Calligraffitti';
    $postsAndPagescssFont = "Calligraffitti";
    break;

  case 86:
    $postsAndPagesmainFont = 'Amatic+SC:400,700';
    $postsAndPagescssFont = "Amatic SC";
    break;

  case 87:
    $postsAndPagesmainFont = 'Unkempt:400,700';
    $postsAndPagescssFont = "Unkempt";
    break;

  case 88:
    $postsAndPagesmainFont = 'Handlee';
    $postsAndPagescssFont = "Handlee";
    break;

  case 89:
    $postsAndPagesmainFont = 'Tangerine:400,700';
    $postsAndPagescssFont = "Tangerine";
    break;

  case 90:
    $postsAndPagesmainFont = 'Quattrocento:400,700';
    $postsAndPagescssFont = "Quattrocento";
    break;

  case 91:
    $postsAndPagesmainFont = 'Shadows+Into+Light';
    $postsAndPagescssFont = "Shadows Into Light";
    break;

  case 92:
    $postsAndPagesmainFont = 'Crete+Round:400,400i';
    $postsAndPagescssFont = "Crete Round";
    break;

  case 93:
    $postsAndPagesmainFont = 'Cherry+Cream+Soda';
    $postsAndPagescssFont = "Cherry Cream Soda";
    break;

  case 94:
    $postsAndPagesmainFont = 'Quattrocento+Sans:400,400i,700,700i';
    $postsAndPagescssFont = "Quattrocento Sans";
    break;

  case 95:
    $postsAndPagesmainFont = 'EB+Garamond:400,400i,700,700i';
    $postsAndPagescssFont = "EB Garamond";
    break;

  case 96:
    $postsAndPagesmainFont = 'Molengo';
    $postsAndPagescssFont = "Molengo";
    break;

  case 97:
    $postsAndPagesmainFont = 'Permanent+Marker';
    $postsAndPagescssFont = "Permanent Marker";
    break;

  case 98:
    $postsAndPagesmainFont = 'Old+Standard+TT:400,400i,700';
    $postsAndPagescssFont = "Old Standard TT";
    break;

  case 99:
    $postsAndPagesmainFont = 'Happy+Monkey';
    $postsAndPagescssFont = "Happy Monkey";
    break;

  case 100:
    $postsAndPagesmainFont = 'Kotta+One';
    $postsAndPagescssFont = "Kotta One";
    break;

  case 101:
    $postsAndPagesmainFont = 'Black+Ops+One';
    $postsAndPagescssFont = "Black Ops One";
    break;

  case 102:
    $postsAndPagesmainFont = 'Crimson+Text:400,400i,700,700i';
    $postsAndPagescssFont = "Crimson Text";
    break;

  case 103:
    $postsAndPagesmainFont = 'Lobster+Two:400,400i,700,700i';
    $postsAndPagescssFont = "Lobster Two";
    break;

  case 104:
    $postsAndPagesmainFont = 'Gentium+Book+Basic:400,400i,700,700i';
    $postsAndPagescssFont = "Gentium Book Basic";
    break;

  case 105:
    $postsAndPagesmainFont = 'Varela+Round';
    $postsAndPagescssFont = "Varela Round";
    break;

  case 106:
    $postsAndPagesmainFont = 'BenchNine:400,700';
    $postsAndPagescssFont = "BenchNine";
    break;

  case 107:
    $postsAndPagesmainFont = 'Cantora+One';
    $postsAndPagescssFont = "Cantora One";
    break;

  case 108:
    $postsAndPagesmainFont = 'Poiret+One';
    $postsAndPagescssFont = "Poiret One";
    break;

  case 109:
    $postsAndPagesmainFont = 'Righteous';
    $postsAndPagescssFont = "Righteous";
    break;

  case 110:
    $postsAndPagesmainFont = 'Karla:400,400i,700,700i';
    $postsAndPagescssFont = "Karla";
    break;

  case 111:
    $postsAndPagesmainFont = 'Satisfy';
    $postsAndPagescssFont = "Satisfy";
    break;

  case 112:
    $postsAndPagesmainFont = 'Paytone+One';
    $postsAndPagescssFont = "Paytone One";
    break;

  case 113:
    $postsAndPagesmainFont = 'Orbitron:400,700';
    $postsAndPagescssFont = "Orbitron";
    break;

  case 114:
    $postsAndPagesmainFont = 'Passion+One:400,700';
    $postsAndPagescssFont = "Passion One";
    break;

  case 115:
    $postsAndPagesmainFont = 'Oleo+Script:400,700';
    $postsAndPagescssFont = "Oleo Script";
    break;

  case 116:
    $postsAndPagesmainFont = 'Just+Me+Again+Down+Here';
    $postsAndPagescssFont = "Just Me Again Down Here";
    break;

  case 117:
    $postsAndPagesmainFont = 'Amaranth:400,400i,700,700i';
    $postsAndPagescssFont = "Amaranth";
    break;

  case 118:
    $postsAndPagesmainFont = 'Leckerli+One';
    $postsAndPagescssFont = "Leckerli One";
    break;

  case 119:
    $postsAndPagesmainFont = 'Carme';
    $postsAndPagescssFont = "Carme";
    break;

  case 120:
    $postsAndPagesmainFont = 'Waiting+for+the+Sunrise';
    $postsAndPagescssFont = "Waiting for the Sunrise";
    break;

  case 121:
    $postsAndPagesmainFont = 'Electrolize';
    $postsAndPagescssFont = "Electrolize";
    break;

  case 122:
    $postsAndPagesmainFont = 'Varela';
    $postsAndPagescssFont = "Varela";
    break;

  case 123:
    $postsAndPagesmainFont = 'Patrick+Hand';
    $postsAndPagescssFont = "Patrick Hand";
    break;

  case 124:
    $postsAndPagesmainFont = 'Noto+Serif:400,400i,700,700i';
    $postsAndPagescssFont = "Noto Serif";
    break;

  case 125:
    $postsAndPagesmainFont = 'Share:400,400i,700,700i';
    $postsAndPagescssFont = "Share";
    break;

  case 126:
    $postsAndPagesmainFont = 'Doppio+One';
    $postsAndPagescssFont = "Doppio One";
    break;

  case 127:
    $postsAndPagesmainFont = 'Reenie+Beanie';
    $postsAndPagescssFont = "Reenie Beanie";
    break;

  case 128:
    $postsAndPagesmainFont = 'Walter+Turncoat';
    $postsAndPagescssFont = "Walter Turncoat";
    break;

  case 129:
    $postsAndPagesmainFont = 'Marck+Script';
    $postsAndPagescssFont = "Marck Script";
    break;

  case 130:
    $postsAndPagesmainFont = 'Allerta';
    $postsAndPagescssFont = "Allerta";
    break;

  case 131:
    $postsAndPagesmainFont = 'Syncopate:400,700';
    $postsAndPagescssFont = "Syncopate";
    break;

  case 132:
    $postsAndPagesmainFont = 'Sanchez:400,400i';
    $postsAndPagescssFont = "Sanchez";
    break;
}


/* posts and pages title font size   */

$postsandpagesTitleFontSize = get_theme_mod('slider_postpagesfont_size', 1.9 );

$postsandpagesLetterSpacing = get_theme_mod('slider_postsandpagesfont_letterspacing', 3 );



// Adding the italic css for the posts and pages Title Font Italic switch.

if ( get_theme_mod('toggle_postandpagestitlefont_italic', 0 )  == 1 ) {
  $postandpagesTitleFontItalic = 'font-style: italic;';
} else {
  $postandpagesTitleFontItalic = '';
}


// Adding the bold css for posts and pages Title Bold switch.

if ( get_theme_mod('toggle_postandpagestitlefont_bold', 1 ) == 1 ) {
  $postandpagesTitleFontBold = 'font-weight: 700!important;';
} else {
  $postandpagesTitleFontBold = 'font-weight: 400!important;';
}
