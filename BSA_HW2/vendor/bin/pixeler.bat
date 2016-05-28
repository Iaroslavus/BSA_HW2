@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../lastguest/pixeler/bin/pixeler
php "%BIN_TARGET%" %*
