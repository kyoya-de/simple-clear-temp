<?php
/**
 * This piece of software is released under the MIT license. Take a look at the LICENSE file.
 *
 * Feel free to copy and change the code, but never remove the original author! Pull requests are also welcome.
 *
 * @version 1.0.0
 * @author  Stefan Krenz <krenz.stefan@googlemail.com>
 */
class sctNavigation extends sctNavigation_parent
{
    public function render()
    {
        $renderResult = parent::render();

        return ('header.tpl' ===$renderResult) ? 'sctheader.tpl' : $renderResult;
    }

    public function clearTemp()
    {
        $tempDir = oxRegistry::getConfig()->getConfigParam('sCompileDir');

        $rdi = new RecursiveDirectoryIterator($tempDir);
        $rii = new RecursiveIteratorIterator($rdi);

        /** @var SplFileInfo $entry */
        foreach ($rii as $entry) {
            if (!$entry->isFile()) {
                continue;
            }

            unlink($entry->getRealPath());
        }
    }
}
