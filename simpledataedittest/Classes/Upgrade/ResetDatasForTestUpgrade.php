<?php

namespace Porthd\Simpledataedittest\Upgrade;

use Porthd\Simpledataedit\Exception\SimpledataedittestException;
use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Install\Updates\ConfirmableInterface;
use TYPO3\CMS\Install\Updates\Confirmation;
use TYPO3\CMS\Install\Updates\UpgradeWizardInterface;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2021 Dr. Dieter Porthd <info@mobger.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3-Extension `simpledataedittests`. It is a free software;
 *  you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Class ResetDatasForTestUpgrade
 * Reset the Dates
 * @package Porthd\Simpledataedittest\Upgrade
 */
class ResetDatasForTestUpgrade implements UpgradeWizardInterface, ConfirmableInterface
{
    protected const WHO_AM_I = 'simpledatatedittestResetDatasForTestUpgrade';

    /**
     * Return the identifier for this wizard
     * This should be the same string as used in the ext_localconf class registration
     *
     * @return string
     */
    public static function whoAmI(): string
    {
        return self::WHO_AM_I;
    }

    /**
     * Return the identifier for this wizard
     * This should be the same string as used in the ext_localconf class registration
     *
     * @return string
     */
    public function getIdentifier(): string
    {
        return self::whoAmI();
    }

    /**
     * Return the speaking name of this wizard
     *
     * @return string
     */
    public function getTitle(): string
    {
        return 'Reset the test-data in `simpldataedittest`, which is used as example and test extension for `simpledataedit`.';
    }

    /**
     * Execute the update. The method will TRUNCATE the old datas and than insert the new datas.
     * The key in Called when a wizard reports that an update is necessary
     *
     * Reminder: Get the data with HeidiSQL or Dbeaver using the copy-as utility. Hide the column uid before you mark and copy the datas.
     *
     * @return bool
     */
    public function executeUpdate(): bool
    {

        $pid = $this->getPidForTests();
        //
        $list = [];

        $list['tx_simpledataedittest_domain_model_child'] = <<<CHILDMARKINSERT
INSERT INTO `tx_simpledataedittest_domain_model_child` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `main`, `title`, `description`) VALUES (1, 1618084560, 1618082987, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 1, 'Test Child 1-1', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,');
INSERT INTO `tx_simpledataedittest_domain_model_child` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `main`, `title`, `description`) VALUES (1, 1618084560, 1618082987, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 1, 'Test Child 2-1', 'no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.');
INSERT INTO `tx_simpledataedittest_domain_model_child` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `main`, `title`, `description`) VALUES (1, 1618085250, 1618085228, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 2, 'Child 1-2', 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.');
INSERT INTO `tx_simpledataedittest_domain_model_child` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `main`, `title`, `description`) VALUES (1, 1618085250, 1618085228, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 2, 'Child 2-2', 'Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.');
CHILDMARKINSERT;
        $list['tx_simpledataedittest_domain_model_main'] = <<<MAINMARK
