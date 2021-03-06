<?php

/**
 * The IDirectory Interface
 *
 * This interface should be implemented by each class that represents a directory (or branch in the tree)
 * 
 * @package Sabre
 * @subpackage DAV
 * @version $Id: IDirectory.php 706 2010-01-10 15:09:17Z evertpot $
 * @copyright Copyright (C) 2007-2010 Rooftop Solutions. All rights reserved.
 * @author Evert Pot (http://www.rooftopsolutions.nl/) 
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
interface Sabre_DAV_IDirectory extends Sabre_DAV_INode {

    /**
     * Creates a new file in the directory 
     * 
     * data is a readable stream resource
     *
     * @param string $name Name of the file 
     * @param resource $data Initial payload 
     * @return void
     */
    function createFile($name, $data = null);

    /**
     * Creates a new subdirectory 
     * 
     * @param string $name 
     * @return void
     */
    function createDirectory($name);

    /**
     * Returns a specific child node, referenced by its name 
     * 
     * @param string $name 
     * @return Sabre_DAV_INode 
     */
    function getChild($name);

    /**
     * Returns an array with all the child nodes 
     * 
     * @return Sabre_DAV_INode[] 
     */
    function getChildren();

}

