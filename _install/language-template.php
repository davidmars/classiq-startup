<?php
the()->fmkHttpRoot="zzz-fmkHttpRoot-zzz";// /github/classiq-startup
the()->configProjectUrl=new \Pov\Configs\ProjectUrl("zzz-configProjectUrl-zzz"); // localhost/github/classiq-startup/fr
the()->fileSystem=new \Pov\Configs\FileSystem("project");
the()->configProjectUrl->seoActive=true;
the()->boot->loadProject("project");
the()->project->langCode="zzz-langCode-zzz";

include (__DIR__ . "/shared.php");