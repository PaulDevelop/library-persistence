<?php

namespace Com\PaulDevelop\Library\Persistence;

/**
 * IStorage
 *
 * @package Com\PaulDevelop\Library\Persistence
 * @category Application
 * @author   Rüdiger Scheumann <code@pauldevelop.com>
 * @license  http://opensource.org/licenses/MIT MIT
 */
interface IStorage
{
    /**
     * @param IEntity $entity
     *
     * @return string $key
     */
    public function add(IEntity $entity);

    /**
     * @param string $key
     *
     * @return IEntity
     */
    public function get($key);

    /**
     * @param string  $key
     * @param IEntity $entity
     */
    public function set($key, IEntity $entity);

    /**
     * @param int      $key
     * @param Property $property
     */
    public function setProperty($key, Property $property);

    /**
     * @param string $key
     */
    public function remove($key);
}

/*
phptype(dbsyntax)://username:password@protocol+hostspec/database?option=value
phptype://username:password@protocol+hostspec:110//usr/db_file.db
phptype://username:password@hostspec/database
phptype://username:password@hostspec
phptype://username@hostspec
phptype://hostspec/database
phptype://hostspec
phptype:///database
phptype:///database?option=value&anotheroption=anothervalue
phptype(dbsyntax)
phptype

mysql://user@unix(/path/to/socket)/pear
pgsql://user:pass@tcp(localhost:5555)/pear
sqlite:////full/unix/path/to/file.db?mode=0666
sqlite:///c:/full/windows/path/to/file.db?mode=0666
mysqli://user:pass@localhost/pear?key=client-key.pem&cert=client-cert.pem
oci8://username:password@foo.example.com[:port]/?service=service
username/password@[//]host[:port][/service_name]
*/
