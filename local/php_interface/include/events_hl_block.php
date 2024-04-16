<?
$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler('', 'AgentsOnAfterAdd', 'clearAgentsCache');
$eventManager->addEventHandler('', 'AgentsOnAfterUpdate', 'clearAgentsCache');
$eventManager->addEventHandler('', 'AgentsOnAfterDelete', 'clearAgentsCache');

function clearAgentsCache($event)
{
    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $tableName = $event->getParameter("NAME");
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
}
?>