echo off
taskkill /im java.exe /f
cd C:\xampp\htdocs\selenium
git fetch --all
git reset --hard origin/master