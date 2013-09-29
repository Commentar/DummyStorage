<?php
/**
 * Datamapper factory for the dummy storage mechanism
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Storage
 * @subpackage Dummy
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace Commentar\Storage\Dummy;

use Commentar\Storage\Datamapper\Builder;

/**
 * Datamapper factory for the dummy storage mechanism
 *
 * @category   Commentar
 * @package    Storage
 * @subpackage Dummy
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class Factory implements Builder
{
    /**
     * @var string The base namespace of the datamappers
     */
    private $namespace;

    /**
     * Creates instance
     *
     * @param string $namespace The namespace in which the datamappers reside
     */
    public function __construct($namespace = '\\Commentar\\Storage\\Dummy')
    {
        $this->namespace = rtrim($namespace, '\\') . '\\';
    }

    /**
     * Builds the requested datamapper
     *
     * @param string $name The name of the data mapper to build
     *
     * @return object The datamapper
     */
    public function build($name)
    {
        $fullyQualifiedName = $this->namespace . $name;

        return new $fullyQualifiedName($this->storageLocation);
    }
}
