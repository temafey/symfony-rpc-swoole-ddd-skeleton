<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Presentation\Cli\Command;

use Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemAddTaskRepository;
use Enqueue\Client\ProducerInterface;
use Exception;
use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class TestSendItem.
 */
class TestSendItem extends Command
{
    // the name of the command (the part after "bin/console")
    /**
     * Cli command name.
     *
     * @var string
     */
    protected static $defaultName = 'item:test';

    /**
     * Queue producer.
     *
     * @var ProducerInterface
     */
    private ProducerInterface $producer;

    /**
     * TestSendItem constructor.
     *
     * @param ProducerInterface $itemDtoProducer
     * @param string|null       $name
     */
    public function __construct(ProducerInterface $itemDtoProducer, ?string $name = null)
    {
        parent::__construct($name);
        $this->producer = $itemDtoProducer;
    }

    /**
     * Execute cli command.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|void|null
     *
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        unset($input, $output);
        $fixtureFiles = glob(ROOT_PATH . '/tests/fixture/*.json');

        if (false === $fixtureFiles) {
            throw new RuntimeException('Fixture files not found.');
        }

        foreach ($fixtureFiles as $file) {
            $raw = file_get_contents($file);

            if (!$raw) {
                continue;
            }
            $data = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);

            foreach ($data as $itemResultDto) {
                if (null === $itemResultDto) {
                    continue;
                }
                $this->producer->sendEvent(ItemAddTaskRepository::QUEUE_MASTER_DATA, $itemResultDto);
            }
        }

        return 0;
    }
}
