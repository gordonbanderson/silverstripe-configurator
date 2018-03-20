#!/bin/sh

# This script is an EXAMPLE ONLY. You must copy this into your system's script
# execution framework (init.d, service etc) and run it as a daemon AFTER
# editing the relevant paths for your system roots.

SILVERSTRIPE_ROOT=/var/www/
SILVERSTRIPE_JOB_QUEUE_DIR=/var/www/silverstripe/queuedjobs

inotifywait --monitor --event attrib --format "$SILVERSTRIPE_ROOT/vendor/bin/sake dev/tasks/ProcessJobQueueTask job=%f" $SILVERSTRIPE_JOB_QUEUE_DIR | sh
