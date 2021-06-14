<?php
include_once('./_common.php');
/*
git 패치
*/



exec('taskkill /im chromedriver.exe /f');
exec('taskkill /im java.exe /f');
sleep(1);

switch($_GET['mode']){
	case 'add' :
		exec('C:/xampp/htdocs/selenium/WinGitSe/GitWinAdd.bat');
	break;
	case 'set' :
		exec('C:/xampp/htdocs/selenium/WinGitSe/GitWinSet.bat');
	break;

	default :
		exec('C:/xampp/htdocs/selenium/WinGitSe/GitWin.bat');
	break;
} //end switch

$sName = "_NtosminiStart";
sleep(1);
exec('schtasks /create /tn "'.$sName.'" /tr c:\xampp\htdocs\_NtosBat\_NtosMiniStart.bat /sc once /st 00:00');
sleep(1);
exec('schtasks /run /tn "'.$sName.'" ');
sleep(1);
exec('schtasks /delete /tn "'.$sName.'" /f');

echo "완료!!";

?>
