#!/bin/sh
"/opt/PhpStorm-193.5662.63/jbr/bin/java" -cp "/opt/PhpStorm-193.5662.63/plugins/git4idea/lib/git4idea-rt.jar:/opt/PhpStorm-193.5662.63/lib/xmlrpc-2.0.1.jar:/opt/PhpStorm-193.5662.63/lib/commons-codec-1.13.jar:/opt/PhpStorm-193.5662.63/lib/util.jar" org.jetbrains.git4idea.nativessh.GitNativeSshAskPassApp "$@"
