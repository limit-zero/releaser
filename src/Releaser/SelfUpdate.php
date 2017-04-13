<?php

namespace Releaser;

use Humbug\SelfUpdate\Updater;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SelfUpdate extends Command
{
    const DISTRIBUTION_PREFIX = 'https://limit-zero.github.io/releaser/';

    protected function configure()
    {
        $this
            ->setName('self-update')
            ->setDescription('Updates releaser.phar to the latest version')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $updater = new Updater();
        $updater->getStrategy()->setPharUrl(sprintf('%s/releaser.phar', self::DISTRIBUTION_PREFIX));
        $updater->getStrategy()->setVersionUrl(sprintf('%s/releaser.phar.version', self::DISTRIBUTION_PREFIX));

        $result = $updater->update();
        if (!$result) {
            $output->writeln('You are already using the latest version!');
            return;
        }
        $new = $updater->getNewVersion();
        $old = $updater->getOldVersion();
        $output->writeln(sprintf('Updated from %s to %s', $old, $new));
    }
}