INSERT INTO `tx_simpledataedittest_domain_model_main` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `description`, `my_rte`, `title`, `my_percent`, `my_money`, `my_float`, `my_integer`, `my_boolean`, `my_time`, `my_timesstamp`, `my_datetime`, `my_images`, `my_files`, `my_list`, `my_children`, `my_progenitor`, `my_peergroup`) VALUES (1, 1618084560, 1618082987, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:21:{s:5:"title";N;s:11:"description";N;s:6:"my_rte";N;s:10:"my_percent";N;s:8:"my_money";N;s:8:"my_float";N;s:10:"my_integer";N;s:10:"my_boolean";N;s:7:"my_time";N;s:13:"my_timesstamp";N;s:11:"my_datetime";N;s:9:"my_images";N;s:8:"my_files";N;s:7:"my_list";N;s:9:"my_children";N;s:9:"my_parent";N;s:12:"my_peergroup";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<p>No sea takimata sanctus est <strong>Lorem ipsum dolor sit </strong>amet. Lorem ipsum dolor sit amet, <em>consetetur sadipscing</em> elitr, sed diam nonumy<sup>eirmod </sup>tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&nbsp; &nbsp;</p>\r\n<p><a href="t3://page?uid=current">Duis autem </a>vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>', 'Test Main 1', '42,30%', '1.435,34 €', 1.36, '1458', '1', 1618081229, 1618081229, '2021-11-11 11:55:00', 0, 0, 'toll', 2, 1, 2);
INSERT INTO `tx_simpledataedittest_domain_model_main` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `description`, `my_rte`, `title`, `my_percent`, `my_money`, `my_float`, `my_integer`, `my_boolean`, `my_time`, `my_timesstamp`, `my_datetime`, `my_images`, `my_files`, `my_list`, `my_children`, `my_progenitor`, `my_peergroup`) VALUES (1, 1618085250, 1618085228, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:21:{s:5:"title";N;s:11:"description";N;s:6:"my_rte";N;s:10:"my_percent";N;s:8:"my_money";N;s:8:"my_float";N;s:10:"my_integer";N;s:10:"my_boolean";N;s:7:"my_time";N;s:13:"my_timesstamp";N;s:11:"my_datetime";N;s:9:"my_images";N;s:8:"my_files";N;s:7:"my_list";N;s:9:"my_children";N;s:9:"my_parent";N;s:12:"my_peergroup";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.', '<p>In enim<em> justo, rhonc</em>us ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, <strong>consequat vit</strong>ae, eleifend ac, enim.<sup>Aliquam lorem ante, </sup>dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. <a href="t3://page?uid=current">Curabitur ullamcorper ultricies nisi. </a></p>', 'Test Main 2', '93,2%', '98.124,56 $', 3.14, '458793658', '1', 1618084205, 1618084205, '2021-04-24 15:06:00', 0, 0, 'noMatter', 2, 3, 4);
MAINMARK;
        $list['tx_simpledataedittest_domain_model_peer'] = <<<MYPEER
INSERT INTO `tx_simpledataedittest_domain_model_peer` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `description`) VALUES (1, 1618083094, 1618083094, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:16:"sys_language_uid";N;s:6:"hidden";N;s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;}', 0, 0, 0, 0, 0, 0, 0, 'Peer 1', 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.');
INSERT INTO `tx_simpledataedittest_domain_model_peer` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `description`) VALUES (1, 1618083190, 1618083190, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:16:"sys_language_uid";N;s:6:"hidden";N;s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;}', 0, 0, 0, 0, 0, 0, 0, 'Peer 2', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.');
INSERT INTO `tx_simpledataedittest_domain_model_peer` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `description`) VALUES (1, 1618083233, 1618083233, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:16:"sys_language_uid";N;s:6:"hidden";N;s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;}', 0, 0, 0, 0, 0, 0, 0, 'Peer 3', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.');
INSERT INTO `tx_simpledataedittest_domain_model_peer` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `description`) VALUES (1, 1618084411, 1618083287, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 'Peer 4', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum');
INSERT INTO `tx_simpledataedittest_domain_model_peer` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `description`) VALUES (1, 1618084481, 1618083318, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 'Peer 5', 'dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.');
MYPEER;
        $list['tx_simpledataedittest_domain_model_progenitor'] = <<<MYPROGENITOR
