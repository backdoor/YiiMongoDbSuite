$crit = array('criteria' => array('conditions' => array('name' => array('!=' => 'foo') )), 'sort'=> array('attributes' => array('*')), 'pagination'=>array('pageSize'=>20, ),); $dp = new EHyperActiveDataProvider('VoipPhone', $crit);