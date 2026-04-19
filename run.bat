@echo off

REM %1 is the first parameter passed to the script
set SOURCE_FILE=%1
set DEST=..\xampp\htdocs\index.php

if "%SOURCE_FILE%"=="" (
    echo Please provide a file name.
    exit /b
)

copy "%SOURCE_FILE%" "%DEST%" /Y

echo Copied %SOURCE_FILE% to %DEST%