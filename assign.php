<?php

	/**
	 * assgin方法
	 */
	 
	// 引入
	require('../smarty3/libs/Smarty.class.php');
	
	// 实例化
	$smarty = new Smarty();
	
	// 配置
	$smarty->template_dir = './templates';
	$smarty->compile_dir = './compile';
	$smarty->config_dir = './conf';
	
	
	$user = array(
		'name'=> 'pink',
		'age'=> 23,
		'weapon'=> 'JAVASCRIPT'
	);  
	
/**	
    /**
     * assigns a Smarty variable
     *
     * @param  array|string $tpl_var the template variable name(s)
     * @param  mixed        $value   the value to assign
     * @param  boolean      $nocache if true any output of this variable will be not cached
     *
     * @return Smarty_Internal_Data current Smarty_Internal_Data (or Smarty or Smarty_Internal_Template) instance for
     *                              chaining
     *
 		// 如果第一个参数是数组，把此数组的每个值，赋值到以相应的键为名称的标签.
    public function assign($tpl_var, $value = null, $nocache = false)
    {
        if (is_array($tpl_var)) {
            foreach ($tpl_var as $_key => $_val) {
                $this->assign($_key, $_val, $nocache);
            }
        } else {
            if ($tpl_var != '') {
                if ($this->_objType == 2) {
                    /** @var  Smarty_Internal_Template $this /
                    $this->_assignInScope($tpl_var, $value, $nocache);
                } else {
                    $this->tpl_vars[ $tpl_var ] = new Smarty_Variable($value, $nocache);
                }
            }
        }
        return $this;
    }
***/	
	
//	$smarty->assign($user);
	
	$data = array('county' => array('prov' => array('city' => '厦门')));
	$smarty->assign($data);
	
	$smarty->append('color', 'tan');
	$smarty->append('color', 'pink');
	
	
//	$smarty->display('label.html');
	$smarty->display('liandong.html');
	

?>