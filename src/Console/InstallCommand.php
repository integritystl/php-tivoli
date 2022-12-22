<?php

namespace Integrity\Tivoli\Console;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Integrity\Tivoli\Install;

// the name of the command is what users type after "php bin/console"
#[AsCommand(name: 'install')]
class InstallCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $install = new Install();

        $install->execute();

        return Command::SUCCESS;
    }
}