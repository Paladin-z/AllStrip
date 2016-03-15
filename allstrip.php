<?
// Scene groups ascii stripper & formatter for www.torrentzilla.org
// Due to the nature of nfo's needing frequent updates there is no version numbering, rather I've opted to go by date & time of last edit to differentiate versions
$version = "14-03-2016 15:30";
//
//Function to trim spaces from end of entire input
function RightTrim($string) {
  return preg_replace('/\s+$/m', '', $string);
}
//Function to strip ascii art
function StripArt($string) {
	return $cleaned = preg_replace('/([^\w\d\s\,\;\-\:\.\?\=\!\@\'\(\)\[\]\$\/]+)/', '', $string);
}
// Function to return string between deliminators
function GetStringBetween($string, $start, $finish) {
    $string = " ".$string;
    $position = strpos($string, $start);
    if ($position == 0) return "";
    $position += strlen($start);
    $length = strpos($string, $finish, $position) - $position;
    return substr($string, $position, $length);
}
function replace_content_inside_delimiters($start, $end, $new, $source) {
return preg_replace('#('.preg_quote($start).')(.*)('.preg_quote($end).')#si', '$1'.$new.'$3', $source);
}
function removelines( $clean )
{
// function to remove empty lines
  $clean = preg_replace('/[ ]*(\r{0,1}\n)[ ]*/', '$1', $clean);
  $clean = preg_replace('/[\r\r]/', '', $clean);
  $clean = preg_replace('/(?|( )+|(\\n\\n)+)/', '$1', $clean);
  return $clean;
}
header('Content-Type: text/html; charset=UTF-8');
echo "<img src=\"wm.jpg\" border=0><pre><b>".$version."</b></pre>";
echo "<span style=\"color:#0000FF\">";
echo "Paste the entire .nfo and click Remove Ascii.</p></span>";
echo "If it fails try viewing and pasting from <b>DAMN NFO Viewer</b></p>";
echo "<span style=\"color:#FF0000\">";
echo "Comments/suggestions? ";
echo '<a href="https://github.com/Paladin-z/AllStrip" target="_blank">Github repository</a></span></p>';
echo "<form method='post' action=''>"
 ."<textarea id='nfo' name='nfo' rows='15' cols='90'></textarea>"."<br>"
 ."<input type='submit' name='go' value='Remove Ascii' />"
 ."</form>";
