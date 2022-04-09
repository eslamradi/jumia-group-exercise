<?php

namespace Core\Lib;

use Core\Lib\QueryBuilder;
use Core\Lib\Renderer;

/**
 * Base class for http controllers
 */
abstract class AbstractController {
    
    /**
     * database query builder
     *
     * @var QueryBuilder
     */
    protected $db;

    /**
     * renderer opject for handling views
     *
     * @var Renderer
     */
    protected $renderer;

    /**
     * construct base http controller class
     *
     * @param QueryBuilder $db
     */
    public function __construct(QueryBuilder $db){
        $this->db = $db;
    }
}