set /p perem= - <readme.md
echo %perem%
git add *
git commit -m "%perem%"
pause