if (isset($_POST['go'])) {
$cleaned = preg_replace('/&#\d{0,10000};/', '',($_POST['nfo'])); 
  $cleaned = str_replace(' www.',' http://www.',$cleaned);
  $cleaned = str_replace('url:www.','http//www.',$cleaned);
// Identify groups from text in nfo, 
// When found jump to section specific for that group
$pos = strpos($cleaned, '-TASTETV'); if ($pos !== false) { goto tastetv; }
$pos = strpos($cleaned, '-NOSCREENS'); if ($pos !== false) { goto noscreens; }
$pos = strpos($cleaned, '-FUTiL'); if ($pos !== false) { goto futil; }
$pos = strpos($cleaned, '... DIVX FACTORY ...'); if ($pos !== false) { goto divxfactory; }
$pos = strpos($cleaned, 'LoRdNiTrO/iNTENSiTY'); if ($pos !== false) { goto intensity; }
$pos = strpos($cleaned, '° eMAG /2008+ °'); if ($pos !== false) { goto emag; }
$pos = strpos($cleaned, '-DoggPound'); if ($pos !== false) { goto doggpound; }
$pos = strpos($cleaned, '-SNOW'); if ($pos !== false) { goto snow; }
$pos = strpos($cleaned, '-VoMiT'); if ($pos !== false) { goto vomit; }
$pos = strpos($cleaned, '-HD4U'); if ($pos !== false) { goto hd4u; }
$pos = strpos($cleaned, '-NODLABS'); if ($pos !== false) { goto nodlabs; }
$pos = strpos($cleaned, '-MOOVEE'); if ($pos !== false) { goto moovee; }
$pos = strpos($cleaned, 'We Dont Need Nothing, just more blonde and pink KuKaS'); if ($pos !== false) { goto kukas; }
$pos = strpos($cleaned, '-CBFM'); if ($pos !== false) { goto cbfm; }
$pos = strpos($cleaned, 'Team FiCO'); if ($pos !== false) { goto fico; }
$pos = strpos($cleaned, '-STARLETS'); if ($pos !== false) { goto starlets; }
$pos = strpos($cleaned, 'RIPPER.....  Japhson'); if ($pos !== false) { goto japhson; }
$pos = strpos($cleaned, '-BiGGiESmaLLz'); if ($pos !== false) { goto biggiesmallz; }
$pos = strpos($cleaned, '-CiNEFiLE'); if ($pos !== false) { goto cinefile; }
$pos = strpos($cleaned, '-Ltu'); if ($pos !== false) { goto ltu; }
$pos = strpos($cleaned, 'MULTiPLY As in multiplying our releases'); if ($pos !== false) { goto multiply; }
$pos = strpos($cleaned, '-TASTE'); if ($pos !== false) { goto taste; }
$pos = strpos($cleaned, '-SPRiNTER'); if ($pos !== false) { goto sprinter; }
$pos = strpos($cleaned, '-DEUTERiUM'); if ($pos !== false) { goto deuterium; }
$pos = strpos($cleaned, ' cpN of cRo '); if ($pos !== false) { goto swe6rus; }
$pos = strpos($cleaned, '-REWARD'); if ($pos !== false) { goto reward; }
$pos = strpos($cleaned, 'Contact: cicsluts[at]front[dot]ru'); if ($pos !== false) { goto cicxxx; }
$pos = strpos($cleaned, '-aAF'); if ($pos !== false) { goto aaf; }
$pos = strpos($cleaned, 'iLLEGAL FRiENDS OF PSYCHEDELiC DRUGS'); if ($pos !== false) { goto ifpd; }
$pos = strpos($cleaned, '-SONiTUS'); if ($pos !== false) { goto sonitus; }
$pos = strpos($cleaned, '-EXViD'); if ($pos !== false) { goto exvid; }
$pos = strpos($cleaned, '-iNGOT'); if ($pos !== false) { goto ingot; }
$pos = strpos($cleaned, 'PORNOLATiON...'); if ($pos !== false) { goto pornolation; }
$pos = strpos($cleaned, '-PRiNCE'); if ($pos !== false) { goto prince; }
$pos = strpos($cleaned, '-DeBTViD'); if ($pos !== false) { goto debtvid; }
$pos = strpos($cleaned, '      XCiTE         '); if ($pos !== false) { goto xcite; }
$pos = strpos($cleaned, '-WNN'); if ($pos !== false) { goto wnn; }
$pos = strpos($cleaned, 'Very Bad Things Presents'); if ($pos !== false) { goto vbt; }
$pos = strpos($cleaned, '-FaiLED'); if ($pos !== false) { goto failed; }
$pos = strpos($cleaned, '-FADE'); if ($pos !== false) { goto fade; }
$pos = strpos($cleaned, '-TERRA'); if ($pos !== false) { goto terra; }
$pos = strpos($cleaned, 'crooks@hush.a'); if ($pos !== false) { goto crooks; }
$pos = strpos($cleaned, 'OMiCRON PROUDLY PRESENTS'); if ($pos !== false) { goto crimson; }
$pos = strpos($cleaned, '-CRiMSON'); if ($pos !== false) { goto crimson; }
$pos = strpos($cleaned, '-RedBlade'); if ($pos !== false) { goto redblade; }
$pos = strpos($cleaned, '-KNiFESHARP'); if ($pos !== false) { goto knifesharp; }
$pos = strpos($cleaned, 'greetings goes out to our friends -'); if ($pos !== false) { goto docere; }
$pos = strpos($cleaned, '-UPPERCUT'); if ($pos !== false) { goto uppercut; }
$pos = strpos($cleaned, 'W4F Releasing'); if ($pos !== false) { goto w4f; }
$pos = strpos($cleaned, 'cap4tv@gmail.com'); if ($pos !== false) { goto c4tv; }
$pos = strpos($cleaned, '-2HD'); if ($pos !== false) { goto a2hd; }
$pos = strpos($cleaned, '-DIMENSION'); if ($pos !== false) { goto dimension; }
$pos = strpos($cleaned, '-KILLERS'); if ($pos !== false) { goto killers; }
$pos = strpos($cleaned, '-iNVANDRAREN'); if ($pos !== false) { goto invandraren; }
$pos = strpos($cleaned, 'R.I.P. VeStAxUK We Will Miss You'); if ($pos !== false) { goto iguana; }
$pos = strpos($cleaned, '-RiVER'); if ($pos !== false) { goto river; }
$pos = strpos($cleaned, '-SYS'); if ($pos !== false) { goto sys; }
$pos = strpos($cleaned, '-SADPANDA'); if ($pos !== false) { goto sadpanda; }
$pos = strpos($cleaned, '-BARGE'); if ($pos !== false) { goto barge; }
$pos = strpos($cleaned, '-DEiMOS'); if ($pos !== false) { goto deimos; }
$pos = strpos($cleaned, '-QCF'); if ($pos !== false) { goto qcf; }
$pos = strpos($cleaned, '-DYNAMiCS'); if ($pos !== false) { goto dynamics; }
$pos = strpos($cleaned, '-HAGGiS'); if ($pos !== false) { goto haggis; }
$pos = strpos($cleaned, 'WaLMaRT PROUDLY PRESENTS'); if ($pos !== false) { goto walmart; }
$pos = strpos($cleaned, '-ROVERS'); if ($pos !== false) { goto rovers; }
$pos = strpos($cleaned, '-BATV'); if ($pos !== false) { goto batv; }
$pos = strpos($cleaned, '-GECKOS'); if ($pos !== false) { goto geckos; }
$pos = strpos($cleaned, 'ANiHLS.CREW.PROUDLY.PRESENTS'); if ($pos !== false) { goto anihls; }
$pos = strpos($cleaned, '    AMIABLE proudly presents:'); if ($pos !== false) { goto amiable; }
$pos = strpos($cleaned, '    AMIABLE presents:'); if ($pos !== false) { goto amiable; }
$pos = strpos($cleaned, '  ELEISON  '); if ($pos !== false) { goto keiso; }
$pos = strpos($cleaned, '-VeDeTT'); if ($pos !== false) { goto vedett; }
$pos = strpos($cleaned, '-MiNDTHEGAP'); if ($pos !== false) { goto mindthegap; }
$pos = strpos($cleaned, 'LOL Release :'); if ($pos !== false) { goto lol; }
$pos = strpos($cleaned, '-Pr0nStarS'); if ($pos !== false) { goto Pr0nStarS; }
$pos = strpos($cleaned, ':::FTP Release Date  :'); if ($pos !== false) { goto ftp; }
$pos = strpos($cleaned, 'Forever Immortal Hosts'); if ($pos !== false) { goto fihtv; }
$pos = strpos($cleaned, 'k  n  o  w       y  o  u  r       r  o  l  e'); if ($pos !== false) { goto kyr; }
$pos = strpos($cleaned, '-rta'); if ($pos !== false) { goto rta; }
$pos = strpos($cleaned, 'FQM'); if ($pos !== false) { goto fqm; }
$pos = strpos($cleaned, 'F|A|I|R|P|L|A|Y| |P|R|E|S|E|N|T|S'); if ($pos !== false) { goto fairplay; }
$pos = strpos($cleaned, 'Predator Fucked Alien'); if ($pos !== false) { goto pfa; }
$pos = strpos($cleaned, '-SEXCAT'); if ($pos !== false) { goto sexcat; }
$pos = strpos($cleaned, '-TOPCAT'); if ($pos !== false) { goto topcat; }
$pos = strpos($cleaned, '-CCAT'); if ($pos !== false) { goto topcat; }
$pos = strpos($cleaned, '-iGNiTiON'); if ($pos !== false) { goto ignition; }
$pos = strpos($cleaned, '-SiNNERS'); if ($pos !== false) { goto sinners; }
$pos = strpos($cleaned, '-AN0NYM0US'); if ($pos !== false) { goto anonymous; }
$pos = strpos($cleaned, '-WiDE'); if ($pos !== false) { goto wide; }
$pos = strpos($cleaned, 'RUSTED proudly presents....'); if ($pos !== false) { goto rusted; }
$pos = strpos($cleaned, 'XX^NFO 2o13'); if ($pos !== false) { goto veto; }
$pos = strpos($cleaned, 'J·F·K'); if ($pos !== false) { goto jfkdvd; }
$pos = strpos($cleaned, '-LPD'); if ($pos !== false) { goto lpd; }
$pos = strpos($cleaned, '< wlMt >'); if ($pos !== false) { goto walmart1; }
$pos = strpos($cleaned, '-VH-PROD'); if ($pos !== false) { goto vhprod; }
$pos = strpos($cleaned, '-LiBRARiANS'); if ($pos !== false) { goto librarians; }
$pos = strpos($cleaned, '-DRONES'); if ($pos !== false) { goto drones; }
$pos = strpos($cleaned, '-0MNiDVD'); if ($pos !== false) { goto omnidvd; }
$pos = strpos($cleaned, 'MEET THE CREEPER AT...'); if ($pos !== false) { goto creepshow; }
$pos = strpos($cleaned, 'Don\'t ask a Man in the Middle ask THE...'); if ($pos !== false) { goto ambassador; }
$pos = strpos($cleaned, '-MARS'); if ($pos !== false) { goto mars; }
$pos = strpos($cleaned, '-UNVEiL'); if ($pos !== false) { goto unveil; }
$pos = strpos($cleaned, ' FRAGMENT '); if ($pos !== false) { goto fragment; }
$pos = strpos($cleaned, '-GHOULS'); if ($pos !== false) { goto ghouls; }
$pos = strpos($cleaned, '-PHOBOS'); if ($pos !== false) { goto phobos; }
$pos = strpos($cleaned, '-MELiTE'); if ($pos !== false) { goto melite; }
$pos = strpos($cleaned, '-FEATURE'); if ($pos !== false) { goto feature; }
$pos = strpos($cleaned, '   C H i K A N i   P R E S E N T S   '); if ($pos !== false) { goto chikani; }
$pos = strpos($cleaned, 'TRiPS PROUDLY PRESENTS......'); if ($pos !== false) { goto trips; }
$pos = strpos($cleaned, '     [SHOUTOUTS.TO.OUR.FRIENDS.IN]'); if ($pos !== false) { goto keiso2; }
$pos = strpos($cleaned, '-SPINE'); if ($pos !== false) { goto spine; }
$pos = strpos($cleaned, '-KaKa'); if ($pos !== false) { goto kaka; }
$pos = strpos($cleaned, '-PSYCHD'); if ($pos !== false) { goto psychd; }
$pos = strpos($cleaned, '-NoRBiT'); if ($pos !== false) { goto norbit; }
$pos = strpos($cleaned, ' |.|   | |  |  |  |  |__ --|   _|  -__|  _  |.  |   \|  -__|__ --|  |   _|  -__|__ --|   '); if ($pos !== false) { goto twisteddesires; }
$pos = strpos($cleaned, '-DEV0'); if ($pos !== false) { goto dev0; }
$pos = strpos($cleaned, '  ENJOY THiS NiCE PRE WiTH TORTiLLAS AND...'); if ($pos !== false) { goto guacamole; }
$pos = strpos($cleaned, '-TattooLovers'); if ($pos !== false) { goto tattoolovers; }
// Generic stripper to attempt to strip unmatched groups
  $cleaned = StripArt($cleaned);
//  $cleaned = preg_replace('/[ ]*(\r{0,1}\n)[ ]*/', '$1', $cleaned);
//  $cleaned = preg_replace('/[\r\r]/', '', $cleaned);
  $cleaned = preg_replace('/:::/', '', $cleaned);
  $cleaned = preg_replace('/__/', '', $cleaned);
//  $cleaned = preg_replace('/(?|( )+|(\\n\\n)+)/', '$1', $cleaned);
  $cleaned = removelines($cleaned);
  $cleaned = str_replace('-TEAM BAJSKORV','',$cleaned);  // for -BAJSKORV
  $cleaned = str_replace("pH7\n0ND\nSiLK","",$cleaned);
  $cleaned = str_replace('ALLiANCE - iMARS','',$cleaned); //For -SPARKS
  $cleaned = str_replace('ASCii/NFO: pH7 of SiLK','',$cleaned); // For -SPARKS
  $cleaned = str_replace("\noPi\n09",'',$cleaned); // For IMMERSE
  $cleaned = str_replace("\noPi\n\n",'',$cleaned); // For ASAP
  $cleaned = str_replace("\nasdx\n\naSCii by\noPi/sAc\n20 11",'',$cleaned); // For ASAP
goto end;
//
// Sections for specific groups, cleans then jumps to end of code
//
tattoolovers:
  $cleaned = GetStringBetween($cleaned, '  |_________________|', 'Searching.For.: - Money Suppliers');
  $cleaned = str_replace(' Link..........:', '<br/> Link..........:', $cleaned);
  $cleaned = str_replace(' Release.Notes.:', '<br/> Release.Notes.:', $cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/",' ',$cleaned);
goto end;
guacamole:
  $cleaned = GetStringBetween($cleaned, '... ', ' dip it!');
  $cleaned = preg_replace('/\.{2,}/', '', $cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/",' ',$cleaned);
goto end;
dev0:
  $cleaned = GetStringBetween($cleaned, '_______________ ', 'enjoy haters.');
  $cleaned = str_replace("-.-.-.- ", "", $cleaned);
  $cleaned = str_replace("-.-.-.-.- ", "", $cleaned);
  $cleaned = str_replace("-.-.-.-.- ", "", $cleaned);
  $cleaned = str_replace(".-.-.-.- ", "", $cleaned);
  $cleaned = str_replace(".-.-.-.-.- ", "", $cleaned);
  $cleaned = str_replace(".-.-.-.-.- ", "", $cleaned);
  $cleaned = str_replace("'.'.'.'.'.'.'.' ", "", $cleaned);
  $cleaned = str_replace("_______________ ", "", $cleaned);
  $cleaned = str_replace(":.:.:.:.:.:.:.: ", "", $cleaned);
  $cleaned = str_replace("                http", "<br/>http", $cleaned);
goto end;
norbit:
  $cleaned = GetStringBetween($cleaned, '  PRESENTS...', ':CONTACT iNFO:');
  $cleaned = preg_replace("/[[:blank:]]+/",' ',$cleaned);
  $cleaned = str_replace("RELEASE INFO:", "<br/>RELEASE INFO:", $cleaned);
  $cleaned = str_replace("IMDb LINK", "<br/>IMDb LINK", $cleaned);
  $cleaned = str_replace("PLOT / Storyline:", "<br/>PLOT / Storyline:", $cleaned);
goto end;
psychd:
  $cleaned = explode("\n", $cleaned);
  for ($i = 1; $i <= 10; $i++) {
  array_shift($cleaned);
}  
  $cleaned = implode("\n", $cleaned);
  $cleaned = str_replace('"Your worst inhibitions tend to psych you out in the end."', '', $cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/",' ',$cleaned);
  goto end;
twisteddesires:
  $cleaned = GetStringBetween($cleaned, '                                                                           ', '    Looking for private .eu sites that are 500mbit or more, everything but NL!');
  $cleaned = preg_replace("/[[:blank:]]+/",' ',$cleaned);
//  $cleaned = str_replace(' _______ __ __ __ ______ __', '', $cleaned);
goto end;
kaka:
  $cleaned = GetStringBetween($cleaned, 'KaKa is A Key to Audio █ KaKa is A Key to Av', '   G R P    I N F O   ');
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/",' ',$cleaned);
goto end;
spine:
  $cleaned = GetStringBetween($cleaned, ' ^ ^ Presents ^ ^', '\"That\'s for fun like always\"');
  $cleaned = StripArt($cleaned);
goto end;
keiso2:
  $cleaned = replace_content_inside_delimiters('[SHOUTOUTS.TO.OUR.FRIENDS.IN]', ' artcrew', '', $cleaned);
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace('                     [SHOUTOUTS.TO.OUR.FRIENDS.IN] artcrew', '', $cleaned);
  $cleaned = str_replace("PUBLISHER....", "\n\rPUBLISHER....", $cleaned);
  $cleaned = str_replace("TUTORIAL", "\n\rTUTORIAL\n\r", $cleaned);
  $cleaned = str_replace("Topics include:", "\n\rTopics include:\n\r", $cleaned);
goto end;
tastetv:
  $cleaned = GetStringBetween($cleaned, '   ....proudly presents....    ', ' :: GREETiNGS ::  ');
  $cleaned = StripArt($cleaned);
goto end;
trips:
  $cleaned = GetStringBetween($cleaned, 'TRiPS PROUDLY PRESENTS......', ' We want sources. We want sites. Find us. ');
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace("RELEASED: ", "<br/>RELEASED: ", $cleaned);
  $cleaned = str_replace("AUDIO.BITRATE: ", "<br/> AUDIO.BITRATE: ", $cleaned);
  $cleaned = str_replace("VIDEO.BITRATE: ", "<br/> VIDEO.BITRATE: ", $cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/",' ',$cleaned);
goto end;
chikani:
  $cleaned = GetStringBetween($cleaned, '   C H i K A N i   P R E S E N T S   ', '  W i T H   L O T S   O F   G O O ');
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/",' ',$cleaned);
goto end;
feature:
  $cleaned = str_replace('    E█', '     █', $cleaned);
  $cleaned = GetStringBetween($cleaned, '  Sit back, relax and watch this FEATURE!   ', '   2010                            -                               ');
  $cleaned = StripArt($cleaned);
goto end;
noscreens:
  $cleaned = GetStringBetween($cleaned, '▀███▀             ▀ ▄▀                                   ▀▄ ▀       ░     ▀███▀', '    AN0NYM0US - MELiTE - ROOR - VBT       ');
  $cleaned = StripArt($cleaned);
  $cleaned = removelines($cleaned);
goto end;
melite:
  $cleaned = GetStringBetween($cleaned, '  is proud to present:', '   iMARS - AN0NYM0US - VBT');
  $cleaned = StripArt($cleaned);
  $cleaned = removelines($cleaned);
goto end;
phobos:
  $cleaned = GetStringBetween($cleaned, 'Proudly Presents', 'Group Info');
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace('  ', '', $cleaned);
goto end;
ghouls:
  $cleaned = GetStringBetween($cleaned, ' GHOULS POSSESSES YOU WITH', '   d$$$$$$$$$$$c  ');
goto end;
fragment:
  $cleaned = GetStringBetween($cleaned, " FRAGMENT ", " Another quality release by your friends at FRAGMENT ");
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
  $cleaned = removelines($cleaned);
  $cleaned = str_replace(': CD2 ', '              : CD2 ', $cleaned);
goto end;
unveil:
  $cleaned = GetStringBetween($cleaned, "    | ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~       ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ |", "Release Notes...........");
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace(ARRAY('_','~','|',' / ',' .',' :','---'), ' ', $cleaned);
  $cleaned = str_replace('     ------------------------------- --  -- ---------------------------- ', '', $cleaned);
  $cleaned = str_replace('               - --  --          - ', '', $cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
  $cleaned = removelines($cleaned);
goto end;
mars:
  $cleaned = GetStringBetween($cleaned, "Proudly Presents", "Group Info");
  $cleaned = StripArt($cleaned);
  $cleaned = removelines($cleaned);
goto end;
futil:
  $cleaned = preg_replace('/\.{3,}/', '..', $cleaned);
  $cleaned = preg_replace('/\.{2,}/', '', $cleaned);
  $cleaned = str_replace('  ','',$cleaned);
  $cleaned = removelines($cleaned);
goto end;
ambassador:
  $cleaned = GetStringBetween($cleaned, "  Specification        ", "  Notes and Greets      ");
  $cleaned = str_replace("                          0","",$cleaned);
  $cleaned = StripArt($cleaned);
  $cleaned = removelines($cleaned);
  $cleaned = str_replace("____ ____","",$cleaned);
goto end;
creepshow:
  $cleaned = GetStringBetween($cleaned, "MEET THE CREEPER AT...", "NOTES.......:");
  $cleaned = removelines($cleaned);
goto end;
omnidvd:
  $cleaned = str_replace("..:: 0MNiDVD Presents ::..","",$cleaned);
  $cleaned = str_replace("=======================================================================================================","",$cleaned);
  $cleaned = str_replace("..:: [ DISCLAIMER - 0MNiDVD authorizes the following crews to use our source: NOBODY ] ::..","",$cleaned);
  $cleaned = str_replace("..:: [ INFO ] ::..","",$cleaned);
  $cleaned = str_replace("==================","",$cleaned);
  $cleaned = str_replace(ARRAY('..:: [ ',' ] ::..',' ] :..','..:: ',' ::..'), ' ', $cleaned);
  $cleaned = removelines($cleaned);
goto end;
drones:
  $cleaned = str_replace(ARRAY('D R O N E S','drop','on your head','Sitrep'), ' ', $cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
goto end;
librarians:
  $cleaned = GetStringBetween($cleaned, "------------------ LiBRARiANS --------------------------------", "A special thanks to our friends");
goto end;
vhprod:
  $cleaned = GetStringBetween($cleaned, "░░░░░█████████¦░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░█████████░░░░", "  R E L E A S E  N O T E S  ");
  $cleaned = str_replace(ARRAY('░','█','▓','¦','▄'), ' ', $cleaned);
  $cleaned = str_replace("                                                                              ","",$cleaned);
  $cleaned = str_replace("\n\r\n\r","\n\r",$cleaned);
goto end;
walmart1:
  $cleaned = GetStringBetween($cleaned, "  ::          (__\_)\____/(____/  (__)\_)__)(__)  \__/           ::", "HOPE YOU GUYS ENJOY");
  $cleaned = str_replace("::", "  ", $cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
  $cleaned = str_replace(" -----------------------------------------------------------------", "\nOther Info", $cleaned);
  $cleaned = str_replace(" __ ____ _ _ ____ ____ __ __ _ ____ __ ", "", $cleaned);
  $cleaned = str_replace(" / \(_ _)/ )( \( __)( _ \ ( )( ( \( __)/ \ ", "", $cleaned);
  $cleaned = str_replace(" ( O ) )( ) __ ( ) _) ) / )( / / ) _)( O ) ", "", $cleaned);
  $cleaned = str_replace(" \__/ (__) \_)(_/(____)(__\_) (__)\_)__)(__) \__/ ", "", $cleaned);
  $cleaned = str_replace(":. ", "", $cleaned);
  $cleaned = removelines($cleaned);
goto end;
lpd:
  $cleaned = GetStringBetween($cleaned, "  n  f  o", " e  l  e  a  s  e ");
  $cleaned = str_replace("·", " ", $cleaned);
  $cleaned = str_replace(" [", " :", $cleaned);
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace('/\ {3,}/', ' ', $cleaned);
goto end;
jfkdvd:
  $cleaned = GetStringBetween($cleaned, " Release Info ", "Group Info");
  $cleaned = str_replace(ARRAY('█','║','▓','▒','░','Ð','╔','═','╗','¤','┬'), ' ', $cleaned);
  $cleaned = str_replace("\n                                                                                ",'',$cleaned);
  $cleaned = str_replace("\n                                                                               ",'',$cleaned);
  $cleaned = str_replace("\n                                                                              ",'',$cleaned);
  $cleaned = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $cleaned);
  $cleaned = str_replace("\n             Release Date..:","\n\n             Release Date..:",$cleaned);
  $cleaned = str_replace("\n                                    DVD Info","\n\n                                    DVD Info",$cleaned);
  $cleaned = str_replace("\n                                    Standard","\n\n                                    Standard",$cleaned);
  $cleaned = str_replace("\n                                     Video","\n\n                                     Video",$cleaned);
  $cleaned = str_replace("\n                                     Audio","\n\n                                     Audio",$cleaned);
  $cleaned = str_replace("\n                                   Subtitles","\n\n                                   Subtitles",$cleaned);
  $cleaned = str_replace("\n                                  Extras","\n\n                                    Extras",$cleaned);
  $cleaned = str_replace("\n                                   Movie Info","\n\n                                   Movie Info",$cleaned);
  $cleaned = str_replace("\n                                  Ripper Notes","\n\n                                  Ripper Notes",$cleaned);
  goto end;
rusted:
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
  $cleaned = removelines($cleaned);
  $cleaned = GetStringBetween($cleaned, "RUSTED proudly presents....", "XXNf0 2o13");
goto end;
veto:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "PROUDLY PRESENTS :", "We are currently looking for");
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
  $cleaned = removelines($cleaned);
goto end;
wide:
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace('..:: ', '', $cleaned);
  $cleaned = str_replace(' ::..', '', $cleaned);
  $cleaned = str_replace('Proudly Present', '', $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'GROUP NOTES'));
  $cleaned = str_replace('                  ---- --------------------- ------------', '', $cleaned);
  $cleaned = str_replace('          ', '', $cleaned);
  $cleaned = removelines($cleaned);
 goto end;
divxfactory:
//  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "PROUDLY PRESENTS ... ]", "We are currently looking for");
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace("FORMAT..","\nFORMAT..",$cleaned);
  $cleaned = str_replace("RESOLUTiON.","\nRESOLUTiON.",$cleaned);
  $cleaned = str_replace("AUDiO..","\nAUDiO..",$cleaned);
  $cleaned = str_replace("SUPPLiER..","\nSUPPLiER..",$cleaned);
  $cleaned = removelines($cleaned);
goto end;
anonymous:
  $cleaned = GetStringBetween($cleaned, "AN0NYM0US PRESENTS:", "We are Legion");

  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
  $cleaned = removelines($cleaned);
goto end;
sinners:
  $pos = strpos($cleaned, 'All right, no more Mr Fucking Nice Guy'); if ($pos !== false) { goto sinners1; }
  $cleaned = GetStringBetween($cleaned, "LIKE THE SIN (LOVE THE SiNNERS)", "GROUP NEWS");
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
  $cleaned = removelines($cleaned);
  $cleaned = str_replace('- -- ', '               ',$cleaned);
goto end;
sinners1:
  $cleaned = GetStringBetween($cleaned, "All right, no more Mr Fucking Nice Guy", "GROUP NEWS");
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
  $cleaned = removelines($cleaned);
  $cleaned = str_replace('- -- ', '               ',$cleaned);
goto end;
sexcat:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "P R O U D L Y  P R E S E N T S", "V I V A  M E X I C O  C A B R O N E S");  
  $cleaned = removelines($cleaned);
goto end;
topcat:
    $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "P R O U D L Y  P R E S E N T S", "V I V A  M E X I C O  C A B R O N E S");  
    $cleaned = StripArt($cleaned);
//  $cleaned = substr($cleaned, 0, strpos($cleaned, ''));
//  $cleaned = removelines($cleaned);
goto end;
intensity:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, ' TITLE..'); 
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Enjoy this quality release from iNTENSiTY'));
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
goto end;
emag:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, 'PRESENTS :'); 
  $cleaned = str_replace('PRESENTS :','',$cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'iNFOS :'));
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
  $cleaned = str_replace('e GENRE..','GENRE..',$cleaned);
  $cleaned = str_replace('M ISSUE/VOLUME..','ISSUE/VOLUME..',$cleaned);
  $cleaned = str_replace('A RELEASE TYPE..','RELEASE TYPE..',$cleaned);
  $cleaned = str_replace('G LANGUAGE..','LANGUAGE..',$cleaned);
  $cleaned = removelines($cleaned);
