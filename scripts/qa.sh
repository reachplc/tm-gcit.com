#!/bin/sh
#
# Quality Assurance tests

./vendor/bin/phpcs --standard="./html/app/themes/gcit/codesniffer.ruleset.xml" ./html/app/themes/gcit --extensions="php" --ignore=""
