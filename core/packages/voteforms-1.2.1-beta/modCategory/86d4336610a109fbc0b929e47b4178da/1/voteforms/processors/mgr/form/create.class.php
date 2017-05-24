<?php

/**
 * Create an Form
 */
class VoteFormCreateProcessor extends modObjectCreateProcessor {
  public $objectType = 'VoteForm';
  public $classKey = 'VoteForm';
  public $languageTopics = array('voteforms');
  //public $permission = 'create';


  /**
   * @return bool
   */
  public function beforeSet() {
    $name = trim($this->getProperty('name'));
    if (empty($name)) {
      $this->modx->error->addField('name', $this->modx->lexicon('voteforms_item_err_name'));
    }
    elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
      $this->modx->error->addField('name', $this->modx->lexicon('voteforms_item_err_ae'));
    }

    return parent::beforeSet();
  }

}

return 'VoteFormCreateProcessor';