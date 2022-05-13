@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\sdp project\hypersonic\scripts\ctl.bat (start /MIN /B C:\sdp project\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\sdp project\ingres\scripts\ctl.bat (start /MIN /B C:\sdp project\ingres\scripts\ctl.bat START)
if exist C:\sdp project\mysql\scripts\ctl.bat (start /MIN /B C:\sdp project\mysql\scripts\ctl.bat START)
if exist C:\sdp project\postgresql\scripts\ctl.bat (start /MIN /B C:\sdp project\postgresql\scripts\ctl.bat START)
if exist C:\sdp project\apache\scripts\ctl.bat (start /MIN /B C:\sdp project\apache\scripts\ctl.bat START)
if exist C:\sdp project\openoffice\scripts\ctl.bat (start /MIN /B C:\sdp project\openoffice\scripts\ctl.bat START)
if exist C:\sdp project\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\sdp project\apache-tomcat\scripts\ctl.bat START)
if exist C:\sdp project\resin\scripts\ctl.bat (start /MIN /B C:\sdp project\resin\scripts\ctl.bat START)
if exist C:\sdp project\jetty\scripts\ctl.bat (start /MIN /B C:\sdp project\jetty\scripts\ctl.bat START)
if exist C:\sdp project\subversion\scripts\ctl.bat (start /MIN /B C:\sdp project\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\sdp project\lucene\scripts\ctl.bat (start /MIN /B C:\sdp project\lucene\scripts\ctl.bat START)
if exist C:\sdp project\third_application\scripts\ctl.bat (start /MIN /B C:\sdp project\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\sdp project\third_application\scripts\ctl.bat (start /MIN /B C:\sdp project\third_application\scripts\ctl.bat STOP)
if exist C:\sdp project\lucene\scripts\ctl.bat (start /MIN /B C:\sdp project\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\sdp project\subversion\scripts\ctl.bat (start /MIN /B C:\sdp project\subversion\scripts\ctl.bat STOP)
if exist C:\sdp project\jetty\scripts\ctl.bat (start /MIN /B C:\sdp project\jetty\scripts\ctl.bat STOP)
if exist C:\sdp project\hypersonic\scripts\ctl.bat (start /MIN /B C:\sdp project\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\sdp project\resin\scripts\ctl.bat (start /MIN /B C:\sdp project\resin\scripts\ctl.bat STOP)
if exist C:\sdp project\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\sdp project\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\sdp project\openoffice\scripts\ctl.bat (start /MIN /B C:\sdp project\openoffice\scripts\ctl.bat STOP)
if exist C:\sdp project\apache\scripts\ctl.bat (start /MIN /B C:\sdp project\apache\scripts\ctl.bat STOP)
if exist C:\sdp project\ingres\scripts\ctl.bat (start /MIN /B C:\sdp project\ingres\scripts\ctl.bat STOP)
if exist C:\sdp project\mysql\scripts\ctl.bat (start /MIN /B C:\sdp project\mysql\scripts\ctl.bat STOP)
if exist C:\sdp project\postgresql\scripts\ctl.bat (start /MIN /B C:\sdp project\postgresql\scripts\ctl.bat STOP)

:end

