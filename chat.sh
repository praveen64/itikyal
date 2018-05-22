#!/bin/sh
figlet smec IT chat
STATUS=on
date>chatlog
echo "Login as:"
read USER
echo "[$USER]:> Online" >>chatlog
 while [ "$STATUS" != "logout" ] 
  do  
    echo "------------------------"
    echo "Enter Message:"
    read msg
if [ "$msg" = "" ]
 then
   cat chatlog
else
    STATUS=$msg
    echo "[$USER]:> $msg" >> chatlog
    cat chatlog
fi 
done
echo "[$USER]:> Offline" >>chatlog

