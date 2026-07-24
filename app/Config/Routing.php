<?php

namespace Config;

use CodeIgniter\Config\Routing as BaseRouting;

/**
 * Routing configuration
 */
class Routing extends BaseRouting
{
    /**
     * An array of files that contain route definitions.
     *
     * @var list<string>
     */
    public array $routeFiles = [
        APPPATH . 'Config/Routes.php',
    ];

    /**
     * The default namespace for Controllers.
     */
    public string $defaultNamespace = 'App\Controllers';

    /**
     * The default controller when no other controller is specified.
     */
    public string $defaultController = 'Home';

    /**
     * The default method to call on the controller.
     */
    public string $defaultMethod = 'index';

    /**
     * Whether to translate dashes in URIs to underscores.
     */
    public bool $translateURIDashes = false;

    /**
     * Sets the class/method for 404 overrides.
     */
    public ?string $override404 = null;

    /**
     * If TRUE, will attempt to match URI against Controllers automatically.
     */
    public bool $autoRoute = false;

    /**
     * If TRUE, will enable the use of the 'prioritize' option.
     */
    public bool $prioritize = false;

    /**
     * If TRUE, matched multiple URI segments will be passed as one parameter.
     */
    public bool $multipleSegmentsOneParam = false;

    /**
     * Map of URI segments and namespaces for Auto Routing (Improved).
     *
     * @var array<string, string>
     */
    public array $moduleRoutes = [];
}
