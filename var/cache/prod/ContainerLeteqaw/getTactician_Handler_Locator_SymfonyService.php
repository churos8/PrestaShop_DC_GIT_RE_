<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'tactician.handler.locator.symfony' shared service.

return $this->services['tactician.handler.locator.symfony'] = new \League\Tactician\Bundle\Handler\ContainerBasedHandlerLocator($this, ['PrestaShop\\PrestaShop\\Core\\Domain\\ShowcaseCard\\Command\\CloseShowcaseCardCommand' => 'prestashop.core.showcase_card.command_handler.close_showcase_card', 'PrestaShop\\PrestaShop\\Core\\Domain\\ShowcaseCard\\Query\\GetShowcaseCardIsClosed' => 'prestashop.core.domain.showcase_card.query_handler.get_showcase_card_is_closed_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\SaveSqlRequestSettingsCommand' => 'prestashop.core.domain.sql_management.command_handler.save_settings', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetSqlRequestSettings' => 'prestashop.core.domain.sql_management.query_handler.get_sql_request_settings', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\AddSqlRequestCommand' => 'prestashop.adapter.sql_manager.command_handler.add_request_sql', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\EditSqlRequestCommand' => 'prestashop.adapter.sql_manager.command_handler.edit_request_sql', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\DeleteSqlRequestCommand' => 'prestashop.adapter.sql_manager.command_handler.delete_request_sql', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\BulkDeleteSqlRequestCommand' => 'prestashop.adapter.sql_manager.command_handler.bulk_delete_request_sql', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetSqlRequestForEditing' => 'prestashop.adapter.sql_manager.query_handler.get_request_sql_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetSqlRequestExecutionResult' => 'prestashop.adapter.sql_manager.query_handler.get_request_sql_execution_result', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetDatabaseTablesList' => 'prestashop.adapter.sql_manager.query_handler.get_database_tables_list', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetDatabaseTableFieldsList' => 'prestashop.adapter.sql_manager.query_handler.get_database_table_fields_list']);
