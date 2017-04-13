<?php

namespace Releaser;

use Humbug\SelfUpdate\Updater;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Rollback extends Command
{
    const DISTRIBUTION_PREFIX = 'https://limit-zero.github.io/releaser/';

    protected function configure()
    {
        $this
            ->setName('rollback')
            ->setDescription('Rolls back releaser.phar to the last version')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $updater = new Updater();
        $result = $updater->rollback();
        if (!$result) {
            throw new \Exception('Unable to rollback');
        }
        $output->writeln(sprintf('Successfully rolled back to %s', $updater->getNewVersion()));
    }
}