goto end;
doggpound:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, 'Title: '); 
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, ' _ _ _____ _____ _____ _____'));
goto end;
snow:
  $cleaned = strstr($cleaned, "     :                          `             '                          ."); 
  $cleaned = str_replace("     :                          `             '                          .",'',$cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, "     .                                                                   ."));
  $cleaned = str_replace('   .   ','       ',$cleaned);
  $cleaned = str_replace('   :   ','       ',$cleaned);
  $cleaned = str_replace('            ','',$cleaned);
goto end;
vomit:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "PRESENTS TO YOU", "A special thanks to our friends @ SADPANDA"); 
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
  $cleaned = removelines($cleaned);
goto end;
hd4u:
  $cleaned = substr($cleaned, 0, strpos($cleaned, '    ■ Enjoy!')); 
  $cleaned = StripArt($cleaned);
  $cleaned = removelines($cleaned);
goto end;
nodlabs:
  $cleaned = GetStringBetween($cleaned, " elle!<VNS> ", " AEN AMIABLE ANGELiC FLATLiNE ");
  $cleaned = StripArt($cleaned);
//  $cleaned = str_replace(ARRAY('ÿ','²','±','Û','°','ß','Þ','Ý','Ü'), '', $cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
  $cleaned = removelines($cleaned);
