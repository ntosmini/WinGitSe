echo off
taskkill /im java.exe /f
cd C:\xampp\htdocs\selenium
git remote set-url origin https://github.com/ntosmini/WinSe.git
git fetch --all
git reset --hard origin/master