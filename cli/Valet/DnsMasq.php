<?php

namespace Valet;

class DnsMasq
{
    var $brew, $cli, $files, $configuration;

    var $dnsmasqMasterConfigFile = BREW_PREFIX.'/etc/dnsmasq.conf';
    var $dnsmasqSystemConfDir = BREW_PREFIX.'/etc/dnsmasq.d';
    var $resolverPath = '/etc/resolver';

    /**
     * Create a new DnsMasq instance.
     */
    function __construct(Brew $brew, CommandLine $cli, Filesystem $files, Configuration $configuration)
    {
        //
    }

    /**
     * Install and configure DnsMasq.
     *
     * @return void
     */
    function install($tld = 'test')
    {
        //
    }

    /**
     * Forcefully uninstall dnsmasq.
     *
     * @return void
     */
    function uninstall()
    {
        //
    }

    /**
     * Tell Homebrew to restart dnsmasq
     *
     * @return void
     */
    function restart()
    {
        //
    }

    /**
     * Ensure the DnsMasq configuration primary config is set to read custom configs
     *
     * @return void
     */
    function ensureUsingDnsmasqDForConfigs()
    {
        //
    }

    /**
     * Create the TLD-specific dnsmasq config file
     * @param  string  $tld
     * @return void
     */
    function createDnsmasqTldConfigFile($tld)
    {
        //
    }

    /**
     * Create the resolver file to point the configured TLD to 127.0.0.1.
     *
     * @param  string  $tld
     * @return void
     */
    function createTldResolver($tld)
    {
        //
    }

    /**
     * Update the TLD/domain resolved by DnsMasq.
     *
     * @param  string  $oldTld
     * @param  string  $newTld
     * @return void
     */
    function updateTld($oldTld, $newTld)
    {
        //
    }

    /**
     * Get the custom configuration path.
     *
     * @return string
     */
    function dnsmasqUserConfigDir()
    {
        //
    }
}
