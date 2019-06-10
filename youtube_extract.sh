#!/bin/bash

youtube-dl -x --audio-format mp3 -o "./temp/%(title)s.%(ext)s" $1
