<?php
/** @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption('pdoFetch.class', null, 'pdotools.pdofetch', true);
if ($pdoClass = $modx->loadClass($fqn, '', false, true)) {
  $pdoFetch = new $pdoClass($modx, $scriptProperties);
} elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . 'components/pdotools/model/', false, true)) {
  $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
  $modx->log(modX::LOG_LEVEL_ERROR, 'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".');
  return false;
}
/** @var VoteForms $VoteForms */
if (!$VoteForms = $modx->getService('voteforms', 'VoteForms', $modx->getOption('voteforms_core_path', null, $modx->getOption('core_path') . 'components/voteforms/') . 'model/voteforms/', $scriptProperties)) {
  return 'Could not load VoteForms class!';
}
$VoteForms->initialize($modx->context->key, $scriptProperties);
// Do your snippet code here. This demo grabs 5 items from our custom table.
$tplOuter = $modx->getOption('tplOuter', $scriptProperties);
$tplRow = $modx->getOption('tpl', $scriptProperties);
$sortby = $modx->getOption('sortby', $scriptProperties, 'index');
$sortdir = $modx->getOption('sortbir', $scriptProperties, 'ASC');
//$limit = $modx->getOption('limit', $scriptProperties, 5);
//$outputSeparator = $modx->getOption('outputSeparator', $scriptProperties, "\n");
//$toPlaceholder = $modx->getOption('toPlaceholder', $scriptProperties, false);

// Build query
$c = $modx->newQuery('VoteFormsItem');
$c->sortby($sortby, $sortdir);
$c->limit($limit);
$items = $modx->getIterator('VoteFormsItem', $c);

// Iterate through items
//$list = array();
///** @var VoteFormsItem $item */
//foreach ($items as $item) {
//  $list[] = $modx->getChunk($tpl, $item->toArray());
//}

// Output
//$output = implode($outputSeparator, $list);
$output = 'test';

// By default just return output
return $output;