goto end;
moovee:
  $cleaned = GetStringBetween($cleaned, "[  P R E S E N T S  ]", "CONTACT: ");
  $cleaned = StripArt($cleaned);
goto end;
kukas:
  $cleaned = GetStringBetween($cleaned, "  Proudly Presents ", "  Notes  ");
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ",$cleaned);
  $cleaned = removelines($cleaned);
goto end;
cbfm:
$cleaned = GetStringBetween($cleaned, "check this release out:", ">Live DownUnder in abbotts aussie paradise");
goto end;
fico:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "Team FiCO Final Coalition 2k8 Presents:", "Currently looking for:");
  $cleaned = preg_replace('/\n+\s+\n\s+/', "\n\n", $cleaned);
  $cleaned = str_replace("\n      ", "\n", $cleaned);
  $cleaned = str_replace('Cast goes here', '', $cleaned);
  $cleaned = str_replace('Plot goes here', '', $cleaned);
  $cleaned = "[pre]" . $cleaned . "[/pre]";
goto end;
starlets:
  $cleaned = strstr($cleaned, 'RELEASE.DATE____'); 
  $cleaned = substr($cleaned, 0, strpos($cleaned, '  nEWs   '));  
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace("http", "<br/>http", $cleaned);
  $cleaned = str_replace("Story :", "<br/>Story :", $cleaned);
  $cleaned = str_replace("Cast :", "<br/>Cast :", $cleaned);
  $cleaned = str_replace('pLOt', ' ', $cleaned);
  $cleaned = removelines($cleaned);
  $cleaned = str_replace('_', ' ', $cleaned);
