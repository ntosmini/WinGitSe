<?php
include_once('./_common.php');
/*
git 패치
*/


switch($_GET['mode']){
	case 'add' :
		exec('C:/xampp/htdocs/WinGitSe/GitWinAdd.bat');
	break;
	case 'set' :
		exec('C:/xampp/htdocs/WinGitSe/GitWinSet.bat');
	break;

	default :
		exec('C:/xampp/htdocs/WinGitSe/GitWin.bat');
	break;
} //end switch

?>