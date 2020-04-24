<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Presentation\Cli\Command;

use MicroModule\Monitoring\Statsd;
use Domnikl\Statsd\Client;
use Domnikl\Statsd\Connection\TcpSocket;
use Liuggio\StatsdClient\Entity\StatsdData;
use Liuggio\StatsdClient\StatsdClient;
use Liuggio\StatsdClient\Factory\StatsdDataFactory;
use Liuggio\StatsdClient\Sender\SocketSender;
use Liuggio\StatsdClient\Service\StatsdService;
use Liuggio\StatsdClient\Sender\SysLogSender;
use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

/**
 * Class TestStatsd.
 */
class TestStatsd extends Command implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    // the name of the command (the part after "bin/console")
    /**
     * Cli command name.
     *
     * @var string
     */
    protected static $defaultName = 'test:statsd';

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

        //$service = $this->getLiuggioStatsdService('prometheus.microtech.net', 8125, 'udp');
        $service = $this->getDomniklStatsdService('prometheus.microtech.net', 8126);
        //$service = $this->getStatsdService();

        //$index = 'stage.rpc.skeleton.test.5';
        $index = 'dev.rpc.skeleton.test.22';
        // create the metrics with the service
        $count = 0;

        for ($i = 0; $i < 5; ++$i) {
            for ($y = 0; $y < 100000; ++$y) {
                $service->increment($index);
                ++$count;
            }
            //...
            // send the data to statsd
            //$service->flush();
            //sleep(5);
        }

        echo 'Finish, count of incrementing is ' . $count . '.';

        return 0;
    }

    /**
     * Return Liuggio statsd service
     *
     * @param string $host
     * @param int $port
     *
     * @return StatsdService
     */
    private function getLiuggioStatsdService(string $host, int $port, string $protocol): StatsdService
    {
        $sender = new SocketSender($host, $port, $protocol);
        // $sender = new SysLogSender(); // enabling this, the packet will not send over the socket
        $client  = new StatsdClient($sender);
        $factory = new StatsdDataFactory(StatsdData::class);

        return new StatsdService($client, $factory);
    }

    /**
     * Return Domnikl statsd service
     *
     * @param string $host
     * @param int $port
     *
     * @return Client
     */
    private function getDomniklStatsdService(string $host, int $port): Client
    {
        $connection = new TcpSocket($host, $port);

        return new Client($connection);
    }

    /**
     * Return statsd service from application
     *
     * @return Statsd
     */
    private function getStatsdService(): Statsd
    {
        return $this->container->get(Statsd::class);
    }
}
