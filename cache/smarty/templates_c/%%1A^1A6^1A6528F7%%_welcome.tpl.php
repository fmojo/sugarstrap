<?php /* Smarty version 2.6.11, created on 2012-12-05 16:23:49
         compiled from themes/SugarStrap/tpls/_welcome.tpl */ ?>
<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
<div id="welcome">
    <?php echo $this->_tpl_vars['APP']['NTC_WELCOME']; ?>
, <strong><a id="welcome_link" href='index.php?module=Users&action=EditView&record=<?php echo $this->_tpl_vars['CURRENT_USER_ID']; ?>
'><?php echo $this->_tpl_vars['CURRENT_USER']; ?>
</a></strong> [ <a id="logout_link" href='<?php echo $this->_tpl_vars['LOGOUT_LINK']; ?>
' class='utilsLink'><?php echo $this->_tpl_vars['LOGOUT_LABEL']; ?>
</a> ]
</div>
<?php endif; ?>