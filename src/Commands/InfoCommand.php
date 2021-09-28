<?php

namespace Consolidation\SelfUpdateFixture\Commands;

use Pantheon\Terminus\Exceptions\TerminusNotFoundException;
use Pantheon\Terminus\Helpers\LocalMachineHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class InfoCommand
 * @package Consolidation\SelfUpdateFixture\Commands
 */
class InfoCommand extends Command
{
    const VERSION = '1.2';

    /**
     * Creates InfoCommand instance.
     */
    public function __construct()
    {
        $this->setDescription('Display tool info');
        parent::__construct('info');
    }

    /**
     * Displays tool info.
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Current version: ' . self::VERSION);
        return 0;
    }

}
