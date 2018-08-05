<?php

namespace Startup;


use Pov\System\AbstractSingleton;

/**
 * Cette classe contient des méthodes et des propriétés propre au projet
 * @package Startup
 */
class Site extends AbstractSingleton
{
    /**
     * @var string clé publique à configurer pour les APIs Google ajavascript (google map par exemple)
     */
    public $googleApiKey="";
    /**
     * @var string clé utilisée par google webmater tools pour vérifier que le site vous appartient
     */
    public $googleSiteVerification;
    /**
     * @var string identifiant Gogle analytics
     */
    public $googleAnalyticsId;
}