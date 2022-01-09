#!/bin/bash
nmap scanme.nmap.org -p 22,80,443 -Pn -T4 -sV -oA recon
python3 /Users/me/Documents/GitHub/dirsearch/dirsearch.py -u scanme.nmap.org -e php
