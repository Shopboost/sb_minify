<?php

class sb_oxutilsview extends sb_oxutilsview_parent {

    /**
     *
     *
     * @author  s.fritzler
     * @since   03.11.2015
     *
     * @param   $oSmarty    Smarty
     */
    protected function _fillCommonSmartyProperties($oSmarty)
    {
        parent::_fillCommonSmartyProperties($oSmarty);

        if (oxRegistry::getConfig()->getConfigParam('sb_minify_html')) {
            $oSmarty->load_filter('output', 'trimwhitespace');
        }
    }
}