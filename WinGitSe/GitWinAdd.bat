echo off
taskkill /im java.exe /f
cd C:\xampp\htdocs\selenium
git remote add origin https://github.com/ntosmini/WinGitSe.git
git fetch --all
git reset --hard origin/master