goto end;
japhson:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, 'Release iNFO'); 
  $cleaned = substr($cleaned, 0, strpos($cleaned, '::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::'));  
  $cleaned = removelines($cleaned);
goto end;
biggiesmallz:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, 'RELEASE INFOS'); 
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'GROUP NOTES'));  
  $cleaned = removelines($cleaned);
  $cleaned = str_replace('TECHINICALCRAP:',"\nTECHINICALCRAP:\n",$cleaned);
  $cleaned = str_replace("RELEASE INFOS\n\n","RELEASE INFOS\n",$cleaned);
goto end;
cinefile:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "              ee    ", "Enjoy another nice release");
  $cleaned = removelines($cleaned);
goto end;
ltu:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, " L o v e  t h e        u n l o v a b l e ", " GROUP NEWS ");
  $cleaned = removelines($cleaned);
goto end;
multiply:
  $cleaned = strstr($cleaned, 'INFO:');
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace('ppppppppppppppppppppppppppppppppppp','',$cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'MULTiPLY As in multiplying our releases'));  
  $cleaned = removelines($cleaned);
goto end;
taste:
  $cleaned = GetStringBetween($cleaned, " RLS.iNFO ", " RLS.NOTE ");
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace('ASPECT.RATiO', '  ASPECT.RATiO', $cleaned);
  goto end;
sprinter:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, '    SPRiNTER proudly presents...'); 
  $cleaned = str_replace('    SPRiNTER proudly presents...','',$cleaned);
  $cleaned = str_replace('UUU','',$cleaned);
  $cleaned = str_replace(' UU ','',$cleaned);
  $cleaned = str_replace(' UU','',$cleaned);
  $cleaned = str_replace(" U\r",'',$cleaned);
  $cleaned = replace_content_inside_delimiters('Enjoy', '    Details', '', $cleaned);
  $cleaned = str_replace('Enjoy!', '', $cleaned);
  $cleaned = removelines($cleaned);
goto end;
deuterium:
  $cleaned = strstr($cleaned, 'TiTLE >'); 
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Greetings : '));
goto end;
swe6rus:
  $cleaned = str_replace('Story :',"Story\n",$cleaned);
  $cleaned = str_replace('Cast :',"Cast\n",$cleaned);
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, 'Crew presents'); 
  $cleaned = str_replace('Crew presents','',$cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, '. Respect to'));
  $cleaned = str_replace('Company .........','Company :',$cleaned);
  $cleaned = str_replace('Street Date .....','Street Date :',$cleaned);
  $cleaned = str_replace('Source ..........','Source :',$cleaned);
  $cleaned = str_replace('Sound ...........','Sound :',$cleaned);
  $cleaned = str_replace('Bitrate .........','Bitrate :',$cleaned);
  $cleaned = str_replace('Resolution ......','Resolution :',$cleaned);
  $cleaned = str_replace('Genre ...........','Genre :',$cleaned);
  $cleaned = str_replace('Runtime .........','Runtime :',$cleaned);
  $cleaned = str_replace('...','',$cleaned);
  $cleaned = str_replace('..','',$cleaned);
  $cleaned = str_replace(' .','',$cleaned);
  $cleaned = removelines($cleaned);
goto end;
reward:
  $cleaned = GetStringBetween($cleaned, "proudly presents..", "Play the game and you shall be rewarded");
  $cleaned = removelines($cleaned);
goto end;
cicxxx:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "presents", "G r o u p   I n f o");
  $cleaned = removelines($cleaned);
  $cleaned = str_replace(" Format..","\nFormat..",$cleaned);
  $cleaned = str_replace(" Resolution..","\nResolution..",$cleaned);
  $cleaned = str_replace(" Audio..","\nAudio..",$cleaned);
  $cleaned = str_replace(" Disk Size..","\nDisk Size..",$cleaned);
  $cleaned = str_replace("P l o t\n\n","P l o t\n",$cleaned);
  $cleaned = str_replace("C a s t\n\n","C a s t\n",$cleaned);
  $cleaned = str_replace(". .\n","",$cleaned);
goto end;
aaf:
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace('AGGRESSIVE ARCHIVE FORCE','',$cleaned);
  $cleaned = str_replace('Big Up all scene massive','',$cleaned);
  $cleaned = str_replace('Big Up all scene massive!','',$cleaned);
  $cleaned = removelines($cleaned);
goto end;
ifpd:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, 'iNFO:'); 
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Greets:'));
  $cleaned = str_replace('_','',$cleaned); 
goto end;
sonitus:
  $cleaned = GetStringBetween($cleaned, "PRESENTS TO YOU....", "                                              ±°");
//  $cleaned = preg_replace('/([^\w\d\s\-\:\.\?\=\!\/]+)/', '', $cleaned);
goto end;
exvid:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, '     SP               C 2009      '); 
  $cleaned = str_replace('     SP               C 2009      ','',$cleaned); 
  $cleaned = str_replace('EXViD aims to iNTERNAL those releases which have been lost in the archives.','',$cleaned); 
  $cleaned = str_replace('EXViD aims to PRE non-internal releases which have poor sources and are likely skipped by others.','',$cleaned); 
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Looking for:'));
  $cleaned = removelines($cleaned);
