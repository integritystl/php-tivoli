<?php

/**
 * @file
 * Tivoli Utilities.
 */

namespace Integrity\Tivoli;

class Install {

    /**
     * 
     */
    public function execute()
    {
        $this->publishDockerCompose();
        $this->publishPhpDocumentorConfig();
        $this->publishPhpUnitConfig();
    }

    public function publishDockerCompose()
    {
        // get the contents of the docker-compose
        $this->content = file_get_contents('./vendor/integrity/tivoli/stubs/docker-compose.yml');


        // write the docker-compose to the project root
        file_put_contents('./docker-compose.yml', $this->content);
    }

    public function publishPhpDocumentorConfig()
    {
        // get the contents of the docker-compose
        $this->content = file_get_contents('./vendor/integrity/tivoli/stubs/phpdoc.xml');


        // write the docker-compose to the project root
        file_put_contents('./phpdoc.xml', $this->content);
    }

    public function publishPhpUnitConfig()
    {
        // get the contents of the docker-compose
        $this->content = file_get_contents('./vendor/integrity/tivoli/stubs/phpunit.xml');


        // write the docker-compose to the project root
        file_put_contents('./phpunit.xml', $this->content);
    }

}