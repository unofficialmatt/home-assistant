#!/bin/bash

tvshow="$1"
mode="$2"
monitor="$3"

response=$(python3 /config/hass_sonarr_search_by_voice.py "$tvshow" "$mode" "$monitor" )
