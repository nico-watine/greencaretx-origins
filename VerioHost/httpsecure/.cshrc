set path	= (/bin /usr/bin /usr/local/bin ~/bin ~/usr/bin ~/usr/local/bin)

if (! $?prompt) exit

set history	= 100
set prompt	= "`hostname -s`% "

unalias *

alias h		history
alias ll	ls -l

setenv BLOCKSIZE	1k
setenv EDITOR		vi
setenv PAGER		more

umask 022

if (! $?term) set term = vt100

stty echoe erase ^H kill ^U intr ^C quit ^\| susp ^Z
