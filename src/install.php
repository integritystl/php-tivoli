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
    }

    public function publishDockerCompose()
    {
        // get the contents of the docker-compose
        $this->content = file_get_contents('./vendor/integrity/tivoli/stubs/docker-compose.yml');


        // write the docker-compose to the project root
        file_put_contents('./docker-compose.yml', $this->content);
    }

}