goto end;
ingot:
  $cleaned = str_replace(ARRAY('Ì','»','°','±','²','Û','º','È','Í','¼','É','¹','Ü','Ê','Ý','ß','Þ'), ' ', $cleaned);
  $cleaned = GetStringBetween($cleaned, "ANOTHER CARD...", "What we need?");
  $cleaned = str_replace('duration ..',"\nduration ..",$cleaned); 
  $cleaned = str_replace('format ..',"\nformat ..",$cleaned); 
  $cleaned = str_replace('source ..',"\nsource ..",$cleaned); 
  $cleaned = str_replace('crf ..',"\ncrf ..",$cleaned); 
  $cleaned = str_replace('subs ..',"subs ..",$cleaned); 
  $cleaned = removelines($cleaned);
goto end;
pornolation:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "PORNOLATiON PRESENTS...", "- News - -");
goto end;
prince:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "PROUDLY PRESENTS", "Notes...");
goto end;
debtvid:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "DuBi0uSlY EnDoWs YoU WiTh", "QUOTES");
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
  $cleaned = str_replace(" \r\n \r\n \r\n",'',$cleaned); 
goto end;
xcite:
  $cleaned = strstr($cleaned, ' INFO ');  
  $cleaned = str_replace(' INFO ','',$cleaned); 
  $cleaned = str_replace(ARRAY('░','▒','▓','█','╔','╣','╠','═','╚','═','╝','╗','║','▄','╗','╩'), ' ', $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, '         NOTE'));
//  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
goto end;
wnn:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, 'RELEASE iNFO');  
  $cleaned = str_replace('_','',$cleaned); 
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'GROUP NOTES'));
goto end;
vbt:
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace('Very Bad Things Presents...', '', $cleaned); 
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Group Notes'));
goto end;
failed:
  $cleaned = GetStringBetween($cleaned, "PRESENTS:", "Group News");
  $cleaned = removelines($cleaned);
goto end;
fade:
  $cleaned = str_replace('_PRESENTS_', '', $cleaned); 
  $cleaned = str_replace('_', ' ', $cleaned); 
goto end;
terra:
  $cleaned = substr($cleaned, 0, strpos($cleaned, ' ÜÛÛß ßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßß ßÛÛÜ'));
  $cleaned = strstr($cleaned, '  ßß ßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßß ßß');  
  $cleaned = StripArt($cleaned);
goto end;
crooks:
  $cleaned = StripArt($cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'GENERAL iNFORMATiONS'));
  $cleaned = str_replace('::.', '', $cleaned); 
  $cleaned = str_replace('::', '', $cleaned); 
  $cleaned = str_replace(' :', '', $cleaned); 
  $cleaned = removelines($cleaned);
goto end;
crimson:
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Notes:'));
  $lines = preg_split( '/\r\n|\r|\n/', $cleaned );  
  for ($l=0; $l < count($lines); $l++) {
  if ($l != 0 && $l != 1 && $l != 2 ) {
    echo "<pre>".$lines[$l]."</pre>";
    }
 }         
goto end1;
redblade:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "RedBlade presents:", "Group Notes:");
goto end;
knifesharp:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "p r e s e n t s ... .   .", "Were currently looking for:");
  $cleaned = removelines($cleaned);
goto end;
docere:
  $cleaned = substr($cleaned, 0, strpos($cleaned, '      Û °° Û   Empty.'));
  $cleaned = StripArt($cleaned);
  $cleaned = removelines($cleaned);
goto end;
uppercut:
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace('    .','', $cleaned); 
  $cleaned = strstr($cleaned, 'PRESENTS');
  $cleaned = str_replace('PRESENTS','', $cleaned); 
  $pos = strpos($cleaned, 'Greets to everyone in the xxx scene'); if ($pos !== false) { $cleaned = substr($cleaned, 0, strpos($cleaned, 'Greets to everyone in the xxx scene')); }
  $pos = strpos($cleaned, 'Greetings to everyone in the xxx scene'); if ($pos !== false) { $cleaned = substr($cleaned, 0, strpos($cleaned, 'Greetings to everyone in the xxx scene')); }
goto end;
a2hd:
  $cleaned = strstr($cleaned, 'Release Name---');
  $cleaned = StripArt($cleaned);
  $cleaned = removelines($cleaned);
  $cleaned = str_replace("2x\nSunZero 2oo6","",$cleaned); 
goto end;
invandraren:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, '   --   --  --    -     -- ----  --  ------ -- -- -- ---- -- --------  --');
  $cleaned = str_replace('   --   --  --    -     -- ----  --  ------ -- -- -- ---- -- --------  --','',$cleaned);
  $cleaned = removelines($cleaned);
goto end;
iguana:
  $cleaned = strstr($cleaned, '  ▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀');
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Greetz to everyone helping out the '));
//  $cleaned = str_replace('Note: HQ sites needed: see contact info plz!','',$cleaned);
  $cleaned = str_replace(ARRAY('▄','▀','▓','█','▒','░','■','¦','Ì'), ' ', $cleaned);
  $cleaned = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $cleaned);
  $cleaned = str_replace('                Supplier', "\n                Supplier", $cleaned);
  $cleaned = str_replace('                     http:', "\n                     http:", $cleaned);
  $cleaned = str_replace('            ASPECT', "\n            ASPECT", $cleaned);
  $cleaned = str_replace('                                   SUBTiTLES', "\n                                   SUBTiTLES", $cleaned);
  $cleaned = str_replace('              ViDEO', "\n              ViDEO", $cleaned);
  $cleaned = str_replace('                                 Rippers Notes', "\n                                 Rippers Notes\n", $cleaned);
//  $cleaned = str_replace('                Supplier:', "\n                Supplier:", $cleaned);
goto end;
river:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, '___  _ ___   .=.   ___=_. ___  _ ');
  $cleaned = str_replace('___  _ ___   .=.   ___=_. ___  _ ', '', $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'We are currently looking for legit gbit'));
goto end;
sys:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, " sISTER pRESENTs...", "We know who we are where we came from and why were here.");
  $cleaned = str_replace('.res ', "\nres ", $cleaned);
  $cleaned = str_replace('.fps ', "\nfps ", $cleaned);
  $cleaned = str_replace('.region ', "\nregion ", $cleaned);
  $cleaned = str_replace('.release date', 'release date', $cleaned);
  $cleaned = str_replace('.air date', 'air date', $cleaned);
  $cleaned = str_replace('.genre ', 'genre ', $cleaned);
  $cleaned = str_replace('.link', 'link ', $cleaned);
  $cleaned = preg_replace('/[ ]*(\r{0,1}\n)[ ]*/', '$1', $cleaned);
  $cleaned = removelines($cleaned);
goto end;
barge:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "        /         /       /        /        / ", "Notes:");
goto end;
sadpanda:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "Brings You", "GREETINGS VOMiT");
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
goto end;
deimos:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, '      Release Name ');
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Group Info'));
goto end;
dynamics:
  $cleaned = StripArt($cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, "Remember to BUY the stuff"));
  $cleaned = preg_replace('/[ ]*(\r{0,1}\n)[ ]*/', '$1', $cleaned);
  $cleaned = removelines($cleaned);
goto end;
dimension:
  $cleaned = substr($cleaned, 0, strpos($cleaned, "18/Slower"));
goto end;
qcf:
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'NOTES & GROUP NEWS'));
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, 'RELEASE iNFORMATiON');
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
goto end;
haggis:
  $pos = strpos($cleaned, 'ßÛÛÛÛÛÛ   HORT'); if ($pos !== false) { goto haggis1; }
  $cleaned = strstr($cleaned, 'ÌÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍPRESENTSÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹');
  $cleaned = substr($cleaned, 0, strpos($cleaned, "[Clan]"));
  $cleaned = str_replace('º', '', $cleaned); 
  $cleaned = str_replace('ÌÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍPRESENTSÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹', '', $cleaned);
  $cleaned = str_replace('ÈÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¼', '', $cleaned); 
goto end;
haggis1:
  $cleaned = str_replace(ARRAY('°','Ü','Û','²','ß','º'), ' ', $cleaned);
  $cleaned = strstr($cleaned, '        iNGREDiENTS');
  $cleaned = removelines($cleaned);
