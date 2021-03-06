<?php

namespace PHPPgAdmin\XHtml;

/**
 * Class to render tables. Formerly part of Misc.php
 *
 */
class HTMLFooterController extends HTMLController
{
    public $_name                  = 'HTMLFooterController';
    private $_reload_drop_database = false;
    private $_no_bottom_link       = false;

    /**
     * [setReloadBrowser description]
     *
     * @param boolean $flag sets internal $_reload_drop_database var which will be passed to the footer methods
     * @return $this
     */
    public function setReloadDropDatabase($flag)
    {
        $this->_reload_drop_database = boolval($flag);
        return $this;
    }

    /**
     * sets $_no_bottom_link boolean value
     *
     * @param boolean $flag [description]
     * @return $this
     */
    public function setNoBottomLink($flag)
    {
        $this->_no_bottom_link = boolval($flag);
        return $this;
    }

    /**
     * Prints the page footer
     * @param $doBody True to output body tag, false to return the html
     */
    public function printFooter($doBody = true, $template = 'footer.twig')
    {
        $lang = $this->lang;

        $footer_html = '';
        //$this->prtrace(['$_reload_browser' => $this->_reload_browser, 'template' => $template]);
        if ($this->misc->getReloadBrowser()) {
            $footer_html .= $this->printReload(false, false);
        } else if ($this->_reload_drop_database) {
            $footer_html .= $this->printReload(true, false);
        }
        if (!$this->_no_bottom_link) {
            $footer_html .= '<a data-footertemplate="' . $template . '" href="#" class="bottom_link">' . $lang['strgotoppage'] . '</a>';
        }

        $footer_html .= $this->view->fetch($template);

        if ($doBody) {
            echo $footer_html;
        } else {
            return $footer_html;
        }

    }

    /**
     * Outputs JavaScript code that will reload the browser
     * @param $database True if dropping a database, false otherwise
     * @param $do_print true to echo, false to return;
     */
    public function printReload($database, $do_print = true)
    {

        $reload = "<script type=\"text/javascript\">\n";
        //$reload .= " alert('will reload');";
        if ($database) {
            $reload .= "\tparent.frames && parent.frames.browser && parent.frames.browser.location.replace=\"" . SUBFOLDER . "/src/views/browser.php\";\n";
        } else {
            $reload .= "\tif(parent.frames && parent.frames.browser) { console.log('will reload frame browser'); parent.frames.browser.location.reload();} else { console.log('will do location replace'); location.replace(location.href);}\n";
            //$reload .= "\tparent.frames.detail.location.href=\"".SUBFOLDER . "/src/views/intro\";\n";
            //$reload .= "\tparent.frames.detail.location.reload();\n";
        }

        $reload .= "</script>\n";
        if ($do_print) {
            echo $reload;
        } else {
            return $reload;
        }
    }

    /**
     * Outputs JavaScript to set default focus
     * @param $object eg. forms[0].username
     */
    public function setFocus($object)
    {
        echo "<script type=\"text/javascript\">\n";
        echo "   document.{$object}.focus();\n";
        echo "</script>\n";
    }

    /**
     * Outputs JavaScript to set the name of the browser window.
     * @param $name the window name
     * @param $addServer if true (default) then the server id is
     *        attached to the name.
     */
    public function setWindowName($name, $addServer = true)
    {
        echo "<script type=\"text/javascript\">\n";
        echo "//<![CDATA[\n";
        echo "   window.name = '{$name}", ($addServer ? ':' . htmlspecialchars($this->misc->getServerId()) : ''), "';\n";
        echo "//]]>\n";
        echo "</script>\n";
    }
}
