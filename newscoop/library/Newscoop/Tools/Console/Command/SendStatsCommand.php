<?php
/**
 * @package Newscoop
 * @copyright 2011 Sourcefabric o.p.s.
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace Newscoop\Tools\Console\Command;

use Symfony\Component\Console\Input\InputArgument,
    Symfony\Component\Console\Input\InputOption,
    Symfony\Component\Console;

/**
 * Send stats command
 */
class SendStatsCommand extends Console\Command\Command
{
    /**
     * @see Console\Command\Command
     */
    protected function configure()
    {
        $this
        ->setName('stats')
        ->setDescription('Sends stats')
        ->setHelp(<<<EOT
Sends stats
EOT
        );
    }

    /**
     * @see Console\Command\Command
     */
    protected function execute(Console\Input\InputInterface $input, Console\Output\OutputInterface $output)
    {
        $supportSend = \SystemPref::get('support_send');
        if ($supportSend) {
            $stats = $this->getHelper('container')->getService('stat')->getAll();
            
            $statUrl = 'http://stat.sourcefabric.org';
            $parameters = array('p' => 'newscoop');
            $parameters['installation_id'] = $stats['installationId'];
            $parameters['server'] = \SystemPref::get('support_stats_server');
            $parameters['ip_address'] = \SystemPref::get('support_stats_ip_address');
            $parameters['ram_used'] = $stats['ramUsed'];
            $parameters['ram_total'] = \SystemPref::get('support_stats_ram_total');
            $parameters['version'] = $stats['version'];
            $parameters['install_method'] = $stats['installMethod'];
            $parameters['publications'] = $stats['publications'];
            $parameters['issues'] = $stats['issues'];
            $parameters['average_sections'] = $stats['averageSections'];
            $parameters['articles'] = $stats['articles'];
            $parameters['articles_published'] = $stats['articlesPublished'];
            $parameters['languages'] = $stats['languages'];
            $parameters['authors'] = $stats['authors'];
            $parameters['subscribers'] = $stats['subscribers'];
            $parameters['backend_users'] = $stats['backendUsers'];
            $parameters['images'] = $stats['images'];
            $parameters['attachments'] = $stats['attachments'];
            $parameters['topics'] = $stats['topics'];
            $parameters['comments'] = $stats['comments'];
            $parameters['hits'] = $stats['hits'];
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $statUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
            $output = curl_exec($ch);
            $info = curl_getinfo($ch);
            curl_close($ch);
            
            echo($output);
        }
    }
}