goto end;
walmart:
  $cleaned = strstr($cleaned, 'WaLMaRT PROUDLY PRESENTS ');
  $cleaned = str_replace('WaLMaRT PROUDLY PRESENTS', '', $cleaned);
  $cleaned = str_replace('::', "", $cleaned);
  $cleaned = str_replace('-+-    -//-', '', $cleaned);
  $cleaned = str_replace('-\\\\-     -+-', '', $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, "g r o u p        g r e e t s"));
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace(' :', '', $cleaned);
  $cleaned = str_replace(' .', '', $cleaned);
  $cleaned = removelines($cleaned);
goto end;
rovers:
  $pos = strpos($cleaned, '  ßßßßßß                                                               ßßßßßß'); if ($pos !== false) { goto rovers2; }
  $cleaned = str_replace(ARRAY('Ì','»','°','±','²','Û','º','È','Í','¼','É','¹','Ü','Ê','Ý','ß','Þ','þ'), ' ', $cleaned);
  $cleaned = str_replace(ARRAY('_','ý','š','á','ñ','ø'), ' ', $cleaned);
  $cleaned = str_replace( '0ND & pH7 of SiLK 2012', '', $cleaned);
  $cleaned = removelines($cleaned);
  goto end;
rovers2:
  $cleaned = GetStringBetween($cleaned, "  ßßßßßß                                                               ßßßßßß", "  ÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜ");
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
 goto end;
batv:
  $cleaned = strstr($cleaned, 'Release Name.....:');
  $cleaned = substr($cleaned, 0, strpos($cleaned, "Greetings to all the groups"));
goto end;
pfa:
  $cleaned = StripArt($cleaned);
  $cleaned = GetStringBetween($cleaned, "...... proudly presents.......", "LOOKING FOR");
  $cleaned = preg_replace('/^[ \t]*[\r\n]+/m', '', $cleaned);
  $cleaned = str_replace('         RELEASE INFO ', "\n            RELEASE INFO\n", $cleaned);
//  $cleaned = str_replace('         iMDB', "\n         iMDB\n", $cleaned);
  $cleaned = str_replace('          PLOT SUMMARY', "\n          PLOT SUMMARY\n", $cleaned);
  $cleaned = str_replace('          CAST', "\n          CAST\n", $cleaned);     
  $cleaned = str_replace('            NOTES', "\n          NOTES\n", $cleaned);
  $cleaned = str_replace(ARRAY('-=  ','  =-'), ' ', $cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
goto end;
fairplay:
  $cleaned = strstr($cleaned, 'RELEASE INFORMATION');
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'GROUPE NOTES'));
  $cleaned = str_replace("|", "", $cleaned);
  $cleaned = str_replace("+-+", "", $cleaned);
  $cleaned = str_replace("'", "", $cleaned); 
  $cleaned = preg_replace('/-+/', '', $cleaned);
  $cleaned = str_replace(' ++', '', $cleaned); 
  $cleaned = str_replace('`.............................................................................', '', $cleaned);
  $cleaned = str_replace('                             RELEASE NOTES', 'RELEASE NOTES', $cleaned);
  $cleaned = str_replace('Enjoy top quality 720p sports release from FAIRPLAY', '', $cleaned);
  $cleaned = str_replace('Enjoy another top quality 720p sports release by FAIRPLAY', '', $cleaned);
  $cleaned = removelines($cleaned);
goto end;
fqm:
  $cleaned = strstr($cleaned, ' Release Type.....:');
  $cleaned = substr($cleaned, 0, strpos($cleaned, "Group Greets"));
  $cleaned = substr($cleaned, 0, strpos($cleaned, "Release  Notes"));
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/( )\\1+/", "$1", $cleaned);    
goto end;
rta:
  $cleaned = substr($cleaned, 0, strpos($cleaned, '  ÜÜÜÜÜÜÜÜÜÜÜÜ ÜÜÜÜÜÜÜ    ÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜ'));
  $cleaned = strstr($cleaned, 'P R O U D L Y    P R E S E N T S  ');
  $cleaned = str_replace('P R O U D L Y    P R E S E N T S  ', '', $cleaned);
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/( )\\1+/", "$1", $cleaned);
  $cleaned = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $cleaned);
  $cleaned = str_replace('Video Information', "\n Video Information\n", $cleaned);
goto end;
kyr:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, 'k  n  o  w       y  o  u  r       r  o  l  e');
  $cleaned = str_replace('    -------- ', '', $cleaned);
  $cleaned = str_replace('k  n  o  w       y  o  u  r       r  o  l  e', '', $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, '            -')); 
  $cleaned = str_replace('  format', "\nformat", $cleaned);
  $cleaned = str_replace('  source', "\nsource", $cleaned);
  $cleaned = str_replace('  bitrate', "\nbitrate", $cleaned);
  $cleaned = str_replace('  resolu.', "\nresolu.", $cleaned);
  $cleaned = str_replace('  frames', "\nframes", $cleaned);
  $cleaned = str_replace('  audio', "\naudio", $cleaned);
  $cleaned = str_replace('  location', "\nlocation", $cleaned);
  $cleaned = removelines($cleaned);
goto end;
fihtv:
  $cleaned = strstr($cleaned, 'release information');
  $cleaned = substr($cleaned, 0, strpos($cleaned, "greetings & contact"));
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace('/__/', '', $cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
  $cleaned = str_replace(" /","", $cleaned);
  $cleaned = str_replace("._//","", $cleaned); 
goto end;
ftp:
  $cleaned = strstr($cleaned, 'Release Name: ');
  $cleaned = substr($cleaned, 0, strpos($cleaned, "Group Notes"));
  $cleaned = preg_replace('/[ ]*(\r{0,1}\n)[ ]*/', '$1', $cleaned);
  $cleaned = preg_replace("/(:)\\1+/", "$1", $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, "                             Other Notes"));
  $cleaned = str_replace("\n:", "", $cleaned);
goto end;
Pr0nStarS:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, 'These mad Pr0nStarS');
  $cleaned = str_replace('These mad Pr0nStarS proudly present their next release', '', $cleaned);
  $cleaned = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Pr0nStarS is a XXX '));
  $cleaned = str_replace('                                              Starring...', "\n                                              Starring...", $cleaned);
  $cleaned = str_replace('-Pr0nStarS', "-Pr0nStarS\n", $cleaned);
goto end;
lol:
// LOL uses 2 nfo layouts & a repack layout so detect which is in use and use appropriate cleaner
  $pos = strpos($cleaned, '   PRESENTS'); if ($pos !== false) { goto lol2; }
  $cleaned = preg_replace('/(°°)(.*)(presents:)/', "$1 $3", $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, "º  News                 º"));
  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
  $cleaned = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $cleaned);
  $cleaned = str_replace("presents: \n", '', $cleaned);
goto end;
lol2:
  $cleaned = preg_replace('/(°°)(.*)(PRESENTS:)/', "$1 $3", $cleaned);
  $cleaned = StripArt($cleaned);
  $cleaned = str_replace('   PRESENTS', '', $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, '  8  Greets  '));
  $cleaned = str_replace('         8', '         ', $cleaned);
  $cleaned = str_replace(' 8  ', '    ', $cleaned);
  $cleaned = str_replace(' 8', '  ', $cleaned);
  $cleaned = str_replace('   ', '', $cleaned);
  $cleaned = removelines($cleaned);
goto end;
mindthegap:
  $cleaned = strstr($cleaned, 'RELEASENAME:');
  $cleaned = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'NOTES:'));
  $cleaned = trim(preg_replace('/\t+/', '', $cleaned));
  $cleaned = str_replace(":\n", " : ", $cleaned);
