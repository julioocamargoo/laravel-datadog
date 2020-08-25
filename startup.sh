#!/bin/sh

export DD_AGENT_HOST=$(curl http://169.254.169.254/latest/meta-data/local-ipv4 2>/dev/null)

php ./artisan serve --port=80 --host=0.0.0.0