INSERT INTO `tx_simpledataedittest_domain_model_progenitor` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `description`) VALUES (1, 1618084205, 1618084205, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 'Test Parent 1', 'Dies ist ein Typoblindtext. An ihm kann man sehen, ob alle Buchstaben da sind und wie sie aussehen.');
INSERT INTO `tx_simpledataedittest_domain_model_progenitor` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `description`) VALUES (1, 1618084246, 1618084246, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 'Test Parent 2', 'Manchmal benutzt man Worte wie Hamburgefonts, Rafgenduks oder Handgloves, um Schriften zu testen. Manchmal Sätze, die alle Buchstaben des Alphabets enthalten - man nennt diese Sätze »Pangrams«. Sehr bekannt ist dieser: The quick brown fox jumps over the lazy old dog. Oft werden in Typoblindtexte auch fremdsprachige Satzteile eingebaut (AVAIL® and Wefox™ are testing aussi la Kerning), um die Wirkung in anderen Sprachen zu testen. In Lateinisch sieht zum Beispiel fast jede Schrift gut aus. Quod erat demonstrandum.');
INSERT INTO `tx_simpledataedittest_domain_model_progenitor` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `description`) VALUES (1, 1618084298, 1618084298, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 'Test Parent 3', 'Seit 1975 fehlen in den meisten Testtexten die Zahlen, weswegen nach TypoGb. 204 § ab dem Jahr 2034 Zahlen in 86 der Texte zur Pflicht werden. Nichteinhaltung wird mit bis zu 245 € oder 368 $ bestraft. Genauso wichtig in sind mittlerweile auch Âçcèñtë, die in neueren Schriften aber fast immer enthalten sind. Ein wichtiges aber schwierig zu integrierendes Feld sind OpenType-Funktionalitäten.');
INSERT INTO `tx_simpledataedittest_domain_model_progenitor` (`pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `description`) VALUES (1, 1618084345, 1618084345, 3, 0, 0, 0, 0, 0, 0, NULL, 'a:6:{s:5:"title";N;s:11:"description";N;s:9:"starttime";N;s:7:"endtime";N;s:16:"sys_language_uid";N;s:6:"hidden";N;}', 0, 0, 0, 0, 0, 0, 0, 'Test Parent 4', 'Je nach Software und Voreinstellungen können eingebaute Kapitälchen, Kerning oder Ligaturen (sehr pfiffig) nicht richtig dargestellt werden.Dies ist ein Typoblindtext. An ihm kann man sehen, ob alle Buchstaben da sind und wie sie aussehen. Manchmal benutzt man Worte wie Hamburgefonts, Rafgenduks');
MYPROGENITOR;

        try {
            foreach ($list as $table => $sqlRaw) {
                if (!empty($sqlRaw)) {
                    /** @var Connection $connection */
                    $connection = GeneralUtility::makeInstance(ConnectionPool::class)
                        ->getConnectionForTable($table);

                    $connection->truncate($table);
                    // It seems to me, that Symfony will only allow one statement and ignroe the statements after `;`.
                    // The current code will prevent this.
                    $splitByInsert = 'INSERT INTO';
                    $sqlStatements = array_filter(
                        array_map(
                            'trim',
                            explode($splitByInsert, $sqlRaw)
                        )
                    );
                    foreach ($sqlStatements as $sqlStatement) {
                        if (!empty($sqlStatement)) {
                            $connection->executeStatement($splitByInsert . ' ' . $sqlStatement);
                        }
                    }
                    unset($connection);
                }
            }
        } catch (\Exception $e) {
            throw new SimpledataedittestException(
                'There goes something wreong, while you try to update the test-tables for testing `simpledataedit`. ' .
                'Please check via installtool, if all tables are correctly defined.',
                1620549263
            );
            return false;
        }
        return true;
    }

    /**
     * Return the description for this wizard
     *
     * @return string
     */
    public function getDescription(): string
    {
        return 'The table `tx_simpledataedittest_domain_model_main`, `tx_simpledataedittest_domain_model_child`, `tx_simpledataedittest_domain_model_progenitor`, `tx_simpledataedittest_domain_model_peer` and `tx_simpledataedittest_domain_model_peer` and `tx_simpledataedataedert` are then filled with test_simpledata_peer. All of the data you have created yourself will be lost. If you need this, you should cancel this update and save the data in advance.';
    }

    /**
     * Is an update necessary?
     *
     * Is used to determine whether a wizard needs to be run.
     * Check if data for migration exists.
     *
     * @return bool Whether an update is required (TRUE) or not (FALSE)
     */
    public function updateNecessary(): bool
    {
        return true;
    }

    /**
     * Returns an array of class names of prerequisite classes
     *
     * This way a wizard can define dependencies like "database up-to-date" or
     * "reference index updated"
     *
     * @return string[]
     */
    public function getPrerequisites(): array
    {
        return [];
    }

    /**
     * Return a confirmation message instance
     *
     * @return \TYPO3\CMS\Install\Updates\Confirmation
     */
    public function getConfirmation(): Confirmation
    {
        $title = 'Resetting the test data IN own tables of the extension `simpldataedittest`';
        $message = 'The table `tx_simpledataedittest_domain_model_main`, `tx_simpledataedittest_domain_model_child`, `tx_simpledataedittest_domain_model_progenitor`, `tx_simpledataedittest_domain_model_peer` and `tx_simpledataedittest_domain_model_peer` and `tx_simpledataedataedert` are then filled with test_simpledata_peer. All of the data you have created yourself will be lost. If you need this, you should cancel this update and save the data in advance.';
        $defaultValue = false;
        $confirm = 'Yes. Reset datas.';
        $deny = 'No. I must save data first.';
        $required = true;
        $args = [$title, $message, $defaultValue, $confirm, $deny, $required,];
        return GeneralUtility::makeInstance(
            Confirmation::class,
            ...$args
        );
    }

    /**
     * The configuration define the page-id, where the testdatas are stored
     *
     * @return int
     */
    protected function getPidForTests(): int
    {
        return (int)($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['simpledataedittest']['testDataFolderPid'] ?? 0);
    }
}