goto end;
vedett:
  $cleaned = strstr($cleaned, '............... ');
  $cleaned = str_replace('Release Name........: ', 'Release Name : ', $cleaned);
  $cleaned = str_replace('Resolution .........: ', 'Resolution : ', $cleaned);
  $cleaned = str_replace('Video Bitrate ..... : ', 'Video Bitrate : ', $cleaned);
  $cleaned = str_replace('Audio Bitrate ......: ', 'Audio Bitrate : ', $cleaned);
  $cleaned = str_replace('Frame Rate ........ : ', 'Frame Rate : ', $cleaned);
  $cleaned = str_replace('Language ...........: ', 'Language : ', $cleaned);
  $cleaned = str_replace('Subtitles ..........: ', 'Subtitles : ', $cleaned);
  $cleaned = str_replace('Duration............: ', 'Duration : ', $cleaned);
  $cleaned = str_replace('File size ..........: ', 'File size : ', $cleaned);
  $cleaned = str_replace('URL.................: ', 'URL : ', $cleaned);
  $cleaned = str_replace('..', ' ', $cleaned);
  $cleaned = str_replace(' .', '', $cleaned);
  $cleaned = str_replace('  ', '', $cleaned);
  $cleaned = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $cleaned);
  $cleaned = str_replace('# ascii by Joe Piler #', ' ', $cleaned);  
goto end;
keiso:
  $cleaned = GetStringBetween($cleaned, "RELEASE INFORMATION", "▀       NOTES / NEWS        ▀");
  $cleaned = preg_replace('/[^\n\x20-\x7E]/','',$cleaned);
//  $cleaned = StripArt($cleaned);
  $cleaned = preg_replace('/[ ]*(\r{0,1}\n)[ ]*/', '$1', $cleaned);
  $cleaned = preg_replace('/(?:(?:\r\n|\r|\n)\s*){2}/s', "\n\n", $cleaned);
//  $cleaned = substr($cleaned, 0, strpos($cleaned, 'NOTES/NEWS'));
//  $cleaned = str_replace('LANGUAGE......:',"\nLANGUAGE......:",$cleaned);
//  $cleaned = str_replace('RELEASE TYPE..:',"\nRELEASE TYPE..:",$cleaned);
//  $cleaned = str_replace('RELEASE DATE..:',"\nRELEASE DATE..:",$cleaned);
//  $cleaned = str_replace('STORE DATE....:',"\nSTORE DATE....:",$cleaned);
//  $cleaned = str_replace('ISO CHECKSUM..:',"\nISO CHECKSUM..:",$cleaned);
//  $cleaned = str_replace('DISKCOUNT.....:',"\nDISKCOUNT.....:",$cleaned);
//  $cleaned = str_replace('SAVED MONEY...:',"\nSAVED MONEY...:",$cleaned);
  $cleaned = str_replace("PUBLISHER....", "\n\rPUBLISHER....", $cleaned);
  $cleaned = str_replace("TUTORIAL", "\n\rTUTORIAL\n\r", $cleaned);
  $cleaned = str_replace("Topics include:", "\n\rTopics include:\n\r", $cleaned);
goto end;
w4f:
  $cleaned = strstr($cleaned, 'Proudly Presents');
  $cleaned = str_replace('Proudly Presents', '', $cleaned);
  $cleaned = preg_replace('/[^\n\x20-\x7E]/','',$cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'W4F GROUP NEWS'));
  $cleaned = preg_replace("/[[:blank:]]+/"," ", $cleaned);
goto end;
killers:
  $pos = strpos($cleaned, 'We all miss you. Come back soon'); if ($pos !== false) { goto killers1; }
  $cleaned = strstr($cleaned, '                                                                                                  . 4                   ');
//  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Killers is contracting:')); 
  $cleaned = str_replace('                                                                                                  . 4                   ', '', $cleaned);
  $cleaned = str_replace('                                                                                                                        ', '', $cleaned);
  $cleaned = str_replace('                    ', '', $cleaned);
goto end;
killers1:
  $cleaned = StripArt($cleaned);
  $cleaned = strstr($cleaned, '. 4');
  $cleaned = str_replace('. 4', '', $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'n We all miss you. Come back soon.'));
  $cleaned = removelines($cleaned);
goto end;
c4tv:
  $cleaned = preg_replace('/[^\n\x20-\x7E]/','',$cleaned);
  $cleaned = strstr($cleaned, '                                iNFO');
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'Greetings To: aAF BARGE')); 
goto end;
  ignition:
  $cleaned = strstr($cleaned, 'Ì█▓▀                                                                               ▀█▓¦'); 
  $cleaned = str_replace(ARRAY('█','▓','▀','Ì','¦','▄','░'), ' ', $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, '              Greets go out to all the groups working for the real scene,')); 
  $cleaned = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $cleaned);
  $cleaned = str_replace('Source ..:', "\nSource ..:", $cleaned);
  $cleaned = str_replace('          Release', "Release", $cleaned);
  $cleaned = str_replace('            Main', "\nMain", $cleaned);
  $cleaned = str_replace('                ¨', "            ¨", $cleaned);
  $cleaned = str_replace('            Extras', "Extras", $cleaned);
  $cleaned = str_replace('            Notes', "Notes", $cleaned);
goto end;
geckos:
  $cleaned = preg_replace('/[^\n\x20-\x7E]/','',$cleaned);
  $cleaned = strstr($cleaned, '  UUU UUUUUUUUUUY U  '); 
  $cleaned = str_replace("  UUU UUUUUUUUUUY U  ", "", $cleaned);
  $cleaned = str_replace("  UU   _UUUUUUUUUU  U  ", "", $cleaned);
  $cleaned = str_replace(" UU     UUUUUUUUUUU  U   ", "", $cleaned);
  $cleaned = str_replace("     _UUUUUUUUUU     ", "", $cleaned);
  $cleaned = str_replace("UU   UUUUUUUUUU U      ", "", $cleaned);
  $cleaned = str_replace("Y      UUUUUUUUUUU         ", "", $cleaned);
  $cleaned = str_replace(" UUUUUUUUUUU       ", "", $cleaned);
  $cleaned = str_replace("UUUUUUUUUUUUU        U   ", "", $cleaned);
  $cleaned = str_replace("UUUUUUUUUUUUU   UU   UU   ", "", $cleaned);
  $cleaned = str_replace("UUUUUUUUUUUUU    U   ", "", $cleaned);
  $cleaned = str_replace("UUUUUUUUUUUUU    UUUUUUUUUU U ", "", $cleaned);
  $cleaned = substr($cleaned, 0, strpos($cleaned, 'UUUUUUUUUUUUUUUUUUU   '));
  $cleaned = preg_replace("/UUUUUUUUUUUUUUUUUUU   .*/", "", $cleaned);
goto end;
anihls:
  $cleaned = preg_replace('/[^\n\x20-\x7E]/','',$cleaned);
  $cleaned = strstr($cleaned, 'ANiHLS.CREW.PROUDLY.PRESENTS');
  $cleaned = substr($cleaned, 0, strpos($cleaned, ' Plot ')); 
  $cleaned = preg_replace('/ANiHLS.CREW.PROUDLY.PRESENTS                             /', '', $cleaned);
goto end;
amiable:
  $pos = strpos($cleaned, 'AMIABLE proudly presents:');
  if ($pos !== false) {
  $cleaned = GetStringBetween($cleaned, "   AMIABLE proudly presents:", "Tomorrow\'s just your future yesterday!");
  } else {
  $cleaned = GetStringBetween($cleaned, "   AMIABLE presents:", "Tomorrow\'s just your future yesterday!");
  }
  $cleaned = str_replace("\t", '      ', $cleaned);
  $lines = preg_split( "/\r\n|\r|\n/", $cleaned );  
  for ($start=0; $start < count($lines); $start++) {
    $lines[$start] = substr($lines[$start], 30);      
    $lines[$start] = preg_replace("/\s\s/", '', $lines[$start]);  
//    $lines[$start] = preg_replace("/\n\r/", '', $lines[$start]);  
  $cleaned1 = $cleaned1.$lines[$start]."\r\n";
//    echo "<pre>".$lines[$start]."</pre>";
  }         
  $cleaned = removelines($cleaned1);
//  goto end1;
end:
  $cleaned = RightTrim($cleaned);
echo "<pre>".$cleaned."</pre>";
end1:
}
?>         
