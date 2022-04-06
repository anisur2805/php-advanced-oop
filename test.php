<?php

use App\School;

require 'vendor/autoload.php';

School::student()->find();
School::teacher()->find();

School::student()->insert();
School::teacher()->insert();

School::student()->delete();
School::teacher()->delete();